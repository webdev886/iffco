<?php
/**
 * Template Name: Portfolio With Title
 */
$subtitle = get_post_meta(get_the_ID(),'_cmb_page_subtitle', true);
get_header(); ?>

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

    <?php if (have_posts()){ ?>
        <?php while (have_posts()) : the_post()?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php }else {
        esc_html_e('Page Canvas For Page Builder', 'harmonia'); 
    }?>

<?php get_footer(); ?>