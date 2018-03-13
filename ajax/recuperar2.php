<?php
session_start();
date_default_timezone_set('America/Santiago');

require_once '_lib/config.php';
require_once '_lib/MysqliDb.php';

$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);

if(isset($_POST["log-pass2"])){
$err = 0;
$logpass = $_POST["log-pass"];
$logpass2 = $_POST["log-pass2"];
$id = $_POST["id"];


if($logpass2 != $logpass){
	//$txt_error = "error-pass";
	$err++;
}

if($err == 0){
	//buscar mail
	$db->where ("id", $id);
	$user = $db->getOne ("recuperar_clave");
	if($db->count > 0){
		$newPass = md5($logpass);
		//echo $t;
		//cambiar estado recuperar clave
		$data = array('fecha_cambio' => date('Y-m-d H:i:s'), 'estado' => 'Cambiada');
		$db->where ('id', $id);


	
		if($db->update ('recuperar_clave', $data)){
				//update password
				$data2 = array('usuPass' => $newPass);
				$db->where ('usuID', $user["usuID"]);
				$db->update ('usuarios', $data2);

				$_SESSION["burntogive"] = $user["usuID"];
				echo "ok";
		}else{
			echo "error";
		}
	}else{
		echo "error";
	}
}else{
	echo "error-pass";
}
}