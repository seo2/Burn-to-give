<?php include('header.php'); ?>

	<?php 
	$idUser = $_SESSION["burntogive"];

	$db->where ("usuID", $idUser);
	$user = $db->getOne ("usuarios");
if($db->count > 0){
	$usuID = $user['usuID']; 
	$usuFB = $user['usuFB']; 
	$usuNom = $user['usuNom']; 
	$usuMail = $user['usuMail']; 
	$usuPass = $user['usuPass']; 
	$usuGen = $user['usuGen']; 
	$usuFecNac = $user['usuFecNac']; 
	$usuEdad = $user['usuEdad']; 
	$usuPais = $user['usuPais']; 
	$usuTS = $user['usuTS']; 
	$usuEst = $user['usuEst'];

	$db->where("paisID", $usuPais);
	$pais = $db->getOne ("paises");
	$nomPais = $pais['paisNombre'];
}

function changeDateSp($fecha){
	$f = explode("-", $fecha);
	$dia = $f[2];
	$mes = $f[1];
	$ano = $f[0];
	

	$fecha = $dia."-".$mes."-".$ano;

	return($fecha);
}

function changeDateSp2($fecha){
	$f = explode("-", $fecha);
	$dia = $f[2];
	$mes = $f[1];
	$ano = $f[0];

	$dia = substr($dia, 0, 2);

	

	$fecha = $dia."/".$mes."/".$ano;

	return($fecha);
}
	 ?>
	<header class="fondo-celeste position-relative">
		<div class="container position-relative">


		</div>
		<img class="img-responsive center" src="assets/img/logo-ingresa.png" alt="">
		<a href="index.php" class="cerrar"><img src="assets/img/cerrar.png" alt=""></a>
	</header>

<section class="ingresa section">
	<div class="container-fluid no-padding">
		<div class="row">


				<form>
					<div class="datos fondo-degradado-naranja">
						<div class="container">
								  <div class="form-group center-block">
								  <!--   <label for="exampleInputEmail1">Email address</label> -->
								    <input type="text" class="form-control" id="nombre" placeholder="<?php echo $usuNom;?>" readonly>
								    <img class="img-responsive ico-user hidden-xs" src="assets/img/ico-user.png" alt="">
								  </div>
								    <div class="form-group center-block">
								  <!--   <label for="exampleInputEmail1">Email address</label> -->
								    <input type="email" class="form-control" id="email" placeholder="<?php echo $usuMail;?>" readonly>
								  </div>
								    <div class="form-group center-block">
								  <!--   <label for="exampleInputEmail1">Email address</label> -->
								    <input type="text" class="form-control" id="sexo" placeholder="<?php echo $usuGen;?>" readonly>
								  </div>
								    <div class="form-group center-block">
								  <!--   <label for="exampleInputEmail1">Email address</label> -->
								    <input type="text" class="form-control" id="fecha" placeholder="<?php echo changeDateSp($usuFecNac);?>" readonly>
								  </div>
								    <div class="form-group center-block">
								  <!--   <label for="exampleInputEmail1">Email address</label> -->
								    <select class="form-control" readonly>
									  <option><?php echo $nomPais;?></option>
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
								<?php
								$db->where ("usuID", $usuID);
								$stats = $db->getOne ("calorias", "sum(calVal) as cnt");
								$total = $stats['cnt'];
								if($total == ""){
									$total = 0;
								}
								$calc_comidas = round($total / 500);
								?>
								<p class="numero"><?php echo $total;?> calorías</p>
							</div>
						</div>
						<p class="equivalente">Equivalente a <?php echo $calc_comidas;?> comidas</p>
						<div class="linea-gris"> </div>
						<?php
							//last data
							
							$ultimaCal = $db->rawQuery("SELECT calTS, sum(calVal) totCal from calorias where usuID=? group by DATE_FORMAT( calTS,  '%Y%m%d' ) ORDER BY calTS Desc", Array ($usuID));
							foreach ($ultimaCal as $uc) {
							    $fecha = $uc["calTS"];
							    $calVal = $uc["totCal"];
							
							if($calVal == ""){
								$calVal = 0;
							}
							?>
						<div class="bloque clearfix">
							
							<div class="col-xs-4">
								<p class="fecha"><?php echo changeDateSp2($fecha);?>:</p>
							</div>
							<div class="col-xs-8">
								<p class="calorias"><?php echo $calVal;?> calorías quemadas</p>
							</div>
						</div>
						<?
							}
						?>
					</div> <!-- box-calorias -->
				</div>
			</div>
		</section>

</section>

<?php include('modal-calcula-calorias.php'); ?>
<?php include('footer.php'); ?>

