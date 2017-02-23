<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/20
 * Time: 18:01
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\UploadForm;
use yii\web\UploadedFile;

class UploadsController extends Controller
{
    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model->textFile = UploadedFile::getInstance($model, 'textFile');
            if ($model->upload()) {
                // 文件上传成功
                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }
}