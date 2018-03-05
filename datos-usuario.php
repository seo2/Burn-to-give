<?php include('header.php'); ?>

	<?php // include('main-nav.php'); ?>
	<header class="fondo-celeste position-relative">
		<div class="container position-relative">


		</div>
		<img class="img-responsive center" src="assets/img/logo-ingresa.png" alt="">
		<a href="" class="cerrar"><img src="assets/img/cerrar.png" alt=""></a>
	</header>

<section class="ingresa section">
	<div class="container-fluid no-padding">
		<div class="row">


				<form>
					<div class="datos fondo-degradado-naranja">
						<div class="container">
								  <div class="form-group center-block">
								  <!--   <label for="exampleInputEmail1">Email address</label> -->
								    <input type="text" class="form-control" id="nombre" placeholder="cristian sepúlveda">
								    <img class="img-responsive ico-user hidden-xs" src="assets/img/ico-user.png" alt="">
								  </div>
								    <div class="form-group center-block">
								  <!--   <label for="exampleInputEmail1">Email address</label> -->
								    <input type="email" class="form-control" id="email" placeholder="cristian@modosantiago.com">
								  </div>
								    <div class="form-group center-block">
								  <!--   <label for="exampleInputEmail1">Email address</label> -->
								    <input type="text" class="form-control" id="sexo" placeholder="hombre">
								  </div>
								    <div class="form-group center-block">
								  <!--   <label for="exampleInputEmail1">Email address</label> -->
								    <input type="text" class="form-control" id="fecha" placeholder="09-11-1980">
								  </div>
								    <div class="form-group center-block">
								  <!--   <label for="exampleInputEmail1">Email address</label> -->
								    <select class="form-control">
									  <option>CHILE</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									</select>
								  </div>
						</div>

					</div>
				</form>

		</div>
	</div>
	<section class="datos-calorias">
			<div class="container">
				<div class="row">
					<div class="box-calorias">
						<h3>Mis Calorías donadas</h3>
						<div class="linea-gris"> </div>
						<div class="box-total clearfix">
							<div class="col-xs-4">
								<p class="total">Total:</p>
							</div>
							<div class="col-xs-8">
								<p class="numero">2.000 calorías</p>
							</div>
						</div>
						<p class="equivalente">Equivalente a 4 comidas</p>
						<div class="linea-gris"> </div>
						<div class="bloque clearfix">
							<div class="col-xs-4">
								<p class="fecha">17/02/18:</p>
							</div>
							<div class="col-xs-8">
								<p class="calorias">520 calorías quemadas</p>
							</div>
						</div>
					</div> <!-- box-calorias -->
				</div>
			</div>
		</section>

</section>

<?php include('modal-calcula-calorias.php'); ?>
<?php include('footer.php'); ?>

