<?php $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true); ?>	

<div class="blog-pages-wrap-box full-standard audio">
    <div class="blog-box-2">
        <?php if(get_the_post_thumbnail()){ ?>
            <a href="<?php the_permalink(); ?>" class="animsition-link">              
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
            </a>
        <?php }else{ ?>
            <div class="margin-bottom-30">
                <iframe style="width:100%" src="<?php echo esc_url( $link_audio ); ?>"></iframe>
            </div>
        <?php } ?>
        <a href="<?php the_permalink(); ?>" class="animsition-link"><?php the_title(); ?></a>
        <div class="subtext"><?php the_time( get_option( 'date_format' ) ); ?>. <?php esc_html_e('by', 'harmonia'); ?> <?php the_author_posts_link(); ?></div>
        <p><?php echo harmonia_excerpt(); ?></p>
        <div class="link-to-post">
            <a href="<?php the_permalink(); ?>" class="animsition-link"><?php esc_html_e('Read More', 'harmonia'); ?></a>
            <p class="blog-comment"><?php comments_number( esc_html__('0 comment', 'harmonia'), esc_html__('1 comment', 'harmonia'), esc_html__('% comments', 'harmonia') ); ?></p>
        </div>
    </div>
</div>
