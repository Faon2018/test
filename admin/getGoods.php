<?php
include "../public/connect.php";
$className=$_GET["className"];
$class_id=0;
$sql1 = "select count(id) sum  from goods ";
$mysql_result1 = $db->query($sql1);
$rows1=[];
while ($db1 = $mysql_result1->fetch_array(MYSQLI_ASSOC)){
    $rows1[]=$db1;
}


$sql3 = "select id  from `class` where cname='$className'";
$mysql_result3 = $db->query($sql3);
$rows3=[];
while ($db3 = $mysql_result3->fetch_array(MYSQLI_ASSOC)){
    $rows3[]=$db3;
}
foreach ($rows3 as $row){
    $class_id=$row['id'];
}


$sql2 = "select count(id) sum  from goods where class_id=$class_id";
$mysql_result2 = $db->query($sql2);
$rows2=[];
while ($db2 = $mysql_result2->fetch_array(MYSQLI_ASSOC)){
    $rows2[]=$db2;
}




$response=0;
//lookup all hints from array if length of q>0
if ($className == "商品总计" || $class_id==0) {
    foreach ($rows1 as $row) {
        $response = $row['sum'];
    }
}else{
    foreach ($rows2 as $row) {
        $response = $row['sum'];
    }
}

echo $response;

?>