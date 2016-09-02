<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<script src="https://use.fontawesome.com/bb4a39399c.js"></script>
</head>

<body <?php body_class(); ?>>
	<div class="hero-container">
		<div class="bg-container">
			<div class="hero-bg"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-3 col-xs-6 animated fadeInDown">
					<div class="brand">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><p><?php bloginfo( 'name' ); ?></p></a>
					</div>
				</div>
				<div class="col-md-10 col-sm-9 col-xs-6">
					<div class="pull-right secondary-nav">
						<ul id="social" class="animated fadeInDown">
							<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
						<a href="#" class="translate-icon hidden-xs animated fadeInDown">EN</a>
					</div>
					<div class="pull-right hidden-sm hidden-xs animated fadeInDown">
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
				</div>
					<div class="hidden-lg hidden-md" id="hamburguer-container">
						<div class="hamburguer pull-right">
						  <span class="hamburguer-item"></span>
						  <span class="hamburguer-item"></span>
						  <span class="hamburguer-item"></span>
						</div>
						<div class="dropdown-hamburguer">
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
					</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="hero-content wow fadeIn">
						<h1>Dedicação e superação</h1>
						<div class="col-lg-10 subtitle-hero">
							<h3>Apresentamos aos nossos clientes soluções que permitam formar equipes e estruturas de alta performance.</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 red-numbers wow fadeIn">
					<div class="red-numbers-header">
						<h4>Red em números</h4>
					</div>
					<div class="red-numbers-content">
						<div class="red-numbers-item">
							<h3 id="days">0</h3>
							<p>Dias para entrega de lista de candidatos</p>
						</div>
						<div class="red-numbers-item">
							<h3><span id="clients">91</span>%</h3>
							<p>Dos clientes da Red são recorrentes</p>
						</div>
						<div class="red-numbers-item">
							<h3><span id="social-media">93</span>%</h3>
							<p>Recrutamento ativo. Vamos além das redes sociais.</p>
						</div>
						<div class="red-numbers-item">
							<h3><span id="right">95</span>%</h3>
							<p>De assertividade em nossas contratações.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
