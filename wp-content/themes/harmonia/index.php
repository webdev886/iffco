<?php 
global $harmonia_option;
global $wp_query;
$subtitle = get_post_meta($wp_query->get_queried_object_id(), '_cmb_page_subtitle', true);
get_header(); ?>
	
<div class="section half-height">                
    <div class="parallax-blog-pages" 
        <?php if( function_exists( 'rwmb_meta' ) ) { ?>       
            <?php                 
                $images = rwmb_meta( '_cmb_subheader_image', 'type=image_advanced&size=full', $wp_query->get_queried_object_id() );            
                if($images != ''){ foreach ( $images as $image ) { 
                $img =  $image['full_url']; ?>
              style="background-image: url('<?php echo esc_url($img); ?>');"
            <?php } } ?>
        <?php } ?>
    ></div>    
    <div class="hero-wrap-pages">
        <div class="container">
            <div class="twelve columns">
                <h2><?php echo get_the_title( get_option( 'page_for_posts' ) ); ?></h2>
                <?php if($subtitle != ''){ ?><p><?php echo esc_attr($subtitle); ?></p><?php } ?>
            </div>
        </div>
    </div>                  
</div>

<div class="section white-background">
    <div class="blog-pages-wrapper smaller-blog-wrapper">
        
        <?php if($harmonia_option['blog_layout']=='left'){ ?>       
            <div class="sidebars">
                <div class="sidebar-wrap dark-background">
                    <?php get_sidebar();?>
                </div>
            </div>
        <?php } ?>

        <div class="<?php if($harmonia_option['blog_layout']=='full'){echo 'twelve columns';}else{echo 'width-sidebar-grid';} ?>">
            <?php 
                while (have_posts()) : the_post();
                get_template_part( 'content', get_post_format() ) ;   // End the loop.
                endwhile;
            ?>
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
<div class="clear"></div>
<div class="section padding-top-bottom-small white-background"> 
    <div class="container">
        <div class="twelve columns blog-nav">
            <nav role="navigation">
                <ul class="cd-pagination animated-buttons custom-icons">
                    <?php echo harmonia_pagination(); ?>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?php get_footer(); ?>
