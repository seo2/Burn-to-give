<?php
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

if(isset($_POST["fbid"])){
		$fbid = $_POST["fbid"];
	}else{
		$fbid = "";
	}

if(isset($_POST["email"]) && $fbid == ""){ //registro normal
$err = 0;
$email = $_POST["email"];
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$sexo = $_POST["sexo"];
$fechanac = $_POST["fechanac"];
$pais = $_POST["pais"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $err++; 
}
if($nombre == "") { $err++; }
if($clave == "") { $err++; }
if($sexo == "") { $err++; }
if($fechanac == "") { $err++; }
if($pais == "") { $err++; }


	if($err == 0){
		$fecha_en = changeDate($fechanac);
		$edad = calculateAge($fecha_en);

		//insertar en db
		$db->where ("usuMail", $email);
		$user = $db->getOne ("usuarios");
		
		if($db->count == 0){
			$data = array(
				'usuFB' => '', 
				'usuNom' => $nombre, 
				'usuMail' => $email,
				'usuPass' => md5($clave),
				'usuGen' => $sexo, 
				'usuFecNac' => $fecha_en, 
				'usuEdad' => $edad, 
				'usuPais' => $pais,  
				'usuEst' => ''
			);
			
			$id = $db->insert ('usuarios', $data);
			if($id)
			    echo 'ok';
		}else{
			echo 'existe';
		
		}
	}
}

if($fbid != ""){

	$email = $_POST["email"];
	$nombre = $_POST["nombre"];
	$sexo = $_POST["sexo"];
	$fechanac = $_POST["fechanac"];
	$pais = $_POST["pais"];

	$fecha_en = changeDate($fechanac);
	$edad = calculateAge($fecha_en);

			//actualizar fb
			$data = array(
			'usuNom' => $nombre, 
			'usuMail' => $email,
			'usuGen' => $sexo, 
			'usuFecNac' => $fecha_en, 
			'usuEdad' => $edad, 
			'usuPais' => $pais,  
			'usuEst' => ''
			);
			$db->where ('usuFB', $fbid);
			if ($db->update ('usuarios', $data)){
				echo 'ok-fb';
			}
}