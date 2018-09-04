<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3 0003
 * Time: 13:04
 */
include "../../public/connect.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$gender = $_POST['gender'];
$regdate =date("y-m-d",time());
$admin= $_POST['level'];
$sql = "insert into `user`  values ( null,'$username','$password','$gender','$regdate',null,$admin)";
$mysql_result = $db->query($sql);
if($mysql_result){
    header("location:addAdmin.html");
}else{

    echo "添加失败";
    echo "<a href='addAdmin.html'>返回添加页面</a>";
}