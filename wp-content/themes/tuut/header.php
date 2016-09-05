<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<title><?php wp_title('|', true, 'right'); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<meta property="og:url" content="<?php bloginfo('url'); ?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php wp_title('|', true, 'right'); ?>" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />

<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/assets/icon/favicon.ico" />
<link rel="icon" type="image/png" href="<?php bloginfo('template_url');?>/assets/icon/favicon.png" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="background-clipper">
	
		<div class="background-layer-holder">
			<div data-img-set="" class="background-layer background-stretch" id="background-layer" style="background-image: url('<?php echo bloginfo('template_url');?>/assets/images/banner1.jpg');">
		</div>
		
		</div>

		<header id="header">
		
			<div class="container-fluid">
				
				<div class="row">
					
					<div class="col-md-2 col-sm-3 col-xs-6 animated fadeInDown">
						<div class="brand">
							<a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>" class="logo" />
								<img src="<?php bloginfo('template_url');?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>" />
							</a>
						</div>
					</div>
					
					<div class="col-md-10 col-sm-12 col-xs-12">
						
						<div class="row">
						
							<div class="col-lg-12">
						
								<nav class="nav-social">
									<ul class="social-header animated fadeInDown">
										<li><a href="#"><i aria-hidden="true" class="icon-search"></i></a></li>
										<li><a href="#"><i aria-hidden="true" class="icon-facebook"></i></a></li>
										<li><a href="#"><i aria-hidden="true" class="icon-linkedin"></i></a></li>
										<li><a href="#" title="English">EN</a></li>
									</ul>
								</nav>
							
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-lg-12">

								<nav class="menu-toggle">
								  <span class="sr-only"><?php echo __("Toggle navigation", APP_TD); ?></span>
								  <span class="icon-bar"></span>
								  <span class="icon-bar"></span>
								  <span class="icon-bar"></span>
								</nav>
									
								<nav class="nav-top-menu">
									<?php wp_nav_menu([
										'theme_location' => 'navbar-top', 
										'depth' => 2, 
										'menu_id' => 'menu-top', 
										'menu_class' => 'menu-top'
										]); 
									?>
								</nav>
						
							</div>
							
						</div>
						
								
					</div>
					
				</div>
					
			</div>
		
		</header>
		
		<section id="banner">
		
			<div class="container-fluid">
				
				<div class="row">
				
					<div class="col-lg-12">
						
						<div class="caption">
						
							<h1 class="title"><?php echo __("Dedicação e superação", APP_TD); ?></h1>
						
							<div class="subtitle">
								<p><?php echo __("Apresentamos aos nossos clientes soluções que permitam formar equipes e estruturas de alta performance.", APP_TD); ?></p>
							</div>
							
						</div>
						
					</div>
				
				</div>
				
				<div class="row">
					
					<div class="red-numbers">
						
						<div class="col-lg-12 col-xs-12 red-numbers-title">
							<h4><?php echo __("Red em números", APP_TD); ?></h4>
						</div>
						
						<div class="row">
						
							<div class="col-lg-12 red-numbers-body">
						
								<div class="row">
								
									<div class="col-md-3 col-sm-6 col-xs-6 red-number">
										<h3>10</h3>
										<p><?php echo __("Dias para entrega<br />de lista de candidatos", APP_TD); ?></p>
									</div>
								
									<div class="col-md-3 col-sm-6 col-sm-6 col-xs-6 red-number">
										<h3>91%</h3>
										<p><?php echo __("Dos clientes da<br />Red são recorrentes", APP_TD); ?></p>
									</div>
								
									<div class="col-md-3 col-sm-6 col-sm-6 col-xs-6 red-number">
										<h3>93%</h3>
										<p><?php echo __("Recrutamento ativo.<br />Vamos além das<br />redes sociais.", APP_TD); ?></p>
									</div>
								
									<div class="col-md-3 col-sm-6 col-sm-6 col-xs-6 red-number">
										<h3>95%</h3>
										<p><?php echo __("De assertividade em<br />nossas contratações.", APP_TD); ?></p>
									</div>
									
								</div>
									
							</div>
						
						</div>
					</div>
					
				</div>
				
			</div>
	
		</section>

	</div>