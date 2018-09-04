<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/12 0012
 * Time: 22:20
 */
//根据商品的分类，确定楼层数
include "e:/www/myshop/public/connect.php";
$sql = "select * from class ";
$result =$db->query($sql);
$rows=[];
while($db1=$result->fetch_array(MYSQLI_ASSOC)){
    $rows[]=$db1;
}


function goods($class_id){
    include "e:/www/myshop/public/connect.php";
    //随机出的产品序号
    $sql1 = "select count(id) cot from goods where class_id=$class_id";
    $rows1=[];
    $randNum=0;
    if (!empty($db)) {
        $result = $db->query($sql1)or die('无法获取结果集'.$db->connect_errno);;

        while($db1=$result->fetch_array(MYSQLI_ASSOC)){
            $rows1[]=$db1;
        }

        foreach ($rows1 as $row){
            $randNum=$row['cot'];
        }
    }

    $firstNum=0;
    $firstNum=rand(0,$randNum-5);


    $sql2 = "SELECT  * FROM goods WHERE class_id=$class_id LIMIT $firstNum,5";
    $rows2=[];
    if (!empty($db)) {
        $result = $db->query($sql2);

        while($db1=$result->fetch_array(MYSQLI_ASSOC)){

            $rows2[]=$db1;
        }
    }


    return $rows2;
}