<?php
require_once("../_lib/config.php");
require_once("../_lib/MysqliDb.php");

$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);

if(isset($_POST)){
	$datoID = explode("_", $_POST["id"]);
	$datoVal = $_POST["value"];


	$data = Array (
	$datoID[0] => $datoVal
	);

	$db->where ('datoID', $datoID[1]);
	if ($db->update ('datos_barra', $data))
	    echo $datoVal;
	else
	    echo 'update failed: ' . $db->getLastError();
}