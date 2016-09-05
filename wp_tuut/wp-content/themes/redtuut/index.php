<?php include('incs/head.php'); ?>
          
        <div class="noticias"><!-- NOTICIAS -->

            <!-- noticias em destaque -->
            <div class="col-md-6 destaque">
               <h2>RED EM DESTAQUE</h2>
               <?php query_posts('category_name=em-destaque&showposts=1') ?>
               <?php if (have_posts()) : while (have_posts()) : the_post();?>
               <a class="link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
               <article>
                   <?php 
                   if(has_post_thumbnail()){
                       echo '<figure>';
                       the_post_thumbnail('Imgpost', array('class' => 'img-responsive' ));
                       echo '</figure>';
                   } ?>
                 <span class="data"><?php the_date('d/m/Y'); ?></span>
                 <span class="titulo"><?php the_title(); ?></span>
                 <p><?php the_content(); ?></p>
               </article>
                <?php endwhile; ?>
                <?php endif; ?>
              </a>
               
            </div>
            <!-- noticias em destaque -->

            <!-- noticias em geral|todas -->
            <div class="col-md-6 geral">
              <h2>NOTÍCIAS<a href="javascriptvoid();" class="todas">VER TODAS</a></h2>
              <?php $wp_query = new WP_Query();
              query_posts( array( 'post_type' => 'post', 'cat' => -2, 'showposts' => 2)); 
              while($wp_query->have_posts()) : $wp_query->the_post();
              ?>
                <a class="link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                 <article>
                   <span class="data"><?php echo get_the_date('d/m/Y'); ?></span>
                   <span class="titulo"><?php the_title(); ?></span>
                   <p><?php the_content(); ?></p>
                 </article>
                 <!--<span class="divider"></span>-->
                </a>
              <?php
              endwhile;
              wp_reset_postdata();
              ?>
            </div>
            <!-- noticias em geral|todas -->

          </div><!-- NOTICIAS -->
        
<?php include('incs/footer.php');
