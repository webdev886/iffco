<?php global $harmonia_option; get_header(); ?>

<!-- subheader begin -->
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" <?php if($harmonia_option['portfolio_thumbnail'] != ''){ ?> style="background-image: url('<?php echo esc_url($harmonia_option['portfolio_thumbnail']['url']); ?>');" <?php } ?> >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                  <?php printf( __( 'Category: %s', 'harmonia' ), single_cat_title( '', false ) ); ?>
                </h1>
                <?php harmonia_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content">   
  <div id="gallery" class="gallery full-gallery de-gallery pf_full_width <?php if ($harmonia_option['portfolio_columns'] == 2) {echo 'pf_2_cols'; }elseif ($harmonia_option['portfolio_columns'] == 3) { echo 'pf_3_cols'; }elseif ($harmonia_option['portfolio_columns'] == 5) { echo 'pf_5_cols'; }elseif ($harmonia_option['portfolio_columns'] == 6) { echo 'pf_6_cols'; }else{} ?> wow fadeInUp" data-wow-delay=".3s">
        <?php while (have_posts()) : the_post(); ?>             
        <!-- gallery item -->
        <div class="item">
            <div class="picframe">
                <a <?php if($harmonia_option['ajax_work']!=false){ ?>class="simple-ajax-popup-align-top"<?php } ?> href="<?php the_permalink(); ?>">
                    <span class="overlay">
                      <span class="pf_text">
                          <span class="project-name"><?php the_title(); ?></span>
                      </span>
                    </span>
                </a>
                <?php $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id())); ?>
                <img src="<?php echo esc_url($image);?>" alt="">
            </div>
        </div>
        <!-- close gallery item -->
       <?php endwhile; ?>
    </div>
    <div class="container">
      <div class="col-md-12">
          <div class="pagination text-center" style="width:100%;padding-top: 40px;">
              <?php
                  global $wp_query;
                  $big = 999999999;
                  echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages,                      
                      'prev_text' => '<i class="fa fa-angle-double-left"></i>',
                      'next_text' => '<i class="fa fa-angle-double-right"></i>',       
                      'type'          => 'list',
                      'end_size'      => 3,
                      'mid_size'      => 3
                  ) );
              ?>
          </div>
      </div>
    </div>
</div>
<!-- content close -->
<?php get_footer(); ?>
