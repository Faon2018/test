<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/4 0004
 * Time: 3:22
 */
include "../../public/connect.php";
$username = $_GET['username'];
    $sql = "delete from  `user`  where username='$username'";
    $mysql_result = $db->query($sql);
    if($mysql_result){
        header("location:userList.php");
    }else{
        echo "删除失败";
        echo "<a href='userList.php' >返回会员列表页面</a>";
    }
