<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/4 0004
 * Time: 2:21
 *  [gname] => lenpc1 [inventory] => 102 [price] => 4800 [level_c] => 电脑 [level_b] => 联想 )
 */
include "../../public/connect.php";
$id=$_GET['id'];
$gname = $_POST['gname'];
$price =$_POST['price'];
$inventory=$_POST['inventory'];
$cname=$_POST['level_c'];
$bname=$_POST['level_b'];

$sql="select * from class where cname ='$cname'";
$rest2 = $db->query($sql)or die('无法获取结果集'.$db->connect_errno);
$rows1=[];
while($db1=$rest2->fetch_array(MYSQLI_ASSOC)){
    $rows1[]=$db1;
}
foreach ($rows1 as $row){
    $cid=$row['id'];
}

$sql="select * from brand where bname='$bname'";
$rest2 = $db->query($sql)or die('无法获取结果集'.$db->connect_errno);
$rows=[];
while($db1=$rest2->fetch_array(MYSQLI_ASSOC)){
    $rows[]=$db1;
}
foreach ($rows as $row){
    $bid=$row['id'];
}
echo $cid."->".$bid;
$sql ="update goods set goods.`gname`='$gname', goods.`inventory`=$inventory, goods.`price`=$price, goods.`class_id`=$cid, goods.`brand_id`=$bid  
where goods.`id`='$id'";
$mysql_result =$db->query($sql);
var_dump($mysql_result);
if($mysql_result){
        header("location:goodList.php");
 }else{
        echo "修改失败";
        echo "<a href='modify.php' >返回修改页面</a>";

 }
