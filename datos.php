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
								  <option>País</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							  </div>
					</div>

				</div>

					<button type="submit" class="btn btn-default bt-naranjo center-block">CREAR CUENTA</button>
				</form>
		</div>
	</div>

</section>

<?php include('modal-calcula-calorias.php'); ?>
<?php include('footer.php'); ?>

