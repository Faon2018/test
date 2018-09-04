<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/7 0007
 * Time: 12:51
 */
include "e:/www/myshop/public/connect.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from `user` where username='$username'";
$mysql_result = $db->query($sql);
if($num=$mysql_result->num_rows==0){
    header("location:login.html");
    //  return;
}else{
$rows=[];
while ($db = $mysql_result->fetch_array(MYSQLI_ASSOC)){
    $rows[]=$db;
}

foreach ($rows as $row){
    if($row['password']==md5($password)) {
        header("location:index.php");
        session_start();
        $_SESSION['username']= $username;

    }else{
        header("location:login.html");
    }
}
}