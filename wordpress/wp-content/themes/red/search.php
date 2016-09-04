<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
	<div class="alert alert-warning">
		<?php _e('Sorry, no results were found.', 'sage'); ?>
	</div>
	<?php get_search_form(); ?>
<?php else: ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class(); ?>>
			<header>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php if (get_post_type() === 'post') { get_template_part('templates/article-meta'); } ?>
			</header>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div>
		</article>
	<?php endwhile; ?>
<?php endif; ?>

<?php the_posts_navigation(); ?>
