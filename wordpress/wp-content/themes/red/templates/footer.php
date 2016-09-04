<footer class="footer" role="contentinfo">
	<div class="container">
		<div row position-xs="top" align-xs="center">
			<section col size-md="2" size-sm="3" class="footer__logo">
				<a href="<?php esc_url(home_url('/')); ?>">
					<img src="<?php echo get_stylesheet_directory_uri().'/dist/images/logo.svg'; ?>" alt="RED" class="h-img-responsive"/>
				</a>
			</section>
			<section col size-md="5" size-sm="8" class="footer__links">
				<div row>
					<nav col size-sm role="navigation" class="txt--xs-center txt--sm-left">
						<?php
						if (has_nav_menu('footer_nav'))
						{
							wp_nav_menu(['theme_location' => 'footer_nav', 'menu_class' => 'footer__menu']);
						}
						?>
					</nav>
					<div col size-sm size-xs="12" class="footer__partners txt--xs-center">
						<span class="title title--tiny">Parceiros Globais:</span>
						<img src="<?php echo get_stylesheet_directory_uri().'/dist/images/partner.png'; ?>" alt="Parceiros Globais" width="73" height="63" class="h-img-responsive h-center-block"/>

					</div>
					<div col size-sm size-xs="12" class="footer__social txt--xs-center txt--sm-left">
						<span class="title title--tiny">Conecte-se</span>
						<ul class="h-inline-list">
							<li><a href="#" class="icon icon--white symbol--facebook"></a></li>
							<li><a href="#" class="icon icon--white symbol--linkedin"></a></li>
						</ul>
					</div>
				</div>
			</section>
			<section col="" size-md="4" offset-sm="1" class="footer__places txt--xs-center">
				<ul row position-xs="bottom">
					<li col size>
						<img src="<?php echo get_stylesheet_directory_uri().'/dist/images/sp.svg'; ?>" alt="SP" class="h-img-responsive h-center-block" width="86"/>
						<span class="title title--tiny">São Paulo</span>
					</li>
					<li col size>
						<img src="<?php echo get_stylesheet_directory_uri().'/dist/images/rj.svg'; ?>" alt="RJ" class="h-img-responsive h-center-block" width="86"/>
						<span class="title title--tiny">Rio de Janeiro</span>
					</li>
					<li col size>
						<img src="<?php echo get_stylesheet_directory_uri().'/dist/images/ctb.svg'; ?>" alt="CTB" class="h-img-responsive h-center-block" width="86"/>
						<span class="title title--tiny">Curitiba</span>
					</li>
				</ul>
			</section>
		</div>
		<div row>
			<div col size-xs="12" size-md="10" offset-md="2">
				<div class="footer__copyright txt--xs-right">
					&copy; RED CONSULTING
				</div>
			</div>
		</div>
	</div>
</footer>
