<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
	<header>
		<div class="container position-relative">
			<div class="row">
				<img class="img-responsive logo-home" src="assets/img/logo-home.png" alt="">
			</div>
			<div class="selector-idioma">
				<ul style="top: 10px;">
					<li>
						<a <?php if($lang=='es'){ ?>class="selected"<?php } ?>href="javascript:void(0);" data-lang="es">esp</a>
					</li>
					<li class="divisor">|</li>
					<li>
						<a <?php if($lang=='en'){ ?>class="selected"<?php } ?> href="javascript:void(0);" data-lang="en">eng</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<span class="menu-icon" onclick="openNav()">
					<img class="img-responsive toggle-menu" src="assets/img/menu-icon.png" alt="">
				</span>
			</div>

		</div>

		<img class="img-responsive visible-sm visible-md visible-lg" src="assets/img/banner.jpg" alt="">
		<img class="img-responsive visible-xs" src="assets/img/banner-xs.jpg" alt="">

	</header>

	<h2 class="title-aporte"><?php if($lang=='en'){ ?>MAKE YOUR DONATION<?php }else{ ?>haz tu aporte<?php } ?></h2>

	<section class="aporte section fondo-degradado-naranja">

		<div class="container-fluid">
			<div class="row">
				<div class="col-m-12 text-center">
					<p class="txt1"><?php if($lang=='en'){ ?>HOW MANY CALORIES DID YOU BURN TODAY?<?php }else{ ?>¿cúantas calorías quemaste hoy?<?php } ?></p>
					<form id="formEnviarCalorias" action="ajax/save-calories.php" class="form-inline" method="post">
						<div class="form-group">
							<input type="number" class="form-control" name="numCalorias" id="numCalorias" placeholder="" required="" min="1" max="3000" data-msg="<?php if($lang=='en'){ ?>Log your burned calories here<?php }else{ ?>Ingresa aquí tus calorías quemadas<?php } ?>">
						</div>
						<div id="flechita"></div>
<!-- 						<img src="assets/img/flecha.png" alt=""> -->
						<?php
						if(isset($_SESSION["burntogive"])) :?>
						<!--logueado -->
						<button type="submit" class="btn btn-default btn-enviar-calorias<?php if($lang=='en'){ ?>-eng<?php } ?>"></button>
						<input type="hidden" name="userid" value="<?php echo $_SESSION["burntogive"];?>">
						<?php else : ?>
							<a href="ingresa.php" class="btn btn-default btn-enviar-calorias<?php if($lang=='en'){ ?>-eng<?php } ?>"></a>
						<?php endif;?>
					</form>
					<p class="txt2"><?php if($lang=='en'){ ?>Don’t know? Calculate <?php }else{ ?> ¿NO SABES? CALCULAR <?php } ?><a href="#" data-toggle="modal" data-target="#modal-calcula"><?php if($lang=='en'){ ?>here<?php }else{ ?>AQUÍ<?php } ?></a> </p>
				</div>
			</div>
		</div>

	</section><!-- aporte -->
	<section class="status section">
		<div class="container">
			<?php
				$datos 			= $db->getOne ("datos_barra");
				$datoQuedan 	= $datos['datoQuedan'];
				$datoMeta 		= $datos['datoMeta'];
				$datoLlevamos 	= $datos['datoLlevamos'];
				$datoEquivale 	= $datos['datoEquivale'];
				$datoPorcentaje = $datos['datoPorcentaje'];
				$cdate = mktime(0, 0, 0, 04, 16, 2018, 0);
				$today = time();
				$difference = $cdate - $today;
				if ($difference < 0) { $difference = 0; }
				//echo "There are ". floor($difference/60/60/24)." days remaining";
			?>
			<h2 class="title-status"><?php if($lang=='en'){ ?><?php }else{ ?>quedan<?php } ?> <?php echo floor($difference/60/60/24);?> <?php if($lang=='en'){ ?>days left<?php }else{ ?>Días<?php } ?></h2>
			<div class="box-contador">
				<div class="range-container">
					<p class="txt-llevamos"><?php if($lang=='en'){ ?>WE’VE REACHED<?php }else{ ?>llevamos<?php } ?> <?php echo $datoLlevamos;?> <?php if($lang=='en'){ ?>calories<?php }else{ ?>calorías<?php } ?> <br>
						<?php if($lang=='en'){ ?>NUTRITION FOR <?php echo $datoEquivale;?> KIDS<?php }else{ ?>equivalente a <?php echo $datoEquivale;?> comidas<?php } ?>
						</p>
					<div class="llevamos" style="width: <?php echo $datoPorcentaje."%";?>">
						<div class="t-naranjo"></div>
					</div>
					<div class="total">
						<p class="txt-total"><?php echo $datoMeta;?> <?php if($lang=='en'){ ?>calories<?php }else{ ?>calorías<?php } ?></p>
						<div class="t-azul"></div>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- status -->
	<?php if($lang=='es'){ ?>
	<section class="compra-polera section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<img class="img-responsive center-block" src="assets/img/compra-polera.jpg" alt="">
				</div>
			</div>
		</div>
	</section> <!-- compra polera -->
	<?php } ?>
<?php include('modal-calcula-calorias.php'); ?>
<?php include('footer.php'); ?>

