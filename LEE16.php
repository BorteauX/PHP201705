<?php
$img = imagecreatefromjpeg("./p2.jpg");

$blue = imagecolorallocate (
    $img , 0 , 0 , 255 );

imagettftext(
    $img,24,0,100,100,$blue,
    "./upload/fireflysung.ttf","hello,");



header('Content-Type: image/jpeg');
imagejpeg($img);




imagedestroy($img);