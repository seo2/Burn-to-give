<!-- Modal -->
<div class="modal fade" id="modal-calcula" tabindex="-1" role="dialog" aria-labelledby="calcula-calorias">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        	<img src="assets/img/cerrar-modal.png" alt="">
        </button>
       <!--  <h4 class="modal-title" id="calcula-calorias">Modal title</h4> -->
      </div>
      <div class="modal-body">
        <h2>calcula tus calorías</h2>

        <form id="formCalculaCalorias" class="form-inline">
        	<div class="row">
				<div class="calculadora fondo-celeste clearfix">
					<div class="igual"> = </div>
					<div class="col-xs-4 text-center">
		        		<div class="bloque-blanco center-block">
		        			<div class="icono center">
		        				<img class="img-responsive" src="assets/img/iconos/ico-correr.png" alt="" id="icono-activo">
		        			</div>
		        		</div>
		        		<p class="deporte">running</p>
		        	</div>
		        	<div class="col-xs-4 text-center">
		        		<div class="form-group">
							<input type="text" class="form-control" name="minutos" id="minutos" placeholder="" required="">
							<p>min</p>

						</div>
		        	</div>

		        	<div class="col-xs-4 text-center">
		        		<div class="form-group">
							<input type="text" class="form-control" name="calCalorias" id="calCalorias" placeholder="" readonly="">
							<p>calorías*</p>
						</div>
		        	</div>
		        </div>
        	</div>
			<h3>selecciona tu deporte</h3>
			<div class="slider-wrapper">
				<div class="slider-iconos owl-carousel">
				<div class="item">
					<a href="javascript:void(0);" id="3" onClick="calcular_calorias(this.id)"><img src="assets/img/iconos/bici.png"></a>
				</div>
				<div class="item">
					<a href="javascript:void(0);" id="13" onClick="calcular_calorias(this.id)"><img src="assets/img/iconos/boxeo.png"></a>
				</div>
				<div class="item">
					<a href="javascript:void(0);" id="2"  onClick="calcular_calorias(this.id)"><img src="assets/img/iconos/correr.png"></a>
				</div>
				<div class="item">
					<a href="javascript:void(0);" id="1"  onClick="calcular_calorias(this.id)"><img src="assets/img/iconos/futbol.png"></a>
				</div>
				<div class="item">
					<a href="javascript:void(0);" id="5"  onClick="calcular_calorias(this.id)"><img src="assets/img/iconos/natacion.png"></a>
				</div>
				<div class="item">
					<a href="javascript:void(0);" id="6"  onClick="calcular_calorias(this.id)"><img src="assets/img/iconos/pesas.png"></a>
				</div>
				<div class="item">
					<a href="javascript:void(0);" id="10"  onClick="calcular_calorias(this.id)"><img src="assets/img/iconos/surf.png"></a>
				</div>
				<div class="item">
					<a href="javascript:void(0);" id="4"  onClick="calcular_calorias(this.id)"><img src="assets/img/iconos/tenis.png"></a>
				</div>
				<div class="item">
					<a href="javascript:void(0);" id="18"  onClick="calcular_calorias(this.id)"><img src="assets/img/iconos/yoga.png"></a>
				</div>
			</div>
			</div>

			<button type="button" class="btn btn-default bt-naranjo bt-ok center-block" data-dismiss="modal">OK</button>
		</form>
		<p class="nota">calorías APROXIMADAS CALCULADAS EN BASE A PESO, PROMEDIO Y BLA BLA BLA...</p>
      </div>
      <div class="modal-footer">
      <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<div style="display: none">
	<?php 
	$cols = Array ("conID", "conMin", "conHor", "conDep");
	$conversion = $db->get ("conversion", null, $cols);
	if ($db->count > 0){
	    foreach ($conversion as $cv) { 
	    	if($cv['conID'] == 2){
	    		$valor_incial = $cv['conMin'];
	    	}
	    	?>
		
		<span id="con-<?php echo $cv['conID'];?>" data-min="<?php echo $cv['conMin'];?>" data-dep="<?php echo $cv['conDep'];?>" data-hor="<?php echo $cv['conHor'];?>"></span>	

		<?php
	    }
	}
	?>
	<input type="hidden" name="factor" id="factor" value="<?php echo $valor_incial;?>">
</div>