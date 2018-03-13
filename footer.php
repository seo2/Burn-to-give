	<footer class="bg-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 text-center">
					<?php if($lang=='en'){ ?>
						<p>Companies that are converting  <br>
						your calories into nutrition </p>
					<?php }else{ ?>
						<p>Empresas que transforman <br>
						tus calorías en alimento</p>
					<?php } ?>
						
				</div>
			</div>
			<section class="logos-footer clearfix">
				<img class="img-responsive center-block grilla-logos" src="assets/img/logos_footer.png" alt="">
				<img class="logo-footer center-block" src="assets/img/logo-footer.png" alt="Burn to give">
				<p class="copy">© 2018 Burn to give <br>
				Versión 0.1 Beta</p>
				<p><small>
					<?php 
						
						  
						  echo "IP: " . $ip . "<br />";
						
						  echo getCountryFromIP($ip, " NamE ");
						  echo "<br />\n";
						echo getCountryFromIP($ip, "code");
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
	<script src="assets/js/load-image.all.min.js"></script>
	<script src="assets/js/app.js"></script>
</body>
</html>
