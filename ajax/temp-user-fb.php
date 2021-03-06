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

if(isset($_POST["id"])){
$err = 0;
$idFB = $_POST["id"];
$email = $_POST["email"];
$nombre = $_POST["name"];
$sexo = $_POST["gender"];

if($sexo == 'female'){
	$sexo = "MUJER";
}elseif ($sexo == 'male') {
	$sexo = "HOMBRE";
}

	$today = date("Y-m-d");

	//insertar en db
	$db->where ("usuMail", $email);
	$user = $db->getOne ("usuarios");
	if($db->count == 0){

		$_SESSION["burntogiveFB"]   = $idFB;
		$_SESSION["burntogiveNom"]  = $nombre; 
		$_SESSION["burntogiveMail"] = $email;
		$_SESSION["burntogiveSex"]  = $sexo;
		$_SESSION["burntogiveFec"]  = $today;
	    echo 'ok';
	}else{
		$_SESSION["burntogive"] = $user["usuID"];
		echo 'existe';
	}
}