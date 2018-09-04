<?php
include "../../public/connect.php";
$id = $_GET['id'];
$sql = "select * from  class  where id=$id";
$rest2 = $db->query($sql)or die('无法获取结果集'.$db->connect_errno);
$rows=[];
while($db=$rest2->fetch_array(MYSQLI_ASSOC)){
    $rows[]=$db;
}
foreach ($rows as $row){
    $cname=$row['cname'];
    $cregdate=$row['cregdate'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改分类信息</title>
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
                        <td align="right" valign="middle" class="borderright borderbottom bggray">分类名称：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                                <input type="text" name="cname" value="<?php echo $cname ?>" class="text-word"  >
                        </td>
                    </tr>

                    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                        <td align="right" valign="middle" class="borderright borderbottom bggray">添加日期：</td>
                        <td align="left" valign="middle" class="borderright borderbottom main-for">
                            <input type="date" name="cregdate" value="<?php echo $cregdate ?>" class="data-word">
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