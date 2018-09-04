<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3 0003
 * Time: 13:04
 */
include "../../public/connect.php";
$cname = $_POST['cname'];
$cregdate =date("y-m-d",time());
$sql = "insert into goods   values ( null,'$cname','$cregdate')";
$mysql_result = $db->query($sql);
if($mysql_result){
    header("location:addGood.php");
}else{

    echo "添加失败";
    echo "<a href='addGood.php'>返回添加页面</a>";
}