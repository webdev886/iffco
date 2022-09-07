<?php
/*
 * Template Name: Home Split
 * Description: A Page Template with a Page Builder design.
 */
global $hera_option;
get_header(); ?>

<div id="myContainer">
	<?php if (have_posts()){ ?>	
		<?php while (have_posts()) : the_post()?>
			<?php the_content(); ?>				
		<?php endwhile; ?>	
	<?php }else {
		_e('Page Canvas For Page Builder', 'harmonia'); 
	}?>
</div>
<script>
      (function($) { "use strict";
            $(document).ready(function() {
                  $('#myContainer').multiscroll({
                        sectionsColor: ['', '', ''],
                        anchors: ['one', 'tow', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'],
                        menu: '#menu',
                        navigation: true,
                        navigationTooltips: ['', '', '', '', '', '', '', '', '', ''],
                        loopBottom: true,
                        loopTop: true
                  });
            });
      })(jQuery);
</script>
<?php wp_footer(); ?>