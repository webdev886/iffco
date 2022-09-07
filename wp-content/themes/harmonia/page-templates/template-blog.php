<?php
/**
 * Template Name: Blog
 */

global $harmonia_option;
$subtitle = get_post_meta(get_the_ID(),'_cmb_page_subtitle', true);
get_header(); ?>

<div class="section half-height">                
    <div class="parallax-blog-pages"
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
                $args = array( 
                    'paged' => $paged,
                    'post_type' => 'post',
                );
                                 
                $wp_query = new WP_Query($args);
                while ($wp_query -> have_posts()): $wp_query -> the_post(); 
                    get_template_part( 'content', get_post_format() ) ; 
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
