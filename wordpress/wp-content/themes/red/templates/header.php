<header class="header" role="banner">
	<div class="container container--padded">
		<div row position-xs="top">
			<section col size-md="3" class="header__logo">
				<a href="<?php esc_url(home_url('/')); ?>">
					<img src="<?php echo get_stylesheet_directory_uri().'/dist/images/logo.svg'; ?>" alt="RED" class="h-img-responsive"/>
				</a>
			</section>

			<input type="checkbox" id="header__menu-toggler">
			<label for="header__menu-toggler" class="header__mobile-overlay"></label>
			<label for="header__menu-toggler" class="btn header__mobile-btn"></label>

			<section col size-md="9" class="header__navs">
				<nav class="header__icons txt--xs-center txt--md-right">
					<ul>
						<li><a href="" class="icon icon--squared symbol--search"></a></li>
						<li><a href="" class="icon icon--squared symbol--facebook"></a></li>
						<li><a href="" class="icon icon--squared symbol--linkedin"></a></li>
						<li><a href="" class="icon icon--squared icon--squared--text">EN</a></li>
					</ul>
				</nav>
				<nav role="navigation" class="header__menu-wrapper">
					<?php
					if (has_nav_menu('header_nav'))
					{
						wp_nav_menu(['theme_location' => 'header_nav', 'menu_class' => 'header__menu']);
					}
					?>
				</nav>
			</section>
		</div>
	</div>
</header>
