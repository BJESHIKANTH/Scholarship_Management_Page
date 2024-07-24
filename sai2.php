<?php
header('content-type:image/jpeg');
$font="BRUSHSCI.TTF";
$image=imagecreatefromjpeg("certificate.jpg");
$color=imagecolorallocate($image,19,21,22);
$name="Sai";
imagettftext($image,50,0,395,420,$color,$font,$name);
$date="5 DEC 2023";
imagettftext($image,20,0,450,595,$color,"AGENCYR.TTF",$date);
imagejpeg($image,"Certificate/sai.jpg");
imagedestroy($image);
?>
