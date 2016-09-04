<?php
/*
	Template Name: Front Page
*/

get_header(); ?>

<?php if(have_posts()): the_post(); ?>

<?php
	
	$query 		= null;
	$args 		= array('post_type' => 'noticia', 'posts_per_page' => 3);
	$query 		= new WP_Query($args);
	
	if($query->have_posts()):
	endif;
	
?>

<div class="container">

	<div class="row">

		<div class="col-md-6 col-sm-6 hidden-xs">
			<h3><?php echo __("Red em destaque", APP_TD); ?></h3>
		</div>

		<div class="col-md-6 col-sm-6">
			<h3 class="pull-left"><?php echo __("Notícias", APP_TD); ?></h3>
			<a class="pull-right" href="#" title="<?php echo __("Ver todas", APP_TD); ?>"><?php echo __("Ver todas", APP_TD); ?></a>
		</div>

	</div>
	
</div>

<?php endif; ?>

<?php get_footer(); ?>