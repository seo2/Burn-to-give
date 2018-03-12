<?php include('header.php'); ?>
<?php
	$id_p = $_GET["_p"];

//echo $id_p;

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

	}else{
		//echo "empty";
	}
?>

	<?php // include('main-nav.php'); ?>
	<header class="position-relative fondo-degradado-naranja ">
		<img class="img-responsive logo-ingresa" src="assets/img/logo-ingresa.png" alt="">
		<img class="img-responsive texto-ingresa center" src="assets/img/texto-ingresa.png" alt="">
	</header>

<section class="share">
	<div class="container-fluid no-padding">
		<a class="back" href="index.php">volver</a>
		<div class="row">
			<div class="bloque-imagen text-center">
				<div class="img-wrap">
					<!--<div class="box-total-calorias">
						<p>acabo de donar</p>
						<p class="num-calorias"><?php echo $calVal;?></p>
						<p class="sub-text">calorías</p>
					</div>-->
					<!--<img class="img-responsive img-barra" src="assets/img/barra-post.png" alt="">-->
					<img class="img-responsive center-block img-post" src="<?php echo $rutaImg2;?>" alt="" id="img-share" data-id="<?php echo $id_p;?>">
				</div>
			</div>
			
			<div class="bloque-texto fondo-celeste" id="sharepaso1">
				<div class="container text-center">
				 	<h2>COMPARTIR EN</h2>
				 	<a href="javascript:void(0);" onclick="sharefbimage();" class="share-fb">
					 	<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span>
				 	</a>
				 	<a href="javascript:void(0);"  class="share-ig">
					 	<span class="fa-stack fa-lg">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
						</span>
				 	</a>
					<p class="recuerda">RECUERDA USAR <span class="txt-amarillo">#BURNTOGIVE</span></p>
				</div>
			</div>

			<div class="bloque-texto  fondo-celeste hide" id="sharepaso2">
				<div class="container">
				 	<p>guarda esta imagen en tu carrete y luego súbela directamente desde instagram</p>
					<p class="recuerda">RECUERDA USAR <span class="txt-amarillo">#BURNTOGIVE</span></p>
				</div>
				<a href="<?php echo $rutaImg2;?>" class="btn btn-default bt-naranjo center-block fondo-degradado-naranja" download="<?php echo $rutaImg2;?>">guardar</a>

			</div>
		</div>


	</div>
</section>


<?php include('footer.php'); ?>

