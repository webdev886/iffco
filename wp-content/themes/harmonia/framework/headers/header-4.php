<?php global $harmonia_option; ?>
<div class="cd-header">
	<a href="#cd-nav" class="cd-nav-trigger">
		<span class="cd-nav-icon"></span>
		<svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
			<circle fill="transparent" stroke="#000000" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
		</svg>
	</a>
</div>	

<div id="cd-nav" class="cd-nav">
	<div class="cd-navigation-wrapper">
		<div class="cd-half-block">
			<nav>				
				<?php
                    $primary = array(
                        'theme_location'  => 'primary',
                        'menu'            => '',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        'walker'          => new wp_bootstrap_navwalker(),
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul class="cd-primary-nav">%3$s</ul>',
                        'depth'           => 0,
                    );
                    if ( has_nav_menu( 'primary' ) ) {
                        wp_nav_menu( $primary );
                    }
                ?>  
			</nav>
		</div><!-- .cd-half-block -->
		
		<div class="cd-half-block">
			<address><?php echo wp_kses( $harmonia_option['header_text'], wp_kses_allowed_html('post') ); ?></address>
		</div> <!-- .cd-half-block -->
	</div> <!-- .cd-navigation-wrapper -->
</div> <!-- .cd-nav -->	

<script type="text/javascript">
	(function($) { "use strict";
	  	var prevScroll = 0,
		  	curDir = 'down',
		  	prevDir = 'up';
	  
	  	$(window).scroll(function(){
			if($(this).scrollTop() >= prevScroll){
			  curDir = 'down';
			  if(curDir != prevDir){
			  $('.cd-header').stop();
				$('.cd-header').animate({ top: '-150px' }, 300);
			  prevDir = curDir;
			  }
		  	} else {
			  curDir = 'up';
			  if(curDir != prevDir){
			  $('.cd-header').stop();
			  $('.cd-header').animate({ top: '0px' }, 300);
			  prevDir = curDir;
			  }
		  	}
		 	prevScroll = $(this).scrollTop();
	  	});

	  	var isLateralNavAnimating = false;
		
		//open/close lateral navigation
		$('.cd-nav-trigger').on('click', function(event){
			event.preventDefault();
			//stop if nav animation is running 
			if( !isLateralNavAnimating ) {
				if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
				
				$('body').toggleClass('navigation-is-open');
				$('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					//animation is over
					isLateralNavAnimating = false;
				});
			}
		});
	})(jQuery);
</script>