<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/16
 * Time: 16:13
 */
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<?php //两种预防跨站脚本攻击的方法 ?>

<?=Html::encode($data1);?>
<?=HtmlPurifier::process($data1);?>
<?=Html::encode($data2[0])?>