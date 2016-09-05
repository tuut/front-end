
<footer id="footer" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col grid_2">
        <ul>
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 1') ) : ?>
        </ul>
        <?php endif; ?>
      </div>
      <div class="col grid_5">
        <ul>
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 2') ) : ?>
        </ul>
        <?php endif; ?>
      </div>
      <div class="col grid_5 city">
        <ul>
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 3') ) : ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div id="copyright">
    <div class="container">
      <div class="row">
        <div class="col grid_2"> &nbsp; </div>
        <div class="col grid_10">
          <h5><?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?></h5>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>

<?php wp_footer(); ?>
<script>
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script> 
<script>
$(document).ready(function() {
 $(".close").click(function() {
 $(".lightbox").hide(); 
  });
});
</script>
<script>
$(function() {
  $('.menu li:first-child a').hover(function() {
    $('.banner').addClass('blur');
  }, function() {
    $('.banner').removeClass('blur');
  });
});
</script>

</body></html>