<?php
session_start();
require_once '_lib/config.php';
require_once '_lib/MysqliDb.php';
$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);

//var_dump($_POST);
function changeDate($fecha){
	$f = explode("-", $fecha);
	$dia = $f[0];
	$mes = $f[1];
	$ano = $f[2];
	$fecha = $ano."-".$mes."-".$dia;
	return($fecha);
}

function calculateAge($birthDate){
	//explode the date to get month, day and year
	$birthDate = explode("-", $birthDate);
	//get age from date or birthdate
	$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md")
	? ((date("Y") - $birthDate[0]) - 1)
	: (date("Y") - $birthDate[0]));
	return($age);
}

if(isset($_POST["email"])){ //registro normal
	$err 		= 0;
	$email 		= $_POST["email"];
	$nombre 	= $_POST["nombre"];
	$clave 		= $_POST["clave"];
	$usuGen	 	= $_POST["usuGen"];
	$dia 		= $_POST["log-dia"];
	$mes 		= $_POST["log-mes"];
	$ano	 	= $_POST["log-ano"];
	$fechanac 	= $ano.'-'.$mes.'-'.$dia;
	$pais 		= $_POST["pais"];
	$today = date("Y-m-d");
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    $err++; 
	}
	if($nombre == "") { $err++; }
	if($clave == "") { $err++; }


	if($err == 0){
		//$fecha_en = changeDate($fechanac);
		$edad = calculateAge($fechanac);

		//insertar en db
		$db->where ("usuMail", $email);
		$user = $db->getOne ("usuarios");
		
		if($db->count == 0){
			$data = array(
				'usuFB' 	=> '', 
				'usuNom' 	=> $nombre, 
				'usuMail' 	=> $email,
				'usuPass' 	=> md5($clave),
				'usuFecNac' => $fechanac, 
				'usuEdad' 	=> $edad,
				'usuGen'	=> $usuGen, 
				'usuPais' 	=> $pais,
				'usuEst' 	=> '',
				'usuFec' 	=> $today
			);
			
			$id = $db->insert ('usuarios', $data);
			if($id)
/*
				$_SESSION["burntogive"] = $id;
				$headers = "From: Burn to give <info@burntogive.com>\r\n". 
				           "MIME-Version: 1.0" . "\r\n" . 
				           "Content-type: text/html; charset=UTF-8" . "\r\n";				
				$msg = file_get_contents("mail/mail.html");
				mail($email, 'Hello', 'test', $headers);
*/

			    $from 	 = "test@burntogive.com";
			    $to 	 = "seo2@seo2.cl";
			    $subject = "PHP Mail Test script 1";
			    $message = "This is a test to check the PHP Mail functionality";
			    $headers = "From:" . $from;
			    
				$headers = "From: Burn to give <info@burntogive.com>\r\n". 
				           "MIME-Version: 1.0" . "\r\n" . 
				           "Content-type: text/html; charset=UTF-8" . "\r\n";				
				$msg = file_get_contents("mail/mail.html");    
			    
			    
			    mail($to,$subject,$msg, $headers);

				
			    echo 'ok';
		}else{
			echo 'existe';
		
		}
	}
}
