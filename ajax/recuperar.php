<?php
session_start();
date_default_timezone_set('America/Santiago');

require_once '_lib/config.php';
require_once '_lib/MysqliDb.php';

$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);

if(isset($_POST["log-mail"])){
$err = 0;
$email = $_POST["log-mail"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$err++;
}

if($err == 0){
	//buscar mail
	$db->where ("usuMail", $email);
	$user = $db->getOne ("usuarios");
	if($db->count > 0){
		$usuID = $user['usuID'];
		$id_encode = base64_encode($usuID);
		//crear token
		$t = md5(uniqid(rand(), true));
		//echo $t;
		$data = array('token' => $t, 'usuID' => $usuID, 'fecha_solicitud' => date('Y-m-d H:i:s'), 'estado' => 'Solicitada');
		$id = $db->insert ('recuperar_clave', $data);
		if($id){
				$url = "token=".$t."&id_user=".$id_encode;
			    
			    if(isset($_SESSION["burntogivelang"])){
			    	if($_SESSION["burntogivelang"] == 'es'){
			    		$lang = 'es';
			    		$subject = "Recuperar contraseña burntogive.com";
			    		$msg = file_get_contents("mail/mail_recuperar.html");  
			    	}else{
			    		$lang = '';
			    		$subject = "burntogive.com password recovery";
			    		$msg = file_get_contents("mail/mail_recover.html");  
			    	}
			    }
		
			    $to 	 = $email;
				$headers = "From: Burn to give <info@burntogive.com>\r\n". 
				           "MIME-Version: 1.0" . "\r\n" . 
				           "Content-type: text/html; charset=UTF-8" . "\r\n";				
				  
				$msg = str_replace("#link", $url, $msg);
				
			    //echo $msg;
			    mail($to,$subject,$msg, $headers);
				echo $url;
		}else{
			echo "error";
		}
	}else{
		echo "error";
	}
}
}