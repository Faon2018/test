<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3 0003
 * Time: 13:04
 */
include "../../public/connect.php";
$cname = $_POST['cname'];
$cregdate =$_POST['cregdate'];
$sql = "insert into class   values ( null,'$cname','$cregdate')";
$mysql_result = $db->query($sql);
if($mysql_result){
    header("location:addClass.php");
}else{

    echo "添加失败";
    echo "<a href='addClass.php'>返回添加页面</a>";
}