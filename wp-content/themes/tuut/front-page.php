<?php
/*
	Template Name: Front Page
*/

get_header(); ?>

<div id="modal-news" class="modal" style="display:none;">
	<a class="close-modal"></a>
	<form id="modal-form">
		<div class="modal-title">
			<h2>Receba e-mails com novidades</h2>
		</div>
		<div class="modal-body">
			<h3>Para se cadastrar, preencha os campos abaixo:</h3>
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo*">
			</div>
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="E-mail*">
			</div>
			<div class="form-group">
				<button type="button" class="btn btn-default">Enviar</button>
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

<?php get_footer(); ?>