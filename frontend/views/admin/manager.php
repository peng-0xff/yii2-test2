<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/21
 * Time: 15:24
 */
use yii\widgets\ActiveForm;
?>
<a href="/yii2/yii-test2/yii2-test2/frontend/web/index.php?r=admin/add">添加员工</a>
<form method="get">
    <input type="hidden" name="r" value="admin/find">
    <div style="border:1px solid gray; background:#eee;padding:4px;">
        查找记录：请输入关键字<input name="result" type="text" >
        <select name="goal">
            <option value="name">姓名</option>
            <option value="department">部门</option>
            <option value="phone">联系方式</option>
        </select>
        <input type="submit" value="查询" name="submit" >
    </div></form>
<table border="1"  width="100%" align='center'>
    <tr bgcolor="#AAFF00">
        <td width="10%" align='center'>姓名</td>
        <td width="10%" align='center'>部门</td>
        <td width="10%" align='center'>联系方式</td>
        <td width="10%" align='center'>  </td>
    </tr>
    <?php foreach($result as $r): ?>
    <tr>
        <td width="10%" align='center'><?=$r['name']?></td>
        <td width="10%" align='center'><?=$r['department']?></td>
        <td width="10%" align='center'><?=$r['phone']?></td>
        <td align='center'><button><a href="/yii2/yii-test2/yii2-test2/frontend/web/index.php?r=admin/delete&d=<?=$r['id']?>">删除</a></button></td>
    </tr>
    <?php endforeach; ?>
</table>