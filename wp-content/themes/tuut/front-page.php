<?php
/*
	Template Name: Front Page
*/

get_header(); ?>

<?php if(have_posts()): the_post(); ?>


<div id="modal-news" class="modal" style="display:none;">
	<a class="close-modal"><?php echo __('Fechar', APP_TD);?></a>
	<form action="<?php the_permalink(); ?>" id="modal-form" name="modal-form" method="post">
	<input type="hidden" id="_wpnonce" name="_wpnonce" value="<?php echo wp_create_nonce("leadsave"); ?>" />
	<input type="hidden" name="action" id="action" value="leadsave" />

		<div class="modal-title">
			<h2><?php echo __('Receba e-mails com novidades', APP_TD);?></h2>
		</div>
		<div class="modal-body">
			<h3><?php echo __('Para se cadastrar, preencha os campos abaixo:', APP_TD);?></h3>
			<div class="form-group">
				<label for="nome"><?php echo __('Nome completo', APP_TD);?>*</label>
				<input type="text" class="form-control" id="nome" name="nome" placeholder="<?php echo __('Nome completo', APP_TD);?>*" />
			</div>
			<div class="form-group">
				<label for="email"><?php echo __('E-mail', APP_TD);?>*</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="<?php echo __('E-mail', APP_TD);?>*" />
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-default" role="button"><?php echo __('Enviar', APP_TD);?></button>
			</div>
		</div>
	</form>
</div>

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

<?php endif; ?>

<?php get_footer(); ?>