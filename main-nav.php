
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    		<ul id="nav-list" class="">
    			<li class="odd"> <a href="index.php">home <span class="sr-only">(current)</span></a></li>

    			<li><a href="datos-usuario.php"><?php if($lang=='en'){ ?>My Profile<?php }else{ ?>mi perfil<?php } ?></a></li>

    			<li class="odd"><a href="empresas.php#que-es" onclick="closeNav()"><?php if($lang=='en'){ ?>WHAT’S BURN TO GIVE?<?php }else{ ?>¿qué es burn to give?<?php } ?></a></li>

    			<li><a href="empresas.php#como" onclick="closeNav()"><?php if($lang=='en'){ ?>HOW TO JOIN AND HELP?<?php }else{ ?>Cómo ayudar<?php } ?></a></li>

    			<li class="odd"><a href="empresas.php#historia" onclick="closeNav()"><?php if($lang=='en'){ ?>OUR STORY<?php }else{ ?>historia<?php } ?></a></li>

    			<li><a href="empresas.php#problema" onclick="closeNav()"><?php if($lang=='en'){ ?>THE PROBLEM<?php }else{ ?>el problema<?php } ?></a></li>
    			
    			<li class="odd"><a href="empresas.php#empresas" onclick="closeNav()"><?php if($lang=='en'){ ?>Companies<?php }else{ ?>Empresas<?php } ?></a></li>
    			

    			<li><a href="empresas.php#faq" onclick="closeNav()"><?php if($lang=='en'){ ?>FAQ<?php }else{ ?>preguntas frecuentes<?php } ?></a></li>

    			<li class="odd"><a href="contacto.php"><?php if($lang=='en'){ ?>Contact<?php }else{ ?>Contacto<?php } ?></a></li>
    			
    			<li><a href="logout.php"><?php if($lang=='en'){ ?>Logout<?php }else{ ?>Desconectar<?php } ?></a></li>
    		</ul>
    		<img class="center-block" src="assets/img/logo-mobile.png" alt="logo mobile">
  </div>
</div>



