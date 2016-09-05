<?php include('incs/head.php'); ?>

<h4>Oportunidades [trazendo os posts de oportunidades]</h4>

<?php 
$wp_query = new WP_Query();
query_posts( array( 'post_type' => 'oportunidade' ));
while ($wp_query->have_posts()) : $wp_query->the_post();
?>
<ul>
    <li>
    <?php the_title();?>
    <?php the_content();?>
    </li>
</ul>
<?php 
endwhile; ?>

<?php include('incs/footer.php'); ?>


