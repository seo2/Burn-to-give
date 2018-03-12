<?php
error_reporting(E_ALL & ~E_NOTICE || ~E_WARNING);

session_start();
require_once("_lib/config.php");
require_once("_lib/MysqliDb.php");

$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);

if($_SESSION['ccid']){

}else{ 
 	header("Location:login.php");
}


$db2 = new mysqli(DBHOST, DBUSER, DBPASS);
mysqli_select_db($db2, DBNAME); 

$sql = "SELECT u.usuID, c.calID, u.usuNom, u.usuMail, u.usuGen, u.usuFecNac, u.usuEdad, p.paisNombre, c.calVal, c.calImg, c.calTS FROM usuarios u inner join calorias c on u.usuID = c.usuID left join paises p on u.usuPais = p.paisID ORDER BY calTS DESC"; 
$setRec = mysqli_query($db2, $sql); 
$columnHeader = ''; 
$columnHeader = "IdUsuario" . "\t" . "IdCaloria" . "\t" . "Nombre" . "\t"; 
$columnHeader.= "Email" . "\t" . "Genero" . "\t" . "FechaNac" . "\t"; 
$columnHeader.= "Edad" . "\t" . "Pais" . "\t" . "Calorias" . "\t"; 
$columnHeader.= "Imagen" . "\t" . "Fecha" . "\t";

$setData = ''; 
while ($rec = mysqli_fetch_row($setRec)) { 
$rowData = ''; 
foreach ($rec as $value) { 
$value = '"' . $value . '"' . "\t"; 
$rowData .= $value; 
} 
$setData .= trim($rowData) . "\n"; 
} 
header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=calorias.xls"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 
echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
?>