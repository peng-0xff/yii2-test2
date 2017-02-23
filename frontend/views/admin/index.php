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
 * Time: 15:03
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>
<div align="center">
<p>员工管理系统</p></div>
    <table width="80%" border="0" align="center">
        <?php $form = ActiveForm::begin(['id' => 'entry-form']); ?>
        <tr>
            <td height="149" colspan="3" bgcolor="#D6D6D6"><div align="center" style="font-size: 24px; font-weight: bold;">

                </div>      <div >
                    <p>
                        <label for="14"></label>
                        <?= $form->field($model, 'admin') ?>
                    </p>
                    <p>
                        <?= $form->field($model, 'password') ?>
                    </p>
                    <p>
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'imageOptions'=>[
                                'title'   =>'换一个',
                                'alt'     =>'换一个',
                                'style'   =>'cursor:pointer;margin-left:25px;'],
                                'template' => '<span>{image}</span><span>{input}</span>',
                        ]) ?>
                    </p>
</div></td>
</tr>
<tr>
    <td height="75" colspan="3" bgcolor="#7F3FFF">
        <div class="form-group" align="center">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
        </form></td>
</tr>
<?php  ActiveForm::end(); ?>
<tr>
    <td height="103" colspan="3">&nbsp;</td>
</tr>
<tr>
    <td height="81" colspan="3">&nbsp;</td>
</tr>
</table>
</body>
</html>
