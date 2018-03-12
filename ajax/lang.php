<?php
	session_start();
	$lang = $_POST["lang"];
	$_SESSION["burntogivelang"] = $lang;
	echo "ok";
?>