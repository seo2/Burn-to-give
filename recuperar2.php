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
			<p class="titrecuperar"><?php if($lang=='en'){ ?>Type your new password<?php }else{ ?>ingresa tu nueva contraseña<?php } ?></p>

			<form method="post" action="ajax/recuperar2.php" id="form-recuperar2" autocomplete="false">
				<div class="con-email fondo-degradado-naranja">
					<div class="container">
						<div class="form-group center-block">
						    <input type="password" class="form-control" id="pass" placeholder="<?php if($lang=='en'){ ?>New Password<?php }else{ ?>Nueva Contraseña<?php } ?>" name="log-pass" required="">
						</div>
						<div class="form-group center-block">
						    <input type="password" class="form-control" id="pass2" placeholder="<?php if($lang=='en'){ ?>Repeat Password<?php }else{ ?>Repita la Contraseña<?php } ?>" name="log-pass2" required="">
						</div>
					</div>
				</div>
				<div class="container">
					<button type="submit" class="btn btn-default bt-naranjo center-block"><?php if($lang=='en'){ ?>Change Password<?php }else{ ?>Cambiar contraseña<?php } ?></button>
				</div>
			</form>
		</div>
	</div>

</section>


<?php include('footer.php'); ?>

