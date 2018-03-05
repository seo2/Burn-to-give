<?php include('header.php'); ?>

	<?php // include('main-nav.php'); ?>
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
							<form id="formEnviarCalorias" class="form-inline">
								<div class="form-group">
									<input type="text" class="form-control" name="numCalorias" id="numCalorias" placeholder="">
								</div>
								<img src="assets/img/flecha.png" alt="">
									<button type="submit" class="btn btn-default btn-enviar-calorias"></button>
							</form>

							<p class="txt2">¿NO SABES? CALCULAR <a href="#" data-toggle="modal" data-target="#modal-calcula">AQUÍ</a> </p>
					</div>
				</div>

		</div>

	</section><!-- aporte -->
	<section class="status section">
		<div class="container">
			<h2 class="title-status">quedan 18 dÍas</h2>
			<div class="box-contador">
				<div class="range-container">
					<p class="txt-llevamos">llevamos 7.6 MM calorías <br>
						equivalente a 15.200 comidas</p>
					<div class="llevamos">

						<div class="t-naranjo"></div>

					</div>
					<div class="total">
						<p class="txt-total">30MM calorias</p>
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
<?php include('footer.php'); ?>

