<!-- Modal -->
<div class="modal fade" id="modal-calcula" tabindex="-1" role="dialog" aria-labelledby="calcula-calorias">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick=" gtag('event', 'Botón', {  'event_category': 'Cerrar','event_label': 'Calcular' });">
        	<img src="assets/img/cerrar-modal.png" alt="">
        </button>
        <img src="assets/img/logo-b2g-azul.png" class="logoazul">
       <!--  <h4 class="modal-title" id="calcula-calorias">Modal title</h4> -->
      </div>
      <div class="modal-body">
        <h2><?php if($lang=='en'){ ?>calculate your calories<?php }else{ ?>calcula tus calorías<?php } ?></h2>

        <form id="formCalculaCalorias" class="form-inline">
        	<div class="row">
				<div class="calculadora fondo-celeste clearfix">
					<div class="igual hidden-xs"> = </div>
					<div class="col-xs-2 col-xs-offset-1 col-md-4 text-center pl0 pr0">
		        		<div class="bloque-blanco center-block">
		        			<div class="icono center">
		        				<img class="img-responsive" src="assets/img/iconos/ico-correr.png" alt="" id="icono-activo">
		        			</div>
		        		</div>
		        		<p class="deporte">running</p>
		        	</div>
		        	<div class="col-xs-2 col-xs-offset-2 col-md-4 text-center pl0 pr0">
		        		<div class="form-group">
			        		<div class="bloque-blanco center-block">
								<input type="number" class="form-control" name="minutos" id="minutos" placeholder="" required="">
			        		</div>
							<p>min</p>
						</div>
		        	</div>
		        	<div class="col-xs-2 text-center visible-xs">
						
		        	</div>
		        	<div class="col-xs-2 col-md-4 text-center pl0 pr0">
		        		<div class="form-group">
			        		<div class="bloque-blanco center-block">
				        		<div class="igual visible-xs"> = </div>
								<input type="text" class="form-control" name="calCalorias" id="calCalorias" placeholder="" readonly="">
			        		</div>
							<p><?php if($lang=='en'){ ?>calories<?php }else{ ?>calorías<?php } ?>*</p>
						</div>
		        	</div>
		        </div>
        	</div>
			<h3><?php if($lang=='en'){ ?>CHOOSE YOUR SPORT<?php }else{ ?>selecciona tu deporte<?php } ?></h3>
			<div class="slider-wrapper">
				<div class="slider-iconos owl-carousel">
					<div class="item"
						<a href="javascript:void(0);" id="3" onClick="calcular_calorias(this.id); gtag('event', 'Botón', {  'event_category': 'Bici','event_label': 'Calcular' });"><img src="assets/img/iconos/bici.png"></a>
					</div>
					<div class="item">
						<a href="javascript:void(0);" id="13" onClick="calcular_calorias(this.id); gtag('event', 'Botón', {  'event_category': 'Otros','event_label': 'Calcular' });"><img src="assets/img/iconos/boxeo.png?v=2"></a>
					</div>
					<div class="item">
						<a href="javascript:void(0);" id="2"  onClick="calcular_calorias(this.id); gtag('event', 'Botón', {  'event_category': 'Correr','event_label': 'Calcular' });"><img src="assets/img/iconos/correr.png"></a>
					</div>
					<div class="item">
						<a href="javascript:void(0);" id="1"  onClick="calcular_calorias(this.id); gtag('event', 'Botón', {  'event_category': 'Futbol','event_label': 'Calcular' });"><img src="assets/img/iconos/futbol.png"></a>
					</div>
					<div class="item">
						<a href="javascript:void(0);" id="5"  onClick="calcular_calorias(this.id); gtag('event', 'Botón', {  'event_category': 'Natación','event_label': 'Calcular' });"><img src="assets/img/iconos/natacion.png"></a>
					</div>
					<div class="item">
						<a href="javascript:void(0);" id="6"  onClick="calcular_calorias(this.id); gtag('event', 'Botón', {  'event_category': 'Pesas','event_label': 'Calcular' });"><img src="assets/img/iconos/pesas.png"></a>
					</div>
					<div class="item">
						<a href="javascript:void(0);" id="10"  onClick="calcular_calorias(this.id); gtag('event', 'Botón', {  'event_category': 'Surf','event_label': 'Calcular' });"><img src="assets/img/iconos/surf.png"></a>
					</div>
					<div class="item">
						<a href="javascript:void(0);" id="4"  onClick="calcular_calorias(this.id); gtag('event', 'Botón', {  'event_category': 'tenis','event_label': 'Calcular' });"><img src="assets/img/iconos/tenis.png"></a>
					</div>
<!--
					<div class="item">
						<a href="javascript:void(0);" id="18"  onClick="calcular_calorias(this.id)"><img src="assets/img/iconos/yoga.png"></a>
					</div>
-->
				</div>
			</div>

			<button type="button" class="btn btn-default bt-naranjo bt-ok center-block" data-dismiss="modal" onClick=" gtag('event', 'Botón', {  'event_category': 'OK','event_label': 'Calcular' });">OK</button>
		</form>
		<p class="nota">
			<?php if($lang=='en'){ ?>
			Approximate calories based on a 70 kgs individual, calculated at
			<?php }else{ ?>
			Calorías aproximadas en base a una persona de 70 kgs calculadas en<?php } ?> 
			www.calorielab.com</p>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>
<div style="display: none">
	<?php 
	$cols = Array ("conID", "conMin", "conHor", "conDep", "conDepEn");
	$conversion = $db->get ("conversion", null, $cols);
	if ($db->count > 0){
	    foreach ($conversion as $cv) { 
	    	if($cv['conID'] == 2){
	    		$valor_incial = $cv['conMin'];
	    	}
	    	?>
		
		<span id="con-<?php echo $cv['conID'];?>" data-min="<?php echo $cv['conMin'];?>" data-dep="<?php echo $cv['conDep'];?>" data-depen="<?php echo $cv['conDepEn'];?>" data-hor="<?php echo $cv['conHor'];?>"></span>	

		<?php
	    }
	}
	?>
	<input type="hidden" name="factor" id="factor" value="<?php echo $valor_incial;?>">
</div>