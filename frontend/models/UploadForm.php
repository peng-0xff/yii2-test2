<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/20
 * Time: 17:58
 */
namespace frontend\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $textFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true , 'extensions' => 'png, jpg'],  //skiponempty为true就是就算imagefile为空规则依旧有效
             [['textFile'], 'file', 'skipOnEmpty' => true , 'extensions' => 'txt'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            if($this->imageFile || $this->textFile){
                 if($this->imageFile){
                    $this->imageFile->saveAs(\Yii::$app->basePath . '/../uploads/' . $this->imageFile->baseName .'.'. $this->imageFile->extension  );
                  }else if($this->textFile){
                           $this->textFile->saveAs(\Yii::$app->basePath . '/../uploads/' . $this->textFile->baseName .'.'. $this->textFile->extension  );
                          }
             return true;
            }else{
                return false;
            }
        } else {
            return false;
        }
    }

}