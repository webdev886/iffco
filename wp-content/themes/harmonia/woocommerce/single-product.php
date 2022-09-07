<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

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
                    <p><?php $subtitle = rwmb_meta( '_cmb_page_subtitle', "type=text" ); ?><?php echo esc_html($subtitle); ?></p> 
                </div>
            </div>
        </div>                  
    </div>

	<div class="site-content woocommerce">
		
		<?php
			/**
			 * woocommerce_before_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 */
			do_action( 'woocommerce_before_main_content' );
		?>
		<div class="width-sidebar-grid single-shop">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php wc_get_template_part( 'content', 'single-product' ); ?>

			<?php endwhile; // end of the loop. ?>
		</div>

			

		<div class="sidebars sidebars-shop">
            <div class="sidebar-wrap dark-background">
        		<?php
        			/**
        			 * woocommerce_sidebar hook.
        			 *
        			 * @hooked woocommerce_get_sidebar - 10
        			 */
        			do_action( 'woocommerce_sidebar' );
        		?>
            </div>
		</div>
		<?php
			/**
			 * woocommerce_after_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );
		?>	
	</div>

<?php get_footer( 'shop' ); ?>
