<?php include('header.php'); ?>

<header class="fondo-degradado-naranja position-relative">
	<div class="container position-relative">
		<div class="selector-idioma">
			<ul>
				<li>
					<a <?php if($lang=='es'){ ?>class="selected"<?php } ?>href="javascript:void(0);" data-lang="es">esp</a>
				</li>
				<li class="divisor">|</li>
				<li>
					<a <?php if($lang=='en'){ ?>class="selected"<?php } ?> href="javascript:void(0);" data-lang="en">eng</a>
				</li>
			</ul>
		</div>
	</div>
	<img class="img-responsive logo-ingresa" src="assets/img/logo-ingresa.png" alt="">
	<img class="img-responsive texto-ingresa center" src="assets/img/texto-ingresa.png" alt="">

</header>

<section class="ingresa section recuperar">
	<div class="container-fluid no-padding">
		<div class="row">
			<p class="titrecuperar"><?php if($lang=='en'){ ?>I forgot my password
<?php }else{ ?>Olvidé mi contraseña<?php } ?></p>

<p class="intruccionesrecuperar">
	<?php if($lang=='en'){ ?>Enter your registered email address 
	<?php }else{ ?>Ingresa tu email registrado<?php } ?>
</p>

			<form method="post" action="ajax/recuperar.php" id="form-recuperar" autocomplete="false">
				<div class="con-email fondo-degradado-naranja">
					<div class="container">
						<div class="form-group center-block">
						  <input type="email" class="form-control" id="email" placeholder="email" name="log-mail" required="">
						</div>
						<div class="row">
							<a href="ingresa.php" class="olvide"><?php if($lang=='en'){ ?>I remember now<?php }else{ ?>ya me acordé<?php } ?></a>
						</div>
					</div>
				</div>
				<div class="container" style="position: relative;">
					<div class="loading"><img src="assets/img/ajax-loader.gif" alt=""></div>
					<button type="submit" class="btn btn-default bt-naranjo center-block"><?php if($lang=='en'){ ?>Recover Password<?php }else{ ?>recuperar contraseña<?php } ?></button>
				</div>
			</form>
		</div>
	</div>

</section>


<?php include('footer.php'); ?>

