<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

	<footer id="footer" role="contentinfo" class="wow fadeIn">
		<div class="container">
				<div class="row footer-content">
					<div class="col-md-2 col-sm-3 col-sm-3 hidden-xs">
						<div id="logo-footer"></div>
					</div>
					<div class="col-md-10 col-sm-9 col-xs-12">
						<div class="row">
							<div class="col-md-2 col-sm-4 col-xs-6">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'main-menu',
											'depth'          => 2,
											'container'      => false,
											'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
											'walker'         => new Odin_Bootstrap_Nav_Walker()
										)
									);
								?>
							</div>
							<div class="col-md-2 col-sm-4 hidden-xs">
								<p>Parceiros globais:</p>
								<div class="logo-partner"></div>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-6">
								<p>Conecte-se:</p>
								<ul id="social-footer">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="col-md-6 hidden-sm hidden-xs">
								<div class="cities">
									<div class="city">
										<div class="city-icon" id="sp"></div>
										<p>São Paulo</p>
									</div>
									<div class="city">
										<div class="city-icon" id="rio"></div>
										<p>Rio de Janeiro</p>
									</div>
									<div class="city">
										<div class="city-icon" id="ctb"></div>
										<p>Curitiba</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="signature">
									<p class="pull-right"><small>© RED CONSULTING</small></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</footer><!-- #footer -->
	<?php wp_footer(); ?>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.7.1/countUp.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox.js"></script>
	<script>
		new WOW().init();
		var options = {
			  useEasing : true, 
			  useGrouping : true, 
			  separator : ',', 
			  decimal : '.', 
			  prefix : '', 
			  suffix : '' 
			};
			var days = new CountUp("days", 0, 10, 0, 2.5, options);
			var client = new CountUp("clients", 0, 91, 0, 2.5, options);
			var socialMedia = new CountUp("social-media", 0, 93, 0, 2.5, options);
			var right = new CountUp("right", 0, 95, 0, 2.5, options);
			days.start();
			client.start();
			socialMedia.start();
			right.start();
	</script>
</body>
</html>
