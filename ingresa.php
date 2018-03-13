<?php include('header.php'); ?>

	<?php // include('main-nav.php'); ?>
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

<section class="ingresa section">
	<div class="container-fluid no-padding">
		<div class="row">
				<div class="con-facebook fondo-celeste">
					<p>
						<a href="javascript:void(0);" class="login-fb" onclick="myFacebookLogin()">
							<?php if($lang=='en'){ ?>Sign in with<?php }else{ ?>inicia sesión con<?php } ?>  
							<span class="fa-stack fa-lg">
							  <i class="fa fa-circle fa-stack-2x"></i>
							  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</p>
				</div>

				<form method="post" action="ajax/login.php" id="form-login" autocomplete="false">
					<div class="con-email fondo-degradado-naranja">
						<div class="container">
							<p><?php if($lang=='en'){ ?>Or with your email address<?php }else{ ?>o con los datos de tu cuenta<?php } ?></p>
							<div class="form-group center-block">
							  <input type="email" class="form-control" id="email" placeholder="email" name="log-mail" required="">
							</div>
							<div class="form-group center-block">
							    <input type="password" class="form-control" id="pass" placeholder="<?php if($lang=='en'){ ?>Password<?php }else{ ?>Contraseña<?php } ?>" name="log-pass" required="">
							</div>
						</div>
					</div>
					<div class="container">
						<button type="submit" class="btn btn-default bt-naranjo center-block"><?php if($lang=='en'){ ?>Sign in<?php }else{ ?>iniciar sesión<?php } ?></button>
					</div>
				</form>

<!-- 				<a href="datos.php">Crear Cuenta</a> -->
		</div>
	</div>

</section>


<?php include('footer.php'); ?>

