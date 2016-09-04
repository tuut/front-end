<article id="news-<?=the_ID();?>" class="post-noticia">

	<a class="post-link" href="<?php the_permalink(); ?>">
	
		<?php if (has_post_thumbnail()): ?>
		<figure>
			<picture>
				<?php the_post_thumbnail('news-thumbnail', array('class' => 'image-responsive')); ?>
			</picture>
		</figure>
		<?php endif; ?>
		
		<div class="post-info"> 
			<span class="post-date">
				<?php echo get_the_date('d/m/Y'); ?>
			</span> 
		</div>						
		<h2 class="post-title"><?php the_title(); ?></h2>
		<div class="post-content">
			<?php the_excerpt(); ?>
		</div>
	</a>

</article>