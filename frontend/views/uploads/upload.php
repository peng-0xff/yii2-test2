<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/20
 * Time: 18:03
 */
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFile')->fileInput() ?>
<?= $form->field($model, 'textFile')->fileInput() ?>
    <button>Submit</button>

<?php ActiveForm::end() ?>
<?= DatePicker::widget(['name' => 'date']) ?>
