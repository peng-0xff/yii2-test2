<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/2/23
 * Time: 10:30
 */
?>
<table border="1"  width="95%" align='center'>
    <tr bgcolor="#AAFF00">
        <td width="10%" align='center'>姓名</td>
        <td width="10%" align='center'>部门</td>
        <td width="10%" align='center'>联系方式</td>
    </tr>
    <?php foreach($row as $r): ?>
    <tr>
        <td width="10%" align='center'><?=$r->name?></td>
        <td width="10%" align='center'><?=$r->department?></td>
        <td width="10%" align='center'><?=$r->phone?></td>
    </tr>
<?php endforeach; ?>
<p>共有<?=$count?>条记录</p>
</table>