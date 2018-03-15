<?php
session_start();
date_default_timezone_set('America/Santiago');
require_once '_lib/config.php';
require_once '_lib/MysqliDb.php';
$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);

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

	$fbid = $_POST["fbid"];
	$err 		= 0;
	$email 		= $_POST["email"];
	$nombre 	= $_POST["nombre"];
	$clave 		= $_POST["clave"];
	$sexo 		= $_POST["sexo"];
	$fechanac 	= $_POST["fechanac"];
	$pais 		= $_POST["pais"];
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    $err++; 
	}
	if($nombre == "") { $err++; }
	//if($clave == "") { $err++; }
	if($sexo == "") { $err++; }
	if($fechanac == "") { $err++; }
	if($pais == "") { $err++; }


	if($err == 0){
		$fecha_en = changeDate($fechanac);
		$edad = calculateAge($fecha_en);

		$today = date("Y-m-d");
		$todayFull = date("Y-m-d H:i:s");
		//insertar en db
		$db->where ("usuMail", $email);
		$user = $db->getOne ("usuarios");
		
		if($db->count == 0){
			$data = array(
				'usuFB' 	=> '', 
				'usuNom' 	=> $nombre, 
				'usuMail' 	=> $email,
				'usuPass' 	=> md5($clave),
				'usuGen' 	=> $sexo, 
				'usuFecNac' => $fecha_en, 
				'usuEdad' 	=> $edad, 
				'usuPais' 	=> $pais,  
				'usuEst' 	=> '',
				'usuTS' 	=> $todayFull,
				'usuFec' 	=> $today
			);
			
			$id = $db->insert ('usuarios', $data);
			if($id)
				$_SESSION["burntogive"] = $id;
	
			    $to 	 = $email;
				$headers = "From: Burn to Give <info@burntogive.com>\r\n". 
				           "MIME-Version: 1.0" . "\r\n" . 
				           "Content-type: text/html; charset=UTF-8" . "\r\n";	
				           
				if($_SESSION["burntogivelang"]=='en'){
			    	$subject = "Thanks for joining Burn to Give";
					$msg = file_get_contents("mail/mail_en.html");    
				}else{
			    	$subject = "Gracias por unirte a Burn to Give";
					$msg = file_get_contents("mail/mail.html");    
				}		
			    
			    mail($to,$subject,$msg, $headers);
		    
		    echo 'ok';
		}else{
			echo 'existe';
		
		}
	}else{
		echo $err;
	}
