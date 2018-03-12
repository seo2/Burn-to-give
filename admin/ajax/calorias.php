<?php
require_once("../_lib/config.php");
require_once("../_lib/MysqliDb.php");
require_once("pagination.class.php");

$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);

$perPage = new PerPage();

	$paginationlink = "ajax/calorias.php?page=";	
	$pagination_setting = $_GET["pagination_setting"];
					
	$page = 1;
	if(!empty($_GET["page"])) {
	$page = $_GET["page"];
	}

	$start = ($page-1)*$perPage->perpage;
	if($start < 0) $start = 0;

	$sql = "SELECT *, u.usuID as uID FROM usuarios u inner join calorias c on u.usuID = c.usuID left join paises p on u.usuPais = p.paisID ORDER BY calTS DESC ";	

	$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
	// echo $query;

	$dec = $db->rawQuery($query);

	if(empty($_GET["rowcount"])) {

	$db->join("usuarios u", "c.usuID = u.usuID", "INNER");
	
	$cnt = $db->get("calorias c", null, "count(calID) as tot");

	//print_r($cnt);

	$_GET["rowcount"] = $cnt[0]["tot"];
	}
	if($pagination_setting == "prev-next") {
		$perpageresult = $perPage->getPrevNext($_GET["rowcount"], $paginationlink,$pagination_setting);	
	} else {
		$perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink,$pagination_setting);	
	}

//("SELECT id_declaracion, id_usuario, acopio, latas, vidrio, carton, plastico, fecha_declaracion, fecha_retiro, estado_declaracion FROM lollapalooza_2018_declaraciones ORDER BY id_declaracion DESC");

	$output = '';
	foreach($dec as $k=>$v) {
	 $output .= '<tr>';
	 $output .= '<td>' . $dec[$k]["calID"] . '</td>';
	 $output .= '<td>' . $dec[$k]["usuNom"] . '</td>';
	 $output .= '<td>' . $dec[$k]["usuGen"] . '</td>';
	 $output .= '<td>' . $dec[$k]["usuEdad"] . '</td>';
	 $output .= '<td>' . $dec[$k]["paisNombre"] . '</td>';
	 $output .= '<td>' . $dec[$k]["calVal"] . '</td>';
	 $output .= '<td>' . $dec[$k]["calImg"] . '</td>';
	 $output .= '<td>' . $dec[$k]["calTS"] . '</td>';

	 $output .= '</tr>';
	}
	if(!empty($perpageresult)) {
	$htmlPaginador = '<div id="pagination">' . $perpageresult . '</div>';
	}else{
		$htmlPaginador = "";
	}
	$array = array('datos' => $output, 'paginador' => $htmlPaginador);
	echo json_encode($array);