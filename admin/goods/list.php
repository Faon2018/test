<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3 0003
 * Time: 12:11
 *
 */

include "../../public/connect.php";

$pagesize=10;
$rowcount=0;
$pagenow=1;
$pagecount=0;

if(!empty($_GET['pagenow'])){
    $pagenow=$_GET['pagenow'];
}
$sql = "select count(id) from goods ";
$rest1 = $db->query($sql);
while($row = $rest1->fetch_row()){
    $rowcount = $row[0];
}
$pagecount = ceil($rowcount/$pagesize);
$pagestart = ($pagenow-1)*$pagesize;
$sql = "SELECT  goods.`id` ,goods.`gname` ,goods.`img` ,goods.`inventory` ,goods.`price` ,goods.`shelf` ,class.`cname` cname,brand.`bname` bname FROM goods,class,brand
 WHERE goods.`class_id`=class.id AND goods.`brand_id`=brand.`id` limit $pagestart,$pagesize";
$rest2 = $db->query($sql)or die('无法获取结果集'.$db->connect_errno);
$rows=[];
while($db=$rest2->fetch_array(MYSQLI_ASSOC)){
    $rows[]=$db;
}
//var_dump($rows);
