<?php
/**
 * @filesource modules/booking/models/booking.php
 *
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 *
 * @see http://www.kotchasan.com/
 */

namespace Booking\Booking;

use Gcms\Login;
use Kotchasan\Database\Sql;
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
     * ถ้า $id = 0 หมายถึงรายการใหม่
     * คืนค่าข้อมูล object ไม่พบคืนค่า null.
     *
     * @param int   $id
     * @param int   $room_id
     * @param array $login
     *
     * @return object|null
     */
    public static function get($id, $room_id, $login)
    {
        if ($login) {
            // Model
            $model = new static();
            if (empty($id)) {
                // ใหม่
                if ($room_id > 0) {
                    return $model->db()->createQuery()
                        ->from('rooms')
                        ->where(array('id', $room_id))
                        ->first('0 id', 'id room_id', '0 status', '0 today', (int) $login['id'].' member_id', "'$login[phone]' phone");
                } else {
                    return (object) array(
                        'id' => 0,
                        'room_id' => 0,
                        'status' => 0,
                        'today' => 0,
                        'member_id' => $login['id'],
                        'phone' => $login['phone'],
                    );
                }
            } else {
                // แก้ไข อ่านรายการที่เลือก
                $sql = Sql::create('(CASE WHEN NOW() BETWEEN V.`begin` AND V.`end` THEN 1 WHEN NOW() > V.`end` THEN 2 ELSE 0 END) AS `today`');
                $query = $model->db()->createQuery()
                    ->from('reservation V')
                    ->join('user U', 'INNER', array('U.id', 'V.member_id'))
                    ->where(array('V.id', $id));
                $select = array('V.*', 'U.name', 'U.phone', $sql);
                $n = 1;
                foreach (Language::get('BOOKING_SELECT') + Language::get('BOOKING_OPTIONS') as $key => $label) {
                    $query->join('reservation_data M'.$n, 'LEFT', array(array('M'.$n.'.reservation_id', 'V.id'), array('M'.$n.'.name', $key)));
                    $select[] = 'M'.$n.'.value '.$key;
                    ++$n;
                }

                return $query->first($select);
            }
        }
        // ไม่ได้เข้าระบบ

        return null;
    }

    /**
     * บันทึกข้อมูลที่ส่งมาจากฟอร์ม booking.php.
     *
     * @param Request $request
     */
    public function submit(Request $request)
    {
        $ret = array();
        // session, token, สมาชิก
        if ($request->initSession() && $request->isSafe()) {
            if ($login = Login::isMember()) {
                // ค่าที่ส่งมา
                $save = array(
                    'room_id' => $request->post('room_id')->toInt(),
                    'attendees' => $request->post('attendees')->toInt(),
                    'topic' => $request->post('topic')->topic(),
                    'comment' => $request->post('comment')->textarea(),
                );
                $begin_date = $request->post('begin_date')->date();
                $begin_time = $request->post('begin_time')->time(true);
                $end_date = $request->post('end_date')->date();
                $end_time = $request->post('end_time')->time(true);
                $user = array(
                    'phone' => $request->post('phone')->topic(),
                );
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
                $index = self::get($request->post('id')->toInt(), 0, $login);
                // เจ้าของ ยังไม่ได้อนุมัติ และ ไม่ใช่วันนี้
                if ($index && ($login['id'] == $index->member_id && $index->status == 0 && $index->today == 0)) {
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
                        // ตรวจสอบห้องว่าง
                        if (!\Booking\Checker\Model::availability($save)) {
                            $ret['ret_begin_date'] = Language::get('Meeting room are not available at select time');
                        }
                    } else {
                        // วันที่ ไม่ถูกต้อง
                        $ret['ret_end_date'] = Language::get('End date must be greater than begin date');
                    }
                    if (empty($ret)) {
                        if ($index->id == 0) {
                            // ใหม่
                            $save['status'] = 0;
                            $save['member_id'] = $login['id'];
                            $save['create_date'] = date('Y-m-d H:i:s');
                            $index->id = $this->db()->insert($this->getTableName('reservation'), $save);
                        } else {
                            // แก้ไข
                            $this->db()->update($this->getTableName('reservation'), $index->id, $save);
                            // คืนค่า
                            $ret['alert'] = Language::get('Saved successfully');
                        }
                        if ($index->phone != $user['phone']) {
                            // อัปเดทเบอร์โทรสมาชิก
                            $this->db()->update($this->getTableName('user'), $login['id'], $user);
                        }
                        // รายละเอียดการจอง
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
                        if (empty($ret)) {
                            // ใหม่ ส่งอีเมลไปยังผู้ที่เกี่ยวข้อง
                            $ret['alert'] = \Booking\Email\Model::send($login['username'], $save['topic'], 0);
                        }
                        $ret['location'] = $request->getUri()->postBack('index.php', array('module' => 'booking'));
                        // เคลียร์
                        $request->removeToken();
                    }
                } else {
                    // ไม่พบ
                    $ret['alert'] = Language::get('Sorry, Item not found It&#39;s may be deleted');
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
