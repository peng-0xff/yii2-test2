<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/21
 * Time: 15:05
 */
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\EntryForm;
use frontend\models\Info;

class AdminController extends Controller{

   //管理员登录，通过密码和验证码进行验证
    public function actionIndex(){

        $model=new EntryForm();
        $load=$model->load(\Yii::$app->request->post());
        $user=trim($model->admin);
        $pw=$model->password;


            if( $load && $user=='admin' && $pw=='123'&& $model->validate()){
                return $this->redirect('index.php?r=admin/manager');
            }else{
                return $this->render('index',['model' => $model]);
            }

    }

     //调用验证码类来启用验证码
    public function actions(){

        return [
              'captcha' => [
                  'class' => 'yii\captcha\CaptchaAction',
                  'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
              ],
        ];
    }

    //获取员工所有数据
    public function actionManager(){

        $query=Info::find();
        $result=$query->select(['name','department','phone','id'])
            ->asArray()->all();
        return $this->render('manager',['result'=>$result]);
    }

    //添加员工
    public function actionAdd(){

        $model=new EntryForm();
        $load=$model->load(\Yii::$app->request->post());
        $add=new Info();

        if($load){
            $add->name = $model->name;
            $add->department=$model->department;
            $add->phone=$model->phone;
            $add->save();
            return $this->redirect('index.php?r=admin/manager');
        }else{
            return $this->render('add',['model1'=>$model]);
        }
    }

    //删除员工
    public function actionDelete(){

        $request = \Yii::$app->request->get('d');
        $query=Info::find()->where(['id'=>$request])->all();
        $query[0]->delete();
        return $this->redirect('index.php?r=admin/manager');
    }

    //查询
    public function actionFind(){

        if(\yii::$app->request->get('submit')){
            $query=\yii::$app->request;
            $goal=$query->get('goal');
            $result=$query->get('result');
        }
            $querys = Info::find();
            $rows = $querys
                ->select(['name','department','phone'])
                ->where(['like',$goal,$result])
                ->all();
            $count=$querys->count();
        return $this->render('find',['row'=>$rows,'count'=>$count]);
    }

}