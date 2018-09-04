<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3 0003
 * Time: 1:47
 */
include "../public/connect.php";

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from `user` where username='$username'";
$res = $db->query($sql);
if($num=$res->num_rows==0){

    header("location:login.html");

    //  return;
}
$rows=[];
while ($db = $res->fetch_array(MYSQLI_ASSOC)){
    $rows[]=$db;
}

foreach ($rows as $row){
    if($row['password']==md5($password)) {
        header("location:index.html");
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['admin'] = $row['admin'];
        $_SESSION['id']=+1;
    }else{
        header("location:login.html");
    }
}