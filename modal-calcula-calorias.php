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
						<div class="col-sm-3">
			        		<div class="bloque-blanco center-block">
			        			<div class="icono center">
			        				<img class="img-responsive" src="assets/img/iconos/ico-correr.png" alt="">
			        			</div>
			        		</div>
			        		<p>running</p>
			        	</div>
			        	<div class=" col-sm-3">
			        		<div class="form-group">
								<input type="text" class="form-control" name="numCalorias" id="numCalorias" placeholder="">
								<p>min</p>

							</div>
			        	</div>

			        	<div class="col-sm-3">
			        		<div class="form-group">
								<input type="text" class="form-control" name="numCalorias" id="numCalorias" placeholder="">
								<p>calorías*</p>
							</div>
			        	</div>




		        </div>
        	</div>
			<h3>selecciona tu deporte</h3>
			<div class="slider-wrapper">
				<div class="slider-iconos owl-carousel">
				<div class="item">
					<a href=""><img src="assets/img/iconos/bici.png"></a>
				</div>
				<div class="item">
					<a href=""><img src="assets/img/iconos/boxeo.png"></a>
				</div>
				<div class="item">
					<a href=""><img src="assets/img/iconos/correr.png"></a>
				</div>
				<div class="item">
					<a href=""><img src="assets/img/iconos/futbol.png"></a>
				</div>
				<div class="item">
					<a href=""><img src="assets/img/iconos/natacion.png"></a>
				</div>
				<div class="item">
					<a href=""><img src="assets/img/iconos/pesas.png"></a>
				</div>
				<div class="item">
					<a href=""><img src="assets/img/iconos/surf.png"></a>
				</div>
				<div class="item">
					<a href=""><img src="assets/img/iconos/tenis.png"></a>
				</div>
				<div class="item">
					<a href=""><img src="assets/img/iconos/yoga.png"></a>
				</div>
			</div>
			</div>

			<button type="submit" class="btn btn-default bt-naranjo bt-ok center-block">OK</button>
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
