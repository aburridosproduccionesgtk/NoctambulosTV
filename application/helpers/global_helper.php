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

function cambiaf_a_mysql($fecha){
	$fecha2=date("Y-m-d",strtotime($fecha));
	return $fecha2;
}

function fecha_norm($fecha){
	$fecha2 = date("d-m-Y",strtotime($fecha));
	return $fecha2;
}

function datecheck($input,$format)
{
	$separator_type= array(
			"/",
			"-",
			"."
	);
	foreach ($separator_type as $separator) {
		$find= stripos($input,$separator);
		if($find<>false){
			$separator_used= $separator;
		}
	}
	$input_array= explode($separator_used,$input);
	
	if ($format=="dmy") {
		return checkdate($input_array[1],$input_array[0],$input_array[2]);
	} elseif ($format=="ymd") {
		return checkdate($input_array[1],$input_array[2],$input_array[0]);
	} else {
		return checkdate($input_array[1],$input_array[0],$input_array[2]);
	}
	$input_array=array();
}

function is_logged_in()
{
	$CI = & get_instance();
	return ($CI->session->userdata("id")!= null);
}


function get_user_id()
{
	$CI = & get_instance();
	if (is_logged_in())
	{
		return $CI->session->userdata("id");
	}
	else
		return null;
}

function redimensionar(){
	$anchura=400; 
	$hmax=200; 
	$nombre='./img/prof_img/eslogan.jpg' ;
	$datos = getimagesize($nombre); 
	if($datos[2]==1){$img = @imagecreatefromgif($nombre);} 
	if($datos[2]==2){$img = @imagecreatefromjpeg($nombre);} 
	if($datos[2]==3){$img = @imagecreatefrompng($nombre);} 
	$ratio = ($datos[0] / $anchura); 
	$altura = ($datos[1] / $ratio); 
	if($altura>$hmax){$anchura2=$hmax*$anchura/$altura;$altura=$hmax;$anchura=$anchura2;}
	$thumb = imagecreatetruecolor($anchura,$altura); 
	imagecopyresampled($thumb, $img, 0, 0, 0, 0, $anchura, $altura, $datos[0], $datos[1]); 
	if($datos[2]==1){header("Content-type: image/gif"); imagegif($thumb,'redimensionada');} 
	if($datos[2]==2){imagejpeg($thumb,'./img/prof_img/redimensionada.jpg');} 
	if($datos[2]==3){header("Content-type: image/png");imagepng($thumb,'redimensionada',9); } 
	imagedestroy($thumb); 
}

 

