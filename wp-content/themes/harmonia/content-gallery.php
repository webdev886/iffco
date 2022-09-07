<div class="blog-pages-wrap-box full-standard photo">
  <div class="blog-box-2">
    <div id="owl-blog-slider-<?php the_ID() ?>" class="owl-blog-slider-1 owl-carousel owl-theme">
      
      <?php if( function_exists( 'rwmb_meta' ) ) { ?>
        <?php $images = rwmb_meta( '_cmb_images', "type=image" ); ?>
        <?php if($images){ ?>                  
            <?php                                                        
              foreach ( $images as $image ) {                              
            ?>
            <?php $img = $image['full_url']; ?>
              <div class="item"><img src="<?php echo esc_url($img); ?>" alt=""></div> 
            <?php } ?>                                     
        <?php } ?>
      <?php } ?>

    </div>
    <a href="<?php the_permalink(); ?>" class="animsition-link"><?php the_title(); ?></a>
    <div class="subtext"><?php the_time( get_option( 'date_format' ) ); ?>. <?php esc_html_e('by', 'harmonia'); ?> <?php the_author_posts_link(); ?></div>
    <p><?php echo harmonia_excerpt(); ?></p>
    <div class="link-to-post">
      <a href="<?php the_permalink(); ?>" class="animsition-link"><?php esc_html_e('Read More', 'harmonia'); ?></a>
      <p class="blog-comment"><?php comments_number( esc_html__('0 comment', 'harmonia'), esc_html__('1 comment', 'harmonia'), esc_html__('% comments', 'harmonia') ); ?></p>
    </div>
  </div>
</div>
<script type="text/javascript">
  (function($) { "use strict";
    $(document).ready(function() {
      $("#owl-blog-slider-<?php the_ID(); ?>").owlCarousel({
        pagination : true,
        transitionStyle : "fade",
        slideSpeed : 500,
        paginationSpeed : 500,
        singleItem:true,
        autoPlay: 5000
      });
    });
  })(jQuery);
</script>
