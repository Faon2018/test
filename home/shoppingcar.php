<?php
session_start();
$username=$_SESSION['username'];

if(empty($username)) {
header("location:login.html");
return;
}
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>购物车页面</title>
    <link  rel="stylesheet" href="../layui/css/layui.css"  media="all">
    <link  rel="stylesheet" href="public/css/index.css" >
</head>
<body>
<?php
include "e:/www/myshop/home/public/header.php";
?>
<div class="floor_pc">

    <div class="floor_header">
        &nbsp;&nbsp;<span>我的购物车&nbsp;&raquo;</span>
    </div>

    <div class="goods_center">
        <table class="goods_table" border="1px ">
            <tr class="goods_table_tr1">
                <td>商品</td>
                <td>图片</td>
                <td>价格</td>
                <td>库存</td>
                <td>数量</td>
                <td>合计</td>
                <td>删除</td>
            </tr>
            <tr class="goods_table_tr2">
                <td>lenovo-1</td>
                <td><img src="../public/img/lenovo-1.png"/></td>
                <td>500元</td>
                <td>100件</td>
                <td><a><input class="shopping_button" type="button" value="+"></a>2件<a><input class="shopping_button" type="button" value="-"></a></td>
                <td>1000元</td>
                <td><a  href=""  class="shopping_a">删除</a></td>
            </tr>
            <tr class="goods_table_tr2">
                <td>lenovo-1</td>
                <td><img src="../public/img/lenovo-1.png"/></td>
                <td>500元</td>
                <td>100件</td>
                <td><a><input class="shopping_button" type="button" value="+"></a>2件<a><input class="shopping_button" type="button" value="-"></a></td>
                <td>1000元</td>
                <td><a  href=""  class="shopping_a">删除</a></td>
            </tr>
        </table>
    </div>


</div>

<div class="floor_tel">
    <div class="floor_header">
        <span class="spanLeft" >我的联系方式&nbsp;&raquo;</span> &nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <div class="goods_center">
        <table class="goods_table" border="1px">
            <tr >
                <td>姓名</td>
                <td>电话</td>
                <td>地址</td>
                <td>邮箱</td>
                <td>选择</td>
            </tr>
            <tr >
                <td>user</td>
                <td>1234567</td>
                <td>火星</td>
                <td>1242@我要去玩热负荷发</td>
                <td><input type="radio" name="chose"/></td>
            </tr>
            <tr >
                <td>user</td>
                <td>1234567</td>
                <td>火星</td>
                <td>1242@我要去玩热负荷发</td>
                <td><input type="radio" name="chose" /></td>
            </tr>
            <tr >
                <td>user</td>
                <td>1234567</td>
                <td>火星</td>
                <td>1242@我要去玩热负荷发</td>
                <td><input type="radio" name="chose" /></td>
            </tr>
        </table>

    </div>
    <div class="floor_header">
        &nbsp;&nbsp;<input class="shopping_submit" type="submit" value="提交订单"> &nbsp;&nbsp;
    </div>
</div>

<?php
include 'public/buttom.php';

?>
<body/>
<html/>

