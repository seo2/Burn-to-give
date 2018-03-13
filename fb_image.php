<?php
date_default_timezone_set('America/Santiago');
require_once 'ajax/_lib/config.php';
require_once 'ajax/_lib/MysqliDb.php';
require_once("ajax/_lib/wideimage/WideImage.php");

$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);

$p = $_GET["p"];

//obtener la imagen
$db->where ("calID", $p);
		$user = $db->getOne ("calorias");
		if($db->count > 0){
			$calImg = $user["calImg"];
		}else{
			$calImg = "";
		}

if($calImg!= ""){

	
	$ext = explode(".", $calImg);
	$Img2 = str_replace($ext[1], "png", $calImg);
	$rutaImg2 = "uploads/".$Img2;

	$newfile_name = "uploads/fb_".$Img2;

	$image = WideImage::load($rutaImg2);
	
	$white = $image->allocateColor(255, 255, 255);
	$new = $image->resizeCanvas('1200', '100%', 'center', 'center', $white);

	$new->output('png');
}