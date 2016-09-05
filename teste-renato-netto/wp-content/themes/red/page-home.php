<!--?php /* Template name: page-home */ ?-->

<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
</section>
</section>
<section class="content">
<div class="row infos">
<div class="col grid_6 destaque">
<h3>red em destaque</h3>
<div class="post-destaque">
<?php
global $post;
$args = array( 'numberposts' => 1, 'cat' => 4 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
<div class="img-destaque"><?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
the_post_thumbnail( 'full' );
}
?></div>
<div class="content-post">
<span class="date"><?php the_time('d/m/Y'); ?></span>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p><?php the_excerpt(); ?></p>
</div>
<?php endforeach; ?>
</div>
</div>
<div class="col grid_6 noticias">
<h3>notícias <a href="#">ver todas</a></h3>
<?php
global $post;
$args = array( 'numberposts' => 2, 'cat' => 3 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
<div class="post-destaque">
<div class="content-post">
<span class="date"><?php the_time('d/m/Y'); ?></span>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
<hr />
</div>
</div>
<?php endforeach; ?>
</div>
</div>

</div>

</div>
</section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>