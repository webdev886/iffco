<?php get_header(); ?>

<div class="section half-height">                
    <div class="parallax-blog-pages"></div>    
    <div class="hero-wrap-pages">
        <div class="container">
            <div class="twelve columns">
                <?php
                    the_archive_title( '<h2>', '</h2>' );
                    the_archive_description( '<p class="taxonomy-description">', '</p>' );
                ?>
            </div>
        </div>
    </div>                  
</div>

<div class="section white-background">
    <div class="blog-pages-wrapper smaller-blog-wrapper">
        <div class="width-sidebar-grid">
            <?php 
                while (have_posts()) : the_post();
                get_template_part( 'content', get_post_format() ) ;   // End the loop.
                endwhile;
            ?>
            <div class="clear"></div>
            <nav class="margin-top40" role="navigation">
                <ul class="cd-pagination animated-buttons custom-icons">
                    <?php echo harmonia_pagination(); ?>
                </ul>
            </nav>
        </div>
        <div class="sidebars">
            <div class="sidebar-wrap dark-background">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>