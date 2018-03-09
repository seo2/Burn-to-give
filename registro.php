<?php include('header.php'); ?>

	<?php // include('main-nav.php'); ?>
	<header class="fondo-degradado-naranja position-relative">
		<div class="container position-relative">
			<div class="selector-idioma">
				<ul>
					<li>
						<a class="selected" href="">esp</a>
					</li>
					<li class="divisor">|</li>
					<li>
						<a href="">eng</a>
					</li>
				</ul>
			</div>
		</div>
		<img class="img-responsive logo-ingresa" src="assets/img/logo-ingresa.png" alt="">
		<img class="img-responsive texto-ingresa center" src="assets/img/texto-ingresa.png" alt="">
	</header>

	<div class="video-container">
		<iframe width="853" height="480" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
	</div>

	<section class="login">
		<div class="container-fluid no-padding fondo-celeste">
			<div class="row">
				<div class="con-facebook fondo-celeste">
					<p class="">
						Burn to Give, es una plataforma que convierte tus calorías quemadas haciendo deporte,
						en alimento de urgencia para niños con desnutrición .
 						La idea es combatir  los altos índices de obesidad y desnutrición a través de una sola solución
						utilizando la tecnología.</p>
					<p class="hash">#Burntogive</p>
				</div>
				<div class="quieres-ser-parte  fondo-azul">
					<h3>¿QUIERes SER PARTE?</h3>
					<p>
						<a href="javascript:void(0);" class="login-fb" onclick="myFacebookLogin()">
							regístrate con<br>
							<span class="fa-stack fa-lg">
							  <i class="fa fa-circle fa-stack-2x"></i>
							  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</p>
				</div>
				<form method="post" action="ajax/save-user.php" id="form-register">
					<div class="con-email fondo-degradado-naranja">
						<div class="container">
							<p>o con tu dirección de email</p>
							<div class="form-group center-block">
							    <input type="email" class="form-control" id="email" placeholder="email@dominio.com" name="log-mail" required="">
							</div>
							<div class="form-group center-block">
							    <input type="email" class="form-control" id="email" placeholder="confirma tu email" name="log-mail" required="">
							</div>
							<div class="form-group center-block">
							    <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="log-pass" required="">
							</div>
							<div class="form-group center-block">
							    <input type="text" class="form-control" id="nombre" placeholder="¿Cómo te llamas?" name="log-mail" required="">
							</div>
						</div>
					</div>
					<div class="fecha-nac">
						<div class="container">
							<p>Fecha de Nacimiento</p>
							<div class="col-xs-3 pl0">
								<div class="form-group center-block">
							    	<input type="number" class="form-control" id="dia" placeholder="DD" name="log-dia" required="">
							  </div>
							</div>
							<div class="col-xs-5">
								<div class="form-group center-block pl0 pr0">
									<select class="form-control required" id="sel1" name="" aria-required="true">
										<option value="0">Mes</option>
										<option value="1">Enero</option>
										<option value="2">Febrero</option>
										<option value="3">Marzo</option>
										<option value="4">Abril</option>
										<option value="5">Mayo</option>
										<option value="6">Junio</option>
										<option value="7">Julio</option>
										<option value="8">Agosto</option>
										<option value="9">Septiembre</option>
										<option value="10">Octubre</option>
										<option value="11">Noviembre</option>
										<option value="12">Diciembre</option>
									</select>
								</div>
							</div>
							<div class="col-xs-4 pr0">
								<div class="form-group center-block">
							    	<input type="number" class="form-control" id="dia" placeholder="DD" name="log-dia" required="">
								</div>
							</div>
							<label class="radio-inline">
  								<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Masculino
							</label>
							<label class="radio-inline">
  								<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Femenino
							</label>
						</div>
					<button type="submit" class="btn btn-default bt-naranjo center-block">regístrate</button>
					<p class="text-center inicia">¿Ya tienes cuenta? <a href="ingresa.php">Inicia Sesión</a></p>
				</div>
			</form>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>

