<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/16
 * Time: 15:46
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class HelloController extends Controller{

    public function actionIndex(){

        $requst=Yii::$app->request;
        echo $requst->get('h','请输入数值');
        if($requst->isGet){
            echo 'this is a getmethod'.$requst->userIp;
        }
    }

     public function actionSponse(){

         //配置浏览器的反馈
         $res = Yii::$app->response;
         $res->statusCode='404';
         //设置页面的缓存时间
         $res ->headers->add('pragma','max-age=5');
         $res->headers->remove('pragma');

}
      public function actionDownload(){

          $download = Yii::$app->response;
          $download->sendFile('./haha.txt');

      }

       public function actionSecure($message='hello'){

          $data1='good<script>alter(3);</script>';
          $data = [];
          $data2=['hello','beauty'];
          $data['data1']=$data1;
          $data['data2']=$data2;
          $data['message']=$message;

          echo $this->render('index',$data);

       }

}