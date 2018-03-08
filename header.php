<?php
session_start();
$current_page = basename($_SERVER['PHP_SELF']);
//echo $current_page;

if(!isset($_SESSION["burntogive"]) && $current_page != "ingresa.php") {
	header("Location:ingresa.php");
	exit();
}
require_once 'ajax/_lib/config.php';
require_once 'ajax/_lib/MysqliDb.php';
$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<?php if(isset($_GET["_p"])) : 
		$id_p = $_GET["_p"];
		$db->where ("calID", $id_p);
		$user = $db->getOne ("calorias");
		//echo "Last executed query was ". $db->getLastQuery();

		if($db->count > 0){
			$calVal = $user["calVal"];
			$calImg = $user["calImg"];

			$rutaImg = "uploads/fotos/".$calImg;
			$ext = explode(".", $calImg);
			$Img2 = str_replace($ext[1], "png", $calImg);
			$rutaImg2 = "uploads/".$Img2;
		?>
		<meta property="fb:app_id" content="224892328068443"/>
		<meta property="og:url" content="http://burntogive.com/app/?_p=<?php echo $id_p;?>" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Burn to Give" />
		<meta property="og:description" content="Burn a Calorie Feed a Child" />
		<meta property="og:image" content="http://burntogive.com/app/<?php echo $rutaImg2;?>" />
		<meta property="og:image:type" content="image/png" /> 
		<meta property="og:image:width" content="600" /> 
		<meta property="og:image:height" content="600" />
		<?php } 
		endif;?>
		<title>Burn To Give</title>

		<!-- Bootstrap -->
		<!-- Latest compiled and minified CSS -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800i" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/fonts.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="assets/css/custom.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" type="image/png" href="assets/img/logo.png" />
		

	</head>
	<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '224892328068443',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.12'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/es_LA/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!--  <a href="javascript:void(0);" id="return-to-top">
	      	<i class="fa fa-chevron-up" aria-hidden="true"></i>
</a>
 -->

