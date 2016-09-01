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

	<footer id="footer" role="contentinfo">
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
</body>
</html>
