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
	if($lang=='en'){
		if($user['usuGen']=='HOMBRE'){		
			$usuGen = 'MAN';
		}else{
			$usuGen = 'WOMAN';
		}
	}else{
		$usuGen = $user['usuGen']; 
	}
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

function changeDateEn2($fecha){
	$f = explode("-", $fecha);
	$dia = $f[2];
	$mes = $f[1];
	$ano = $f[0];

	$dia = substr($dia, 0, 2);

	

	$fecha = $mes."/".$dia."/".$ano;

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
				    <input type="text" class="form-control" id="nombre" placeholder="<?php echo $usuNom;?>" readonly disabled>
				    <img class="img-responsive ico-user hidden-xs" src="assets/img/ico-user.png" alt="">
				  </div>
				    <div class="form-group center-block">
				    <input type="email" class="form-control" id="email" placeholder="<?php echo $usuMail;?>" readonly disabled>
				  </div>
				    <div class="form-group center-block">
				    <input type="text" class="form-control" id="sexo" placeholder="<?php echo $usuGen;?>" readonly disabled>
				  </div>
				    <div class="form-group center-block">
						<?php if($lang=='en'){ ?>
							<?php $fechanac = changeDateEn2($usuFecNac);?>						
						<?php }else{ ?>
							<?php  $fechanac = changeDateSp2($usuFecNac);?>
						<?php } ?>
				    <input type="text" class="form-control" id="fecha" placeholder="<?php echo $fechanac;?>" readonly disabled>
				  </div>
				    <div class="form-group center-block">
					    <input type="text" class="form-control" id="pais" placeholder="<?php echo $nomPais;?>" readonly disabled>
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
						<h3>
						<?php if($lang=='en'){ ?>
							MY CALORIES DONATED						
						<?php }else{ ?>
							Mis Calorías donadas
						<?php } ?>
						</h3>
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
								
								$db->where ("usuID", $usuID);
								$db->where ("calShare", '1',  "=");
								$stats = $db->getOne ("calorias", "sum(calVal) as cnt");
								$total = $total + $stats['cnt'];
								
								
								
								
								$calc_comidas = round($total / 500,1);
								?>
								<p class="numero"><?php if($lang=='en'){  echo number_format($total); }else{ echo number_format($total,0,',','.'); } ?> <?php if($lang=='en'){ ?>calories<?php }else{ ?>calorías<?php } ?></p>
							</div>
						</div>
						<p class="equivalente">
						<?php if($lang=='en'){ ?>
							Equivalent to <?php echo $calc_comidas;?> meals  						
						<?php }else{ ?>
							Equivalente a <?php echo number_format($calc_comidas,1,',','.');?> comidas
						<?php } ?>
						</p>
						<div class="linea-gris"> </div>
						<?php
							//last data
							
							$ultimaCal = $db->rawQuery("SELECT calTS, sum(calVal) totCal from calorias where usuID=? group by DATE_FORMAT( calTS,  '%Y%m%d' ) ORDER BY calTS Desc", Array ($usuID));
							foreach ($ultimaCal as $uc) {
							    $fecha = $uc["calTS"];
							    $calVal = $uc["totCal"];
							
							
								$compartidas = 0;
								$fecha2 = substr( str_replace('-', '', $fecha),0,8);
								$sql =  "SELECT * from calorias where usuID=$usuID and DATE_FORMAT( calTS,  '%Y%m%d' )='$fecha2' and calShare = 1";
								//echo $sql;
							$ultimaCal = $db->rawQuery($sql);
							foreach ($ultimaCal as $uc) {
							    $compartidas = $compartidas + $uc["calVal"];
							}
							
							if($calVal == ""){
								$calVal = 0;
							}
							
							
							
							?>
						<div class="bloque clearfix">
							
							<div class="col-xs-4">
								<p class="fecha">
								<?php if($lang=='en'){ ?>
									<?php echo changeDateEn2($fecha);?>:						
								<?php }else{ ?>
									<?php echo changeDateSp2($fecha);?>:
								<?php } ?>
								</p>
							</div>
							<div class="col-xs-8">
								<p class="calorias"><?php if($lang=='en'){  echo number_format($calVal); }else{ echo number_format($calVal,0,',','.'); } ?> <?php if($lang=='en'){ ?>calories burned<?php }else{ ?>calorías quemadas<?php } ?><?php if($compartidas>0){ ?><br><?php if($lang=='en'){ echo number_format($compartidas); }else{ echo number_format($compartidas,0,',','.');  } ?> <?php if($lang=='en'){ ?>for sharing in social media<?php }else{ ?>por compartir en RRSS<?php } ?><?php } ?></p>
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

