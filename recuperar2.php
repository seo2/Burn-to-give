<?php include('header.php'); ?>
<?php
$error = false;
//buscar el token y el id 
if(isset($_GET['token'])){
	$token = $_GET['token'];
	$id_user = base64_decode($_GET['id_user']);

	//echo $id_user;

	$db->where ("token", $token);
	$db->where ("usuID", $id_user);
	$user = $db->getOne ("recuperar_clave");

	//print_r($user);

	if($user['id'] >= 1){
		$estado = $user['estado'];
		if($estado == 'Cambiada'){
			$error = true;
			$mssg_error = "Ya cambiaste tu contraseña con este token.";
			$mssg_error_en = "You already changed your password with this token.";
		}
	}else{
		$error = true;
		$mssg_error = "Link no es válido o ha expirado";
		$mssg_error_en = "Link is not valid or has expired";
	}
}else{
	$error = true;
	$mssg_error = "Ha ocurrido un error";
	$mssg_error_en = "An error has occurred";
}

?>
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
			<?php if(!$error) :?>
			<p class="titrecuperar"><?php if($lang=='en'){ ?>Enter your new password<?php }else{ ?>Ingresa tu nueva contraseña<?php } ?></p>

			<form method="post" action="ajax/recuperar2.php" id="form-recuperar2" autocomplete="false">
				<div class="con-email fondo-degradado-naranja">
					<div class="container">
						<input type="hidden" name="id" value="<?php echo $user['id'];?>">
						<div class="form-group center-block">
						    <input type="password" class="form-control" id="pass" placeholder="<?php if($lang=='en'){ ?>New Password<?php }else{ ?>Nueva Contraseña<?php } ?>" name="log-pass" required="">
						</div>
						<div class="form-group center-block">
						    <input type="password" class="form-control" id="pass2" placeholder="<?php if($lang=='en'){ ?>Repeat Password<?php }else{ ?>Repita la Contraseña<?php } ?>" name="log-pass2" required="">
						</div>
					</div>
				</div>
				<div class="container">
					<button type="submit" class="btn btn-default bt-naranjo center-block"><?php if($lang=='en'){ ?>Done<?php }else{ ?>Finalizar<?php } ?></button>
				</div>
			</form>
		<?php else : ?>
			<div class="container">
			<p class="titrecuperar"><?php if($lang=='en'){ ?>An error has occurred<?php }else{ ?>Ha ocurrido un error<?php } ?></p>
			<div class="alert alert-danger fade in alert-dismissible show">
			<?php if($lang=='en') : ?>
				<?php echo $mssg_error_en;?>
			<?php else : ?>	
			  <?php echo $mssg_error;?>
			<?php endif;?>
			
			</div></div>
		<?php endif; ?>
		</div>
	</div>

</section>


<?php include('footer.php'); ?>

