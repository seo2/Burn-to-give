<?php include('header.php'); ?>
<?php
$fbid = "";
if(isset($_GET["_fbid"])){
	$fbid = $_GET["_fbid"];
}

if($fbid != ""){
/*
	$db->where ("usuFB", $fbid);
	$user = $db->getOne ("usuarios");
	if($db->count == 1){
*/
		$fb = true;
		$nombre = $_SESSION["burntogiveNom"]; 
		$email 	= $_SESSION["burntogiveMail"]; 
		$sexo	= $_SESSION["burntogiveSex"] ;
/* 	} */
}else{
		$id 	= "";
		$nombre = ""; 
		$email 	= ""; 
		$sexo	= "";
}
?>
	<?php // include('main-nav.php'); ?>
	<header class="fondo-celeste position-relative">
		<div class="container position-relative">
		</div>
		<img class="img-responsive center" src="assets/img/logo-ingresa.png" alt="">
		<a href="ingresa.php" class="cerrar"><img src="assets/img/cerrar.png" alt=""></a>
	</header>

<section class="ingresa section">
	<div class="container-fluid no-padding">
		<div class="row">
			<form method="post" action="ajax/save-user.php" id="form-register">
				<?php if($fb) : ?>
					<input type="hidden" name="fbid" value="<?php echo $fbid;?>">
				<?php endif; ?>	
				<div class="datos fondo-degradado-naranja">
					<div class="container">
						<div class="form-group center-block">
						    <input type="text" class="form-control" id="nombre" placeholder="<?php if($lang=='en'){ echo "What’s your name?";  }else{ echo "Nombre y Apellido"; } ?>" required="" name="nombre" value="<?php echo $nombre;?>" readonly>
						    <img class="img-responsive ico-user hidden-xs" src="assets/img/ico-user.png" alt="">
						</div>
						<div class="form-group center-block">
						    <input type="email" class="form-control" id="email" placeholder="<?php if($lang=='en'){ ?>Please enter your email<?php }else{ ?>Por favor ingresa tu email<?php } ?>"  required="" name="email" value="<?php echo $email;?>" readonly>
						</div>
						<div class="form-group center-block">
					<?php 
						if($sexo != ""){
							if($sexo == "HOMBRE"){
								$check_h = "checked";
							}elseif($sexo == "MUJER"){
								$check_m = "checked";
							}else{
								$check_h = "checked";
							}
						}else{
							$check_h = "checked";
						}
					?>
						    <label class="radio-inline"><input type="radio" name="sexo" <?php echo $check_h;?> value="HOMBRE"><?php if($lang=='en'){ ?>Male<?php }else{ ?>Hombre<?php } ?></label>
						    <label class="radio-inline"><input type="radio" name="sexo" value="MUJER" <?php echo $check_m;?>><?php if($lang=='en'){ ?>Female<?php }else{ ?>Mujer<?php } ?></label>
						</div>
						<div class="form-group center-block">
						    <input type="text" class="form-control required fecha" id="fecha" placeholder="<?php if($lang=='en'){ ?>Birthday<?php }else{ ?>Fecha de Nacimiento<?php } ?>" name="fechanac" data-msg="<?php if($lang=='en'){ ?>This field is required<?php }else{ ?>Campo obligatorio<?php } ?>">
						</div>
						<div class="form-group center-block">
						<?php
							$cols = Array ("paisID", "paisNombre", "paisName");
							$paises = $db->get ("paises", null, $cols);								    
						?>
							<select class="form-control" name="pais" required="" data-msg="<?php if($lang=='en'){ ?>This field is required<?php }else{ ?>Campo obligatorio<?php } ?>">
								<option value=""><?php if($lang=='en'){ echo "Country";  }else{ echo "País"; } ?></option>
								<?php
									foreach ($paises as $pais) { ?>
								<option value="<?php echo $pais['paisID']?>"><?php if($lang=='en'){ echo $pais['paisName'];  }else{ echo $pais['paisNombre']; } ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="container">
					<p class="text-center inicia politicas">
					<?php if($lang=='en'){ ?>
					By registering, using Facebook or directly, you accept the <a href="pdf/terms.pdf" target="_blank">Terms and Conditions</a> and the <a href="pdf/privacy.pdf" target="_blank">Privacy Policy</a> of Burn to Give.
					<?php }else{ ?>
					Al Registrarte, usando Facebook o directamente, aceptas los <a href="pdf/terminos.pdf" target="_blank">Términos y Condiciones</a> y la <a href="pdf/privacidad.pdf" target="_blank">Política de Privacidad</a> de Burn to Give.
					<?php } ?> </p>
					<button type="submit" class="btn btn-default bt-naranjo center-block"><?php if($lang=='en'){ ?>Create Account<?php }else{ ?>CREAR CUENTA<?php } ?></button>
				</div>
			</form>
		</div>
	</div>
</section>

<?php include('modal-calcula-calorias.php'); ?>
<?php include('footer.php'); ?>

