<?php
include "../../public/connect.php";
$id=$_GET['id'];
$sql = "SELECT goods.`gname` ,goods.`img` ,goods.`inventory` ,goods.`price` ,goods.`shelf` ,class.`cname` cname,brand.`bname` bname FROM goods,class,brand
 WHERE goods.`class_id`=class.id AND goods.`brand_id`=brand.`id`AND goods.id=$id";
$rest2 = $db->query($sql)or die('无法获取结果集'.$db->connect_errno);
$rows=[];
while($db1=$rest2->fetch_array(MYSQLI_ASSOC)){
    $rows[]=$db1;
}
foreach ($rows as $row){
    $gname=$row['gname'];
    $cname=$row['cname'];
    $bname=$row['bname'];
    $inventory=$row['inventory'];
    $price=$row['price'];
}
$sql = "SELECT * FROM brand where bname!='$bname'";
$rest2 = $db->query($sql)or die('无法获取结果集'.$db->connect_errno);
$rows=[];
while($db1=$rest2->fetch_array(MYSQLI_ASSOC)){
    $rows[]=$db1;
}

$sql = "SELECT * FROM class where cname!='$cname'";
$rest2 = $db->query($sql)or die('无法获取结果集'.$db->connect_errno);
$rows1=[];
while($db1=$rest2->fetch_array(MYSQLI_ASSOC)){
    $rows1[]=$db1;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改商品信息</title>
    <link href="../css/css.css" type="text/css" rel="stylesheet" />
    <link href="../css/main.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/index.css" />
</head>
<body>
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
    <tr>
        <td align="left" valign="top">
            <form method="post" action="verity.php?id=<?php echo$id?>">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">商品名称：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                                <input type="text" name="gname" value="<?php echo $gname ?>" class="text-word"  >
                        </td>
                    </tr>
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">库存：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input type="text" name="inventory" value="<?php echo $inventory ?>" class="text-word"  >
                        </td>
                    </tr>
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">价格：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input type="text" name="price" value="<?php echo $price ?>" class="text-word"  >
                        </td>
                    </tr>

                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">分类：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <select name="level_c" id="level" >
                                <option value="<?php echo $cname?>" >&nbsp;&nbsp;<?php echo $cname?></option>
                                <?php
                                foreach ($rows1 as $row){
                                ?>
                                    <option value="<?php echo $row['cname']?>" >&nbsp;&nbsp;<?php echo $row['cname']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">品牌：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <select name="level_b" id="level" >
                                <option value="<?php echo $bname?>" >&nbsp;&nbsp;<?php echo $bname?></option>
                                <?php
                                foreach ($rows as $row){
                                ?>
                                <option value="<?php echo $row['bname']?>" >&nbsp;&nbsp;<?php echo $row['bname']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input name="" type="submit" value="提交" class="text-but">
                           <a href=""> <input name="" type="button" value="重置" class="text-but"></a></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>
</body>
</html>