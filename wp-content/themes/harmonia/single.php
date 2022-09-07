<?php
 global $harmonia_option;
 $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true);
 $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true);
 $quote = get_post_meta(get_the_ID(),'_cmb_quote', true); 
 $subtitle = get_post_meta(get_the_ID(),'_cmb_page_subtitle', true);
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <div class="section half-height">
    <div class="parallax-about"
        <?php if( function_exists( 'rwmb_meta' ) ) { ?>      
            <?php $images = rwmb_meta( '_cmb_subheader_image', "type=image" ); ?>
            <?php if($images){ foreach ( $images as $image ) { ?>
            <?php 
            $img =  $image['full_url']; ?>
              style="background-image: url('<?php echo esc_url($img); ?>');"
            <?php } } ?>
        <?php } ?>
    ></div>
    
    <div class="hero-wrap-pages">
      <div class="container">
        <div class="twelve columns">
          <h2><?php the_title(); ?></h2>
          <?php if($subtitle != ''){ ?><p><?php echo esc_html($subtitle); ?></p><?php } ?> 
        </div>
      </div>
    </div>          
  </div>
<?php endwhile;?>
  <div class="section padding-bottom-med white-background">
  
    <div class="blog-pages-wrapper smaller-blog-wrapper">

      <?php if($harmonia_option['blog_layout']=='left'){ ?>       
        <div class="sidebars">
            <div class="sidebar-wrap dark-background">
                <?php get_sidebar();?>
            </div>
        </div>
      <?php } ?>

      <div class="<?php if($harmonia_option['blog_layout']=='full'){echo 'twelve columns';}else{echo 'width-sidebar-grid';} ?>">
        <div class="blog-pages-wrap-box full-standard photo">
          <div class="blog-box-2">
            <?php $format = get_post_format(); ?>

            <?php if($format=='audio'){ ?>
              <div class="margin-bottom-30">
                <iframe style="width:100%" src="<?php echo esc_url( $link_audio ); ?>"></iframe>
              </div>
            <?php }elseif($format=='video'){ ?>
              <div class="margin-bottom-30">
                <iframe height="170" src="<?php echo esc_url( $link_video ); ?>"></iframe>
              </div>
            <?php }elseif($format=='gallery'){ ?>
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
            <?php }elseif($format=='image'){ ?>
              <a href="<?php the_permalink(); ?>" class="animsition-link">
                <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                    <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
                    <?php if($images){ ?>              
                    <?php  foreach ( $images as $image ) {  ?>
                        <?php $img = $image['full_url']; ?>
                        <img src="<?php echo esc_url($img); ?>" alt="">
                        <?php } ?>                
                    <?php } ?>
                <?php } ?>
              </a>
            <?php }elseif($format=='quote'){ ?>
              <?php if($quote !=''){?><div class="quote-text"><?php echo get_post_meta(get_the_ID(), "_cmb_quote", true);?></div><?php } ?>
            <?php }else{ ?>
              <?php if ( has_post_thumbnail() ) { ?>
                <a href="<?php the_permalink(); ?>" class="animsition-link">              
                    <?php the_post_thumbnail(); ?>
                </a>
              <?php } ?> 
            <?php } ?>

            
            <div class="subtext"><?php the_time( get_option( 'date_format' ) ); ?>. <?php esc_html_e('by','harmonia') ?> <?php the_author_posts_link() ?></div>
            <div class="entry-content">
              <?php the_content(); ?>
            </div>
            
            <?php wp_link_pages(); ?> 
           
          </div>

          <?php if(has_tag()) { ?>
            <div class="single-tags">
                <i class="fa fa-tags"></i>
                <?php the_tags( '', ', ', '' ); ?>
            </div>
          <?php } ?>

          <?php if ( comments_open()) : ?>
            <div class="num-comments"><?php comments_number( esc_html__('- comment ( 0 )', 'harmonia'), esc_html__('- comment ( 1 )', 'harmonia'), esc_html__('- comments ( % )', 'harmonia') ); ?></div> 
          
              <?php comments_template(); ?>  

          <?php  endif; ?>
        </div>
      </div> 

      <?php if($harmonia_option['blog_layout']=='right'){ ?>       
        <div class="sidebars">
          <div class="sidebar-wrap dark-background">
            <?php get_sidebar();?>
          </div>
        </div>
      <?php } ?>
       
    </div>  
    
  </div>

<?php get_footer(); ?>	





  