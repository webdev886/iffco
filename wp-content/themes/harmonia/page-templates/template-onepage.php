<?php

/*
 * Template Name: One Page
 * Description: A Page Template with a Page Builder design.
 */

get_header('onepage'); ?>

	<?php if (have_posts()){ ?>
		<?php while (have_posts()) : the_post()?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php }else {
		esc_html_e('Page Canvas For Page Builder', 'harmonia'); 
	}?>

<?php get_footer(); ?>