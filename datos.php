<?php include('header.php'); ?>
<?php
$fbid = "";
if(isset($_GET["_fbid"])){
	$fbid = $_GET["_fbid"];
}
if($fbid != ""){
	$db->where ("usuFB", $fbid);
	$user = $db->getOne ("usuarios");
	if($db->count == 1){
		$fb = true;
		$nombre = $user['usuNom']; 
		$email = $user['usuMail']; 
		$sexo	= $user['usuGen'];
	}
}else{
		$id = "";
		$nombre = ""; 
		$email = ""; 
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
							  <!--   <label for="exampleInputEmail1">Email address</label> -->
							    <input type="text" class="form-control" id="nombre" placeholder="cristian sepúlveda" required="" name="nombre" value="<?php echo $nombre;?>">
							    <img class="img-responsive ico-user hidden-xs" src="assets/img/ico-user.png" alt="">
							  </div>
							    <div class="form-group center-block">
							  <!--   <label for="exampleInputEmail1">Email address</label> -->
							    <input type="email" class="form-control" id="email" placeholder="mail@midominio.com"  required="" name="email" value="<?php echo $email;?>">
							  </div>

							  <?php if(!$fb) : ?>
 
							  <div class="form-group center-block">
							    <input type="password" class="form-control required" id="clave" placeholder="Contraseña" name="clave">
							    
							  </div>
							<?php endif; ?>

							    <div class="form-group center-block">
							 
							 <!--   <input type="text" class="form-control" id="sexo" placeholder="hombre"> -->
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
							    <label class="radio-inline"><input type="radio" name="sexo" <?php echo $check_h;?> value="HOMBRE">Hombre</label>
							    <label class="radio-inline"><input type="radio" name="sexo" value="MUJER" <?php echo $check_m;?>>Mujer</label>
							  </div>
							    <div class="form-group center-block">
							  <!--   <label for="exampleInputEmail1">Email address</label> -->
							    <input type="text" class="form-control required fecha" id="fecha" placeholder="09-11-1980" name="fechanac" >
							  </div>
							    <div class="form-group center-block">
							  <!--   <label for="exampleInputEmail1">Email address</label> -->
								<?php
								$cols = Array ("paisID", "paisNombre", "paisName");
								$paises = $db->get ("paises", null, $cols);
									    
								?>

							    <select class="form-control" name="pais" required="">
								  <option value="">País</option>
								  <?php
								  foreach ($paises as $pais) { ?>
								  <option value="<?php echo $pais['paisID']?>"><?php echo $pais['paisNombre'];?></option>
								  <?php } ?>
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

