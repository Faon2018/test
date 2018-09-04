<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/4 0004
 * Time: 2:21
 */
include "../../public/connect.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$repassword =md5($_POST['repassword']);
if($password==$repassword){
    $sql = "update  `user` set password='$password' where username='$username'";
    $mysql_result = $db->query($sql);
    if($mysql_result){
        header("location:userList.php");
    }else{
        echo "重置失败";
        echo "<a href='modify.php' >返回重置页面</a>";
    }
}else{
    echo "两次密码输入不一致";
    echo "<a href='modify.php'>返回重置页面</a>";
}
