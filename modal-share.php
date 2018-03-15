<!-- Modal -->
<?php 

	$id_p = $_GET["_p"];


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
	    <?php if($lang=='en'){ ?>
		<h2>Many thanks!</h2>
		<p>Multiply your calories X2 by sharing your donation in social media with <span class="txt-naranjo">#burntogive</span> To motivate others
		</p>	    
	    <?php }else{ ?>
		<h2>Muchas gracias!!</h2>
		<p>Multiplica tus calorías x2 compartiendo tu aporte en
			redes sociales con <span class="txt-naranjo">#burntogive</span> para motivar a otros
		</p>
		<?php } ?>
		<form action="ajax/upload.php" method="post" enctype="multipart/form-data" id="form-upload">
			<input type="hidden" name="userID" id="userID" value="<?php echo $_GET['_p']; ?>">
			<input type="hidden" name="op" value="personalizada">
			<input type="file" name="fileToUpload" id="fileToUpload" class="hide">
			<div class="row">
				<div class="col-xs-12">
					<div id="fotito" class="bloque-imagen text-center" style="display:none;">
						<div class="img-wrap">
							<div id="lafotito">
								
							</div>
							
							<div class="box-total-calorias">
								<p><?php if($lang=='en'){ ?>I just donated<?php }else{ ?>acabo de donar<?php } ?></p>
								<p class="num-calorias"><?php echo $calVal;?></p>
								<p class="sub-text"><?php if($lang=='en'){ ?>calories<?php }else{ ?>calorías<?php } ?></p>
							</div>
							<img class="img-responsive img-barra" src="assets/img/barra-post.png" alt="">
						</div>
					</div>		    		
		    	</div>	
			</div>
			<button type="submit" class="btn btn-default bt-naranjo bt-subir fondo-degradado-naranja center-block hide" id="confirmar" onclick="gtag('event', 'Botón', {  'event_category': 'Confirmar','event_label': 'Elegir Foto' });"><span class="txt"><?php if($lang=='en'){ ?>Confirm<?php }else{ ?>Confirmar<?php } ?></span> <span class="percent hide"></span></button>
			
			<button type="button" class="btn btn-default bt-naranjo bt-subir fondo-degradado-naranja center-block " onclick="document.getElementById('fileToUpload').click(); return false" id="elegir" onclick="gtag('event', 'Botón', {  'event_category': 'Subir Foto','event_label': 'Elegir Foto' });">
				<span class="elegirfoto"><?php if($lang=='en'){ ?>Upload photo<?php }else{ ?>Elegir foto<?php } ?></span><span class="elegirotra hide"><?php if($lang=='en'){ ?>Change photo<?php }else{ ?>Elegir otra<?php } ?></span></button>
			
		</form>
		<div class="progress hide">
		    <div class="bar"></div >
		    <div class="percent">0%</div >
		</div>
		   
		<div id="status"></div>

		<h4 class="pordefecto"><?php if($lang=='en'){ ?>Or use this image<?php }else{ ?>o usar esta imagen<?php } ?></h4>
			<div class="text-center pordefecto">
				<a href="javascript:void(0);" onclick="imagenSecundaria(); gtag('event', 'Botón', {  'event_category': 'Imagen predeterminada','event_label': 'Elegir Foto' });">
					<div class="img-wrap">
					<div class="box-total-calorias">
						<p><?php if($lang=='en'){ ?>I just donated<?php }else{ ?>acabo de donar<?php } ?></p>
						<p class="num-calorias" id="num-calorias2"><?php echo $calVal;?></p>
						<p class="sub-text"><?php if($lang=='en'){ ?>calories<?php }else{ ?>calorías<?php } ?></p>
					</div>
					<img class="img-responsive center-block img-post" src="assets/img/img-share.jpg" alt="">
				</a>
			</div>
		</div>

		<p><?php if($lang=='en'){ ?>Remember to use<?php }else{ ?>RECUERDA USAR<?php } ?> <span class="txt-naranjo">#BURNTOGIVE</span></p>
      </div>
      <div class="modal-footer">
      <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
