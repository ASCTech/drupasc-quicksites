<?php

header("Content-type: image/png");

$date = strtotime(strip_tags($_GET['d']));

$d = strtoupper(date("D", $date));				// Top text
$j = date("j", $date);							// Middle text
$m = strtoupper(date("M", $date));				// Bottom text
$w = 48;										// Image width
$h = 44;										// Image height

$img = imagecreate($w, $h);

$bgc = imagecolorallocate($img, 113, 116, 0);	// Background color
$fgc = imagecolorallocate($img, 255, 255, 255);	// Foreground color
$font1 = "arialbd";								// Font for top and bottom text
$font2 = "arialbd";								// font for middle text
$fs1 = 7;										// Font size for top and bottom text
$fs2 = 16;										// Font size for middle text
$pad = 3;										// Vertical padding between text and edge

function hcenter($width){
	return round(($GLOBALS['w'] - $width) / 2);
}

imagefill($img, 0, 0, $bgc);

$bb = imagettfbbox($fs1, 0, $font1, $d);
imagettftext($img, $fs1, 0, hcenter($bb[2]), -$bb[5]+$pad, $fgc, $font1, $d);

$bb = imagettfbbox($fs2, 0, $font2, $j);
imagettftext($img, $fs2, 0, hcenter($bb[2]), ceil(($h-$bb[5])/2), $fgc, $font2, $j);

$bb = imagettfbbox($fs1, 0, $font1, $m);
imagettftext($img, $fs1, 0, hcenter($bb[2]), $h-$pad, $fgc, $font1, $m);

imagepng($img);
imagedestroy($img);

?>