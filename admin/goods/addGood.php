<?php
include "../../public/connect.php";
$sql = "SELECT * FROM brand ";
$rest2 = $db->query($sql)or die('无法获取结果集'.$db->connect_errno);
$rows=[];
while($db1=$rest2->fetch_array(MYSQLI_ASSOC)){
    $rows[]=$db1;
}

$sql = "SELECT * FROM class ";
$rest2 = $db->query($sql)or die('无法获取结果集'.$db->connect_errno);
$rows1=[];
while($db1=$rest2->fetch_array(MYSQLI_ASSOC)){
    $rows1[]=$db1;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加商品</title>
    <link href="../css/css.css" type="text/css" rel="stylesheet" />
    <link href="../css/main.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/index.css"/>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
    <tr>
        <td width="99%" align="left" valign="top">您的位置:商品管理——>>添加商品</td>
    </tr>

    <tr>
        <td align="left" valign="top">
            <form method="post" action="">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">商品名称：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input type="text" name="gname" value="" class="text-word">
                        </td>
                    </tr>
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">数量：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input type="text" name="inventory" value="" class="text-word">
                        </td>
                    </tr>
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">价格：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input type="text" name="price" value="" class="text-word">
                        </td>
                    </tr>
                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">商品分类：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <select name="level_c" id="level">
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
                        <td align="right" valign="middle" class="borderright borderbottom bggray">商品品牌：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <select name="level_b" id="leve">
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
                            <input name="" type="reset" value="重置" class="text-but"></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>
</body>
</html>