<?php
/*
	Template Name: Front Page
*/

get_header(); ?>
				
<section id="news">

	<div class="news-header">
	
		<div class="container-fluid">
	
			<div class="row">
	
				<div class="col-sm-6 hidden-xs">
					<h4><?php echo __('Red em destaque', APP_TD); ?></h4>
				</div>
	
				<div class="col-sm-6">
					<h4 class="pull-left"><?php echo __('Notícias', APP_TD); ?></h4>
					<a class="pull-right" href="#"><?php echo __('Ver todos', APP_TD); ?></a>
				</div>
	
			</div>
	
		</div>
	
	</div>

	<div class="news-bg">
		
		<div class="container-fluid">
						
			<div class="row posts">
			
				<?php
					
					$query 	= null;
					$args 	= array('post_type' => 'noticia', 'posts_per_page' => 3);
					$query 	= new WP_Query($args);
					
					if($query->have_posts()):
					
					while($query->have_posts()): $query->the_post();
					
				?>

				<div class="col-sm-6 col-xs-12 post">
				
					<?php get_template_part('loop/noticia'); ?>
						
				</div>
				
				<?php endwhile; endif;  wp_reset_query(); ?>
			
			</div> 
						
		</div>
	
	</div>

</section>

<div id="modal-news" class="modal">
  <p><a id="more" href="#more">More!</a></p>
  <form>
  </form>
</div>

<?php get_footer(); ?>