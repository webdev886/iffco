<?php $quote = get_post_meta(get_the_ID(),'_cmb_quote', true); ?>

<div class="blog-pages-wrap-box full-standard quote">
    <div class="blog-box-2">
        <?php if($quote !=''){?><div class="quote-text"><?php echo esc_html($quote); ?> 
        </div><?php } ?>
        <a href="<?php the_permalink(); ?>" class="animsition-link"><?php the_title(); ?></a>
        <div class="subtext"><?php the_time( get_option( 'date_format' ) ); ?>. <?php esc_html_e('by', 'harmonia'); ?> <?php the_author_posts_link(); ?></div>
        <p><?php echo harmonia_excerpt(); ?></p>
        <div class="link-to-post">
            <a href="<?php the_permalink(); ?>" class="animsition-link"><?php esc_html_e('Read More', 'harmonia'); ?></a>
            <p class="blog-comment"><?php comments_number( esc_html__('0 comment', 'harmonia'), esc_html__('1 comment', 'harmonia'), esc_html__('% comments', 'harmonia') ); ?></p>
        </div>
    </div>
</div>