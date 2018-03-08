<?php
date_default_timezone_set('America/Santiago');
require_once '_lib/config.php';
require_once '_lib/MysqliDb.php';
$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);

$maximoDiario = 3000;

$numCalorias = $_POST["numCalorias"];
$userid = $_POST["userid"];
$hoy = date("Y-m-d H:i:s");
$today = date("Y-m-d");



if($userid != ""){
	$total = 0;
	$totalDiario = 0;
	//sacar total de calorias diarias del usuario
	$query = "SELECT sum(calVal) as TotalCal FROM  `calorias`  WHERE DATE(  `calTS` ) =  '".$today."' AND usuID = ".$userid;

	$result = $db->rawQuery($query);
	if($db->count > 0) {
		foreach ($result as $rs) {
			$total = $rs["TotalCal"];
		}
	}

	if($total > 0){
		$totalDiario = $numCalorias + $total;
	}else{
		$totalDiario = $numCalorias;
	}

	if($totalDiario > 3000){
		echo "0";
	}else{

	$data = array(
			'usuID' => $userid, 
			'calVal' => $numCalorias,
			'calTS' => $hoy
		);
		$lastInsertId = "id";
		$id = $db->insert ('calorias', $data);
		if($id)
			echo $id;
	}

}