<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/4 0004
 * Time: 3:22
 */
include "../../public/connect.php";
$id = $_GET['id'];
    $sql = "delete from goods where id=$id";
    $mysql_result = $db->query($sql);
    if($mysql_result){
        header("location:goodList.php");
    }else{
        echo "删除失败";
        echo "<a href='goodList.php' >返回分类列表页面</a>";
    }
