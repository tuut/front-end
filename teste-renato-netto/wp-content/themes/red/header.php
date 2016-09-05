<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type"  charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width">
<title>RED</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<section class="banner">
  <header>
    <div class="container">
      <div class="row">
        <div class="col grid_2" >
        <h1 class="logo">
          <?php
// check to see if the logo exists and add it to the page
if ( get_theme_mod( 'your_theme_logo' ) ) : ?>
          <img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
          <?php // add a fallback if the logo doesn't exist
else : ?>
</h1>
          <h1 class="site-title">
            <?php bloginfo( 'name' ); ?>
          </h1>
          <?php endif; ?>
        </div>
        <div class="col grid_10">
          <div class="menu-little"> <a href="#" class="icon-lupa"></a> <a href="#" class="icon-facebook"></a> <a href="#" class="icon-linkedin"></a> <a href="#">EN</a> </div>
          <nav class="menu">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
        </div>
      </div>
    </div>
  </header>
