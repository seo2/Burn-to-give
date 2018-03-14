<?php
error_reporting(E_ALL & ~E_NOTICE || ~E_WARNING);
session_start();
date_default_timezone_set('America/Santiago');

require_once("_lib/config.php");
require_once("_lib/MysqliDb.php");
require_once("functions.php");

$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);

if($_SESSION['ccid']){
	setcookie('id', $_SESSION['ccid']);
	$db->where ('usuID', $_SESSION['ccid']);
	$usuario = $db->getOne ("system_users");
	
	$_usuID			= $usuario['usuID'];
    $_usuNom		= $usuario['usuNom'];
    $_usuMail		= $usuario['usuMail'];
    $_usuTipo		= $usuario['usuTipo'];
    $_usuEmp		= $usuario['usuEmp'];

 }else{ 
 	header("Location:login.php");
}  
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Burntogive</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="dist/css/bootstrap-flat.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

	
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>