<?php
date_default_timezone_set('America/Santiago');

require_once('app/ajax/_lib/config.php');
require_once ('app/ajax/_lib/MysqliDb.php');

if ($_SERVER['REQUEST_METHOD']== "POST") {
$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);

$email 	= $_POST["email"]; 

$hoy = date("Y-m-d H:i:s");


// Sanitize data
function sanatize_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function validEmail($email){
// Check the formatting is correct
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
	return FALSE;
	}else{
		return TRUE;
	}
}

$error_count = 0;




//validar info

	if (empty($email)) {
		$error_count++;
	}else{
		if(!validEmail($email)){
			$error_count++;
		}
	}


	//guardar en bd
	if($error_count == 0){
		$data = Array (
				'susMail' => sanatize_input($email)
				);
		$id = $db->insert ('suscritos', $data);
		if($id){
			echo $id;
		}else{
			echo '0';
		}


	}else{
		echo '0';
	}


}
//echo "nain";
?>