<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>商品详情页面</title>
    <link  rel="stylesheet" href="../layui/css/layui.css"  media="all">
    <link  rel="stylesheet" href="public/css/index.css" >
</head>
<body>
<?php
include "e:/www/myshop/home/public/header.php";
?>

<div class="floor_pc">

    <div class="floor_header">
        <a class="goods_a" >品牌</a>&nbsp;<span>&raquo;&nbsp;lenovo-1</span>
    </div>

    <div class="goods_center">
      <table class="goods_table" border="1px ">
          <tr class="goods_table_tr1">
              <td>商品</td>
              <td>价格</td>
              <td>库存</td>
              <td>购物车</td>
          </tr>
          <tr class="goods_table_tr2">
              <td><img src="../public/img/lenovo-1.png"/></td>
              <td>500元</td>
              <td>10</td>
              <td><a href=""><input type="button" value="加入购物车" class="goods_table_tr2_button"/></a></td>
          </tr>
      </table>
    </div>


</div>

<div class="floor_tel">
    <div class="floor_header">
        <span class="spanLeft" >商品评论</span> &nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <div class="goods_talk">
        <div class="talk_photo">

        </div>
        <div class="talk_content">

        </div>
        <div class="talk_time">

        </div>

    </div>
</div>

<?php
include 'public/buttom.php';

?>
<body/>
<html/>

