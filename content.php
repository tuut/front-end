<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-link">
		<?php the_post_thumbnail(); ?>
			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php odin_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
			
			<?php
				the_title( '<h2 class="entry-title">', '</h2>' );
			?>

		<?php if ( is_search() ) : ?>
				<?php the_excerpt(); ?>
		<?php else : ?>
				<?php
					the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'odin' ) );
				?>
		<?php endif; ?>
	</a>
</article><!-- #post-## -->
