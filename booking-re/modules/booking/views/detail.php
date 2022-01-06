<?php
/**
 * @filesource modules/booking/views/detail.php
 *
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 *
 * @see http://www.kotchasan.com/
 */

namespace Booking\Detail;

use Kotchasan\Date;
use Kotchasan\Language;

/**
 * module=booking-rooms.
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class View extends \Gcms\View
{
    /**
     * แสดงรายละเอียดห้อง.
     *
     * @param object $index
     *
     * @return string
     */
    public function room($index)
    {
        $content = '<article class="room_detail">';
        $content .= '<header><h1 class="cuttext">{LNG_Details of} {LNG_Room}</h1></header>';
        if (is_file(ROOT_PATH.DATA_FOLDER.'booking/'.$index->id.'.jpg')) {
            $content .= '<figure class="center"><img src="'.WEB_URL.DATA_FOLDER.'booking/'.$index->id.'.jpg"></figure>';
        }
        $content .= '<table class="border data fullwidth"><tbody>';
        $content .= '<tr><th>{LNG_Room name}</th><td><span class="term" style="background-color:'.$index->color.'">'.$index->name.'</span></td></tr>';
        $content .= '<tr><th>{LNG_Detail}</th><td>'.nl2br($index->detail).'</td></tr>';
        foreach (Language::get('ROOM_CUSTOM_TEXT') as $key => $label) {
            $content .= '<tr><th>'.$label.'</th><td>'.(isset($index->{$key}) ? $index->{$key} : '').'</td></tr>';
        }
        $content .= '</tbody></article>';
        $content .= '</article>';

        return Language::trans($content);
    }

    /**
     * แสดงรายละเอียดการจอง.
     *
     * @param object $index
     *
     * @return string
     */
    public function booking($index)
    {
        $content = '<article class="room_detail">';
        $content .= '<header><h1 class="cuttext">{LNG_Details of} {LNG_Booking}</h1></header>';
        $content .= '<table class="border data fullwidth"><tbody>';
        $content .= '<tr><th>{LNG_Topic}</th><td>'.$index->topic.'</td></tr>';
        $content .= '<tr><th>{LNG_Room name}</th><td><span class="term" style="background-color:'.$index->color.'">'.$index->name.'</span></td></tr>';
        foreach (Language::get('ROOM_CUSTOM_TEXT') as $key => $label) {
            $content .= '<tr><th>'.$label.'</th><td>'.(isset($index->{$key}) ? $index->{$key} : '').'</td></tr>';
        }
        $content .= '<tr><th>{LNG_Attendees number}</th><td>'.$index->attendees.'</td></tr>';
        $content .= '<tr><th>{LNG_Contact name}</th><td>'.$index->contact.'</td></tr>';
        $content .= '<tr><th>{LNG_Phone}</th><td><a href="tel:'.$index->phone.'">'.$index->phone.'</a></td></tr>';
        $content .= '<tr><th>{LNG_date}</th><td>'.Date::format($index->begin).' - '.Date::format($index->end).'</td></tr>';
        foreach (Language::get('BOOKING_SELECT') as $key => $label) {
            if (!empty($index->{$key})) {
                $content .= '<tr><th>'.$label.'</th><td>'.\Booking\Category\Model::init($key)->get($index->{$key}).'</td></tr>';
            }
        }
        foreach (Language::get('BOOKING_OPTIONS') as $key => $label) {
            if (!empty($index->{$key})) {
                $options = explode(',', $index->{$key});
                $vals = array();
                foreach (\Booking\Category\Model::init($key)->toSelect() as $i => $v) {
                    if (in_array($i, $options)) {
                        $vals[] = $v;
                    }
                }
                $content .= '<tr><th>'.$label.'</th><td>'.implode(', ', $vals).'</td></tr>';
            }
        }
        $content .= '<tr><th>{LNG_Status}</th><td><span class="term'.$index->status.'">'.Language::find('BOOKING_STATUS', null, $index->status).'</span></td></tr>';
        if ($index->comment != '') {
            $content .= '<tr><th>{LNG_Other}</th><td>'.nl2br($index->comment).'</td></tr>';
        }
        $content .= '</tbody></article>';
        $content .= '</article>';

        return Language::trans($content);
    }
}
