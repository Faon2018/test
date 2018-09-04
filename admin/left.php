<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧导航menu</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/sdmenu.js"></script>
<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
</script>
<style type=text/css>
html{ SCROLLBAR-FACE-COLOR: #538ec6; SCROLLBAR-HIGHLIGHT-COLOR: #dce5f0; SCROLLBAR-SHADOW-COLOR: #2c6daa; SCROLLBAR-3DLIGHT-COLOR: #dce5f0; SCROLLBAR-ARROW-COLOR: #2c6daa;  SCROLLBAR-TRACK-COLOR: #dce5f0;  SCROLLBAR-DARKSHADOW-COLOR: #dce5f0; overflow-x:hidden;}
body{overflow-x:hidden; background:url(images/main/leftbg.jpg) left top repeat-y #f2f0f5; width:194px;}
</style>
</head>
<body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;">
<div id="left-top">
	<div><img src="../public/img/logo.png" width="44" height="44" /></div>
    <span>用户：<?php echo $_SESSION["username"]?><br>角色：<?php switch ($_SESSION["admin"]){case 1:echo "管理员";break; case 2:echo "超级管理员";break;} ?></span>
</div>
    <div style="float: left" id="my_menu" class="sdmenu">
      <div class="collapsed">
        <span>人员管理</span>
        <a href="main.php" target="mainFrame" onFocus="this.blur()">首页统计</a>
        <a href="user/userList.php" target="mainFrame" onFocus="this.blur()">会员列表</a>
        <a href="user/addUser.html" target="mainFrame" onFocus="this.blur()">添加会员</a>
        <a href="admin/adminList.php" target="mainFrame" onFocus="this.blur()">管理员列表</a>
        <a href="admin/addAdmin.html" target="mainFrame" onFocus="this.blur()">添加管理员</a>
      </div>
      <div>
        <span>商品管理</span>
        <a href="goods/goodList.php" target="mainFrame" onFocus="this.blur()">商品列表</a>
        <a href="goods/addGood.php" target="mainFrame" onFocus="this.blur()">添加商品</a>

      </div>
      <div>
        <span>分类管理</span>
        <a href="class/classList.php" target="mainFrame" onFocus="this.blur()">分类列表</a>
        <a href="class/addClass.php" target="mainFrame" onFocus="this.blur()">添加分类</a>
      </div>

      <div>
        <span>品牌管理</span>
        <a href="brand/brandList.php" target="mainFrame" onFocus="this.blur()">品牌列表</a>
        <a href="brand/addBrand.php" target="mainFrame" onFocus="this.blur()">添加品牌</a>
      </div>

      <div>
        <span>评论管理</span>
        <a href="comments/commentList.html" target="mainFrame" onFocus="this.blur()">评论列表</a>
      </div>

      <div>
        <span>订单管理</span>
        <a href="indent/indentList.html" target="mainFrame" onFocus="this.blur()">订单列表</a>

      </div>
      <div>
        <span>广告管理</span>
        <a href="advert/advertList.html" target="mainFrame" onFocus="this.blur()">广告列表</a>
        <a href="advert/addAdvert.html" target="mainFrame" onFocus="this.blur()">添加广告</a>

      </div>

    </div>
</body>
</html>