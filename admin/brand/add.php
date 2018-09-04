<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3 0003
 * Time: 13:04
 */
include "../../public/connect.php";
$bname = $_POST['bname'];
$bregdate =$_POST['bregdate'];
$sql = "insert into brand  values ( null,'$bname','$bregdate')";
$mysql_result = $db->query($sql);
if($mysql_result){
    header("location:addBrand.php");
}else{
    echo "添加失败";
    echo "<a href='addBrand.php'>返回添加页面</a>";
}