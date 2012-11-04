<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
//Esta funcion debería ser eliminada una vez en producción
function print_array($data)
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

function imagetext($text,$size,$color){
  $dir = "./img";
  $filename = "$dir/" . base64_encode($text).".png";
  if(!file_exists($filename)){
     $font = "./font/league_gothic-webfont.ttf";
     $box = imagettfbbox($size,90,$font,$text);
     $w = -$box[4] - 1;
     $h = -$box[3];
     $im = imagecreatetruecolor($w,$h);
     $white = imagecolorallocate($im,$color[0],$color[1],$color[2]);
     $black = imagecolorallocate($im, 0x00, 0x00, 0x00);
     imagecolortransparent($im,$black);
     imagefilledrectangle($im, 0, 0, $size, 99, $black);
     imagettftext($im,$size,90,$size,$h,$white,$font,$text);
    
     imagepng($im,$filename,9);
     imagedestroy($im);
  }
	 $data = base64_encode(file_get_contents($filename));
  return "<img style='padding-top: 25%;' src='data:image/png;base64,$data' />";
}  

function recorta($text,$lengt){
	
	
	if(strlen($text) > $lengt){
		
		$text= substr($text,0,30);
		$text .= '...';
	}
	
	echo $text;
}