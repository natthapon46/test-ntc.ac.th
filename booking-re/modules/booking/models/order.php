<?php
/**
 * @filesource modules/booking/models/order.php
 *
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 *
 * @see http://www.kotchasan.com/
 */

namespace Booking\Order;

use Gcms\Login;
use Kotchasan\Http\Request;
use Kotchasan\Language;

/**
 * เพิ่ม/แก้ไข ข้อมูล Booking.
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class Model extends \Kotchasan\Model
{
    /**
     * อ่านข้อมูลรายการที่เลือก
     * คืนค่าข้อมูล object ไม่พบคืนค่า null.
     *
     * @param int $id
     *
     * @return object|null
     */
    public static function get($id)
    {
        $query = static::createQuery()
            ->from('reservation V')
            ->join('user U', 'INNER', array('U.id', 'V.member_id'))
            ->where(array('V.id', $id));
        $select = array('V.*', 'U.name', 'U.phone', 'U.username');
        $n = 1;
        foreach (Language::get('BOOKING_SELECT') + Language::get('BOOKING_OPTIONS') as $key => $label) {
            $query->join('reservation_data M'.$n, 'LEFT', array(array('M'.$n.'.reservation_id', 'V.id'), array('M'.$n.'.name', $key)));
            $select[] = 'M'.$n.'.value '.$key;
            ++$n;
        }

        return $query->first($select);
    }

    /**
     * บันทึกข้อมูลที่ส่งมาจากฟอร์ม order.php.
     *
     * @param Request $request
     */
    public function submit(Request $request)
    {
        $ret = array();
        // session, token, สามารถอนุมัติห้องประชุมได้
        if ($request->initSession() && $request->isSafe() && $login = Login::isMember()) {
            if (Login::checkPermission($login, 'can_approve_room')) {
                // ค่าที่ส่งมา
                $save = array(
                    'room_id' => $request->post('room_id')->toInt(),
                    'attendees' => $request->post('attendees')->toInt(),
                    'topic' => $request->post('topic')->topic(),
                    'comment' => $request->post('comment')->textarea(),
                    'status' => $request->post('status')->toInt(),
                );
                $begin_date = $request->post('begin_date')->date();
                $begin_time = $request->post('begin_time')->time(true);
                $end_date = $request->post('end_date')->date();
                $end_time = $request->post('end_time')->time(true);
                $datas = array();
                foreach (Language::get('BOOKING_SELECT') as $key => $label) {
                    $datas[$key] = $request->post($key)->toInt();
                }
                foreach (Language::get('BOOKING_OPTIONS') as $key => $label) {
                    $values = $request->post($key, array())->toInt();
                    if (!empty($values)) {
                        $datas[$key] = implode(',', $values);
                    }
                }
                // ตรวจสอบรายการที่เลือก
                $index = self::get($request->post('id')->toInt());
                if ($index) {
                    if ($save['attendees'] == 0) {
                        // ไม่ได้กรอก attendees
                        $ret['ret_attendees'] = 'Please fill in';
                    }
                    if ($save['topic'] == '') {
                        // ไม่ได้กรอก topic
                        $ret['ret_topic'] = 'Please fill in';
                    }
                    if (empty($begin_date)) {
                        // ไม่ได้กรอก begin_date
                        $ret['ret_begin_date'] = 'Please fill in';
                    }
                    if (empty($begin_time)) {
                        // ไม่ได้กรอก begin_time
                        $ret['ret_begin_time'] = 'Please fill in';
                    }
                    if (empty($end_date)) {
                        // ไม่ได้กรอก end_date
                        $ret['ret_end_date'] = 'Please fill in';
                    }
                    if (empty($end_time)) {
                        // ไม่ได้กรอก end_time
                        $ret['ret_end_time'] = 'Please fill in';
                    }
                    if ($end_date.$end_time > $begin_date.$begin_time) {
                        $save['begin'] = $begin_date.' '.$begin_time;
                        $save['end'] = $end_date.' '.$end_time;
                        // ตรวจสอบห้องว่าง เฉพาะรายการที่จะอนุมัติ
                        if ($save['status'] == 1 && !\Booking\Checker\Model::availability($save, $index->id)) {
                            $ret['ret_begin_date'] = Language::get('Meeting room are not available at select time');
                        }
                    } else {
                        // วันที่ ไม่ถูกต้อง
                        $ret['ret_end_date'] = Language::get('End date must be greater than begin date');
                    }
                    if (empty($ret)) {
                        // save
                        $this->db()->update($this->getTableName('reservation'), $index->id, $save);
                        // อัปเดท datas
                        $reservation_data = $this->getTableName('reservation_data');
                        $this->db()->delete($reservation_data, array('reservation_id', $index->id), 0);
                        foreach ($datas as $key => $value) {
                            if ($value != '') {
                                $this->db()->insert($reservation_data, array(
                                    'reservation_id' => $index->id,
                                    'name' => $key,
                                    'value' => $value,
                                ));
                            }
                        }
                        if ($request->post('send_mail')->toBoolean()) {
                            // ส่งอีเมลไปยังผู้ที่เกี่ยวข้อง
                            $ret['alert'] = \Booking\Email\Model::send($index->username, $save['topic'], $save['status']);
                        } else {
                            // คืนค่า
                            $ret['alert'] = Language::get('Saved successfully');
                        }
                        $ret['location'] = $request->getUri()->postBack('index.php', array('module' => 'booking-report', 'status' => $save['status']));
                        // เคลียร์
                        $request->removeToken();
                    }
                }
            }
        }
        if (empty($ret)) {
            $ret['alert'] = Language::get('Unable to complete the transaction');
        }
        // คืนค่าเป็น JSON
        echo json_encode($ret);
    }
}
