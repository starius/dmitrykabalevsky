<?
/*
$img=imageCreateTrueColor(500, 400);
header ("Content-type: image/jpeg");
imageJpeg($img);
$color= imageColorAllocate ($img, 255, 255, 51);
imageLine($img, 20, 20, 80, 280, $color);
imageString ($img, 3, 150, 300, "Hello", $color);
$image=imageCreateFromJPEG("78.jpg");*/

/*header ("Content-type: image/png");
$img = imagecreatetruecolor(320, 240);
$ink = imagecolorallocate($img, 255, 255, 255);
imagesetpixel($img,160,120,$ink);
imagesetpixel($img,100,100,$ink);
imagepng($img);
imagedestroy($img);*/
/*
header ("Content-type: image/png");
$img = imagecreatetruecolor(720, 540);
for ($i=0;$i<720;$i++)
    for ($j=0;$j<540;$j++) {
        $ink = imagecolorallocate($img, $i*$j, $i*$j, $i*$j);
        imagesetpixel($img,$i,$j,$ink);
        }
$ink1 = imagecolorallocate($img, 255, 0, 0);
$ink2 = imagecolorallocate($img, 255, 0, 0);
imagesetpixel($img,100,100,$ink1);*/
$x1=20;
$x2=80;
$y1=20;
$y2=280;
$b=0;
while ($x2<720){
//imageLine($img, 20, 20, 80, 280, $ink1);
//imageLine($img, 80, 280, 140, 20, $ink2);
//imageLine($img, $x1, $y1, $x2, $y2, $ink2);

$i=$i+60;
if($b%2==0){
$y1=280;
$y2=20;
$x1=$x1+120;
$x2=$x2+120;
echo("левые x1-$x1 x2-$x2 y1-$y1 y2-$y2 <br>");
}
else {$y1=20; $y2=280; $x1=$x1+120;
$x2=$x2+120;
echo(" правые x1-$x1 x2-$x2 y1-$y1 y2-$y2 <br>");}
$b++;
//echo("x1-$x1 x2-$x2 y1-$y1 y2-$y2 <br>");
}
/*
imageString ($img, 3, 150, 300, "Hello", $ink1);
imagepng($img);
imagedestroy($img);*/

/*$image=imageCreateFromJPEG("78.jpg");
imagejpg($image);
imagedestroy($image);*/


?>
