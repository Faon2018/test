<?php
//session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>分类详情页面</title>
    <link  rel="stylesheet" href="../../layui/css/layui.css"  media="all">
    <link  rel="stylesheet" href="css/index.css" >
</head>
<body>

<div class="headLeft">
        <ul class="layui-nav">
            <li class="layui-nav-item" lay-unselect="">
                <a href=""><img src="/myshop/public/img/logo.png" class="layui-nav-img1"/>myshop[首页]</a>
            </li>
        </ul>
    </div>
    <div class="headRight">
        <ul class="layui-nav">
            <li class="layui-nav-item">
                <?php
                if(!empty($_SESSION['username'])){
                ?>
                <a href="login.html">欢迎<?php echo $username?>登录</a>
            </li>

            <?php
            }else {
            ?>
                <a href="login.html">登录</a>
                </li>
                <li class="layui-nav-item">
                    <a href="regist.html">注册</a>
                </li>

            <?php
            }
            ?>
            <li class="layui-nav-item">
                <a href="">个人中心</a>
            </li>
            <li class="layui-nav-item">
                <a href="shoppingcar.php">购物车</a>
            </li>
        </ul>
    </div>
    <div class="head_hr">

    </div>
</body>
</html>