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
		<div class="container position-relative">

			<div class="selector-idioma">
				<ul>
					<li>
						<a class="selected" href="">esp</a>
					</li>
					<li class="divisor">|</li>
					<li>
						<a href="">eng</a>
					</li>
				</ul>
			</div>
		</div>
		<img class="img-responsive logo-ingresa" src="assets/img/logo-ingresa.png" alt="">
		<img class="img-responsive texto-ingresa center" src="assets/img/texto-ingresa.png" alt="">

	</header>

<section class="share">
	<div class="container-fluid no-padding">

		<div class="row">
			<div class="bloque-imagen text-center">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
							<a class="back" href="index.php">volver</a>
							</div>
						</div>
					</div>
					<div class="img-wrap">
						<!--<div class="box-total-calorias">
							<p>acabo de donar</p>
							<p class="num-calorias"><?php echo $calVal;?></p>
							<p class="sub-text">calorías</p>
						</div>-->
						<!--<img class="img-responsive img-barra" src="assets/img/barra-post.png" alt="">-->
						<img class="img-responsive center-block img-post" src="<?php echo $rutaImg2;?>" alt="" id="img-share" data-id="<?php echo $id_p;?>">
						<button class="btn btn-info" onclick="sharefbimage();">Compartir FB</button>
					</div>

			</div>


			<div class="bloque-texto  fondo-celeste">
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

