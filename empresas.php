<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
	<?php // include('main-nav.php'); ?>
	<header class="fondo-degradado-naranja position-relative">
		<div class="container position-relative">
			<div class="selector-idioma">
				<ul>
					<li>
						<a <?php if($lang=='es'){ ?>class="selected"<?php } ?>href="javascript:void(0);" data-lang="es">esp</a>
					</li>
					<li class="divisor">|</li>
					<li>
						<a <?php if($lang=='en'){ ?>class="selected"<?php } ?> href="javascript:void(0);" data-lang="en">eng</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<span class="menu-icon" onclick="openNav()">
					<img class="img-responsive toggle-menu" src="assets/img/menu-icon.png" alt="">
				</span>
			</div>
		</div>
		<img class="img-responsive logo-ingresa" src="assets/img/logo-ingresa.png" alt="">
		<img class="img-responsive texto-ingresa center" src="assets/img/texto-ingresa.png" alt="">

	</header>
	<section class="video">
		<div class="container-fluid no-padding">
			<div class="video-container">
				<iframe width="853" height="480" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</section>
	<section class="que-es" id="que-es">
		<div class="container mw">
			<div class="row">
				<div class="bloque-amarillo">
					<h2><?php if($lang=='en'){ ?>WHAT’S BURN TO GIVE?<?php }else{ ?>¿qué es burn to give?<?php } ?></h2>
					<div class="clear"></div>
					<p>
						<?php if($lang=='en'){ ?>
						Burn to Give is a platform that converts calories burned exercising into life-saving nutrition for children in need.
						<?php }else{ ?>
						Burn to Give es una plataforma que
						recicla las calorías quemadas haciendo cualquier tipo de actividad
						física y las convierte en nutrición de urgencia para un niño con
						desnutrición que las necesita.
						<?php } ?>
					</p>
				</div>
				<div class="bloque-celeste borde-amarillo ">
					
					<?php if($lang=='en'){ ?>
					<p>We want to motivate millions of people to become active and healthy, inspired by their desire to help those in need</p>
					<p>For each calorie burned exercising, a calorie is given to an undernourished child </p>
					<p>Burn to Give uses technology to connect to opposite and fast-growing health concerns – such as obesity and hunger –  in a way that helps solve them both</p>
					<p>At Burn to Give we want to become the largest team of calorie-sponsored athletes in the world; burning calories and giving them away. And we want you to become a part of this team!</p>
					<?php }else{ ?>
					<p>Por cada caloría quemada haciendo deportes, una caloría es entregada a un niño sufriendo de desnutrición.</p>

					<p>Burn to Give utiliza la tecnología para conectar dos pandemias globales como son la obesidad y desnutrición, de una manera que ayude a solucionar ambas.</p>

					<p>Queremos motivar a millones de personas a llevar una vida sana y activa, inspiradas por el deseo de ayudar a quienes más lo necesitan</p>

					<p>En Burn to Give queremos formar el equipo más grande de personas que queman calorías para donarlas como alimento a las personas
						que más lo necesitan y queremos que seas parte de esta increíble causa.</p>
					<?php } ?>
					 <p class="hash text-right">#BurnToGive</p>

				</div>
			</div>
		</div>

	</section>
	<section class="como" id="como">
		<div class="container position-relative mw">
			<img class="img-responsive bg-como" src="assets/img/bg-como.jpg" alt="">
			<div class="row">

					<h2 class="texto-amarillo-italic">
						<?php if($lang=='en'){ ?>
						HOW  <br> TO JOIN AND HELP?
						<?php }else{ ?>
						¿CÓMO  <br> PUEDES AYUDAR?
						<?php } ?>
					</h2>
					<div class="caja-texto-sombra  pb-100 mb-100">
						<div class="padding-30">
							<p><span class="texto-azul"><?php if($lang=='en'){ ?>Starting on March 15<?php }else{ ?>A partir del 15 de marzo<?php } ?></span><br>
							<span class="texto-amarillo"><?php if($lang=='en'){ ?>And up until April 15<?php }else{ ?>y hasta 15 de abril<?php } ?></span></p>
							<ul>
						<?php if($lang=='en'){ ?>
								<li>Exercising or doing any type of physical activity</li>
								<li>Logging your burned calories at www.burntogive.com</li>
								<li>Sharing your pictures doing sports in social media, tagging @burntogive using #BurnToGive, and inviting more people to do the same!</li>
						<?php }else{ ?>
								<li>Haciendo deporte o algún tipo de actividad física.</li>
								<li>Entra a www.burntogive.com e ingresa tus calorías quemadas.</li>
								<li>Comparte en redes sociales tus fotos haciendo deporte mencionando a @burntogive y utilizando
								#BurnToGive, para motivar a tus familiares, amigos, colegas y cercanos a hacer lo mismo</li>
						<?php } ?>

							</ul>
						</div>
						<h3 class="llamado"><?php if($lang=='en'){ ?>We need your help!<?php }else{ ?>¡Necesitamos tu ayuda!<?php } ?></h3>
						<div class="padding-30 pt-0">
							<p>
					<?php if($lang=='en'){ ?>
							On March 15, we’re launching our FIRST EVER calorie challenge. For 30 days, we want to inspire thousands of people to exercise and become active with the ultimate goal of helping others. Be part of this incredible initiative and help us reach our goal of 30 million calories. By achieving this goal, we will be able to feed and save the lives of 400 children suffering from severe acute malnutrition in Haiti. These kids will thank you, and so will your body.
					<?php }else{ ?>
							Este 15 de marzo comenzamos nuestro PRIMER desafío. Durante 30 días, vamos a motivar a miles de personas a hacer deporte para ayudar a otros. Sé parte de esta increíble iniciativa y ayúdanos a cumplir nuestra meta de 30 millones de calorías, con las que vamos a alimentar y salvar la vida de más de 400 niños sufriendo de desnutrición en Haití. Ellos te lo van a agradecer, y tu cuerpo también.
					<?php } ?>
							</p>
							<div class="pie-de-caja huincha">
								<p class="hash">#BurnToGive</p>
							</div>
						</div>
				</div>


			</div>
		</div>
	</section>
	<section class="historia" id="historia">
		<div class="container mw position-relative">
			<img class="img-responsive bg-historia" src="assets/img/bg-historia.png" alt="">
			<div class="row">
				<h2><?php if($lang=='en'){ ?>OUR STORY<?php }else{ ?>historia<?php } ?></h2>
					<?php if($lang=='en'){ ?>
				<div class="caja-texto-sombra mb-30">
					<p class="texto-azul">
						The story of Burn to Give (as told by our founder, Eduardo della Maggiora)
					</p>
					<p>In early 2014 I left New York City to go spend some time volunteering in East Africa.  I'd made my living for years working in one of the world’s top financial institutions. I had a great job, even better co-workers and lived in one of the greatest cities in the world. I felt privileged, and life was good. But despite all of this, somehow, I felt something was missing. I wasn’t sure what this was or what to expect, but my gut feeling was telling me to go experiment something completely different and opposite to what I’d been doing so far. I chose Tanzania as my destination.</p>
						<div class="pie-de-caja bloque-gris"></div>
				</div>
				<div class="caja-texto-sombra mb-30">
					<div class="linea-azul-xs clearfix"> </div>
					<p>I signed up for a volunteer service program in Moshi, a small town near Kilimanjaro, as a teacher for elementary school children. Every day after class, we would give our students a small meal made up of corn and water. I shortly realized that for more than half of my students, this was the only food they ate in all day. This is how I go to see firsthand the devastating reality of child malnutrition.</p>
					<div class="pie-de-caja bloque-gris"></div>
				</div>	
				<div class="caja-texto-sombra mb-30">
					<div class="linea-azul-xs clearfix"> </div>
					<p>While in Africa, I came across a 1-hour summary of the Ironman World Championships in Kona Hawaii on YouTube. I was mesmerized by the incredible stories of those people crossing the finish line, and couldn’t believe how someone could finish 2.4 miles of swimming, followed by 112 miles of biking and finish running 26.2 miles, all in the same day and in the toughest conditions imaginable. It was something very inspiring but at the same time scary.</p>
					<div class="pie-de-caja bloque-gris"></div>
				</div>	
				<div class="caja-texto-sombra mb-30">
					<div class="linea-azul-xs clearfix"> </div>
					<p>In the coming days I couldn’t stop thinking about Kona and said to myself I had to do his race one day. After many months of training with all my heart and soul, I crossed the finish line of Ironman Kona with a sense of accomplishment I never imagined I could feel. In 2016 and only one year later, I qualified to represent Chile at the Ironman 70.3 World Championships. For my surprise and that of many others, I finished this race in 2nd place of my age-group, only 6-seconds short of becoming a World Champion. In 2017 I repeated this feat, becoming a 2x Ironman 70.3 World Champion runner-up.</p>
					<div class="pie-de-caja bloque-gris"></div>
				</div>	
				<div class="caja-texto-sombra mb-30">
					<div class="linea-azul-xs clearfix"> </div>
					<p>Burn to Give is a project that was born by connecting the dots throughout many of my life-experiences, and concentrates everything I love and am passionate about. On one side, exercising and leading a healthy and active lifestyle. And on the other, the satisfaction of helping others without expecting anything in return. My dream is to inspire millions of people to lead an active and healthy lifestyle, fueled by their desire to help those in need.</p>
					<p><strong>Eduardo della Maggiora</strong><br>
						Chief Calorie Giver
						</p>
					<div class="pie-de-caja bloque-gris"></div>
				</div>				
					<?php }else{ ?>
				<div class="caja-texto-sombra mb-30">
					<p class="texto-azul">
						La Historia de Burn to Give (contada por nuestro fundador, Eduardo della Maggiora)
					</p>
					<p>El año 2014 dejé Nueva York para irme como voluntario a África del Este. Por años me había
						ganado la vida trabajando en una de las instituciones financieras más grandes del mundo.
						Tenía un trabajo increíble, muchos amigos y vivía en una de las ciudades más fascinantes del mundo.
						Me sentía muy privilegiado, pero a pesar de todo esto, de alguna manera, sentía que algo faltaba.
						No estaba seguro que es lo que esto era, pero mi “guata” me decía que tenía que experimentar
						algo completamente distinto y opuesto
						a lo que estaba haciendo hasta ese
						momento. Elegí Tanzania como mi destino.</p>
						<div class="pie-de-caja bloque-gris"></div>
				</div>
				<div class="caja-texto-sombra mb-30">
					<div class="linea-azul-xs clearfix"> </div>
					<p>Me inscribí en un programa de voluntariado, en el cual hacía clases de inglés y matemáticas a niños
					en un colegio de Moshi, un pueblo muy pequeño al lado de Kilimanjaro. Todos los días después de
					 terminar las clases, les dábamos una especie de almuerzo a los niños en base a maíz y agua.
					Algo que me llamó mucho la atención fue qué para más de la mitad de mis alumnos, esta era el
					 único alimento que comían en todo el día. Fue así cómo me tocó ver y conocer de cerca la devastadora
					realidad de la desnutrición infantil.</p>
					<div class="pie-de-caja bloque-gris"></div>
				</div>
				<div class="caja-texto-sombra mb-30">
					<div class="linea-azul-xs clearfix"> </div>
					<p>Mientras estaba en África, me crucé por casualidad en internet con un video resumen del Campeonato Mundial de Ironman en Kona, Hawaii. Quedé impresionado por las distintas historias de vida de las personas cruzando esta meta, el esfuerzo y sacrificio por el que habían pasado para poder lograrlo. No podía imaginar cómo alguien podía nadar por 3.8kms, después pedalear por 180kms y terminar corriendo una maratón de 42kms, todo en el mismo día y en condiciones climáticas extremas. Era algo muy inspirador pero a la vez aterrador.</p>
					<div class="pie-de-caja bloque-gris"></div>
				</div>	
				<div class="caja-texto-sombra mb-30">
					<div class="linea-azul-xs clearfix"> </div>
					<p>En los próximos días no podía parar de pensar en Kona y me dije a mi mismo que algún día tenía que hacer esa carrera. Después de muchos meses entrenando con toda mi alma y corazón, logré cruzar la meta del Ironman de Kona con una sensación de felicidad y de realización que jamás pensé podría sentir. El 2016 y sólo 1 año después, clasifiqué al Campeonato Mundial de Ironman 70.3 para representar a Chile. Para mi sorpresa y la de muchos más, terminé esta carrera como subcampeón del mundo en mi categoría. El 2017 y a los 37 años, repetí esta hazaña convirtiéndome en 2x subcampeón del mundo</p>
					<div class="pie-de-caja bloque-gris"></div>
				</div>	
				<div class="caja-texto-sombra mb-30">
					<div class="linea-azul-xs clearfix"> </div>
					<p>Burn to Give es un proyecto que nace a través de lo que me ha tocado vivir en distintos momentos de mi vida, y concentra todo lo que me mueve y apasiona. Por un lado, hacer deporte y llevar una vida saludable y activa. Por el otro, la satisfacción de ayudar a los demás, sin recibir nada a cambio. Mi sueño es motivar a millones de personas a llevar una vida sana y activa, inspiradas por el deseo de ayudar a quienes más lo necesitan.</p>
					<p><strong>Eduardo della Maggiora</strong><br>
						Chief Calorie Giver
						</p>
					<div class="pie-de-caja bloque-gris"></div>
				</div>				
				<?php } ?>

			</div>
		</div>
		<!-- <a href="">
			<img class="center-block" src="assets/img/down.png" alt="">
		</a> -->
	</section>
	<section class="problema" id="problema">
		<div class="container mw">
			<h2 class="titulo-azul"><?php if($lang=='en'){ ?>THE PROBLEM<?php }else{ ?>el problema<?php } ?></h2>
			<div class="row position-relative">
				<img class="img-responsive bg-obesidad" src="assets/img/bg-obesidad.jpg" alt="">
				<h3><?php if($lang=='en'){ ?>Obesity<?php }else{ ?>Obesidad<?php } ?></h3>
				<div class="caja-texto-sombra mb-30">
				<?php if($lang=='es'){ ?>
					<h4>En el mundo</h4>
				<?php } ?>
					<ul>
					<?php if($lang=='en'){ ?>
						<li>Obesity has tripled since 1975</li>
						<li>Close to one third of human population (more than 2 billion people) is overweight or obese</li>
						<li>65% of people worldwide live in countries where obesity kills more people than undernutrition </li>
					<?php }else{ ?>
						<li>La obesidad en el mundo se ha tri-plicado desde 1975</li>
						<li>Cerca de un tercio de la población mundial (más de 2 billones de personas) tiene sobrepeso u obesidad</li>
						<li>El 65% de la población mundial vive en países donde el sobrepeso y obesidad mata a más personas que la desnutrición</li>
					<?php } ?>
					</ul>
					<div class="pie-de-caja bloque-gris"> </div>
				</div>
				<?php if($lang=='es'){ ?>
				<div class="caja-texto-sombra mb-30">
					<h4>En Chile</h4>
					<ul>
						<li>Chile ocupa el #1 lugar en obesidad infantil en Latinoamérica, y el #6 a nivel mundial</li>
						<li>35% de niños menores de 6 años presentan sobrepeso u obesidad,
						duplicando las cifras de hace 10 años</li>
						<li>Tres de cada cuatro Chilenos están excedidos de peso y el 87% tiene hábitos sedentarios (definido como no hacer deporte en los últimos 30 días)</li>
					</ul>

					<div class="pie-de-caja bloque-gris"></div>
				</div>
				<?php } ?>
		</div>
			<div class="row position-relative">
				<img class="img-responsive bg-obesidad" src="assets/img/bg-desnutricion.jpg" alt="">
				<h3><?php if($lang=='en'){ ?>Malnutrition <?php }else{ ?>desnutrición<?php } ?></h3>
				<div class="caja-texto-sombra mb-30">
				<?php if($lang=='es'){ ?>
					<h4>En el mundo</h4>
				<?php } ?>
					<ul>
					<?php if($lang=='en'){ ?>
						<li>155 Million children suffer from malnutrition in the world (17 Million children suffer from severe acute malnutrition)</li>
						<li>Close to 50% of deaths among children under 5 years old worldwide are linked to under-nutrition</li>
						<li>Every 10 seconds, a child dies from malnutrition </li>
						<li>A solution exists and is called RUTF (Ready to Use Therapeutic Food), a nutrient- and energy-rich peanut-based paste that helps treat dangerous nutritional deficiencies in children</li>
						<li>A 6-week feeding program on RUTF, permanently eliminates malnutrition for 95% of children</li>
					<?php }else{ ?>
						<li>155 millones de niños en el mundo sufren de desnutrición (17 millones de desnutrición severa)</li>
						<li>50% de las muertes de niños menores de 5 años en el mundo están directamente relacionadas con la desnutrición</li>
						<li>Cada 10 segundos, un niño muere a causa de la desnutrición en el mundo</li>
						<li>Existe una solución, se llama RUTF (Ready to Use Therapeutic Food) alimento en base a mantequilla de maní y que cuenta con los nutrientes básicos para un niño con desnutrición</li>
						<li>Un programa de alimentación de 6-8 semanas (2-3 paquetes de 500-calorías al día) en base a RUTF, elimina de manera permanente la desnutrición infantil en un 95% de los casos</li>
					<?php } ?>
					</ul>
					<div class="pie-de-caja bloque-gris"> </div>
				</div>
				<?php if($lang=='es'){ ?>
				<div class="caja-texto-sombra mb-30">
					<h4>En Haití</h4>
					<ul>
						<li>Actualmente 1 de cada 5 niños en Haití está desnutrido (1 de cada 10 niños está severamente desnutrido)</li>
						<li>1 de cada 14 niños en Haití va a morir antes de los 5 años debido a la desnutrición</li>
						<li>De los 10 millones de habitantes viviendo en Haití, más de un tercio tiene menos de 14 años</li>
					</ul>

					<div class="pie-de-caja bloque-gris"></div>
				</div>
				<?php } ?>
		</div>
	</div>
		<a href="">
			<img class="center-block" src="assets/img/down.png" alt="">
		</a>
	</section>
	<section class="empresas fondo-azul" id="empresas">
		<div class="container mw">
			<div class="row position-relative">
				<h2><?php if($lang=='en'){ ?>COMPANIES<?php }else{ ?>Empresas<?php } ?></h2>
				<?php if($lang=='en'){ ?>
				<p>Visionary and forward-thinking brands are needed to convert all the calories burned into emergency nutrition. These companies are investing in our Burn to Give team with a double purpose; motivate millions of people lead a healthy and active lifestyle, and at the same time feed thousands of children around the world</p>
				<p class="texto-amarillo"> We wouldn’t be able to do this<br>without your help!</p>
				<?php }else{ ?>
				<p>Para convertir las calorías quemadas en nutrición de urgencia, se necesitan
				empresas visionarias e innovadoras que patrocinen estas calorías que las personas
				están donando. Al hacerlo están generando un doble impacto en la sociedad,
				por una parte están motivando a miles de personas a llevar una vida sana y
				activa y por otro lado están contribuyendo a alimentar a miles de niños alrededor del mundo. </p>
				<p class="texto-amarillo"> ¡No podríamos hacer esto <br> sin su apoyo!</p>
				<?php } ?>
				<div class="col-sm-12">
					<img src="assets/img/logos_footer.png" class="img-responsive">
				</div>
<!--
				<ul>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/02.png" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/04.png" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/11.png" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/09.png" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/08.png" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/12.png" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/10.png" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/merrel.jpg" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/14.png" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/03.png" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/07.png" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/05.png" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/01.png" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/endurance.jpg" alt=""></a></li>
					<li><a href=""><img class="img-responsive" src="assets/img/logos-empresas/06.png" alt=""></a></li>

https://www.enjoy.cl/
https://ventumracing.com/
https://www.walmartchile.cl/
https://www.cocacoladechile.cl/productos/powerade
https://simple.ripley.cl/
https://www.paz.cl/
https://www.facebook.com/Capitalizarme/
http://www.merrell.cl/
http://www.youtopia.club/
http://www.xterrachile.com/
https://www.k1.cl/
https://firstendurance.com
http://www.sansport.com/marca/taymory
http://www.tyndallgroup.com/


				</ul>
-->
			</div>
		</div>
	</section>
	<section class="preguntas" id="faq">
		<img class="img-responsive bg-faq" src="assets/img/bg-faq.jpg" alt="">
		<div class="container mw">
			<div class="row">
				<h2><?php if($lang=='en'){ ?>FAQ<?php }else{ ?>preguntas <br> frecuentes<?php } ?></h2>
				<div class="caja-texto-sombra">
					<?php if($lang=='en'){ include('faq-eng.php'); }else{ include('faq-esp.php'); }?>
					<div class="pie-de-caja bloque-gris"></div>
				</div>
			</div>
		</div>

	</section>

	<footer class="bg-footer">
		<div class="container-fluid">
			<div class="row">
				<!--
<div class="col-sm-12 text-center">
					<?php if($lang=='en'){ ?>
						<p>Companies that are converting  <br>
						your calories into nutrition </p>
					<?php }else{ ?>
						<p>Empresas que transforman <br>
						tus calorias en alimento</p>
					<?php } ?>
						
				</div>
-->
			</div>
			<section class="logos-footer clearfix">
				<!-- <img class="img-responsive center-block grilla-logos" src="assets/img/logos_footer.png" alt=""> -->
				<img class="logo-footer center-block" src="assets/img/logo-footer.png" alt="Burn to give">
				<p class="copy">© 2018 Burn to give <br>
				Versión 0.1 Beta</p>
				<p><small>
					<?php 
						
						  $ip = $_SERVER["REMOTE_ADDR"];
						  echo "IP: " . $ip . "<br />";
						
						  echo getCountryFromIP($ip, " NamE ");
						  echo "<br />\n";
						
					?>
				</small></p>
			</section> <!-- logos footer -->
		</div>
	</footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="//code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/vendor/jquery.form.min.js"></script>
	<script src="assets/vendor/jquery.validate.min.js"></script>
	<script src="assets/vendor/jquery.maskedinput.js"></script>
	<script src="assets/vendor/sweetalert.min.js"></script>
	<script src="assets/js/app.js"></script>
</body>
</html>
