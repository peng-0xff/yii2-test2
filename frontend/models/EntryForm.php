<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/21
 * Time: 15:51
 */
namespace frontend\models;

use yii\base\Model;

class EntryForm extends Model{

    public $admin;
    public $password;
    public $verifyCode;
    public $name;
    public $department;
    public $phone;

    public function rules()
    {
        return [
            [['admin', 'password'], 'required'],
             ['name','default','value'=>$this->name],
             ['department','default','value'=>$this->department],
             ['phone','default','value'=>$this->phone],
             ['verifyCode','captcha'],
        ];
    }

    public function attributeLabels(){
        return [

               'verifyCode' => '验证码',//传给视图层的验证码的标签
        ];
    }
}