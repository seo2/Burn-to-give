
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'Cerrar','event_label': 'Menú' });">&times;</a>
  <div class="overlay-content">
    		<ul id="nav-list" class="">
				<?php if(isset($_SESSION["burntogive"])){ ?>
    			<li class="odd"> <a href="index.php">home <span class="sr-only">(current)</span></a></li>
    			<li><a href="datos-usuario.php"><?php if($lang=='en'){ ?>My Profile<?php }else{ ?>mi perfil<?php } ?></a></li>
    			<li class="odd"><a href="empresas.php" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'Qué es','event_label': 'Menú' });"><?php if($lang=='en'){ ?>WHAT’S BURN TO GIVE?<?php }else{ ?>¿qué es burn to give?<?php } ?></a></li>

    			<li><a href="empresas.php#como" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'Cómo Ayudar','event_label': 'Menú' });"><?php if($lang=='en'){ ?>HOW TO JOIN AND HELP?<?php }else{ ?>Cómo ayudar<?php } ?></a></li>

    			<li class="odd"><a href="empresas.php#historia" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'Nuestra Historia','event_label': 'Menú' });"><?php if($lang=='en'){ ?>OUR STORY<?php }else{ ?>Nuestra historia<?php } ?></a></li>

    			<li><a href="empresas.php#problema" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'El Problema','event_label': 'Menú' });"><?php if($lang=='en'){ ?>THE PROBLEM<?php }else{ ?>el problema<?php } ?></a></li>
    			
    			<li class="odd"><a href="empresas.php#empresas" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'Empresas','event_label': 'Menú' });"><?php if($lang=='en'){ ?>Companies<?php }else{ ?>Empresas<?php } ?></a></li>


    			<li><a href="empresas.php#faq" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'FAQ','event_label': 'Menú' });"><?php if($lang=='en'){ ?>FAQ<?php }else{ ?>preguntas frecuentes<?php } ?></a></li>

    			<li class="odd"><a href="contacto.php" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'Contacto','event_label': 'Menú' });"><?php if($lang=='en'){ ?>Contact<?php }else{ ?>Contacto<?php } ?></a></li>
    			
    			<li><a href="logout.php"><?php if($lang=='en'){ ?>Logout<?php }else{ ?>Desconectar<?php } ?></a></li>
    			<?php }else{ ?>
    			
    			<li class="odd"> <a href="home.php">home <span class="sr-only">(current)</span></a></li>
    			<li><a href="empresas.php" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'Qué es','event_label': 'Menú' });"><?php if($lang=='en'){ ?>WHAT’S BURN TO GIVE?<?php }else{ ?>¿qué es burn to give?<?php } ?></a></li>

    			<li class="odd"><a href="empresas.php#como" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'Cómo Ayudar','event_label': 'Menú' });"><?php if($lang=='en'){ ?>HOW TO JOIN AND HELP?<?php }else{ ?>Cómo ayudar<?php } ?></a></li>

    			<li><a href="empresas.php#historia" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'Nuestra Historia','event_label': 'Menú' });"><?php if($lang=='en'){ ?>OUR STORY<?php }else{ ?>Nuestra historia<?php } ?></a></li>

    			<li class="odd"><a href="empresas.php#problema" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'El Problema','event_label': 'Menú' });"><?php if($lang=='en'){ ?>THE PROBLEM<?php }else{ ?>el problema<?php } ?></a></li>
    			
    			<li><a href="empresas.php#empresas" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'Empresas','event_label': 'Menú' });"><?php if($lang=='en'){ ?>Companies<?php }else{ ?>Empresas<?php } ?></a></li>
    			

    			<li class="odd"><a href="empresas.php#faq" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'FAQ','event_label': 'Menú' });"><?php if($lang=='en'){ ?>FAQ<?php }else{ ?>preguntas frecuentes<?php } ?></a></li>

    			<li><a href="contacto.php" onclick="closeNav(); gtag('event', 'Botón', {  'event_category': 'Contacto','event_label': 'Menú' });"><?php if($lang=='en'){ ?>Contact<?php }else{ ?>Contacto<?php } ?></a></li>
    			<?php } ?>
    			
    		</ul>
    		<img class="center-block" src="assets/img/logo-mobile.png" alt="logo mobile" style="width: 30px;">
  </div>
</div>



