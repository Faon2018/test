<?php
session_start();
include "../public/connect.php";
$sql1 = "select count(id) sum  from `user` where `admin`=0";
$sql2 = "select count(id) sum  from `user` where `admin`>0";
$sql3 = "select count(id) sum from class ";
$sql4 = "select count(id) sum from brand ";
$sql5 = "select *  from class ";
$sql6 = "select count(id) sum from goods ";
$mysql_result1 = $db->query($sql1);
$mysql_result2 = $db->query($sql2);
$mysql_result3 = $db->query($sql3);
$mysql_result4 = $db->query($sql4);
$mysql_result5 = $db->query($sql5);
$mysql_result6 = $db->query($sql6);
$rows1=[];
while ($db = $mysql_result1->fetch_array(MYSQLI_ASSOC)){
    $rows1[]=$db;
}
$rows2=[];
while ($db = $mysql_result2->fetch_array(MYSQLI_ASSOC)){
    $rows2[]=$db;
}
$rows3=[];
while ($db = $mysql_result3->fetch_array(MYSQLI_ASSOC)){
    $rows3[]=$db;
}
$rows4=[];
while ($db = $mysql_result4->fetch_array(MYSQLI_ASSOC)){
    $rows4[]=$db;
}
$rows5=[];
while ($db = $mysql_result5->fetch_array(MYSQLI_ASSOC)){
    $rows5[]=$db;
}
$rows6=[];
while ($db = $mysql_result6->fetch_array(MYSQLI_ASSOC)){
    $rows6[]=$db;
}
foreach ($rows6 as $row) {
    $goodsNum=$row['sum'];
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/index.css"/>
<script src="js/getGoods.js"></script>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="main">
  <tr>
    <td colspan="2" align="left" valign="top">
    <span class="time"><strong>上午好！<?php echo $_SESSION["username"]?></strong><u>[<?php switch ($_SESSION["admin"]){case 1:echo "管理员";break; case 2:echo "超级管理员";break;} ?>]</u></span>
 &nbsp;
    <div class="sec">这是您第<span class="num"><?php echo $_SESSION["id"]?></span>次,登录！</div>
    </td>
  </tr>
    <table border="1px">
        <tr>
            <td class="main_table_td">类型</td>
            <td class="main_table_td">总计</td>
        </tr>
        <tr>
            <td class="main_table_td">会员</td>
           <?php
           foreach ($rows1 as $row) {
           ?>
           <td class="main_table_td"><?php echo $row['sum']?></td>
           <?php
           }
           ?>
        </tr>
        <tr>
            <td class="main_table_td">管理员</td>
            <?php
            foreach ($rows2 as $row) {
                ?>
                <td class="main_table_td"><?php echo $row['sum']?></td>
                <?php
            }
            ?>
        </tr>


        <tr>
            <td class="main_table_td">分类总计</td>
            <?php
            foreach ($rows4 as $row) {
                ?>
                <td class="main_table_td"><?php echo $row['sum']?></td>
                <?php
            }
            ?>
        </tr>

        <tr>
            <td class="main_table_td">品牌总计</td>
            <?php
            foreach ($rows4 as $row) {
                ?>
                <td class="main_table_td"><?php echo $row['sum']?></td>
                <?php
            }
            ?>
        </tr>

        <tr>
            <td class="main_table_td">
                <select name="className" onchange="getGoods(this.value)" style="width: 150px ;height: 28px ;background-color:#F2F0F5">
                    <option value="sum">商品总计</option>
                    <?php
                    foreach ($rows5 as $row) {
                    ?>
                        <option value="<?php echo $row['cname']?>"><?php echo $row['cname']?></option>

                    <?php
                    }
                    ?>

                </select>

            </td>

            <td class="main_table_td" ><span id="clasSum"><?php echo $goodsNum?></span></td>

        </tr>


    </table>
  <tr>
    <td colspan="2" align="left" valign="top">
    <div class="main-corpy">系统提示</div>
    <div class="main-order">1=>如您在使用过程有发现出错请及时与我们取得联系；为保证您得到我们的后续服务，强烈建议您购买我们的正版系统或向我们定制系统！<br/>
2=>强烈建议您将IE7以上版本或其他的浏览器</div>
    </td>
  </tr>
</table>
</body>
</html>