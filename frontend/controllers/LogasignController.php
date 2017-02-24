<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/24
 * Time: 17:53
 */
namespace frontend\controllers;

use yii\web\Controller;
use common\models\LoginForm;
use frontend\models\User;
use frontend\models\SignupsForm;
use Yii;


class LogasignController extends Controller{

    public function actionSignup()
    {
        $model = new SignupsForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                // $login = new SiteLoginForm();
                if(Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
                else
                {
                    var_dump($user);
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }


}