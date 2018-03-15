<?php
session_start();
date_default_timezone_set('America/Santiago');
require_once '_lib/config.php';
require_once '_lib/MysqliDb.php';
$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);

$userID = $_POST["userID"];
$uploadOk = 0;

$data = array('calShare' => 1);
$db->where ('calID', $userID);
if ($db->update ('calorias', $data)){
	$uploadOk = $userID;
}


echo $uploadOk;