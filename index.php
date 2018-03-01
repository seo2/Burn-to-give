<?php include('header.php'); ?>
	<header class="position-relative">
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

							<p class="txt2">¿NO SABES? CALCULAR <a href="#">AQUÍ</a> </p>
					</div>
				</div>

		</div>

	</section><!-- aporte -->
	<section class="status section">
		<div class="container">
			<h2 class="title-status">quedan 18 dÍas</h2>
			<div class="box-contador">
				<p>30MM calorias</p>
				<p>llevamos 7.6 MM calorías <br>
				equivalente a 15.200 comidas</p>
			</div>
		</div>

	</section> <!-- status -->
	<section class="compra-polera section">
		<div class="container">
			<img class="img-responsive" src="assets/img/compra-polera.jpg" alt="">
		</div>

	</section> <!-- compra polera -->


<?php include('footer.php'); ?>
