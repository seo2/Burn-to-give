<?php
session_start();
require_once '_lib/config.php';
require_once '_lib/MysqliDb.php';
$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);

if(isset($_POST["log-mail"])){
$err = 0;
$email = $_POST["log-mail"];
$clave = $_POST["log-pass"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$err++;
}
if($clave == ""){
	$err++;
}

if($err == 0){
	$db->where ("usuMail", $email);
	$user = $db->getOne ("usuarios");
	if($db->count > 0){
		//loguear
		$clave = md5($clave);
		$usuPass = $user['usuPass'];
		if($usuPass == $clave){
			$_SESSION["burntogive"] = $user["usuID"];
			echo "ok";
		}else{
			echo "error";
		}

	}else{
		echo "error";
	}
}

}else{
	echo "error";
}
?>