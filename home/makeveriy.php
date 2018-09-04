<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/14 0014
 * Time: 下午 4:31
 */
function getverity(){
//验证码的制作
//1画布
$img = imagecreatetruecolor(100,30);
//颜色
$black = imagecolorallocate($img,0,0,0);
$white = imagecolorallocate($img,255,255,255);
$shodwn = imagecolorallocatealpha($img,255,255,255,70);
//填充
imagefill($img,0,0,$black);
$with=0;
$higeth=5;
$arr = [0,1,2,3,4,5,6,7,8,9,"Q","W","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M"];
//记录验证码
$verify='';
for ($i=0;$i<4;$i++){

   $str=$arr[rand(0,35)];
   $verify=$verify.$str;
   if ($i%2==0){

       imagestring($img,40,16+$with,10+$higeth,$str,$white);

   }else{
       imagestring($img,40,16+$with,10-$higeth,$str,$white);
   }
   $with+=20;
}
setcookie("verify",$verify);
for ($i=0;$i<30;$i++){

    imagefilledellipse($img,rand(0,100),rand(0,30),rand(0,30),rand(0,30),$shodwn);
}


header('content-type:image/jpeg');

imagejpeg($img,"public/img/verity.jpeg");

imagedestroy($img);


}

getverity();