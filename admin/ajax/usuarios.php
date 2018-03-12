<?php
require_once("../_lib/config.php");
require_once("../_lib/MysqliDb.php");
require_once("pagination.class.php");

$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);

$perPage = new PerPage();

	$paginationlink = "ajax/usuarios.php?page=";	
	$pagination_setting = $_GET["pagination_setting"];
					
	$page = 1;
	if(!empty($_GET["page"])) {
	$page = $_GET["page"];
	}

	$start = ($page-1)*$perPage->perpage;
	if($start < 0) $start = 0;

	$sql = "SELECT * FROM usuarios u left join paises p on u.usuPais = p.paisID ORDER BY usuID DESC ";	

	$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
	// echo $query;

	$dec = $db->rawQuery($query);

	if(empty($_GET["rowcount"])) {

	$db->join("paises p", "u.usuPais = p.paisID", "LEFT");
	
	$cnt = $db->get("usuarios u", null, "count(usuID) as tot");

	//print_r($cnt);

	$_GET["rowcount"] = $cnt[0]["tot"];
	}
	if($pagination_setting == "prev-next") {
		$perpageresult = $perPage->getPrevNext($_GET["rowcount"], $paginationlink,$pagination_setting);	
	} else {
		$perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink,$pagination_setting);	
	}

//`usuID`, `usuFB`, `usuNom`, `usuMail`, `usuPass`, `usuGen`, `usuFecNac`, `usuEdad`, `usuPais`, `usuTS`, `usuEst`

	$output = '';
	foreach($dec as $k=>$v) {
	 $output .= '<tr>';
	 $output .= '<td>' . $dec[$k]["usuID"] . '</td>';
	 $output .= '<td>' . $dec[$k]["usuFB"] . '</td>';
	 $output .= '<td>' . $dec[$k]["usuNom"] . '</td>';
	 $output .= '<td>' . $dec[$k]["usuMail"] . '</td>';
	 $output .= '<td>' . $dec[$k]["usuGen"] . '</td>';
	 $output .= '<td>' . $dec[$k]["usuFecNac"] . '</td>';
	 $output .= '<td>' . $dec[$k]["usuEdad"] . '</td>';
	 $output .= '<td>' . $dec[$k]["paisNombre"] . '</td>';
	 $output .= '<td>' . $dec[$k]["usuTS"] . '</td>';
	 $output .= '<td>' . $dec[$k]["usuEst"] . '</td>';
	 

	 $output .= '</tr>';
	}
	if(!empty($perpageresult)) {
	$htmlPaginador = '<div id="pagination">' . $perpageresult . '</div>';
	}else{
		$htmlPaginador = "";
	}
	$array = array('datos' => $output, 'paginador' => $htmlPaginador);
	echo json_encode($array);