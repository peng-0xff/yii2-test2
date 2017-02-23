<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/16
 * Time: 11:56
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Countries</h1>
<ul>
<?php foreach($result as $r):?>
    <li><?= Html::encode("{$r->id}({$r->name})") ?>:
        <?= $r->population ?>
    </li>
</ul>
<?php endforeach; ?>
    <?=LinkPager::widget( ['pagination'=> $pagination] ) ?>

