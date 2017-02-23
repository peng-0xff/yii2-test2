<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/16
 * Time: 11:04
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Country;
use yii\data\Pagination;

class CountryController extends Controller{

    //重新配置布局文件
    public $layouts='common';

    public function actionIndex(){

        $country= Country::find();

        //分页组件的调用和初始化参数
        $pagination = new Pagination([
            'defaultPageSize' =>4,
            'totalCount' =>$country->count(),
        ]);

        $result=$country->select('name','code','id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',['country'=>$result,'pagination'=>$pagination]);

    }

    public function actionSession(){

        //session开启和设置
        $session=Yii::$app->session;
        if($session->isActive){
            echo 'session is open';
        }else{
            $session->open();
        }
        $session->set('user','zhangsan');
    }

    public function actionCookies(){

        $cookies=Yii::$app->response->cookies;
        $user_data=['name'=>'user','value'=>'ali'];
        $cookies->add(new Cookie($user_data));
        echo $cookies->getValue('user');
        /*
         * 如果想删除user的数值，可执行：
         * $cookies->remove('user');
         *
         */
    }


}