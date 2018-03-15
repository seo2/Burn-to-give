<?php
error_reporting(E_ERROR | E_PARSE);
ob_start();
session_start();
$current_page = basename($_SERVER['PHP_SELF']);	
require_once 'ajax/_lib/config.php';
require_once 'ajax/_lib/MysqliDb.php';
$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);
$ip = $_SERVER["REMOTE_ADDR"];
$lang = "";
if(!isset($_SESSION["burntogivelang"])){
	if(isset($_GET['lang'])){
		$lang = $_GET['lang'];
	}else{
		include("geoiploc.php");
		if(getCountryFromIP($ip, "code")=='CL' || 
		getCountryFromIP($ip, "code") == 'AR' || 
		getCountryFromIP($ip, "code") == 'UY' || 
		getCountryFromIP($ip, "code") == 'PY' || 
		getCountryFromIP($ip, "code") == 'BO' || 
		getCountryFromIP($ip, "code") == 'PE' || 
		getCountryFromIP($ip, "code") == 'EC' || 
		getCountryFromIP($ip, "code") == 'CO' || 
		getCountryFromIP($ip, "code") == 'VE' || 
		getCountryFromIP($ip, "code") == 'PA' || 
		getCountryFromIP($ip, "code") == 'CR' || 
		getCountryFromIP($ip, "code") == 'NI' || 
		getCountryFromIP($ip, "code") == 'HN' || 
		getCountryFromIP($ip, "code") == 'SV' || 
		getCountryFromIP($ip, "code") == 'GT' || 
		getCountryFromIP($ip, "code") == 'MX' || 
		getCountryFromIP($ip, "code") == 'ES'){
			$lang = 'es';
		}else{
			$lang = 'en';
		}
		$_SESSION["burntogivelang"] = $lang;
	}
}else{
	$lang = $_SESSION["burntogivelang"];
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Burn To Give</title>
		
		<?php if(isset($_GET["p"])) :
		$id_p = $_GET["p"];
		$db->where ("calID", $id_p);
		$user = $db->getOne ("calorias");
		
		if($db->count > 0){
			$calVal = $user["calVal"];
			$calImg = $user["calImg"];

			$rutaImg = "uploads/fotos/".$calImg;
			$ext = explode(".", $calImg);
			$Img2 = str_replace($ext[1], "png", $calImg);
			$rutaImg2 = "uploads/".$Img2;
			
		?>
		<meta property="fb:app_id" content="224892328068443"/>
		<meta property="og:url" content="http://burntogive.com/home.php?p=<?php echo $id_p;?>" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Burn to Give" />
		<meta property="og:description" content="Burn a Calorie Feed a Child" />
		<meta property="og:image" content="http://burntogive.com/fb_image.php?p=<?php echo $id_p;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image:width" content="600" />
		<meta property="og:image:height" content="600" />
		<?php }
		endif;?>
		<?php	
			if(!isset($_SESSION["burntogive"]) && $current_page != "home.php") {
				if($current_page != "ingresa.php" ) {
					if($current_page != "recuperar.php" ) {
						if($current_page != "recuperar2.php" ) {
							if($current_page != "empresas.php" ) {
								if($current_page != "contacto.php" ) {
									if($current_page != "datos.php" ) {
										header("Location:home.php");
										exit();
									}
								}
							}
						}
					}
				}
			}
		?>		
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
		<link rel="stylesheet" href="assets/css/seo2.css?v=1.1">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" type="image/png" href="assets/img/favicon.png" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115586112-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-115586112-1');
		</script>
	</head>
	<body data-lang="<?php echo $lang; ?>">
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

