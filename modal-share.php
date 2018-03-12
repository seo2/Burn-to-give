<!-- Modal -->
<?php 

	$id_p = $_GET["_p"];

//echo $id_p;

	$db->where ("calID", $id_p);
	$user = $db->getOne ("calorias");
	//echo "Last executed query was ". $db->getLastQuery();

	if($db->count > 0){
		$calVal = $user["calVal"];
		$calImg = $user["calImg"];

		$rutaImg = "uploads/fotos/".$calImg;
		$ext = explode(".", $calImg);
		$Img2 = str_replace($ext[1], "png", $calImg);
		$rutaImg2 = "uploads/".$Img2;

	}else{
		//echo "empty";
	}	
	
?>
<div class="modal" id="modal-share" tabindex="-1" role="dialog" aria-labelledby="modal-share">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<img class="logo-share center-block" src="assets/img/logo-share.png" alt="">
        <a type="button" class="close" href="index.php">
        	<img src="assets/img/cerrar-share.png" alt="">
        </a>
       <!--  <h4 class="modal-title" id="calcula-calorias">Modal title</h4> -->
      </div>
      <div class="modal-body">
		<h2>Muchas gracias!!</h2>
		<p>Multiplica tus calorías x2 compartiendo tu aporte en
			redes sociales con <span class="txt-naranjo">#burntogive</span> para motivar a otros
		</p>
		<form action="ajax/upload.php" method="post" enctype="multipart/form-data" id="form-upload">
			<input type="hidden" name="userID" id="userID" value="<?php echo $_GET['_p']; ?>">
			<input type="hidden" name="op" value="personalizada">
			<input type="file" name="fileToUpload" id="fileToUpload" class="hide">
<!-- 			<input type="hidden" name="userid" value="<?php echo $_SESSION["burntogive"];?>"> -->

			<div class="row">
				<div class="col-xs-12">
					<div id="fotito" class="bloque-imagen text-center" style="display:none;">
						<div class="img-wrap">
							<div class="box-total-calorias">
								<p class="acabo-donar">acabo de donar</p>
								<p class="num-calorias"><?php echo $calVal;?></p>
								<p class="sub-text">calorías</p>
							</div>
							<img class="img-responsive img-barra" src="assets/img/barra-post.png" alt="">
<!-- 							<img src="" class="img-responsive" id="fotoperfil" > -->
						</div>
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
					<img class="img-responsive center-block img-post" src="assets/img/img-share.jpg" alt="">
				</a>
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
