<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3 0003
 * Time: 13:15
 */
include "../../public/connect.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$gender = $_POST['gender'];
$email = $_POST['email'];
$regdate =date("y-m-d",time());

$sql = "insert into `user`  values ( null,'$username','$password','$gender','$regdate','$email',0)";
$mysql_result = $db->query($sql);
if($mysql_result){
    header("location:addUser.html");
}else{

    echo "添加失败";
    echo "<a href='addUser.html'>返回添加页面</a>";
}