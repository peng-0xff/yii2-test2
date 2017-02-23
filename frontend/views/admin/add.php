<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>无标题文档</title>
</head>

<body>
<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/21
 * Time: 19:26
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
  <table width="400" border="1" align="center" cellpading="2">
      <?php $form = ActiveForm::begin(); ?>
    <tr><td width="125" align="center">姓名</td>
   <td> <?=$form->field($model1, 'name') ?> </td></tr>
   <tr><td align="center" >部门</td>
   <td> <?=$form->field($model1, 'department') ?> </td></tr>
   <tr><td align="center">联系方式</td>
   <td><?=$form->field($model1, 'phone') ?></td></tr>
   <tr><td>&nbsp;</td><td><div class="form-group">
               <?=Html::submitButton('Submit', ['class' => 'btn btn-primary'])?>
           </div>
           <?php ActiveForm::end(); ?></td></tr>
</table>

</body>
</html>