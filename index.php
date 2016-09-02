<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<div class="content-title wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 hidden-xs">
				<h3>Red em destaque</h3>
			</div>
			<div class="col-md-6 col-sm-6">
				<h3 class="pull-left">Notícias</h3>
				<a href="#" class="pull-right">Ver todas</a>
			</div>
		</div>
	</div>
</div>
<div class="index-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<main id="content" tabindex="-1" role="main">

						<?php
							if ( have_posts() ) :
								// Start the Loop.
								while ( have_posts() ) : the_post();

									/*
									 * Include the post format-specific template for the content. If you want to
									 * use this in a child theme, then include a file called called content-___.php
									 * (where ___ is the post format) and that will be used instead.
									 */
									get_template_part( 'content', get_post_format() );

								endwhile;

								// Post navigation.
								odin_paging_nav();

							else :
								// If no content, include the "No posts found" template.
								get_template_part( 'content', 'none' );

							endif;
						?>
				</main><!-- #content -->
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
