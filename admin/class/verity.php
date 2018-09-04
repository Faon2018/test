<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/4 0004
 * Time: 2:21
 */
include "../../public/connect.php";
$id=$_GET['id'];
$cname = $_POST['cname'];
$cregdate =$_POST['cregdate'];
$sql = "update  class  set cname='$cname', cregdate='$cregdate' where id=$id";
$mysql_result = $db->query($sql);
if($mysql_result){
        header("location:classList.php");
 }else{
        echo "修改失败";
        echo "<a href='modify.php' >返回修改页面</a>";

 }
