<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
global $harmonia_option; 
get_header(); ?>

<div class="section full-height">                
    <div class="parallax-404"></div>    
    <div class="hero-wrap-pages">
        <div class="container">
            <div class="twelve columns">
                <h2><?php echo esc_html($harmonia_option['404_title']); ?></h2>
                <p><?php echo esc_html($harmonia_option['404_content']); ?></p> 
            </div>
        </div>
    </div>                  
</div>
<!-- content close -->
<?php get_footer(); ?>