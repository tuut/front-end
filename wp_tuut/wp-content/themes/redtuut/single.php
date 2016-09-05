<?php include('incs/head.php'); ?>

<article>

<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post(); 

if(has_post_thumbnail()){
echo '<figure>';
the_post_thumbnail('Imgpost', array('class' => 'img-responsive' ));
echo '</figure>';
}

?>

<h4><?php the_title(); ?></h4>

<p><?php the_content(); ?></p>

<?php
endwhile;
endif; ?>
</article>

<?php include('incs/footer.php');
