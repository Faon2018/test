<?php
session_start();
$username=$_SESSION['username'];

if(empty($username)) {
    header("location:login.html");
    return;
}
include "goods/good.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link  rel="stylesheet" href="../layui/css/layui.css"  media="all">
    <link  rel="stylesheet" href="public/css/index.css" >
</head>
<body>
<div class="main">
    <?php
    include "e:/www/myshop/home/public/header.php";
    ?>

    <img  class="adv-photo" src="public/img/dev.png"/>

    <div class="hr"></div>
    <?php
    foreach ($rows as $row){
    $className=$row['cname'];
    $class_id=$row['id'];

        ?>
        <div class="floor_pc">
            <div class="floor_header">
                <img class="headimg" src="public/img/pc.png"/><span class="spanLeft"><?php echo $className?>专区</span> <span
                        class="spanRight"></span><a href="">热购产品More &raquo;</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>

            <div class="floor_center">
                <?php
                $rows2=goods($class_id);
                foreach ($rows2 as $row) {
                    $goodName = $row['gname'];
                    $price = $row['price'];
                    $imgPath = $row['img'];

                    ?>
                    <div class="floorimg">
                        <div>
                            <a href="goods.php"><img width="200px" height="160px" src="<?php echo $imgPath?>"/></a>
                        </div>
                        <div class="floorname">
                        <span class="spanname"><?php echo $goodName?><span/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="spanprice"><?php echo $price?>元<span/>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <?php
    }
    ?>


    <div class="hr"></div>
    <img  class="adv-photo" src="public/img/dev.png"/>
    <?php
    include 'public/buttom.php';
    ?>

</div>
</body>
</html>