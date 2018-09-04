<?php
include "list.php";
$sum=0;
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员列表</title>
<link href="../css/css.css" type="text/css" rel="stylesheet" />
<link href="../css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
<link rel="stylesheet" href="../css/index.css" />
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置:人员管理——>>管理员列表</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         <form method="post" action="">
	         <span>管理员账号：</span>
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
        <th align="center" valign="middle" class="borderright">帐号</th>
        <th align="center" valign="middle">操作</th>
      </tr>
        <?php
        foreach ($rows as $row){
          $sum+=1;

        ?>
       <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $sum?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['username']?></td>
           <?php
            if($row['admin']==2){
           ?>
        <td align="center" valign="middle" class="borderbottom"><span  target="mainFrame" >重置密码</span><span class="gray">&nbsp;|&nbsp;</span> <span>删除</span></td>
          <?php
          }else{
          ?>
          <td align="center" valign="middle" class="borderbottom"><a href="modify.php?username=<?php echo $row['username']?>" target="mainFrame" onFocus="this.blur()" class="add">重置密码</a><span class="gray">&nbsp;|&nbsp;</span><a href="delete.php?username=<?php echo $row['username']?>" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
          <?php
          }
          ?>
      </tr>

         <?php

        }
        ?>


    </table></td>
    </tr>
  <tr>
      <td style="font-size: 14px ">共<?php echo $rowcount?>条数据->页码
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