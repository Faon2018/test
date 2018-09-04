<?php
include "list.php";
$sum=0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>分类列表</title>
    <link href="../css/css.css" type="text/css" rel="stylesheet" />
    <link href="../css/main.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/index.css" />
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
    <tr>
        <td width="99%" align="left" valign="top">您的位置:分类管理——>>分类列表</td>
    </tr>
    <tr>
        <td align="left" valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
                <tr>
                    <td width="90%" align="left" valign="middle">
                        <form method="post" action="">
                            <span>分类名称：</span>
                            <input type="text" name="" value="" class="text-word">
                            <input name="" type="button" value="查询" class="text-but">
                        </form>
                    </td>

                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="left" valign="top">

            <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
                <tr>
                    <th align="center" valign="middle" class="borderright">编号</th>
                    <th align="center" valign="middle" class="borderright">名称</th>
                    <th align="center" valign="middle" class="borderright">添加时间</th>
                    <th align="center" valign="middle">操作</th>
                </tr>
                <?php
                foreach ($rows as $row){
                $sum+=1;
                ?>
                <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                    <td align="center" valign="middle" class="borderright borderbottom"><?php echo $sum?></td>
                    <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['cname']?></td>
                    <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['cregdate']?></td>
                    <td align="center" valign="middle" class="borderbottom"><a href="modify.php?id=<?php echo $row['id']?>" target="mainFrame" onFocus="this.blur()" class="add">更改信息</a><span class="gray">&nbsp;|&nbsp;</span><a href="delete.php?id=<?php echo $row['id']?>" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
                </tr>
               <?php
               }
               ?>


            </table></td>
    </tr>
    <tr>
      &nbsp;&nbsp; <td style="font-size: 14px ">共<?php echo $rowcount?>条数据->页码
            <?php
            for($i=1;$i<=$pagecount;$i++) {

                echo " &nbsp;<a style='font-size: 14px ;color: #0c7cb5 ' href='?pagenow=$i'>$i</a> ";

            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>