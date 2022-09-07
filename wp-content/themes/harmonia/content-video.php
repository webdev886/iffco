<?php $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true); ?>

<div class="blog-pages-wrap-box full-standard video">
    <div class="blog-box-2">
        <div class="margin-bottom-30">
            <iframe height="170" src="<?php echo esc_url( $link_video ); ?>"></iframe>
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