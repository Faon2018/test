<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3 0003
 * Time: 1:51
 */
$localhost = '127.0.0.1';
$user = 'root';
$password ='root';
$dbname = 'myshop';
$db = new mysqli($localhost,$user,$password,$dbname);

//判断数据哭是否连接成功
if ($db->connect_errno<>0){
    echo '数据库连接失败';
    echo $db->connect_errno;
}
//设置编码
$db->query('set names utf8');