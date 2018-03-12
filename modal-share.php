<!-- Modal -->
<div class="modal fade" id="modal-share" tabindex="-1" role="dialog" aria-labelledby="modal-share">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<img class="logo-share center-block" src="assets/img/logo-share.png" alt="">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        	<img src="assets/img/cerrar-share.png" alt="">
        </button>
       <!--  <h4 class="modal-title" id="calcula-calorias">Modal title</h4> -->
      </div>
      <div class="modal-body">
			<h2>Muchas gracias!!</h2>
			<p>Multiplica tus calorías x2 compartiendo tu aporte en
				redes sociales con <span class="txt-naranjo">#burntogive</span> para motivar a otros
			</p>
		
		
		<form action="ajax/upload.php" method="post" enctype="multipart/form-data" id="form-upload">
			<input type="hidden" name="userID" id="userID">
			<input type="hidden" name="op" value="personalizada">
			<input type="file" name="fileToUpload" id="fileToUpload" class="hide">

			<div class="row">
				<div class="col-xs-offset-3 col-xs-6">
		    		<div id="fotito" style="margin-bottom:10px; padding:5px; border:1px solid #ccc; display:none;" >
		    			<img src="" class="img-responsive" id="fotoperfil" >
		    		</div>
		    	</div>	
			</div>
			<button type="button" class="btn btn-default bt-naranjo bt-subir fondo-degradado-naranja center-block " onclick="document.getElementById('fileToUpload').click(); return false" id="elegir">Elegir foto</button>
			
			<button type="submit" class="btn btn-default bt-naranjo bt-subir fondo-degradado-naranja center-block hide" id="confirmar"><span class="txt">Confirmar</span> <span class="percent hide"></span></button>
		</form>
		<div class="progress hide">
		    <div class="bar"></div >
		    <div class="percent">0%</div >
		</div>
		   
		<div id="status"></div>

		<h4 class="pordefecto">o usar esta imagen</h4>
			<div class="text-center pordefecto">
				<a href="javascript:void(0);" onclick="imagenSecundaria();">
				<div class="img-wrap">
				<div class="box-total-calorias">
					<p>acabo de donar</p>
					<p class="num-calorias" id="num-calorias2">385</p>
					<p class="sub-text">calorías</p>
				</div>
				<img class="img-responsive center-block img-post" src="assets/img/img-share.jpg" alt=""></a>
			</div>
		</div>



		<p>RECUERDA USAR <span class="txt-naranjo">#BURNTOGIVE</span></p>
      </div>
      <div class="modal-footer">
      <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
