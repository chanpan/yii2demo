<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;
use Yii;
use yii\db\ActiveRecord;
/**
 * Description of TbUsersProfile
 *
 * @author damasac
 */
class TbUsersProfile extends ActiveRecord{
    public static function tableName(){
        return "tb_users_profile";
    }
    public function rules() {
        return [
            ['fname','required','message'=>'กรุณากรอก ชื่อ'],
            ['lname','required','message'=>'นามสกุล'],
            
        ];
    }

    public function attributeLabels() {
        return[
            "fname"=>'Firstname',
            "lname"=>'Lastname',
            "address"=>'Address'
        ];
    }
    //put your code here
}
