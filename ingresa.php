<?php include('header.php'); ?>

	<?php // include('main-nav.php'); ?>
	<header class="fondo-degradado-naranja position-relative">
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

<section class="ingresa section">
	<div class="container-fluid no-padding">
		<div class="row">
				<div class="con-facebook fondo-celeste">
					<p>inicia sesión con
						<a href="#">
							<span class="fa-stack fa-lg">
							  <i class="fa fa-circle fa-stack-2x"></i>
							  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</p>
				</div>

				<form>
				<div class="con-email fondo-degradado-naranja">
					<div class="container">
						 <p>o con tu direccion de email</p>

							  <div class="form-group center-block">
							  <!--   <label for="exampleInputEmail1">Email address</label> -->
							    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
							  </div>
					</div>

				</div>

					<button type="submit" class="btn btn-default bt-naranjo center-block">iniciar sesión</button>
				</form>
		</div>
	</div>

</section>


<?php include('footer.php'); ?>

