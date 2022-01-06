<?php
/**
 * @filesource modules/index/views/editprofile.php
 *
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 *
 * @see http://www.kotchasan.com/
 */

namespace Index\Editprofile;

use Gcms\Login;
use Kotchasan\Html;
use Kotchasan\Language;
use Kotchasan\Province;

/**
 * module=editprofile.
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class View extends \Gcms\View
{
    /**
     * ฟอร์มแก้ไขสมาชิก
     *
     * @param array $user
     * @param array $login
     *
     * @return string
     */
    public function render($user, $login)
    {
        // แอดมิน
        $login_admin = Login::isAdmin();
        $form = Html::create('form', array(
            'id' => 'setup_frm',
            'class' => 'setup_frm',
            'autocomplete' => 'off',
            'action' => 'index.php/index/model/editprofile/submit',
            'onsubmit' => 'doFormSubmit',
            'ajax' => true,
            'token' => true,
        ));
        if ($user['active'] == 1) {
            $fieldset = $form->add('fieldset', array(
                'title' => '{LNG_Login information}',
            ));
            $groups = $fieldset->add('groups');
            // username
            $groups->add('text', array(
                'id' => 'register_username',
                'itemClass' => 'width50',
                'labelClass' => 'g-input icon-email',
                'label' => '{LNG_Email}',
                'comment' => '{LNG_Email address used for login or request a new password}',
                'disabled' => $login_admin ? false : true,
                'maxlength' => 50,
                'value' => $user['username'],
                'validator' => array('keyup,change', 'checkUsername', 'index.php/index/model/checker/username'),
            ));
            // password, repassword
            $groups = $fieldset->add('groups', array(
                'comment' => '{LNG_To change your password, enter your password to match the two inputs}',
            ));
            // password
            $groups->add('password', array(
                'id' => 'register_password',
                'itemClass' => 'width50',
                'labelClass' => 'g-input icon-password',
                'label' => '{LNG_Password}',
                'placeholder' => '{LNG_Passwords must be at least four characters}',
                'maxlength' => 20,
                'validator' => array('keyup,change', 'checkPassword'),
            ));
            // repassword
            $groups->add('password', array(
                'id' => 'register_repassword',
                'itemClass' => 'width50',
                'labelClass' => 'g-input icon-password',
                'label' => '{LNG_Repassword}',
                'placeholder' => '{LNG_Enter your password again}',
                'maxlength' => 20,
                'validator' => array('keyup,change', 'checkPassword'),
            ));
        }
        $fieldset = $form->add('fieldset', array(
            'title' => '{LNG_Details of} {LNG_User}',
        ));
        $groups = $fieldset->add('groups');
        // name
        $groups->add('text', array(
            'id' => 'register_name',
            'labelClass' => 'g-input icon-customer',
            'itemClass' => 'width50',
            'label' => '{LNG_Name}',
            'maxlength' => 100,
            'value' => $user['name'],
        ));
        // id_card
        $groups->add('text', array(
            'id' => 'register_id_card',
            'labelClass' => 'g-input icon-profile',
            'itemClass' => 'width50',
            'label' => '{LNG_Identification number}',
            'pattern' => '[0-9]+',
            'maxlength' => 13,
            'value' => $user['id_card'],
            'validator' => array('keyup,change', 'checkIdcard'),
        ));
        $groups = $fieldset->add('groups');
        // phone
        $groups->add('text', array(
            'id' => 'register_phone',
            'labelClass' => 'g-input icon-phone',
            'itemClass' => 'width50',
            'label' => '{LNG_Phone}',
            'maxlength' => 32,
            'value' => $user['phone'],
        ));
        // sex
        $groups->add('select', array(
            'id' => 'register_sex',
            'labelClass' => 'g-input icon-sex',
            'itemClass' => 'width50',
            'label' => '{LNG_Sex}',
            'options' => Language::get('SEXES'),
            'value' => $user['sex'],
        ));
        // address
        $fieldset->add('text', array(
            'id' => 'register_address',
            'labelClass' => 'g-input icon-address',
            'itemClass' => 'item',
            'label' => '{LNG_Address}',
            'maxlength' => 64,
            'value' => $user['address'],
        ));
        $groups = $fieldset->add('groups');
        // provinceID
        $groups->add('select', array(
            'id' => 'register_provinceID',
            'labelClass' => 'g-input icon-location',
            'itemClass' => 'width33',
            'label' => '{LNG_Province}',
            'options' => array($user['provinceID'] => ''),
            'value' => $user['provinceID'],
        ));
        // province
        $groups->add('text', array(
            'id' => 'register_province',
            'labelClass' => 'g-input icon-location',
            'itemClass' => 'width33',
            'label' => '{LNG_Province}',
            'value' => $user['province'],
        ));
        // zipcode
        $groups->add('text', array(
            'id' => 'register_zipcode',
            'labelClass' => 'g-input icon-location',
            'itemClass' => 'width33',
            'label' => '{LNG_Zipcode}',
            'pattern' => '[0-9]+',
            'maxlength' => 10,
            'value' => $user['zipcode'],
        ));
        // country
        $groups->add('select', array(
            'id' => 'register_country',
            'labelClass' => 'g-input icon-world',
            'itemClass' => 'width33',
            'label' => '{LNG_Country}',
            'options' => \Kotchasan\Country::all(),
            'value' => $user['country'],
        ));
        if ($login_admin) {
            $fieldset = $form->add('fieldset', array(
                'title' => '{LNG_Other}',
            ));
            // status
            $fieldset->add('select', array(
                'id' => 'register_status',
                'itemClass' => 'item',
                'label' => '{LNG_Member status}',
                'labelClass' => 'g-input icon-star0',
                'disabled' => $login_admin['id'] == $user['id'] ? true : false,
                'options' => self::$cfg->member_status,
                'value' => $user['status'],
            ));
            // permission
            $fieldset->add('checkboxgroups', array(
                'id' => 'register_permission',
                'label' => '{LNG_Permission}',
                'labelClass' => 'g-input icon-list',
                'options' => \Gcms\Controller::getPermissions(),
                'value' => $user['permission'],
            ));
        }
        $fieldset = $form->add('fieldset', array(
            'class' => 'submit',
        ));
        // submit
        $fieldset->add('submit', array(
            'class' => 'button save large icon-save',
            'value' => '{LNG_Save}',
        ));
        $fieldset->add('hidden', array(
            'id' => 'register_id',
            'value' => $user['id'],
        ));
        // Javascript
        $form->script('initEditProfile("register", '.json_encode(Province::countries()).');');
        // คืนค่า HTML

        return $form->render();
    }
}
