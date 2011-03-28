<?
header ("Content-type: image/jpg");
$image=imageCreateFromJPEG("78.jpg");
imagejpg($image);
imagedestroy($image);
?>