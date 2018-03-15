<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>

	<header class="fondo-degradado-naranja position-relative">
		<div class="container position-relative">
			<div class="selector-idioma">
				<ul>
					<li>
						<a <?php if($lang=='es'){ ?>class="selected"<?php } ?>href="javascript:void(0);" data-lang="es" onclick="gtag('event', 'Botón', {  'event_category': 'Idioma Español','event_label': 'Inicio' });">esp</a>
					</li>
					<li class="divisor">|</li>
					<li>
						<a <?php if($lang=='en'){ ?>class="selected"<?php } ?> href="javascript:void(0);" data-lang="en" onclick="gtag('event', 'Botón', {  'event_category': 'Idioma Inglés','event_label': 'Inicio' });">eng</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<span class="menu-icon" onclick="openNav(); gtag('event', 'Botón', {  'event_category': 'Menú','event_label': 'Inicio' });" >
					<img class="img-responsive toggle-menu" src="assets/img/menu-icon.png" alt="">
				</span>
			</div>
		</div>
		<img class="img-responsive logo-ingresa" src="assets/img/logo-ingresa.png" alt="">
		<img class="img-responsive texto-ingresa center" src="assets/img/texto-ingresa.png" alt="">
	</header>

	<div class="video-container">
		<iframe width="853" height="480" src="https://www.youtube.com/embed/vKwUpkYlHSc?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	</div>

	<section class="login">
		<div class="container-fluid no-padding fondo-celeste">
			<div class="row">
				<div class="con-facebook fondo-celeste">
					<p class="">
						<?php if($lang=='en'){ ?>
						BURN TO GIVE IS A PLATFORM THAT CONVERTS YOUR CALORIES BURNED EXERCISING INTO LIFE-SAVING NUTRITION FOR CHILDREN IN NEED. WE WANT TO USE TECHNOLOGY TO CONNECT TWO OPPOSITE AND FAST-GROWING HEALTH CONCERNS - SUCH AS OBESITY AND HUNGER - IN A WAY THAT HELPS SOLVE THEM BOTH.							
						<?php }else{ ?>
						BURN TO GIVE ES UNA PLATAFORMA QUE CONVIERTE TUS CALORÍAS QUEMADAS HACIENDO DEPORTE, EN ALIMENTACIÓN DE URGENCIA PARA UN NIÑO QUE LAS NECESITA. QUEREMOS UTILIZAR LA TECNOLOGÍA PARA CONECTAR DOS PANDEMIAS GLOBALES COMO SON LA OBESIDAD Y DESNUTRICIÓN, DE UNA MANERA QUE AYUDE A SOLUCIONAR AMBAS.
						<?php } ?>
					</p>
					<p class="hash">#Burntogive</p>
				</div>
				<div class="quieres-ser-parte  fondo-azul">
					<h3><?php if($lang=='en'){ ?>
							WANT TO JOIN?						
						<?php }else{ ?>
							¿QUIERES SER PARTE?
						<?php } ?>
					</h3>
					<p>
						<a href="javascript:void(0);" class="login-fb" onclick="myFacebookLogin()">
						<?php if($lang=='en'){ ?>
							Register with						
						<?php }else{ ?>
							regístrate con
						<?php } ?>
							<br>
							<span class="fa-stack fa-lg">
							  <i class="fa fa-circle fa-stack-2x"></i>
							  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</p>
				</div>
				<form method="post" action="ajax/save-user-ini.php" id="form-register-ini">
					<div class="con-email fondo-degradado-naranja">
						<div class="container">
							<p><?php if($lang=='en'){ ?>
								Or with your email address						
							<?php }else{ ?>
								o con tu dirección de email
							<?php } ?>
							</p>
							<div class="form-group center-block">
							    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="" data-msg="<?php if($lang=='en'){ ?>Please enter your email<?php }else{ ?>Por favor ingresa tu email<?php } ?>">
							</div>
							<div class="form-group center-block">
							    <input type="email" class="form-control" id="email2" placeholder="<?php if($lang=='en'){ echo "Confirm your email";  }else{ echo "Confirma tu email"; } ?>" name="email2" required=""  data-msg="<?php if($lang=='en'){ ?>Please repeat your email<?php }else{ ?>Por favor repite tu email<?php } ?>">
							</div>
							<div class="form-group center-block">
							    <input type="password" class="form-control" id="pass" placeholder="<?php if($lang=='en'){ echo "Password";  }else{ echo "Contraseña"; } ?>" name="clave" required=""  data-msg="<?php if($lang=='en'){ ?>This field is required<?php }else{ ?>Campo obligatorio<?php } ?>">
							</div>
							<div class="form-group center-block">
							    <input type="text" class="form-control" id="nombre" placeholder="<?php if($lang=='en'){ echo "What’s your name?";  }else{ echo "Nombre y Apellido"; } ?>" name="nombre" required="" data-msg="<?php if($lang=='en'){ ?>This field is required<?php }else{ ?>Campo obligatorio<?php } ?>">
							</div>
							<div class="form-group center-block">
							<?php
								$cols = Array ("paisID", "paisNombre", "paisName");
								$paises = $db->get ("paises", null, $cols);								    
							?>
								<select class="form-control" name="pais" required="">
									<option value=""><?php if($lang=='en'){ echo "Country";  }else{ echo "País"; } ?></option>
									<?php
										foreach ($paises as $pais) { ?>
										<option value="<?php echo $pais['paisID']?>"><?php if($lang=='en'){ echo $pais['paisName'];  }else{ echo $pais['paisNombre']; } ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="fecha-nac">
						<div class="container">
							<p><?php if($lang=='en'){ ?>
								Date of birth						
							<?php }else{ ?>
								Fecha de Nacimiento
							<?php } ?>
							</p>
							<div class="row">
								<div class="col-xs-3 pl0">
									<div class="form-group center-block">
								    	<input type="number" class="form-control" id="dia" placeholder="<?php if($lang=='en'){ echo "Day";  }else{ echo "Día"; } ?>" name="log-dia" required="" maxlength="2" data-msg="<?php if($lang=='en'){ ?>Complete<?php }else{ ?>Completar<?php } ?>">
								  </div>
								</div>
								<div class="col-xs-5">
									<div class="form-group center-block pl0 pr0">
										<select class="form-control required" id="sel1" name="log-mes" aria-required="true" required data-msg="<?php if($lang=='en'){ ?>Select month<?php }else{ ?>Seleccionar mes<?php } ?>">
											<option value=""><?php if($lang=='en'){ ?>Month<?php }else{ ?>Mes<?php } ?></option>
											<option value="1"><?php if($lang=='en'){ ?>January<?php }else{ ?>Enero<?php } ?></option>
											<option value="2"><?php if($lang=='en'){ ?>February<?php }else{ ?>Febrero<?php } ?></option>
											<option value="3"><?php if($lang=='en'){ ?>March<?php }else{ ?>Marzo<?php } ?></option>
											<option value="4"><?php if($lang=='en'){ ?>April<?php }else{ ?>Abril<?php } ?></option>
											<option value="5"><?php if($lang=='en'){ ?>May<?php }else{ ?>Mayo<?php } ?></option>
											<option value="6"><?php if($lang=='en'){ ?>June<?php }else{ ?>Junio<?php } ?></option>
											<option value="7"><?php if($lang=='en'){ ?>July<?php }else{ ?>Julio<?php } ?></option>
											<option value="8"><?php if($lang=='en'){ ?>August<?php }else{ ?>Agosto<?php } ?></option>
											<option value="9"><?php if($lang=='en'){ ?>September<?php }else{ ?>Septiembre<?php } ?></option>
											<option value="10"><?php if($lang=='en'){ ?>October<?php }else{ ?>Octubre<?php } ?></option>
											<option value="11"><?php if($lang=='en'){ ?>November<?php }else{ ?>Noviembre<?php } ?></option>
											<option value="12"><?php if($lang=='en'){ ?>December<?php }else{ ?>Diciembre<?php } ?></option>
										</select>
									</div>
								</div>
								<div class="col-xs-4 pr0">
									<div class="form-group center-block">
								    	<input type="number" class="form-control" id="ano" placeholder="<?php if($lang=='en'){ echo "Year";  }else{ echo "Año"; } ?>" name="log-ano" required="" maxlength="4" data-msg="<?php if($lang=='en'){ ?>Complete<?php }else{ ?>Completar<?php } ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 text-center">
									<label class="radio-inline">
		  								<input type="radio" name="usuGen" id="inlineRadio1" value="HOMBRE"> <?php if($lang=='en'){ ?>Male<?php }else{ ?>Masculino<?php } ?>
									</label>
									<label class="radio-inline">
		  								<input type="radio" name="usuGen" id="inlineRadio2" value="MUJER"> <?php if($lang=='en'){ ?>Female<?php }else{ ?>Femenino<?php } ?>
									</label>
									<span id="usuGen-error" class="error hide" for="sel1"><?php if($lang=='en'){ ?>Select Genre<?php }else{ ?>Seleccione Genero<?php } ?></span>
								</div>
							</div>
						</div>
					<p class="text-center inicia politicas">
					<?php if($lang=='en'){ ?>
					By registering, using Facebook or directly, you accept the <a href="pdf/terms.pdf" target="_blank" onclick="_trackEvent('Botón', 'Click', 'Terms');">Terms and Conditions</a> and the <a href="pdf/privacy.pdf" target="_blank" onclick="_trackEvent('Botón', 'Click', 'Privacy');">Privacy Policy</a> of Burn to Give.
					<?php }else{ ?>
					Al Registrarte, usando Facebook o directamente, aceptas los <a href="pdf/terminos.pdf" target="_blank" onclick="_trackEvent('Botón', 'Click', 'Términos');">Términos y Condiciones</a> y la <a href="pdf/privacidad.pdf" target="_blank"  onclick="_trackEvent('Botón', 'Click', 'Política');">Política de Privacidad</a> de Burn to Give.
					<?php } ?> </p>
					<button type="submit" class="btn btn-default bt-naranjo center-block" onclick="gtag('event', 'Botón', {  'event_category': 'Regístrate','event_label': 'Inicio' });"><?php if($lang=='en'){ ?>Create Account<?php }else{ ?>regístrate<?php } ?></button>
					<p class="text-center inicia"><?php if($lang=='en'){ ?>Do you have an account?<?php }else{ ?>¿Ya tienes cuenta?<?php } ?> <a href="ingresa.php" onclick="gtag('event', 'Botón', {  'event_category': 'Ingresa','event_label': 'Inicio' });"><?php if($lang=='en'){ ?>Sign In<?php }else{ ?>Inicia Sesión<?php } ?></a></p>
				</div>
			</form>
		</div>
	</div>
</section>



<?php include('footer.php'); ?>

