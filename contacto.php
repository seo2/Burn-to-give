<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
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
			<div class="row">
				<span class="menu-icon" onclick="openNav()">
					<img class="img-responsive toggle-menu" src="assets/img/menu-icon.png" alt="">
				</span>
			</div>
		</div>
		<img class="img-responsive logo-ingresa" src="assets/img/logo-ingresa.png" alt="">
		<img class="img-responsive texto-ingresa center" src="assets/img/texto-ingresa.png" alt="">
	</header>
	<section class="contacto">
		<div class="container position-relative mw">
			<img class="img-responsive bg-contacto" src="assets/img/bg-contacto.jpg" alt="">
			<div class="row">
					<div class="caja-texto-sombra">
							<h3 class="llamado tit-contacto">contacto</h3>
							<div class="padding-30 pt-0">
								<p>Si tienes alguna pregunta, sugerencia o comentario escríbenos a <br>
									<a class="texto-naranjo-bold" href="mailto:info@burntogive.com">info@burntogive.com</a>
								</p>
								<div class="pie-de-caja huincha">
									<!-- <p class="hash">#BurnToGive</p> -->
								</div>
							</div>
				</div>
			</div>
		</div>
	</section>
<?php include('footer.php'); ?>
