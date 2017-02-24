<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/24
 * Time: 17:22
 */

namespace frontend\models;

use yii\base\Model;
use frontend\models\User;

/**
 * Signup form
 */
class SignupsForm extends Model
{
    public $username;
    public $password;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\frontend\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->setPassword($this->password);
       // $user->generateAuthKey();

        return $user->save() ? $user : null;
    }
}
