
<footer id="footer" class="footer">

	<div class="container">

			<div class="row">

				<div class="col-md-2 col-sm-3 col-sm-3 visible-lg visible-md">
					
					<a href="<?php echo home_url('/'); ?>" class="logo svg">
						<img src="<?php bloginfo('template_url');?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>" class="img-responsive" />
					</a>
					
				</div>

				<div class="col-md-10 col-sm-12 col-xs-12">

					<div class="row">

						<div class="col-md-2 col-sm-2 hidden-xs">
							<?php
								wp_nav_menu(
									[
										'theme_location' => 'navbar-top',
										'depth' => 1,
										'menu_class' => 'nav-footer',
										'container' => false
									]
								);
							?>
						</div>

						<div class="col-md-2 col-sm-2">
							<p class="col-title"><?php echo __('Parceiros globais:', APP_TD); ?></p>
							<div class="logo-partner">
								<img src="<?php bloginfo('template_url');?>/assets/images/partner.png" alt="KGT" class="img-responsive" />
							</div>
						</div>

						<div class="col-md-2 col-sm-2 hidden-xs">
						
							<p class="col-title"><?php echo __("Conecte-se:", APP_TD); ?></p>
							
							<ul class="social-footer">
								<li><a href="#facebook" title="Facebook"><i class="icon-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#linkedin" title="LinkedIn"><i class="icon-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12">

							<div class="cities">
								
								<ul>
								
									<li>
										<figure>
											<picture>
												<img src="<?php bloginfo('template_url');?>/assets/images/sp.svg" alt="<?php bloginfo('name'); ?>" class="img-responsive" />
											</picture>
										</figure>
										<p>São Paulo</p>
									</li>
									
									<li>
										<figure>
											<picture>
												<img src="<?php bloginfo('template_url');?>/assets/images/rj.svg" alt="<?php bloginfo('name'); ?>" class="img-responsive" />
											</picture>
										</figure>
										<p>Rio de Janeiro</p>
									</li>
									
									<li>
										<figure>
											<picture>
												<img src="<?php bloginfo('template_url');?>/assets/images/ctb.svg" alt="<?php bloginfo('name'); ?>" class="img-responsive" />
											</picture>
										</figure>
										<p>Curitiba</p>
									</li>
								
								</ul>
								
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12">
							<div class="copyright">
								<p><?php echo __("© RED CONSULTING", APP_TD); ?></p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>