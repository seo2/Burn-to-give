<?php include('header.php'); ?>
	<?php include('main-nav.php'); ?>
	<header>
		<div class="container position-relative">
			<div class="row">
				<img class="img-responsive logo-home" src="assets/img/logo-home.png" alt="">
			</div>
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

			<div class="row">
				<span class="menu-icon" onclick="openNav()">
					<img class="img-responsive toggle-menu" src="assets/img/menu-icon.png" alt="">
				</span>
			</div>

		</div>

		<img class="img-responsive visible-sm visible-md visible-lg" src="assets/img/banner.jpg" alt="">
		<img class="img-responsive visible-xs" src="assets/img/banner-xs.jpg" alt="">

	</header>

	<h2 class="title-aporte">haz tu aporte</h2>

	<section class="aporte section fondo-degradado-naranja">

		<div class="container-fluid">

				<div class="row">
					<div class="col-m-12 text-center">
						<p class="txt1">¿cuantas calorías quemaste hoy?</p>
							<form id="formEnviarCalorias" action="ajax/save-calories.php" class="form-inline" method="post">
								<div class="form-group">
									<input type="number" class="form-control" name="numCalorias" id="numCalorias" placeholder="" required="" min="1" max="3000">
								</div>
								<img src="assets/img/flecha.png" alt="">
								<?php
								if(isset($_SESSION["burntogive"])) :?>
								<input type="hidden" name="userid" value="<?php echo $_SESSION["burntogive"];?>">
								<!--logueado -->
									<button type="submit" class="btn btn-default btn-enviar-calorias"></button>
								<?php else : ?>
									<a href="ingresa.php" class="btn btn-default btn-enviar-calorias"></a>
								<?php endif;?>
							</form>

							<p class="txt2">¿NO SABES? CALCULAR <a href="#" data-toggle="modal" data-target="#modal-calcula">AQUÍ</a> </p>
					</div>
				</div>

		</div>

	</section><!-- aporte -->
	<section class="status section">
		<div class="container">
			<?php
			
			$datos 			= $db->getOne ("datos_barra");
			
			$datoQuedan 	= $datos['datoQuedan'];
			$datoMeta 		= $datos['datoMeta'];
			$datoLlevamos 	= $datos['datoLlevamos'];
			$datoEquivale 	= $datos['datoEquivale'];
			$datoPorcentaje = $datos['datoPorcentaje'];

			?>
			<h2 class="title-status">quedan <?php echo $datoQuedan;?></h2>
			<div class="box-contador">
				<div class="range-container">
					<p class="txt-llevamos">llevamos <?php echo $datoLlevamos;?> calorías <br>
						equivalente a <?php echo $datoEquivale;?> comidas</p>
					<div class="llevamos" style="width: <?php echo $datoPorcentaje."%";?>">

						<div class="t-naranjo"></div>

					</div>
					<div class="total">
						<p class="txt-total"><?php echo $datoMeta;?> calorías</p>
						<div class="t-azul"></div>
					</div>
				</div>
			</div>
		</div>

	</section> <!-- status -->
	<section class="compra-polera section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<img class="img-responsive center-block" src="assets/img/compra-polera.jpg" alt="">
				</div>
			</div>


		</div>

	</section> <!-- compra polera -->

<?php include('modal-calcula-calorias.php'); ?>
<?php include('modal-share.php'); ?>

<?php include('footer.php'); ?>

