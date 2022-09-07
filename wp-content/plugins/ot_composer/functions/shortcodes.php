<?php 
// About
add_shortcode('about', 'about_func');
function about_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title'				=>	'',
		'subtitle'			=>	'',
		'title_video'		=>	'',
		'title_number'		=>	'',
		'video'				=>	'',
		'number'			=>	'',
		'author'			=>	'',
		'background_color'	=>	'',
		'text_color'		=>	'',
		'style'				=>	'',
		'photo'				=>	'',
		'align'				=>	'',
		'padding'			=>	'',
		'icon'				=>	'',
		'parallax'			=>	'',
		'linkbox'			=>	'',
		'border_split'      =>	'border_none',
	), $atts));
		$url = vc_build_link( $linkbox );
		$img = wp_get_attachment_image_src($photo,'full');
		$img = $img[0];
		$style1 = (!empty($style) ? $style : 'style1');
		$align1	= (!empty($align) ? $align : 'align1');
		$background_color1 = (!empty($background_color) ? 'background-color: '.$background_color.';' : '');
		$text_color1 = (!empty($text_color) ? ' style="color: '.$text_color.';"' : '');		
	ob_start(); ?>

	<?php if($style1=='style1'){ ?>
	    <div class="<?php if($padding==true){echo 'dark-section-with-title ';} ?>dark-background" style="<?php echo htmlspecialchars_decode($background_color1); ?>">
			<div class="title-text-left bigger-margin">
				<h4<?php echo htmlspecialchars_decode($text_color1); ?>><?php echo htmlspecialchars_decode($title); ?></h4>
				<?php if($subtitle != ''){ ?><p<?php echo htmlspecialchars_decode($text_color1); ?>><?php echo htmlspecialchars_decode($subtitle); ?></p><?php } ?>
			</div>
			<div class="sign-section-left">
				<?php if($content != ''){ ?><p<?php echo htmlspecialchars_decode($text_color1); ?>><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
				<?php if($author != ''){ ?><div class="sign"><?php echo htmlspecialchars_decode($author); ?></div><?php } ?>
				
				<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
						echo '<a href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '"><div class="sign link-sign-cosmetics">' . esc_attr( $url['title'] ).'<span></span></div></a>';
					} ?>
			</div>
		</div>
	<?php } ?>
	<?php if($style1=='style2' || $style1=='style3' || $style1=='style4' || $style1=='style5'){ ?>		
		<div class="section">			
			<div class="<?php if($parallax==true){echo 'prl-about';} ?> <?php if($align1=='align1'){echo 'split-left';} ?><?php if($align1=='align2'){echo 'split-right';} ?>" style="background: url('<?php echo esc_url($img); ?>') <?php if($parallax==true){echo 'repeat fixed';} ?>;">
				<?php if ($border_split == 'border_image') {
					echo '<div class="split-mask"></div>';
				} ?>				
				
				<?php if($style1=='style3'){ ?>	
					<div class="split-text-wrap">											
						<div class="play-video">
							<p><?php echo htmlspecialchars_decode($title_video); ?></p>
							<a href="<?php echo esc_url($video); ?>" class="fancybox  fancybox.iframe"><div class="button icon-control-play"></div></a>
						</div>	
					</div>					
				<?php } ?>
				<?php if($style1=='style4'){ ?>
					<div class="split-text-wrap">
						<div class="count-box-1">
							<div class="icons <?php echo esc_attr($icon); ?>"></div>
							<h3><span class="counter-facts"><?php echo esc_attr($number); ?></span></h3>
							<p><?php echo htmlspecialchars_decode($title_number); ?></p>
						</div>
					</div>
				<?php } ?>
				<?php if($style1=='style5'){ ?>
					<div class="split-text-wrap">
						<div id="owl-quote" class="owl-quote owl-carousel owl-theme">
							<?php			
								$args = array(
									'post_type' => 'testimonial',
									'posts_per_page' => $number1,
								);
								$testimonial = new WP_Query($args);
								if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post();
							?>

							<div class="item">
								<?php the_content(); ?>
								<h6>- <?php the_title(); ?> -</h6>
							</div>

							<?php endwhile; wp_reset_postdata(); endif; ?>				 
						</div>
					</div>
					<script>
						(function($) { "use strict";
							$(document).ready(function() {
								$("#owl-quote").owlCarousel({
									pagination : true,
									transitionStyle : "fade",
									slideSpeed : 500,
									paginationSpeed : 500,
									singleItem:true,
									autoPlay: 5000
								});	
							});	
						})(jQuery); 
					</script>
				<?php } ?>
				
			</div>
			<div class="<?php if($align1=='align1'){echo 'split-left';} ?><?php if($align1=='align2'){echo 'split-right';} ?> dark-background" style="<?php echo htmlspecialchars_decode($background_color1); ?>">
				<?php if ($border_split == 'border_content') {
					echo '<div class="split-mask"></div>';
				} ?>
				<div class="split-text-wrap">
					<div class="title-text-center bigger-margin">
						<h5<?php echo htmlspecialchars_decode($text_color1); ?>><?php echo htmlspecialchars_decode($title); ?></h5>
						<?php if($subtitle){ ?><p<?php echo htmlspecialchars_decode($text_color1); ?>><?php echo htmlspecialchars_decode($subtitle); ?></p><?php } ?>
					</div>
					<p<?php echo htmlspecialchars_decode($text_color1); ?>><?php echo htmlspecialchars_decode($content); ?></p>
					<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
						echo '<a href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '"><div class="sign link-sign-cosmetics">' . esc_attr( $url['title'] ).'<span></span></div></a>';
					} ?>
				</div>
			</div>
		</div>
	<?php } ?>

<?php
    return ob_get_clean();
}

// Our Team
add_shortcode('team', 'team_func');
function team_func($atts, $content = null){
	extract(shortcode_atts(array(
		'photo'		=> 	'',
		'name'		=>	'',
		'job'		=>	'',
		'contact11'	=>	'',
		'contact12'	=>	'',
		'contact13'	=>	'',
		'contact21'	=>	'',
		'contact22'	=>	'',
		'contact23'	=>	'',
		'url1'		=>	'',
		'url2'		=>	'',
		'url3'		=>	'',
		'style'		=>	'',
		'cstyle'	=>	'',
	), $atts));

		$img = wp_get_attachment_image_src($photo,'full');
		$img = $img[0];
		$style1 = (!empty($style) ? $style : 'style1');
		$cstyle1 = (!empty($cstyle) ? $cstyle : 'cstyle1');

	ob_start(); ?>

	<?php if($style1 == 'style1'){ ?>	
		<div class="team-box-1">
			<img src="<?php echo esc_url($img); ?>" alt="" />
			<div class="mask"></div>
			<?php if($cstyle1=='cstyle1'){ ?>
				<ul>
					<li><a href="<?php echo esc_url($url1); ?>"><?php echo esc_attr($contact11); ?></a></li>
					<?php if($contact12){ ?><li><a href="<?php echo esc_url($url2); ?>"><?php echo esc_attr($contact12); ?></a></li><?php } ?>
					<?php if($contact13){ ?><li><a href="<?php echo esc_url($url3); ?>"><?php echo esc_attr($contact13); ?></a></li><?php } ?>
				</ul>
			<?php } ?>
			<?php if($cstyle1=='cstyle2'){ ?>
				<ul class="business">
					<li><a href="<?php echo esc_url($url1); ?>"><i class="<?php echo esc_attr($contact21); ?>"></i></a></li>
					<?php if($contact22){ ?><li><a href="<?php echo esc_url($url2); ?>"><i class="<?php echo esc_attr($contact22); ?>"></i></a></li><?php } ?>
					<?php if($contact23){ ?><li><a href="<?php echo esc_url($url3); ?>"><i class="<?php echo esc_attr($contact23); ?>"></i></a></li><?php } ?>
				</ul>
			<?php } ?>
			<h6><?php echo htmlspecialchars_decode($name); ?></h6>
			<?php if($job){ ?><div class="subtext"><?php echo htmlspecialchars_decode($job); ?></div><?php } ?>
		</div>
	<?php } ?>
	<?php if($style1 == 'style2'){ ?>
		<div class="team-box-2">
			<div class="team-box-in" style="background-image: url('<?php echo esc_url($img); ?>');"></div>
			<div class="team-box-in arrow darker-background section-shadow">
				<div class="team-info">
					<h6><?php echo htmlspecialchars_decode($name); ?></h6>
					<div class="subtext"><?php echo htmlspecialchars_decode($job); ?></div>
					<?php if($cstyle1=='cstyle1'){ ?>
				<ul>
					<li><a href="<?php echo esc_url($url1); ?>"><?php echo esc_attr($contact11); ?></a></li>
					<?php if($contact12){ ?><li><a href="<?php echo esc_url($url2); ?>"><?php echo esc_attr($contact12); ?></a></li><?php } ?>
					<?php if($contact13){ ?><li><a href="<?php echo esc_url($url3); ?>"><?php echo esc_attr($contact13); ?></a></li><?php } ?>
				</ul>
			<?php } ?>
			<?php if($cstyle1=='cstyle2'){ ?>
				<ul class="business">
					<li><a href="<?php echo esc_url($url1); ?>"><i class="<?php echo esc_attr($contact21); ?>"></i></a></li>
					<?php if($contact22){ ?><li><a href="<?php echo esc_url($url2); ?>"><i class="<?php echo esc_attr($contact22); ?>"></i></a></li><?php } ?>
					<?php if($contact23){ ?><li><a href="<?php echo esc_url($url3); ?>"><i class="<?php echo esc_attr($contact23); ?>"></i></a></li><?php } ?>
				</ul>
			<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>

<?php
    return ob_get_clean();
}

// Skills
add_shortcode('skill', 'skill_func');
function skill_func($atts, $content = null){
	extract(shortcode_atts(array(
		'name1'		=> 	'',
		'per1'		=> 	'',
		'name2'		=>	'',
		'per2'		=>	'',
		'name3'		=>	'',
		'per3'		=>	'',
		'name4'		=>	'',
		'per4'		=>	'',
		'name5'		=>	'',
		'per5'		=>	'',		
	), $atts));

	ob_start(); ?>
	
	<?php if($name1){ ?>	
		<div class="skills-name"><?php echo esc_attr($name1); ?> <span><span class="counter-skills"><?php echo esc_attr($per1); ?></span>%</span></div>
		<div class="pro-bar-container pro-bar-margin">					
			<div class="pro-bar bar-<?php echo esc_attr($per1); ?>" data-pro-bar-percent="<?php echo esc_attr($per1); ?>"></div>
		</div>
	<?php } ?>
	<?php if($name2){ ?>	
		<div class="skills-name"><?php echo esc_attr($name2); ?> <span><span class="counter-skills"><?php echo esc_attr($per2); ?></span>%</span></div>
		<div class="pro-bar-container pro-bar-margin">					
			<div class="pro-bar bar-<?php echo esc_attr($per2); ?>" data-pro-bar-percent="<?php echo esc_attr($per2); ?>"></div>
		</div>
	<?php } ?>
	<?php if($name3){ ?>	
		<div class="skills-name"><?php echo esc_attr($name3); ?> <span><span class="counter-skills"><?php echo esc_attr($per3); ?></span>%</span></div>
		<div class="pro-bar-container pro-bar-margin">					
			<div class="pro-bar bar-<?php echo esc_attr($per3); ?>" data-pro-bar-percent="<?php echo esc_attr($per3); ?>"></div>
		</div>
	<?php } ?>
	<?php if($name4){ ?>	
		<div class="skills-name"><?php echo esc_attr($name4); ?> <span><span class="counter-skills"><?php echo esc_attr($per4); ?></span>%</span></div>
		<div class="pro-bar-container pro-bar-margin">					
			<div class="pro-bar bar-<?php echo esc_attr($per4); ?>" data-pro-bar-percent="<?php echo esc_attr($per4); ?>"></div>
		</div>
	<?php } ?>
	<?php if($name5){ ?>	
		<div class="skills-name"><?php echo esc_attr($name5); ?> <span><span class="counter-skills"><?php echo esc_attr($per5); ?></span>%</span></div>
		<div class="pro-bar-container pro-bar-margin">					
			<div class="pro-bar bar-<?php echo esc_attr($per5); ?>" data-pro-bar-percent="<?php echo esc_attr($per5); ?>"></div>
		</div>
	<?php } ?>
		
<?php
    return ob_get_clean();
}


// Logo Clients
add_shortcode('clients','clients_func');
function clients_func($atts, $content = null){
	extract(shortcode_atts(array(
		'gallery'		  	=> 	'',
		'background_color'	=>	'',
		'visible'		  	=>	'',	
	), $atts));
		$img = wp_get_attachment_image_src($bgimage,'full');
		$img = $img[0];
		$visible1 = (!empty($visible) ? $visible : 4);
		$background_color1 = (!empty($background_color) ? ' style="background-color: '.$background_color.';"' : '');
	ob_start(); ?>
	
		<?php $i=rand(0,9999999); ?>
		<div id="owl-logos-<?php echo esc_attr($i); ?>" class="owl-carousel owl-theme owl-logos">
			<?php 
				$img_ids = explode(",",$gallery);
				foreach( $img_ids AS $img_id ){
				$meta = wp_prepare_attachment_for_js($img_id);
				$caption = $meta['caption'];
				$title = $meta['title'];	
				$description = $meta['description'];
				$image_src = wp_get_attachment_image_src($img_id,''); 
			?>
				<div class="item"<?php echo esc_attr($background_color1); ?>><?php if($caption){ ?><a href="<?php echo esc_url($caption); ?>" target="_blank" ><?php } ?><img src="<?php echo esc_url( $image_src[0] ); ?>" alt=""><?php if($caption){ ?></a><?php } ?></div>
			<?php } ?>
		</div>

		<script>
			(function($) { "use strict";
				$(document).ready(function() {
					$("#owl-logos-<?php echo esc_attr($i); ?>").owlCarousel({
						items : <?php echo esc_attr($visible1); ?>,
						itemsDesktop : [1000,<?php echo esc_attr($visible1); ?>], 
						itemsDesktopSmall : [900,3],
						itemsTablet: [600,2], 
						itemsMobile : false, 
						pagination : false,
						autoPlay : 3000,
						slideSpeed : 300
					});	
				});	
			})(jQuery); 
		</script>

<?php
    return ob_get_clean();	
}

// Video Post
add_shortcode('videoplayer', 'videoplayer_func');
function videoplayer_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title'		=>	'',
		'subtitle'	=>	'',
		'video'		=> 	'',
		'style'		=>	'',
		'photo'		=>	'',
	), $atts));
		$style1 = (!empty($style) ? $style : 'style1');
		$img = wp_get_attachment_image_src($photo,'full');
		$img = $img[0];
	ob_start(); ?>
	
	<?php if($style1=='style1'){ ?>
		<div class="play-video">
			<?php if($title){ ?><h4><?php echo htmlspecialchars_decode($title); ?></h4><?php } ?>
			<?php if($subtitle){ ?><p><?php echo htmlspecialchars_decode($subtitle); ?></p><?php } ?>
			<a href="<?php echo esc_url($video); ?>" class="fancybox  fancybox.iframe"><div class="button icon-control-play"></div></a>
		</div>
	<?php } ?>
	<?php if($style1=='style2'){ ?>
		<figure class="vimeo"> 
			<a href="<?php echo esc_url($video); ?>">
				<img src="<?php echo esc_url($img); ?>" alt="image" />
			</a>
		</figure>
		<script>
			(function($) { "use strict";
				$(document).ready(function() {
					$('.vimeo a,.youtube a').click(function (e) {
						e.preventDefault();
						var videoLink = $(this).attr('href');
						var classeV = $(this).parent();
						var PlaceV = $(this).parent();
						if ($(this).parent().hasClass('youtube')) {
							$(this).parent().wrapAll('<div class="video-wrapper">');
							$(PlaceV).html('<iframe frameborder="0" height="333" src="' + videoLink + '?autoplay=1&showinfo=0" title="YouTube video player" width="547"></iframe>');
						} else {
							$(this).parent().wrapAll('<div class="video-wrapper">');
							$(PlaceV).html('<iframe src="' + videoLink + '?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1&amp;color=cfa144" width="500" height="281" frameborder="0"></iframe>');
						}
					});	
				});	
			})(jQuery); 
		</script>
	<?php } ?>
	
<?php
    return ob_get_clean();
}

// Our Process
add_shortcode('process', 'process_func');
function process_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title'		=>	'',
		'subtitle'	=>	'',
		'photo'		=> 	'',
		'first'		=>	'',
		'number'	=>	'',
		'style'		=>	'',
		'icon'		=>	'',
	), $atts));
		$img = wp_get_attachment_image_src($photo,'full');
		$img = $img[0];
		$style1 = (!empty($style) ? $style : 'style1');
	ob_start(); ?>
	
	<?php if($style1=='style1' || $style1=='style3'){ ?>	
		<div class="process-box-1 <?php if($first!=true){echo 'no-line';} ?>">
			<?php if($photo){ ?><img  src="<?php echo esc_url($img); ?>" alt="" /><?php } ?>
			<?php if($icon){ ?><div class="icons <?php echo esc_attr($icon); ?>"></div><?php } ?>
			<h6><?php echo htmlspecialchars_decode($title); ?></h6>
			<?php if($subtitle){ ?><div class="subtext"><?php echo htmlspecialchars_decode($subtitle); ?></div><?php } ?>
			<?php if($content){ ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
		</div>
	<?php } ?>
	<?php if($style1=='style2'){ ?>	
		<div class="services-box-2">
			<img  src="<?php echo esc_url($img); ?>" alt="" />
			<div class="number"><?php echo esc_attr($number); ?>.</div>
			<h6><?php echo htmlspecialchars_decode($title); ?></h6>
			<div class="subtext"><?php echo htmlspecialchars_decode($subtitle); ?></div>
		</div>
	<?php } ?>
	
<?php
    return ob_get_clean();
}

// Services
add_shortcode('service', 'service_func');
function service_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title'			=>	'',
		'subtitle'		=>	'',
		'icon'			=> 	'',
		'style'			=>	'',
		'size'			=>	'',
		'align'			=>	'',
		'color'			=>	'',
		'text_color'	=>	'',
		'border'		=>	'',
		'el_class'		=>	'',
	), $atts));
		$style1 = (!empty($style) ? $style : 'style1');
		$align1 = (!empty($align) ? $align : 'align1');
		$color1 = (!empty($color) ? 'color:'.$color.';' : '');
		$text_color1 = (!empty($text_color) ? 'style="color:'.$text_color.';"' : '');
		$size1 = (!empty($size) ? 'font-size:'.$size.';' : '');
	ob_start(); ?>
	
	<?php if($style1=='style1'){ ?>	
			<div class="<?php if($align1=='align1'){echo 'about-box-2';} if($align1=='align2'){echo 'about-box-1';} if($align1=='align3'){echo 'services-box-1';}if($border==true){echo ' border-right';} ?> <?php if($el_class){echo esc_attr($el_class);} ?>">
					<div class="icons <?php echo esc_attr($icon); ?>" style="<?php echo esc_attr($color1); ?><?php echo esc_attr($size1); ?>"></div>
					<h6 <?php echo esc_attr($text_color1); ?>><?php echo htmlspecialchars_decode($title); ?></h6>
					<div class="subtext" <?php echo esc_attr($text_color1); ?>><?php echo htmlspecialchars_decode($subtitle); ?></div>
			</div>
	<?php } ?>
	<?php if($style1=='style2'){ ?>	
		<div class="services-box-2 <?php if($el_class){echo esc_attr($el_class);} ?>">
			<div class="icons <?php echo esc_attr($icon); ?>"></div>
			<h6 <?php echo esc_attr($text_color1); ?>><?php echo htmlspecialchars_decode($title); ?></h6>
			<div class="subtext" <?php echo esc_attr($text_color1); ?>><?php echo htmlspecialchars_decode($subtitle); ?></div>
			<p <?php echo esc_attr($text_color1); ?>><?php echo htmlspecialchars_decode($content); ?></p>
		</div>
	<?php } ?>
	
<?php
    return ob_get_clean();
}

// Pricing Tables
add_shortcode('pricingtable','pricing_func');
function pricing_func($atts, $content = null){
    extract( shortcode_atts( array(
      'title'   	=>	'',
      'subtitle'	=>	'',
      'price'		=>	'',
      'time'		=>	'',
      'btntext'		=>	'',
      'btnlink'		=>	'',
      'featured'	=>	'',
      'unit'		=>	'',
      'style'		=>	'',
      'photo'		=>	'',
   ), $atts ) );
    	$style1 = (!empty($style) ? $style : 'style1');
    	$img = wp_get_attachment_image_src($photo,'full');
		$img = $img[0];
    ob_start(); ?>

	<?php if($style1=='style1'){ ?>	
		<div class="pricing-box-1 grey-background">
			<div class="text-top <?php if($featured==true){echo 'dark-background';} ?>">
				<div class="upertext"><?php echo htmlspecialchars_decode($subtitle); ?></div>
				<div class="name"><?php echo htmlspecialchars_decode($title); ?></div>
				<div class="price"><span><?php echo esc_attr($unit); ?></span> <?php echo esc_attr($price); ?> <span><?php echo esc_attr($time); ?></span></div>
			</div>
			<?php echo htmlspecialchars_decode($content); ?>
			<a href="<?php echo esc_url($btnlink); ?>"><div class="button"><?php echo esc_attr($btntext); ?></div></a>
		</div>
	<?php } ?>
	<?php if($style1=='style2'){ ?>
		<div class="services-box-2">
			<img  src="<?php echo esc_url($img); ?>" alt="" />
			<div class="number"><?php echo esc_attr($unit); ?><?php echo esc_attr($price); ?></div>
			<h6><?php echo htmlspecialchars_decode($title); ?></h6>
			<?php if($subtitle){ ?><div class="subtext"><?php echo htmlspecialchars_decode($subtitle); ?></div><?php } ?>
		</div>
	<?php } ?>

<?php
    return ob_get_clean();
}

// Our Facts
add_shortcode('ourfacts', 'ourfacts_func');
function ourfacts_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title'				=> 	'',
		'subtitle'			=>	'',
		'number'    		=> 	'',
		'icon'				=>  '',
		'background_color'	=>	'',
		'text_color'		=>	'',
		'style'				=>	'',
		'percent'			=>	'',
	), $atts));
		$background_color1 = (!empty($background_color) ? ' style="background-color: '.$background_color.';"' : '');
		$text_color1 = (!empty($text_color) ? ' style="color: '.$text_color.';"' : '');
	ob_start(); ?>

	<div class="count-box-1 <?php if($style=='style2'){echo 'busines-profile-counter';}if($style=='style3'){echo 'shop-counter';} ?> dark-background"<?php echo esc_attr($background_color1); ?>>
		 <?php if($icon){ ?><div class="<?php echo esc_attr($icon); ?> icons"<?php echo esc_attr($text_color1); ?>></div><?php } ?>
		<h3><span class="counter-facts"<?php echo esc_attr($text_color1); ?>><?php echo esc_attr($number); ?></span><?php if($percent==true){echo '%';} ?></h3>
		<?php if($title){ ?><h6<?php echo esc_attr($text_color1); ?>><?php echo htmlspecialchars_decode($title); ?></h6><?php } ?>
		<?php if($subtitle){ ?><p<?php echo esc_attr($text_color1); ?>><?php echo htmlspecialchars_decode($subtitle); ?></p><?php } ?>
	</div>

<?php
    return ob_get_clean();
}

// Infomation
add_shortcode('infomation', 'infomation_func');
function infomation_func($atts, $content = null){
	extract(shortcode_atts(array(
		'icon' 		=> '',
		'title' 	=> '',
	), $atts));
	ob_start(); 
?>			
	
    <div class="contact-box-1">
		<div class="icons <?php echo esc_attr($icon); ?>"></div>
		<h6><?php echo htmlspecialchars_decode($title); ?></h6>
		<div class="subtext"><?php echo htmlspecialchars_decode($content); ?></div>
	</div>
	
<?php 
	return ob_get_clean();
}

// Testimonial Silder
add_shortcode('testslide','testslide_func');
function testslide_func($atts, $content = null){
	extract(shortcode_atts(array(
		'number'	=>	'',
		'style'		=>	'',
	), $atts));
		$number1 = (!empty($number) ? $number : '-1');
		$style1 = (!empty($style) ? $style : 'style1');
		$i = rand(0,9999999);
	ob_start(); 
?>
		
	<div id="owl-quote-<?php echo esc_attr($i); ?>" class="owl-quote <?php if($style=='style2'){echo 'owl-quote-1';} ?> owl-carousel owl-theme">
		<?php			
			$args = array(
				'post_type' => 'testimonial',
				'posts_per_page' => $number1,
			);
			$testimonial = new WP_Query($args);
			if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post();
		?>
							 
			<div class="item">
				<?php the_content(); ?>
				<h6>- <?php the_title(); ?> -</h6>
			</div>
		<?php endwhile; wp_reset_postdata(); endif; ?>					 
	</div>
	<script>
		(function($) { "use strict";
			$(document).ready(function() {
				$("#owl-quote-<?php echo esc_attr($i); ?>").owlCarousel({
					pagination : true,
					transitionStyle : "fade",
					slideSpeed : 500,
					paginationSpeed : 500,
					singleItem:true,
					autoPlay: 5000
				});	
			});	
		})(jQuery); 
	</script>

<?php
    return ob_get_clean();
}

// List Style
add_shortcode('list', 'list_func');
function list_func($atts, $content = null){
	extract(shortcode_atts(array(
		'icon' 				=>	'',
		'color'				=>	'',
		'border' 			=>	'',
		'border_color'		=>	'',
		'background_color'	=>	'',
		'title'				=>	'',
	), $atts));
		$color1 = (!empty($color) ? 'color: '.$color.';' : '');
		$border_color1 = (!empty($border_color) ? 'border-color: '.$border_color.';' : '');
		$background_color1 = (!empty($background_color) ? 'background-color: '.$background_color.';' : '');
	ob_start(); 
?>			
	<div class="list-style" <?php if($border==true){echo 'style="margin-bottom:20px;"';} ?>>
	    <div class="icons <?php echo esc_attr($icon); ?> <?php if($border==true){echo 'icon-border';} ?>" style="<?php echo esc_attr($color1); ?><?php echo esc_attr($border_color1); ?><?php echo esc_attr($background_color1); ?>"></div>
		<p<?php if($border==true){echo ' class="border"';} ?>><?php echo htmlspecialchars_decode($title); ?></p>
	</div>
	
<?php 
	return ob_get_clean();
}

// Tabs Style 1
$GLOBALS['tabs'] = array();
add_shortcode('tab_slider', 'tab_slider_func');
function tab_slider_func( $atts, $content ) {
  	extract(shortcode_atts(array(
   		'el_class' 		=>	'',
   		'title_align'	=>	'',
  	), $atts ));
  		//$title_align1 = (!empty($title_align) ? $title_align : 'top');
  	ob_start();
?>
                   
<?php 

  	$GLOBALS['tabs'] = array();
  	do_shortcode( $content );
  	if ( empty( $GLOBALS['tabs'] ) ) {
   		return '';
  	}
   	$content_panel  = array();
   	$content_nav 	= array();
  	$total      	= count( $GLOBALS['tabs'] );  	

  	if ( ! $total ) {
   		return '';
  	}
  
  	foreach( $GLOBALS['tabs'] as $index => $tab ) {

  		if($tab['subtitle']){
	  		$content_panel[] = sprintf(

		   		'<div class="item"><p>%s</p></div>',
			    
		   		esc_attr( $tab['subtitle'] )    
		  	);
		}

  		if($tab['title']){
  			$content_nav[] = sprintf(

		   		'<div class="item">%s</div>',	

		   		esc_attr( $tab['title'] )    
		  	);
  		}
	   	
	} ?>

<?php 
	return sprintf( 
			'<div class="shop-carousel-wrap">
				<div id="sync4" class="sync12 owl-carousel">%s</div>
				<div id="sync3" class="sync11 owl-carousel">%s</div>
			</div>',
			implode('', $content_nav),
			implode('', $content_panel)
		);
?>

<?php 
} 

// Tabs Style 2
$GLOBALS['tabs'] = array();
add_shortcode('tab_slider2', 'tab_slider2_func');
function tab_slider2_func( $atts, $content ) {
  	extract(shortcode_atts(array(
   		'el_class' 		=>	'',
  	), $atts ));

  	ob_start();
?>
                   
<?php 

  	$GLOBALS['tabs'] = array();

  	do_shortcode( $content );

  	if ( empty( $GLOBALS['tabs'] ) ) {
   		return '';
  	}

   	$content_panel  = array();
   	$content_nav 	= array();
  	$total      	= count( $GLOBALS['tabs'] );  	

  	if ( ! $total ) {
   		return '';
  	}
  
  	foreach( $GLOBALS['tabs'] as $index => $tab ) {

  		if($tab['subtitle']){
	  		$content_panel[] = sprintf(

		   		'<div class="item"><p>%s</p></div>',
			    
		   		esc_attr( $tab['subtitle'] )    
		  	);
		}

  		if($tab['title']){
  			$content_nav[] = sprintf(

		   		'<div class="item"><div class="line"></div><div class="line-ver"></div><div class="point-item "></div><p>%s</p></div>',	

		   		esc_attr( $tab['title'] )    
		  	);
  		}
	   	
	} ?>

<?php 
	return sprintf( 
			'<div class="about-carousel-wrap">				
				<div id="sync3" class="sync21 owl-carousel">%s</div>
				<div id="sync4" class="sync22 owl-carousel">%s</div>
			</div>',			
			implode('', $content_panel),
			implode('', $content_nav)
		);
?>

<?php 
} 

//Single Plan
add_shortcode('tab_item', 'tab_item_func');
function tab_item_func( $atts, $content ) {
  $atts = shortcode_atts(array(
   'title'      	=> '',
   'subtitle'       => '',
  ), $atts );

  $GLOBALS['tabs'][] = array(
   'title'      	=> $atts['title'],
   'subtitle'       => $atts['subtitle'],
  );

  return '';
}

// Blog Masonry
add_shortcode('blogma', 'blogma_func');
function blogma_func($atts, $content = null){
	extract(shortcode_atts(array(
		'all'		=> 	'',
		'num'		=> 	'',
		'col'   	=> 	'',
		'fullwidthc'=>	'',
		'style'		=>	'',
	), $atts));
		$all1 	= (!empty($all) ? $all : 'all');
		$num1 	= (!empty($num) ? $num : 8);
		$style1 = (!empty($style) ? $style : 'style1');
	ob_start(); ?>
	
	<?php if($style1 != 'style4'){ ?>
		<div class="section padding-top-bottom-small dark-background">
		    <div class="container">         
		        <div class="twelve columns remove-top remove-bottom">
		            <div id="blog-filter">
		                <ul id="filter">
		                    <li><a href="#" data-filter="*" class="current" title=""><?php echo htmlspecialchars_decode($all1); ?></a></li>
		                        <?php 
		                          $categories = get_terms('category');
		                           foreach( (array)$categories as $categorie){
		                            $cat_name = $categorie->name;
		                            $cat_slug = $categorie->slug;
		                            $cat_count = $categorie->count;
		                          ?>
		                        <li><a href="#" data-filter=".<?php echo htmlspecialchars_decode($cat_slug); ?>" title=""><?php echo htmlspecialchars_decode($cat_name); ?></a></li>
		                      <?php } ?>
		                </ul>
		            </div>
		        </div>  
		    </div>
		</div>
	<?php } ?>
	
	<div class="section white-background">    
	    <div class="blog-pages-wrapper <?php if($style1=='style1' || $style1=='style4'){if($fullwidthc!=true){echo 'smaller-blog-wrapper';}} ?>">
		    <?php if($style1=='style2'){ ?>
		    	<div class="sidebars">
					<div class="sidebar-wrap dark-background">
						<?php get_sidebar();?>
					</div>
				</div>
			<?php } ?>
			<?php if($style1=='style2' || $style1=='style3'){ ?><div class="width-sidebar-grid"><?php } ?>	        
	            <?php                 
	                $args = array(   
	        			'post_type' => 'post',   
	        			'posts_per_page' => $num1,	            
	      			);  
	      			$wp_query = new WP_Query($args);
	      			while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
	      			$cates = get_the_terms(get_the_ID(),'category');
	      			$cate_name ='';
	      			$cate_slug = '';
	          		foreach((array)$cates as $cate){
	          			if(count($cates)>0){
	            			$cate_name .= $cate->name.' ' ;
	            			$cate_slug .= $cate->slug .' ';     
	          			} 
	      			}
	            ?>

	            <div class="blog-pages-wrap-box <?php if($col==2){echo 'half-width';}elseif($col==3){echo 'third-width';}else{} ?> <?php echo esc_attr($cate_slug); ?>">
	                <?php $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true); ?>
	                <?php $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true); ?>
	                <?php $quote = get_post_meta(get_the_ID(),'_cmb_quote', true); ?>
	                <?php $format = get_post_format(); ?>

	                <?php if($format=='audio'){ ?>                    
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
	                                <p class="blog-comment"><?php comments_number(  esc_html__('0 comment', 'harmonia'), esc_html__('1 comment', 'harmonia'), __('% comments', 'harmonia') ); ?></p>
	                            </div>
	                    </div>                    
	                <?php } ?>

	                <?php if($format=='video'){ ?>                    
	                    <div class="blog-box-2">
	                        <div class="margin-bottom-30">
	                            <iframe height="170" src="<?php echo esc_url( $link_video ); ?>"></iframe>
	                        </div>
	                        <a href="<?php the_permalink(); ?>" class="animsition-link"><?php the_title(); ?></a>
	                        <div class="subtext"><?php the_time( get_option( 'date_format' ) ); ?>. <?php esc_html_e('by', 'harmonia'); ?> <?php the_author_posts_link(); ?></div>
	                        <p><?php echo harmonia_excerpt(); ?></p>
	                        <div class="link-to-post">
	                            <a href="<?php the_permalink(); ?>" class="animsition-link"><?php esc_html_e('Read More', 'harmonia'); ?></a>
	                            <p class="blog-comment"><?php comments_number( esc_html__('0 comment', 'harmonia'), esc_html__('1 comment', 'harmonia'), __('% comments', 'harmonia') ); ?></p>
	                        </div>
	                    </div>                    
	                <?php } ?>

	                <?php if($format=='image'){ ?>                    
	                    <div class="blog-box-2">
	                        <a href="<?php the_permalink(); ?>" class="animsition-link">
	                            <?php if( function_exists( 'rwmb_meta' ) ) { ?>
	                                <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
	                                <?php if($images){ ?> 
	                                <?php  foreach ( $images as $image ) {  ?>
	                                    <?php $img = $image['full_url']; ?>
	                                    <img src="<?php echo esc_url($img); ?>" alt="">
	                                    <?php } ?>
	                                <?php } ?>
	                            <?php } ?>
	                        </a>
	                        <a href="<?php the_permalink(); ?>" class="animsition-link"><?php the_title(); ?></a>
	                        <div class="subtext"><?php the_time( get_option( 'date_format' ) ); ?>. <?php esc_html_e('by', 'harmonia'); ?> <?php the_author_posts_link(); ?></div>
	                        <p><?php echo harmonia_excerpt(); ?></p>
	                        <div class="link-to-post">
	                            <a href="<?php the_permalink(); ?>" class="animsition-link"><?php esc_html_e('Read More', 'harmonia'); ?></a>
	                            <p class="blog-comment"><?php comments_number( esc_html__('0 comment', 'harmonia'), esc_html__('1 comment', 'harmonia'), __('% comments', 'harmonia') ); ?></p>
	                        </div>
	                    </div>                    
	                <?php } ?>

	                <?php if($format=='gallery'){ ?>                    
	                    <div class="blog-box-2">
	                        <div id="owl-blog-slider-<?php the_ID() ?>" class="owl-blog-slider-1 owl-carousel owl-theme">
	                            <?php if( function_exists( 'rwmb_meta' ) ) { ?>
	                                <?php $images = rwmb_meta( '_cmb_images', "type=image" ); ?>
	                                <?php if($images){ ?>                  
	                                    <?php foreach ( $images as $image ) { ?>
	                                    <?php $img = $image['full_url']; ?>
	                                    <div class="item"><img src="<?php echo esc_url($img); ?>" alt=""></div> 
	                                    <?php } ?>                                     
	                                <?php } ?>
	                            <?php } ?>
	                        </div>
	                        <a href="<?php the_permalink(); ?>" class="animsition-link"><?php the_title(); ?></a>
	                        <div class="subtext"><?php the_time( get_option( 'date_format' ) ); ?>. <?php esc_html_e('by', 'harmonia'); ?> <?php the_author_posts_link(); ?></div>
	                        <p><?php echo harmonia_excerpt(); ?></p>
	                        <div class="link-to-post">
	                            <a href="<?php the_permalink(); ?>" class="animsition-link"><?php esc_html_e('Read More', 'harmonia'); ?></a>
	                            <p class="blog-comment"><?php comments_number( esc_html__('0 comment', 'harmonia'), esc_html__('1 comment', 'harmonia'), __('% comments', 'harmonia') ); ?></p>
	                        </div>
	                    </div>
	                    
	                    <script type="text/javascript">
	                        (function($) { "use strict";
	                            $(document).ready(function() {
	                                $("#owl-blog-slider-<?php the_ID() ?>").owlCarousel({
	                                    pagination : true,
	                                    transitionStyle : "fade",
	                                    slideSpeed : 500,
	                                    paginationSpeed : 500,
	                                    singleItem:true,
	                                    autoPlay: 5000
	                                });
	                            });
	                        })(jQuery);
	                    </script>
	                <?php } ?>

	                <?php if($format=='quote'){ ?>                    
	                    <div class="blog-box-2">
	                        <div class="quote-text"><?php echo esc_html($quote); ?></div>
	                        <a href="<?php the_permalink(); ?>" class="animsition-link"><?php the_title(); ?></a>
	                        <div class="subtext"><?php the_time( get_option( 'date_format' ) ); ?>. <?php esc_html_e('by', 'harmonia'); ?> <?php the_author_posts_link(); ?></div>
	                        <div class="link-to-post">
	                            <a href="<?php the_permalink(); ?>" class="animsition-link"><?php esc_html_e('Read More', 'harmonia'); ?></a>
	                            <p class="blog-comment"><?php comments_number( esc_html__('0 comment', 'harmonia'), esc_html__('1 comment', 'harmonia'), __('% comments', 'harmonia') ); ?></p>
	                        </div>
	                    </div>                    
	                <?php } ?>
	                
	                <?php if($format=='stadard'){ ?>                    
	                    <div class="blog-box-2">
	                        <?php if(get_the_post_thumbnail()){ ?>
	                            <a href="<?php the_permalink(); ?>" class="animsition-link">              
	                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
	                            </a>
	                        <?php } ?>            
	                        <a href="<?php the_permalink(); ?>" class="animsition-link"><?php the_title(); ?></a>
	                        <div class="subtext"><?php the_time( get_option( 'date_format' ) ); ?>. <?php esc_html_e('by', 'harmonia'); ?> <?php the_author_posts_link(); ?></div>
	                        <p><?php echo harmonia_excerpt(); ?></p>
	                        <div class="link-to-post">
	                            <a href="<?php the_permalink(); ?>" class="animsition-link"><?php esc_html_e('Read More', 'harmonia'); ?></a>
	                            <p class="blog-comment"><?php comments_number( esc_html__('0 comment', 'harmonia'), esc_html__('1 comment', 'harmonia'), __('% comments', 'harmonia') ); ?></p>
	                        </div>
	                    </div>                    
	                <?php } ?>
	            </div>
	            <?php  endwhile; wp_reset_postdata();?>
            <?php if($style1=='style2' || $style1=='style3'){ ?></div><?php } ?>
            <?php if($style1=='style3'){ ?>
		    	<div class="sidebars">
					<div class="sidebar-wrap dark-background">
						<?php get_sidebar();?>
					</div>
				</div>
			<?php } ?>	
	    </div>     
	</div>
	
	<script>
		(function($) { "use strict";			
			$(document).ready(function() {
				var container = $(<?php if($style1=='style2' || $style1=='style3'){echo '".width-sidebar-grid"';}else{echo '".blog-pages-wrapper"';} ?>); 
				function getNumbColumns() { 
					var winWidth = $(window).width(), 
						columnNumb = 1;
					if (winWidth > 1500) {
						columnNumb = 4;
					} else if (winWidth > 1200) {
						columnNumb = 3;
					} else if (winWidth > 900) {
						columnNumb = 2;
					} else if (winWidth > 600) {
						columnNumb = 2;
					} else if (winWidth > 300) {
						columnNumb = 1;
					}					
					return columnNumb;
				}
				function setColumnWidth() { 
					var winWidth = $(window).width(), 
						columnNumb = getNumbColumns(), 
						postWidth = Math.floor(winWidth / columnNumb);
				}
				$('#blog-filter #filter a').click(function () { 
					var selector = $(this).attr('data-filter');					
					$(this).parent().parent().find('a').removeClass('current');
					$(this).addClass('current');					
					container.isotope( { 
						filter : selector 
					});					
					setTimeout(function () { 
						reArrangeProjects();
					}, 300);
					return false;
				});				
				function reArrangeProjects() { 
					setColumnWidth();
				}
				container.imagesLoaded(function () { 
					setColumnWidth();
					container.isotope( { 
						itemSelector : '.blog-pages-wrap-box', 
						layoutMode : 'masonry', 
						resizable : false 
					} );
				} );
				$(window).on('debouncedresize', function () { 
					reArrangeProjects();					
				} );
				var $event = $.event, 
					$special, 
					resizeTimeout;
				$special = $event.special.debouncedresize = { 
					setup : function () { 
						$(this).on('resize', $special.handler);
					}, 
					teardown : function () { 
						$(this).off('resize', $special.handler);
					}, 
					handler : function (event, execAsap) { 
						var context = this, 
							args = arguments, 
							dispatch = function () { 
								event.type = 'debouncedresize';								
								$event.dispatch.apply(context, args);
							};	
						if (resizeTimeout) {
							clearTimeout(resizeTimeout);
						}
						execAsap ? dispatch() : resizeTimeout = setTimeout(dispatch, $special.threshold);
					}, 
					threshold : 150 
				};
			});	
		})(jQuery); 
	</script>

<?php
    return ob_get_clean();
}

// Portfolio Show Style 1
add_shortcode('portfoliof', 'portfoliof_func');
function portfoliof_func($atts, $content = null){
	extract(shortcode_atts(array(
		'all'		=> 	'',
		'num'		=> 	'',
		'col'   	=> 	'',
		'style'		=>	'style1',	
	), $atts));

	$all1 	= (!empty($all) ? $all : 'all');
	$num1 	= (!empty($num) ? $num : 8);
	$col1 	= (!empty($col) ? $col : 5);

	ob_start(); ?>
	
	<?php if($style == 'style1'){ ?>
		<div class="section padding-top-bottom-small dark-background">
			<div class="container">			
				<div class="twelve columns remove-top remove-bottom">
					<div id="portfolio-filter">
						<ul id="filter">
							<li><a href="#" class="current all" data-filter="*" title=""><?php echo htmlspecialchars_decode($all1); ?></a></li>
							<?php 
	                  			$categories = get_terms('categories');
	                   			foreach( (array)$categories as $categorie){
	                    			$cat_name = $categorie->name;
	                    			$cat_slug = $categorie->slug;
	                    			$cat_count = $categorie->count;
	                			?>
	                			<li><a href="#" data-filter=".<?php echo htmlspecialchars_decode( $cat_slug ); ?>" title=""><?php echo htmlspecialchars_decode( $cat_name ); ?></a></li>
	                			<?php } ?>							
						</ul>
					</div>
				</div>	
			</div>
		</div>
	<?php } ?>
		
	<div id="projects-grid-0">			
		
			<?php 
      			$args = array(   
        			'post_type' => 'portfolio',   
        			'posts_per_page' => $num1,	            
      			);  
      			$wp_query = new WP_Query($args);
      			while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
      			$cates = get_the_terms(get_the_ID(),'categories');
      			$cate_name ='';
      			$cate_slug = '';
          		foreach((array)$cates as $cate){
          			if(count($cates)>0){
            			$cate_name .= $cate->name.' ' ;
            			$cate_slug .= $cate->slug .' ';     
          			} 
      			}
    		?> 
    		<?php $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id())); ?>					
			<a href="<?php the_permalink(); ?>" class="animsition-link">					
				<div class="portfolio-box-1 gap-0 <?php if($col1==2){echo 'half-box';} ?><?php if($col1==3){echo 'third-box';} ?><?php if($col1==5){echo 'fifth-box';} ?> <?php echo esc_attr($cate_slug); ?>">
					<img src="<?php echo esc_url($image);?>" alt="">
					<div class="mask">		
						<h6><?php the_title(); ?></h6>
						<p><?php echo esc_attr($cate_slug); ?></p>
					</div>
				</div>
			</a>	
			<?php endwhile; wp_reset_postdata(); ?>			
					
	</div>	

	<script>
		(function($) { "use strict";			
			$(document).ready(function() {
				var $grid = $('#projects-grid-0').imagesLoaded( function() {
				  	$grid.isotope({			  		 	
					    itemSelector: '.portfolio-box-1',
					    percentPosition: true,	
				  	});
				});	         
	            $('#portfolio-filter #filter a').click(function(){
	                $('#portfolio-filter #filter a').removeClass('current');
	                $(this).addClass('current');	         
	                var selector = $(this).attr('data-filter');
	                $grid.isotope({
	                    filter: selector,	                    
	                    animationOptions: {
	                        duration: 750,
	                        easing: 'linear',
	                        queue: false
	                    }
                 	});
                 	return false;
	            });
			});	
		})(jQuery); 
	</script>

<?php
    return ob_get_clean();
}

// Portfolio Show Style 2
add_shortcode('portfoliof2', 'portfoliof2_func');
function portfoliof2_func($atts, $content = null){
	extract(shortcode_atts(array(
		'all'		=> 	'',
		'num'		=> 	'',
		'col'   	=> 	'',
		'style'		=>	'style1',	
	), $atts));

	$all1 	= (!empty($all) ? $all : 'all');
	$num1 	= (!empty($num) ? $num : 8);
	$col1 	= (!empty($col) ? $col : 5);

	ob_start(); ?>
	
	<?php if($style == 'style1'){ ?>
		<div class="section padding-top-bottom-small dark-background">
			<div class="container">			
				<div class="twelve columns remove-top remove-bottom">
					<div id="portfolio-filter">
						<ul id="filter">
							<li><a href="#" class="current all" data-filter="*" title=""><?php echo htmlspecialchars_decode($all1); ?></a></li>
							<?php 
	                  			$categories = get_terms('categories');
	                   			foreach( (array)$categories as $categorie){
	                    			$cat_name = $categorie->name;
	                    			$cat_slug = $categorie->slug;
	                    			$cat_count = $categorie->count;
	                			?>
	                			<li><a href="#" data-filter=".<?php echo htmlspecialchars_decode( $cat_slug ); ?>" title=""><?php echo htmlspecialchars_decode( $cat_name ); ?></a></li>
	                			<?php } ?>							
						</ul>
					</div>
				</div>	
			</div>
		</div>
	<?php } ?>
		
	<div id="projects-grid">			
		
		<?php 
  			$args = array(   
    			'post_type' => 'portfolio',   
    			'posts_per_page' => $num1,	            
  			);  
  			$wp_query = new WP_Query($args);
  			while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
  			$cates = get_the_terms(get_the_ID(),'categories');
  			$cate_name ='';
  			$cate_slug = '';
      		foreach((array)$cates as $cate){
      			if(count($cates)>0){
        			$cate_name .= $cate->name.' ' ;
        			$cate_slug .= $cate->slug .' ';     
      			} 
  			}
		?> 
		<?php $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id())); ?>					
		<a href="<?php the_permalink(); ?>" class="animsition-link">				
			<div class="portfolio-box-1 <?php if($col1==2){echo 'half-box';} ?><?php if($col1==3){echo 'third-box';} ?><?php if($col1==5){echo 'fifth-box';} ?> <?php echo esc_attr($cate_slug); ?>">
				<div class="mask-1"></div>							
				<img src="<?php echo esc_url($image);?>" alt="">
				<h5><?php the_title(); ?></h5>
				<h4><?php echo esc_attr($cate_slug); ?></h4>						
			</div>
		</a>	
		<?php endwhile; wp_reset_postdata(); ?>			
					
	</div>	

	<script>
		(function($) { "use strict";			
			$(document).ready(function() {

				var $grid = $('#projects-grid').imagesLoaded( function() {
				  	$grid.isotope({			  		 	
					    itemSelector: '.portfolio-box-1',
					    percentPosition: true,	
				  	});
				});	
	            $('#portfolio-filter #filter a').click(function(){
	                $('#portfolio-filter #filter a').removeClass('current');
	                $(this).addClass('current');	         
	                var selector = $(this).attr('data-filter');
	                $grid.isotope({
	                    filter: selector,	                    
	                    animationOptions: {
	                        duration: 750,
	                        easing: 'linear',
	                        queue: false
	                    }
                 	});
                 	return false;
	            });
			});	
		})(jQuery); 
	</script>	

<?php
    return ob_get_clean();
}

// Portfolio Show Style 3
add_shortcode('portfoliof3', 'portfoliof3_func');
function portfoliof3_func($atts, $content = null){
	extract(shortcode_atts(array(
		'all'		=> 	'',
		'num'		=> 	'',
		'col'   	=> 	'',
		'style'		=>	'style1',	
	), $atts));

	$all1 	= (!empty($all) ? $all : 'all');
	$num1 	= (!empty($num) ? $num : 8);
	$col1 	= (!empty($col) ? $col : 5);

	ob_start(); ?>
	
	<?php if($style == 'style1'){ ?>
		<div class="section padding-top-bottom-small dark-background">
			<div class="container">			
				<div class="twelve columns remove-top remove-bottom">
					<div id="portfolio-filter">
						<ul id="filter">
							<li><a href="#" class="current all" data-filter="*" title=""><?php echo htmlspecialchars_decode($all1); ?></a></li>
							<?php 
	                  			$categories = get_terms('categories');
	                   			foreach( (array)$categories as $categorie){
	                    			$cat_name = $categorie->name;
	                    			$cat_slug = $categorie->slug;
	                    			$cat_count = $categorie->count;
                			?>
                			<li><a href="#" data-filter=".<?php echo htmlspecialchars_decode( $cat_slug ); ?>" title=""><?php echo htmlspecialchars_decode( $cat_name ); ?></a></li>
                			<?php } ?>							
						</ul>
					</div>
				</div>	
			</div>
		</div>
	<?php } ?>
		
	<div class="portfolio-wrapper">			
		
		<?php 
  			$args = array(   
    			'post_type' => 'portfolio',   
    			'posts_per_page' => $num1,	            
  			);  
  			$wp_query = new WP_Query($args);
  			while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
  			$cates = get_the_terms(get_the_ID(),'categories');
  			$cate_name ='';
  			$cate_slug = '';
      		foreach((array)$cates as $cate){
      			if(count($cates)>0){
        			$cate_name .= $cate->name.' ' ;
        			$cate_slug .= $cate->slug .' ';     
      			} 
  			}
		?> 
		<?php $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id())); ?>					
		<a href="<?php the_permalink(); ?>" class="animsition-link">				
			<div class="portfolio-box-1 gap-1 <?php if($col1==2){echo 'half-box';} ?><?php if($col1==3){echo 'third-box';} ?><?php if($col1==5){echo 'fifth-box';} ?> <?php echo esc_attr($cate_slug); ?>">				
				<img src="<?php echo esc_url($image);?>" alt="">
				<div class="mask">		
					<h6><?php the_title(); ?></h6>
					<p><?php echo esc_attr($cate_slug); ?></p>
				</div>				
			</div>
		</a>	
		<?php endwhile; wp_reset_postdata(); ?>	
	</div>	

	<script>
		(function($) { "use strict";			
			$(document).ready(function() {
				var $grid = $('.portfolio-wrapper').imagesLoaded( function() {
				  	$grid.isotope({			  		 	
					    itemSelector: '.portfolio-box-1',
					    percentPosition: true,	

				  	});
				});			         
	            $('#portfolio-filter #filter a').click(function(){
	                $('#portfolio-filter #filter a').removeClass('current');
	                $(this).addClass('current');	         
	                var selector = $(this).attr('data-filter');
	                $grid.isotope({
	                    filter: selector,	                    
	                    animationOptions: {
	                        duration: 750,
	                        easing: 'linear',
	                        queue: false
	                    }
	                 });
	                 return false;
	            });
			});	
		})(jQuery); 
	</script>	

<?php
    return ob_get_clean();
}

// Portfolio With Siderbar
add_shortcode('portfoliofside', 'portfoliofside_func');
function portfoliofside_func($atts, $content = null){
	extract(shortcode_atts(array(
		'all'		=> 	'',
		'num'		=> 	'',
		'col'   	=> 	'',
		'style'		=>	'style1',
		'layout'	=>	'layout1'	
	), $atts));

	$all1 	= (!empty($all) ? $all : 'all');
	$num1 	= (!empty($num) ? $num : 8);
	$col1 	= (!empty($col) ? $col : 5);

	ob_start(); ?>
	
	<?php if($style == 'style1'){ ?>
		<div class="section padding-top-bottom-small dark-background">
			<div class="container">			
				<div class="twelve columns remove-top remove-bottom">
					<div id="portfolio-filter">
						<ul id="filter">
							<li><a href="#" class="current all" data-filter="*" title=""><?php echo htmlspecialchars_decode($all1); ?></a></li>
							<?php 
	                  			$categories = get_terms('categories');
	                   			foreach( (array)$categories as $categorie){
	                    			$cat_name = $categorie->name;
	                    			$cat_slug = $categorie->slug;
	                    			$cat_count = $categorie->count;
	                			?>
	                			<li><a href="#" data-filter=".<?php echo htmlspecialchars_decode( $cat_slug ); ?>" title=""><?php echo htmlspecialchars_decode( $cat_name ); ?></a></li>
	                			<?php } ?>							
						</ul>
					</div>
				</div>	
			</div>
		</div>
	<?php } ?>
		
	<div id="projects-grid">	
		<?php if($layout=='layout2'){ ?>		
			<div class="sidebars">
				<div class="sidebar-wrap dark-background">
					<?php get_sidebar();?>
				</div>
			</div>
		<?php } ?>
		<div class="width-sidebar-grid">	
			<?php 
	  			$args = array(   
	    			'post_type' => 'portfolio',   
	    			'posts_per_page' => $num1,	            
	  			);  
	  			$wp_query = new WP_Query($args);
	  			while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
	  			$cates = get_the_terms(get_the_ID(),'categories');
	  			$cate_name ='';
	  			$cate_slug = '';
	      		foreach((array)$cates as $cate){
	      			if(count($cates)>0){
	        			$cate_name .= $cate->name.' ' ;
	        			$cate_slug .= $cate->slug .' ';     
	      			} 
	  			}
			?> 
			<?php $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id())); ?>					
			<a href="<?php the_permalink(); ?>" class="animsition-link">				
				<div class="portfolio-box-1 <?php if($col1==2){echo 'half-box';} ?><?php if($col1==3){echo 'third-box';} ?><?php if($col1==5){echo 'fifth-box';} ?> <?php echo esc_attr($cate_slug); ?>">
					<div class="mask-1"></div>							
					<img src="<?php echo esc_url($image);?>" alt="">
					<h5><?php the_title(); ?></h5>
					<h4><?php echo esc_attr($cate_slug); ?></h4>						
				</div>
			</a>	
			<?php endwhile; wp_reset_postdata(); ?>		
		</div>	
		<?php if($layout=='layout1'){ ?>		
			<div class="sidebars">
				<div class="sidebar-wrap dark-background">
					<?php get_sidebar();?>
				</div>
			</div>
		<?php } ?>					
	</div>	

	<script>
		(function($) { "use strict";			
			$(document).ready(function() {

				var $grid = $('.width-sidebar-grid').imagesLoaded( function() {
				  	$grid.isotope({			  		 	
					    itemSelector: '.portfolio-box-1',
					    percentPosition: true,	
				  	});
				});	
	            $('#portfolio-filter #filter a').click(function(){
	                $('#portfolio-filter #filter a').removeClass('current');
	                $(this).addClass('current');	         
	                var selector = $(this).attr('data-filter');
	                $grid.isotope({
	                    filter: selector,	                    
	                    animationOptions: {
	                        duration: 750,
	                        easing: 'linear',
	                        queue: false
	                    }
                 	});
                 	return false;
	            });
			});	
		})(jQuery); 
	</script>	

<?php
    return ob_get_clean();
}

// Portfolio Category
add_shortcode('cate_portfolio', 'cate_portfolio_func');
function cate_portfolio_func($atts, $content = null){
	extract(shortcode_atts(array(
		'show'      =>  '8',
	    'idcate'  	=>  '',
		'col'   	=> 	'',
	), $atts));	
	$col1 	= (!empty($col) ? $col : 5);
	ob_start(); ?> 
	
	<div id="projects-grid-0" >
		
		<?php 						
			$args = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'categories',
						'field' => 'slug',
						'terms' => explode(',',$idcate)
					),
				),
				'post_type' => 'portfolio',
				'showposts' => $show,
			);
			
			$wp_query = new WP_Query($args);					
			while ($wp_query -> have_posts()) : $wp_query -> the_post();  
			$cates = get_the_terms(get_the_ID(),'categories');
			$cate_name ='';
			$cate_slug = '';
				  foreach((array)$cates as $cate){
					if(count($cates)>0){
						$cate_name .= $cate->name.' ' ;
						$cate_slug .= $cate->slug .' ';     
					} 
			} 			
		?>
		<?php $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id())); ?>					
			<a href="<?php the_permalink(); ?>" class="animsition-link">					
				<div class="portfolio-box-1 gap-0 <?php if($col1==2){echo 'half-box';} ?><?php if($col1==3){echo 'third-box';} ?><?php if($col1==5){echo 'fifth-box';} ?> <?php echo esc_attr($cate_slug); ?>">
					<img src="<?php echo esc_url($image);?>" alt="">
					<div class="mask">		
						<h6><?php the_title(); ?></h6>
						<p><?php echo esc_attr($cate_slug); ?></p>
					</div>
				</div>
			</a>
		<?php endwhile; wp_reset_postdata(); ?>		
						
	</div>	

	<script>
		(function($) { "use strict";			
			$(document).ready(function() {
				var $grid = $('#projects-grid-0').imagesLoaded( function() {
				  	$grid.isotope({			  		 	
					    itemSelector: '.portfolio-box-1',
					    percentPosition: true,	
				  	});
				});	         
	            $('#portfolio-filter #filter a').click(function(){
	                $('#portfolio-filter #filter a').removeClass('current');
	                $(this).addClass('current');	         
	                var selector = $(this).attr('data-filter');
	                $grid.isotope({
	                    filter: selector,	                    
	                    animationOptions: {
	                        duration: 750,
	                        easing: 'linear',
	                        queue: false
	                    }
                 	});
                 	return false;
	            });
			});	
		})(jQuery); 
	</script>
    
<?php
    return ob_get_clean();
}

// Portfolio Feature Image
add_shortcode('portfoliofi', 'portfoliofi_func');
function portfoliofi_func($atts, $content = null){
	extract(shortcode_atts(array(
		'all'		=> 	'',
		'num'		=> 	'',
		'col'   	=> 	'',
		'style'		=>	'style1',	
		'padding'	=>	'padding1'
	), $atts));

	$all1 	= (!empty($all) ? $all : 'all');
	$num1 	= (!empty($num) ? $num : 8);
	$col1 	= (!empty($col) ? $col : 5);

	ob_start(); ?>
	
	<?php if($style == 'style1'){ ?>
		<div class="section padding-top-bottom-small dark-background">
			<div class="container">			
				<div class="twelve columns remove-top remove-bottom">
					<div id="portfolio-filter">
						<ul id="filter">
							<li><a href="#" class="current all" data-filter="*" title=""><?php echo htmlspecialchars_decode($all1); ?></a></li>
							<?php 
	                  			$categories = get_terms('categories');
	                   			foreach( (array)$categories as $categorie){
	                    			$cat_name = $categorie->name;
	                    			$cat_slug = $categorie->slug;
	                    			$cat_count = $categorie->count;
	                			?>
	                			<li><a href="#" data-filter=".<?php echo htmlspecialchars_decode( $cat_slug ); ?>" title=""><?php echo htmlspecialchars_decode( $cat_name ); ?></a></li>
	                			<?php } ?>							
						</ul>
					</div>
				</div>	
			</div>
		</div>
	<?php } ?>
		
	<div id="<?php if($padding=='padding1'){echo 'projects-grid';}else{echo 'projects-grid-0';} ?>">			
		<?php 
  			$args = array(   
    			'post_type' => 'portfolio',   
    			'posts_per_page' => $num1,	            
  			);  
  			$wp_query = new WP_Query($args);
  			while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
  			$cates = get_the_terms(get_the_ID(),'categories');
  			$cate_name ='';
  			$cate_slug = '';
      		foreach((array)$cates as $cate){
      			if(count($cates)>0){
        			$cate_name .= $cate->name.' ' ;
        			$cate_slug .= $cate->slug .' ';     
      			} 
  			}
		?> 
		<?php $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id())); ?>	
			<div class="portfolio-box-1 <?php if($padding=='padding2'){echo 'gap-0';} ?> <?php if($col1==2){echo 'half-box';} ?><?php if($col1==3){echo 'third-box';} ?><?php if($col1==5){echo 'fifth-box';} ?> <?php echo esc_attr($cate_slug); ?>">
				<a href="<?php echo esc_url($image); ?>" class="fancybox">
					<div class="zoom"></div>					
				</a>
				<img src="<?php echo esc_url($image);?>" alt="">
			</div>			
		<?php endwhile; wp_reset_postdata(); ?>							
	</div>	

	<script>
		(function($) { "use strict";			
			$(document).ready(function() {

				var $grid = $(<?php if($padding=='padding1'){echo '"#projects-grid"';}else{echo '"#projects-grid-0"';} ?>).imagesLoaded( function() {
				  	$grid.isotope({			  		 	
					    itemSelector: '.portfolio-box-1',
					    percentPosition: true,	

				  	});
				});			
	         
	            $('#portfolio-filter #filter a').click(function(){
	                $('#portfolio-filter #filter a').removeClass('current');
	                $(this).addClass('current');
	         
	                var selector = $(this).attr('data-filter');
	                $grid.isotope({
	                    filter: selector,
	                    
	                    animationOptions: {
	                        duration: 750,
	                        easing: 'linear',
	                        queue: false
	                    }
	                 });
	                 return false;
	            });
			});	
		})(jQuery); 
	</script>
	

<?php
    return ob_get_clean();
}

// Image Carousel
add_shortcode('image_gallery','image_gallery_func');
function image_gallery_func($atts, $content = null){
	extract(shortcode_atts(array(
		'gallery'	=> 	'',
		'columns'	=>	'',
		'zoom'		=>	'',
	), $atts));
		$img = wp_get_attachment_image_src($gallery,'full');
		$img = $img[0];
		$columns1 = (!empty($columns) ? $columns : 1);
		$i = rand(0,99999999);
	ob_start(); ?>
		
		<div id="owl-project-slider<?php echo esc_attr($i); ?>" class="<?php if($columns1=='1'){echo 'owl-project-slider';}else{echo 'owl-project-slider-s';} ?> owl-carousel owl-theme">
			<?php 
				$img_ids = explode(",",$gallery);
				foreach( $img_ids AS $img_id ){
				$meta = wp_prepare_attachment_for_js($img_id);
				$image_src = wp_get_attachment_image_src($img_id,''); 
			?>

			<div class="item">
				<?php if($zoom==true){ ?>
					<a href="<?php echo esc_url( $image_src[0] ); ?>" class="fancybox"><div class="zoom"></div></a>
				<?php } ?>
				<img src="<?php echo esc_url( $image_src[0] ); ?>" alt="">
			</div>  
			<?php } ?>								 
		</div>
		<script>
			(function($) { "use strict";
				$(document).ready(function() {
					$("#owl-project-slider<?php echo esc_attr($i); ?>").owlCarousel({
						pagination : true,
						transitionStyle : "fade",
						slideSpeed : 500,
						paginationSpeed : 500,
						<?php if($columns1=='1'){ ?>
							singleItem : true,
						<?php }else{?>						
							items : <?php echo esc_attr($columns1); ?>,
							itemsDesktop : [1000,<?php echo esc_attr($columns1); ?>], 
							itemsDesktopSmall : [900,<?php echo esc_attr($columns1); ?>],
							itemsTablet: [600,2],
							itemsMobile : false, 
						<?php } ?>						 
						autoPlay: 5000
					});	
				});	
			})(jQuery); 
		</script>

<?php
    return ob_get_clean();	
}

// Image Post
add_shortcode('image_post','image_post_func');
function image_post_func($atts, $content = null){
	extract(shortcode_atts(array(
		'photo'		  	=> 	'',
		'style'			=>	'',
		'title'			=>	'',
		'subtitle'		=>	'',
	), $atts));
		$img 	= wp_get_attachment_image_src($photo,'full');
		$img 	= $img[0];
		$style1 = (!empty($style) ? $style : 'style1');
	ob_start(); ?>
		
		<?php if($style1=='style1' || $style1=='style2' || $style1=='style3' || $style1=='style4' || $style1=='style5'){ ?>
			<div class="tumb-wrap">
				<a href="<?php echo esc_url($img); ?>" class="fancybox">
					<?php if($style1=='style1'){ ?><div class="zoom"></div><?php } ?>
					<?php if($style1=='style2'){ ?><div class="hover-1"></div><?php } ?>
					<?php if($style1=='style3'){ ?><div class="hover-2"><p><?php echo htmlspecialchars_decode($title); ?></p></div><?php } ?>
					<?php if($style1=='style4'){ ?><div class="hover-3"><h6><?php echo htmlspecialchars_decode($title); ?></h6><p><?php echo htmlspecialchars_decode($subtitle); ?></p></div><?php } ?>
					<?php if($style1=='style5'){ ?><div class="hover-5"><h6><?php echo htmlspecialchars_decode($title); ?></h6><p><?php echo htmlspecialchars_decode($subtitle); ?></p></div><?php } ?>
				</a>
				<img src="<?php echo esc_url($img); ?>" alt="">
			</div>
		<?php } ?>
		<?php if($style1=='style6'){ ?>
			<a href="<?php echo esc_url($img); ?>" class="grayscale-wrap fancybox" >
				<img src="<?php echo esc_url($img); ?>" alt=""> 		
			</a>
		<?php } ?>

<?php
    return ob_get_clean();	
}

// Call To Action
add_shortcode('call_to','call_to_func');
function call_to_func($atts, $content = null){
	extract(shortcode_atts(array(
		'style'			=>	'',
		'icon'			=>	'',
		'title'			=>	'',
		'subtitle'		=>	'',
		'linkbox'		=>	'',
	), $atts));
		$url 	= vc_build_link( $linkbox );
		$img 	= wp_get_attachment_image_src($photo,'full');
		$img 	= $img[0];
		$style1 = (!empty($style) ? $style : 'style1');
	ob_start(); ?>
		
		<?php if($style1=='style1'){ ?>
			<div class="call-to-action-3">
				<div class="container">
					<div class="nine columns">
						<?php if($icon){ ?><div class="icons <?php echo esc_attr($icon); ?>"></div><?php } ?>
						<h5><?php echo htmlspecialchars_decode($title); ?></h5>
						<?php if($subtitle){ ?><div class="subtext"><?php echo htmlspecialchars_decode($subtitle); ?></div><?php } ?>
					</div>
					<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
						echo '<div class="two columns"><a class="animsition-link" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '"><div class="button">' . esc_attr( $url['title'] ).'</div></a></div>';
					} ?>				
				</div>
			</div>
		<?php } ?>	

		<?php if($style1=='style2'){ ?>
			<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
				echo '<a class="animsition-link" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">';
			} ?>
			<div class="call-to-action-1 center">
				<?php if($icon){ ?><div class="icons <?php echo esc_attr($icon); ?>"></div><?php } ?>
				<h5><?php echo htmlspecialchars_decode($title); ?></h5>
				<?php if($subtitle){ ?><p><?php echo htmlspecialchars_decode($subtitle); ?></p><?php } ?>
				<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
					echo '<p class="call-to">'.esc_attr( $url['title'] ).'</p>';
				} ?>
					
				
			</div>
			<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
				echo '</a>';
			} ?>
		<?php } ?>

<?php
    return ob_get_clean();	
}

// Buttons
add_shortcode('button', 'button_func');
function button_func($atts, $content = null){
	extract(shortcode_atts(array(
		'linkbox'		=>	'',
		'style'			=>	'',
		'size'			=>	'',
		'icon'			=>	'',
	), $atts));
		$url 	= vc_build_link( $linkbox );
		$style1 = (!empty($style) ? $style : 'style1');
		$size1	= (!empty($size) ? $size : '');
	ob_start(); 
?>			
	
    <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {

    	if($style1=='style1'){    		
			echo '<a class="button-short-block '.esc_attr($size1).'" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ).'</a>';
    	}
    	if($style1=='style2'){
			echo '<a class="button-short-block border-block '.esc_attr($size1).'" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ).'</a>';
    	}
    	if($style1=='style3'){
			echo '<a class="call-to-action-2-link animsition-link '.esc_attr($size1).'" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ).'</a>';
    	}
    	if($style1=='style4'){
			echo '<a class="button-short-block border-block-1 '.esc_attr($size1).'" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ).'</a>';
    	}
    	if($style1=='style5'){
    		echo '<a class="button-download" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '"><div class="icons '.esc_attr($icon).'"></div>' . esc_attr( $url['title'] ).'</a>';
    	}
	
	} ?>
	
<?php 
	return ob_get_clean();
}



// Social
add_shortcode('social', 'social_func');
function social_func($atts, $content = null){
	extract(shortcode_atts(array(
		'linkbox'			=>	'',
		'style'				=>	'',
		'size'				=>	'',
		'color'				=>	'',
		'background_color'	=>	'',
		'border'			=>	'',
	), $atts));
		$url 	= vc_build_link( $linkbox );
		$style1 = (!empty($style) ? $style : 'style1');
		$size1	= (!empty($size) ? $size : 'small');
		$background_color1 = (!empty($background_color) ? 'background-color:'.$background_color.';' : '');
		$color1 = (!empty($color) ? 'color:'.$color.';' : '');
		$border1 = (!empty($border) ? $border : ''); 
	ob_start(); 
?>			
	
    <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {

    	if($style1=='style1'){    		
			echo '<div class="social-block '.esc_attr($size1).' '.esc_attr($border1).'" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '" style="' . esc_attr($background_color1) . esc_attr($color1) .'"><i class="fa fa-' . esc_attr( $url['title'] ).'"></i></div>';
    		
    	}
    	if($style1=='style2'){
			echo '<div class="social-block border-full '.esc_attr($size1).' '.esc_attr($border1).'" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '" " style="' . esc_attr($background_color1) . esc_attr($color1) .'"><i class="fa fa-' . esc_attr( $url['title'] ).'"></i></div>';
    	}
	
	} ?>
	
<?php 
	return ob_get_clean();
}

// Latest Blog Slider
add_shortcode('latestblog','latestblog_func');
function latestblog_func($atts, $content = null){
	extract(shortcode_atts(array(
		'number'	=>		'',
		'excerpt'   =>		'',
		'visible'	=>		'',
	), $atts));
		$number1 = (!empty($number) ? $number : 6);
		$excerpt1 = (!empty($excerpt) ? $excerpt : 19);
		$visible1 = (!empty($visible) ? $visible : 2);
	ob_start(); ?>	
	
    		
    <div id="blog-carousel" class="owl-carousel owl-theme">
    	<?php 
		    $args = array(   
		        'post_type' => 'post',   
		        'posts_per_page' => $number1,
		    );  
		    $wp_query = new WP_Query($args);
		    while($wp_query->have_posts()) : $wp_query->the_post(); 
	    ?>
        <div class="item">
            <div class="one-page-blog-box">
                <div class="blog-box-2">
                    <?php $format = get_post_format();
                    	  $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true);
 						  $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true);
 						  $quote = get_post_meta(get_the_ID(),'_cmb_quote', true); ?>
                    <?php if($format=='audio'){ ?>

	                    <?php if ( has_post_thumbnail() ) { ?>	
							<?php $params = array( 'width' => 540, 'height' => 300 );
							$image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id()), $params ); ?>
							<img src="<?php echo esc_url($image);?>" alt="">
						<?php }else{ ?>
	                      <iframe style="width:100%;height:300px;" src="<?php echo esc_url( $link_audio ); ?>"></iframe>
	        			<?php } ?>

                  	<?php } elseif($format=='video'){ ?>

	                  	<?php if ( has_post_thumbnail() ) { ?>	
							<?php $params = array( 'width' => 540, 'height' => 300 );
							$image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id()), $params ); ?>
							<img src="<?php echo esc_url($image);?>" alt="">
						<?php }else{ ?>
	                        <iframe height="300" src="<?php echo esc_url( $link_video ); ?>"></iframe>
	       				<?php } ?>

                  	<?php } elseif($format=='gallery'){ ?>                  	
	                  	
	                        <div id="owl-blog-slider-<?php the_ID() ?>" class="owl-blog-slider-1 owl-carousel">
	                          <?php if( function_exists( 'rwmb_meta' ) ) { ?>
	                              <?php $images = rwmb_meta( '_cmb_images', "type=image" ); ?>
	                              <?php if($images){ ?>
	                                
	                                  <?php                                                        
	                                    foreach ( $images as $image ) {                              
	                                  ?>
	                                  <?php $img = $image['full_url']; ?>
	                                    <div class="item"><img src="<?php echo esc_url($img); ?>" alt=""></div> 
	                                  <?php } ?>                   
	                                
	                              <?php } ?>
	                            <?php } ?>
	                        </div>
	                        <script>
	                          (function($){
	                          "use strict";                          
		                          $(document).ready(function() {
		                              $("#owl-blog-slider-<?php the_ID() ?>").owlCarousel({
								        pagination : true,
								        transitionStyle : "fade",
								        slideSpeed : 500,
								        paginationSpeed : 500,
								        singleItem:true,
								        autoPlay: 5000
								      });
		                            });
	                          })(this.jQuery);
	                        </script>

          			<?php } elseif($format=='quote'){ ?>

          					<div class="quote-text"><?php echo esc_html($quote); ?></div>

                  	<?php } else { $format=='image' ?>

	                  	<?php if ( has_post_thumbnail() ) { ?>	
							<?php $params = array( 'width' => 540, 'height' => 300 );
							$image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id()), $params ); ?>
							<img src="<?php echo esc_url($image);?>" alt="">
						<?php }else{ ?>
                      		<?php if( function_exists( 'rwmb_meta' ) ) { ?>
                        	<?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
                			<?php if($images){ ?>
                        	<?php                                                        
                          	foreach ( $images as $image ) {                              
                          	?>
                      		<?php $img = $image['full_url']; ?>
                          		<img src="<?php echo esc_url($img); ?>" alt="">
                          	<?php } ?>
                        <?php } ?>
                  		<?php } ?>
                  		<?php } ?>

                  	<?php } ?>
	                
	                <a href="<?php the_permalink(); ?>" class="animsition-link"><?php the_title(); ?></a>
			        <div class="subtext"><?php the_time( get_option( 'date_format' ) ); ?>. <?php esc_html_e('by', 'harmonia'); ?> <?php the_author_posts_link(); ?></div>
			        <p><?php echo harmonia_blog_excerpt($excerpt1); ?></p>
			        <div class="link-to-post">
			            <a href="<?php the_permalink(); ?>" class="animsition-link"><?php esc_html_e('Read More', 'harmonia'); ?></a>
			            <p class="blog-comment"><?php comments_number( esc_html__('0 comment', 'harmonia'), esc_html__('1 comment', 'harmonia'), __('% comments', 'harmonia') ); ?></p>
			        </div>
	            </div>
	        </div>
        </div>
       <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <script type="text/javascript">
    	(function($) { "use strict";
		    $(document).ready(function() {
		      	// Blog Carousel
				$("#blog-carousel").owlCarousel({
					items : <?php echo esc_attr($visible1); ?>,
					itemsDesktop : [1000,<?php echo esc_attr($visible1); ?>], 
					itemsDesktopSmall : [900,<?php echo esc_attr($visible1); ?>],
					itemsTablet: [600,1], 
					itemsMobile : false, 
					pagination : true,
					autoPlay : 3000,
					slideSpeed : 300
				});
		    });
	  	})(jQuery);
    </script>
<?php
    return ob_get_clean();
}

// Latest Blog Grid
add_shortcode('bloggrid','bloggrid_func');
function bloggrid_func($atts, $content = null){
	extract(shortcode_atts(array(
		'number'	=>		'',
		'excerpt'   =>		'',
	), $atts));
		$number1 = (!empty($number) ? $number : 6);
		$excerpt1 = (!empty($excerpt) ? $excerpt : 19);
	ob_start(); ?>	
	
    <?php 
	    $args = array(   
	        'post_type' => 'post',   
	        'posts_per_page' => $number1,
	    );  
	    $wp_query = new WP_Query($args);
	    while($wp_query->have_posts()) : $wp_query->the_post(); 
    ?>
    <div class="width-46 columns">
		<div class="blog-box-1">
			<?php $image =  wp_get_attachment_url(get_post_thumbnail_id()); ?>
			<a href="<?php the_permalink(); ?>" class="animsition-link">
				<img src="<?php echo esc_url($image); ?>" alt="">
			</a> 
			<a href="<?php the_permalink(); ?>" class="animsition-link"><?php the_title(); ?></a>
			<div class="subtext"><?php the_time( get_option( 'date_format' ) ); ?>.</div>
			<p><?php echo harmonia_blog_excerpt($excerpt1); ?></p>
		</div>
	</div>

    <?php endwhile; wp_reset_postdata(); ?>

<?php
    return ob_get_clean();
}

// Portfolio Slider
add_shortcode('portfolioslider','portfolioslider_func');
function portfolioslider_func($atts, $content = null){
	extract(shortcode_atts(array(
		'visible'	=>	'',
		'number'	=>	'',
	), $atts));
		$number1 = (!empty($number) ? $number : '-1');
		$i = rand(0,999999999);
	ob_start(); 
?>		
	
	<div id="portfolio-carousel-<?php echo esc_attr($i); ?>" class="owl-carousel owl-theme">	
		<?php
			$args = array(
				'post_type' => 'portfolio',
				'posts_per_page' => $number1,
			);
			$portfolio = new WP_Query($args);
			if($portfolio->have_posts()) : while($portfolio->have_posts()) : $portfolio->the_post();

			$cates = get_the_terms(get_the_ID(),'categories');
  			$cate_name ='';
      		foreach((array)$cates as $cate){
      			if(count($cates)>0){
        			$cate_name .= $cate->name.' ' ;     
      			} 
  			}
		?>											
		<div class="item">
			<a href="<?php the_permalink(); ?>" class="animsition-link">
				<div class="portfolio-wrap-third full-width-carousel">
					<?php $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id())); ?>
					<img  src="<?php echo esc_url($image); ?>" alt="" /> 
					<div class="mask">
						<h6><?php the_title(); ?></h6>
						<p><?php echo esc_attr($cate_name); ?></p>
					</div>
				</div>
			</a>
		</div>
		<?php endwhile; wp_reset_postdata(); endif; ?>	
	</div>
	<script>
		(function($) { "use strict";
			$(document).ready(function() {
				$("#portfolio-carousel-<?php echo esc_attr($i); ?>").owlCarousel({
					items : <?php echo esc_attr($visible); ?>,
					itemsDesktop : [1000,<?php echo esc_attr($visible); ?>], 
					itemsDesktopSmall : [900,3],
					itemsTablet: [600,2], 
					itemsMobile : [480,1], 
					pagination : true,
					slideSpeed : 300,
					autoPlay : 4000
				});
			});	
		})(jQuery); 
	</script>

<?php
    return ob_get_clean();
}

// Home Parallax 1
add_shortcode('home_parallax', 'home_parallax_func');
function home_parallax_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title'			=>  '',		
		'stitle'		=>  '',
		'height'		=>  '',
		'photo'			=>	'',	
		'linkbox'		=>	'',
		'color'			=>	'',	
		'style'			=>	'',	
		'btext'			=>	'',
		'subphoto'		=>	'',
	), $atts));
		$img = wp_get_attachment_image_src($photo,'full');
		$img = $img[0];
		$img1 = wp_get_attachment_image_src($subphoto,'full');
		$img1 = $img1[0];
		$height1 = (!empty($height) ? 'style="height:'.$height.';"' : '');
		$url = vc_build_link( $linkbox );
		$color1 = (!empty($color) ? ' style="color:'.$color.';"' : '');
	ob_start(); 
?>	
   
    <div class="three-quarters-height" <?php echo esc_attr($height1); ?>>
				
		<div class="parallax-business6" style="background-image: url('<?php echo esc_url($img); ?>');"></div>
		
		<div class="<?php if($style=='style2'){echo 'hero-wrap left hero-landing';}elseif($style=='style3'){echo 'hero-wrap-2 left photoghrapher';}elseif($style=='style4'){echo 'hero-wrap-1';}elseif($style=='style5'){echo 'hero-wrap';}elseif($style=='style6'){echo 'hero-wrap-pages-parallax for-demo';}else{echo 'hero-wrap-pages';} ?>">
			<div class="container">
				<div class="<?php if($style=='style2'){echo 'five';}else{echo 'twelve';} ?><?php if($subphoto){echo ' landing-home-text';} ?> columns">
					<?php if($btext){ ?><div class="text-back"><?php echo htmlspecialchars_decode($btext); ?></div><?php } ?>
					<?php if($style=='style4' || $style=='style5' || $style=='style6'){ ?>
						<p<?php echo esc_attr($color1); ?>><?php echo htmlspecialchars_decode($stitle); ?></p>
						<h2<?php echo esc_attr($color1); ?>><?php echo htmlspecialchars_decode($title); ?></h2>
					<?php }else{ ?>
						<h2<?php echo esc_attr($color1); ?>><?php echo htmlspecialchars_decode($title); ?></h2>
						<p<?php echo esc_attr($color1); ?>><?php echo htmlspecialchars_decode($stitle); ?></p>
					<?php } ?>
					
					<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
						echo '<a href="' . esc_attr( $url['url'] ) . '" class="hero-link scroll" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
					} ?> 	
				</div>
				<?php if($style=='style2' && $subphoto){ ?>
					<div class="six columns">
						<div class="img-wrap landing-page-image">
							<img src="<?php echo esc_url($img1); ?>" alt="">
						</div>
					</div>
				<?php } ?>
			</div>
		</div>					
	</div>
   
<?php
    return ob_get_clean();
}

// Home Slider Carousel
add_shortcode('homeslider','homeslider_func');
function homeslider_func($atts, $content = null){
	extract(shortcode_atts(array(
		'number'	=>	'',
		'height'	=>	'',
	), $atts));
		$number1 = (!empty($number) ? $number : '-1');
		$height1 = (!empty($height) ? 'height:'.$height.';' : '');
	ob_start(); 
?>		
	<div id="owl-top" class="owl-carousel owl-theme">
		<?php			
			$args = array(
				'post_type' => 'slider_text',
				'posts_per_page' => $number1,
			);
			$slider_text = new WP_Query($args);
			if($slider_text->have_posts()) : while($slider_text->have_posts()) : $slider_text->the_post();
			$image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id()));
			$align = get_post_meta(get_the_ID(),'_cmb_text_align', true);
			$btext = get_post_meta(get_the_ID(),'_cmb_btext', true);
		?>					 
			<div class="item" style="<?php echo esc_attr($height1); ?>background-image:url('<?php echo esc_url($image); ?>'); ?>">		
				<div class="hero-wrap-2 <?php echo esc_attr($align); ?>">
					<div class="container">
						<div class="twelve columns">
							<?php if($btext){ ?><div class="text-back"><?php echo esc_attr($btext); ?></div><?php } ?>
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; wp_reset_postdata(); endif; ?>					 
	</div>
	<script>
		(function($) { "use strict";
			$(document).ready(function() {
				$("#owl-top").owlCarousel({
					navigation: true,
					transitionStyle : "fade",
					pagination : false,
					slideSpeed : 500,
					paginationSpeed : 500,
					singleItem:true,
					autoPlay: 6000
				});
			});	
		})(jQuery); 
	</script>

<?php
    return ob_get_clean();
}

// Countdown
add_shortcode('countdown', 'countdown_func');
function countdown_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title'		=>  '',		
		'stitle'	=>  '',
		'height'	=>  '',
		'photo'		=>	'',
		'time'		=>	'',
		'day'		=>	'',
		'alert'		=>	'',			
	), $atts));
		$img = wp_get_attachment_image_src($photo,'full');
		$img = $img[0];
		$height1 = (!empty($height) ? 'style="height:'.$height.';"' : '');
	ob_start(); 
?>	
   
    <div class="three-quarters-height" <?php echo esc_attr($height1); ?>>
				
		<div class="parallax-business3" style="background-image: url('<?php echo esc_url($img); ?>');"></div>
		
		<div class="hero-wrap-pages">
			<div class="container">
				<div class="twelve columns">
					<h2><?php echo htmlspecialchars_decode($title); ?></h2>
					<p><?php echo htmlspecialchars_decode($stitle); ?></p>	
				</div>
				<div class="twelve columns">
					<ul class="countdown">
						<li> 
							<span class="days">00</span>
							<p class="days_ref"><?php esc_html_e('days', 'harmonia');  ?></p>
						</li>
						<li class="seperator">.</li>
						<li>
							<span class="hours">00</span>
							<p class="hours_ref"><?php esc_html_e('hours', 'harmonia');  ?></p>
						</li>
						<li class="seperator">:</li>
						<li> 
							<span class="minutes">00</span>
							<p class="minutes_ref"><?php esc_html_e('minutes', 'harmonia');  ?></p>
						</li>
						<li class="seperator">:</li>
						<li>
							<span class="seconds">00</span>
							<p class="seconds_ref"><?php esc_html_e('seconds', 'harmonia');  ?></p>
						</li>
					</ul>
				</div>
			</div>
		</div>					
	</div>

	<script type="text/javascript">
	/**
	 * downCount: Simple Countdown clock with offset
	 * Author: Sonny T. <hi@sonnyt.com>, sonnyt.com
	 */

	(function ($) {
		$.fn.downCount = function (options, callback) {
			var settings = $.extend({
					date: null,
					offset: null
				}, options);

			// Throw error if date is not set
			if (!settings.date) {
				$.error('Date is not defined.');
			}

			// Throw error if date is set incorectly
			if (!Date.parse(settings.date)) {
				$.error('Incorrect date format, it should look like this, 12/24/2012 12:00:00.');
			}

			// Save container
			var container = this;

			/**
			 * Change client's local date to match offset timezone
			 * @return {Object} Fixed Date object.
			 */
			var currentDate = function () {
				// get client's current date
				var date = new Date();

				// turn date to utc
				var utc = date.getTime() + (date.getTimezoneOffset() * 60000);

				// set new Date object
				var new_date = new Date(utc + (3600000*settings.offset))

				return new_date;
			};

			/**
			 * Main downCount function that calculates everything
			 */
			function countdown () {
				var target_date = new Date(settings.date), // set target date
					current_date = currentDate(); // get fixed current date

				// difference of dates
				var difference = target_date - current_date;

				// if difference is negative than it's pass the target date
				if (difference < 0) {
					// stop timer
					clearInterval(interval);

					if (callback && typeof callback === 'function') callback();

					return;
				}

				// basic math variables
				var _second = 1000,
					_minute = _second * 60,
					_hour = _minute * 60,
					_day = _hour * 24;

				// calculate dates
				var days = Math.floor(difference / _day),
					hours = Math.floor((difference % _day) / _hour),
					minutes = Math.floor((difference % _hour) / _minute),
					seconds = Math.floor((difference % _minute) / _second);

					// fix dates so that it will show two digets
					days = (String(days).length >= 2) ? days : '0' + days;
					hours = (String(hours).length >= 2) ? hours : '0' + hours;
					minutes = (String(minutes).length >= 2) ? minutes : '0' + minutes;
					seconds = (String(seconds).length >= 2) ? seconds : '0' + seconds;

				// based on the date change the refrence wording
				var ref_days = (days === 1) ? 'day' : '<?php esc_html_e('days', 'harmonia');  ?>',
					ref_hours = (hours === 1) ? 'hour' : '<?php esc_html_e('hours', 'harmonia');  ?>',
					ref_minutes = (minutes === 1) ? 'minute' : '<?php esc_html_e('minutes', 'harmonia');  ?>',
					ref_seconds = (seconds === 1) ? 'second' : '<?php esc_html_e('seconds', 'harmonia');  ?>';
					

				// set to DOM
				container.find('.days').text(days);
				container.find('.hours').text(hours);
				container.find('.minutes').text(minutes);
				container.find('.seconds').text(seconds);

				container.find('.days_ref').text(ref_days);
				container.find('.hours_ref').text(ref_hours);
				container.find('.minutes_ref').text(ref_minutes);
				container.find('.seconds_ref').text(ref_seconds);
			};
			
			// start
			var interval = setInterval(countdown, 1000);
		};

	})(jQuery);	
	
	(function($) { "use strict";      
		  //Timer
		  $('.countdown').downCount({
			  date: '<?php echo esc_attr($day); ?> <?php echo esc_attr($time); ?>',
			  offset: +10
		  }, function () {
			  alert('<?php echo htmlspecialchars_decode($alert); ?>');
		  });      
	})(jQuery);
	
</script>
   
<?php
    return ob_get_clean();
}

// Features
add_shortcode('featurebox', 'featurebox_func');
function featurebox_func($atts, $content = null){
	extract(shortcode_atts(array(
		'title'		=>  '',		
		'stitle'	=>  '',
		'linkbox'	=>  '',
		'photo'		=>	'',	
		'style_text'	=>	'',
		'style'		=>	'',	
	), $atts));
	    define("dark", "dark");
		$img = wp_get_attachment_image_src($photo,'full');
		$img = $img[0];
		$url = vc_build_link( $linkbox );
		$style_text1 = (!empty($style_text) ? $style_text : dark);	
		$style1 = (!empty($style) ? $style : style1);
	ob_start(); 
?>	
   
	<?php if($style1=="style1"){ ?>
	    <div class="shop-home-box-1-wrapper <?php if($style_text1=='dark'){echo 'darker-background';}else{echo 'white-background';} ?>">
	    	<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) { echo '<a href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">';	} ?>  
			
				<div class="shop-home-box-1 half-width <?php if($style_text1=='dark'){echo 'fitness';}else{echo 'tourism';} ?>">
					<img  src="<?php echo esc_url($img); ?>" alt="" /> 
					<h6>
						<?php echo htmlspecialchars_decode($title); ?><br><br>
						<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
							echo '<span>'.esc_attr($url['title']).'</span>';
						} ?>  
					</h6>
				</div>
			<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) { echo '</a>';	} ?>  
		</div>
	<?php } ?>
	<?php if($style1=="style2"){ ?>
	<div class="services-box-4">
		<div class="services-box-in <?php if($style_text1=='dark'){echo 'dark-backgrounds';} ?>">
			<div class="in-text-box">
				<h6><?php echo htmlspecialchars_decode($title); ?></h6>
				<div class="subtext"><?php echo htmlspecialchars_decode($stitle); ?></div>
				<p><?php echo htmlspecialchars_decode($content); ?></p>
				<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
					echo '<a href="'.esc_attr( $url['url'] ).'" class="animsition-link button">'.esc_attr($url['title']).'</a>';
				} ?>
			</div>
		</div>
	</div>
	<?php } ?>

<?php
    return ob_get_clean();
}

// Quote
add_shortcode('quote', 'quote_func');
function quote_func($atts, $content = null){
	extract(shortcode_atts(array(
		'style'		=>  '',
	), $atts));
		$style1 = (!empty($style) ? $style : 'style1');	
	ob_start(); 
?>	
   
    <div class="<?php if($style1=='style1'){echo 'blockquote-2 white-background';}if($style1=='style2'){echo 'blockquote-2 dark-background';} ?>">
		<p><?php echo htmlspecialchars_decode($content); ?></p>	
	</div>
   
<?php
    return ob_get_clean();
}

// Newsletters
add_shortcode('newsletter', 'newsletter_func');
function newsletter_func($atts, $content = null){
	extract(shortcode_atts(array(
		'btntext'	=> '',
	), $atts));

	ob_start(); ?>

	<?php
		/**
		 * Detect plugin. For use on Front End only.
		 */
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

		// check for plugin using plugin name
		if ( is_plugin_active( 'newsletter/plugin.php' ) ) { 
	?>	
	
	<form id="form" class="newsletter" method="post" action="<?php echo esc_url( home_url() ); ?>/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">  
      	<div class="subscribe">
      		<input type="email" id="news" name="ne" placeholder="<?php esc_html_e('Type your e-mail', 'harmonia'); ?>" required>
      		<button class="button" type="submit" name="submit"><?php echo esc_attr($btntext); ?></button>
		</div>
    </form>
	
	
	
<?php } ?>		

<?php
	return ob_get_clean();
}

// Homepage Split Left
add_shortcode('homesplitleft', 'homesplitleft_func');
function homesplitleft_func($atts, $content = null){
	extract(shortcode_atts(array(
		'photo'		=>	'',
		'title'		=>	'',
		'btext'		=>	'',
		'linkbox'	=>	'',
		'id'		=>	'',
	), $atts));
		$img = wp_get_attachment_image_src($photo,'full');
		$img = $img[0];
		$url = vc_build_link( $linkbox );
	ob_start(); ?>

	
		<div class="ms-section left-background-1" id="<?php echo esc_attr($id); ?>" style="background-image:url(<?php echo esc_url($img); ?>);">
			<div class="split-multiscroll-wrapper">
				<div class="split-multiscroll-text-1"><?php echo htmlspecialchars_decode($btext); ?></div>
				<div class="split-multiscroll-text-2"><?php echo htmlspecialchars_decode($title); ?></div>
				<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
					echo '<a href="' . esc_attr( $url['url'] ) . '" class="animsition-link" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '"><div class="split-multiscroll-button">' . esc_attr( $url['title'] ) . '</div></a>';
				} ?> 	
			</div>
		</div>
	

<?php
	return ob_get_clean();
}

// Homepage Split Right
add_shortcode('homesplitright', 'homesplitright_func');
function homesplitright_func($atts, $content = null){
	extract(shortcode_atts(array(
		'photo'		=>	'',
		'id'		=>	'',
	), $atts));
		$img = wp_get_attachment_image_src($photo,'full');
		$img = $img[0];
	ob_start(); ?>

	<div class="ms-section right-background-3" id="<?php echo esc_attr($id); ?>" style="background-image:url(<?php echo esc_url($img); ?>);"></div>

<?php
	return ob_get_clean();
}

// Homepage Pushing
add_shortcode('homepushing', 'homepushing_func');
function homepushing_func($atts, $content = null){
	extract(shortcode_atts(array(
		'photo'				=>	'',
		'title'				=>	'',
		'subtitle'			=>	'',
		'parallax'			=>	'',
		'linkbox'			=>	'',
		'tag'				=>	'',
		'align'				=>	'',
		'background_color'	=>	'',
	), $atts));
		$img = wp_get_attachment_image_src($photo,'full');
		$img = $img[0];
		$url = vc_build_link( $linkbox );
		$tag1 = (!empty($tag) ? $tag : h2);
		$background_color1 = (!empty($background_color) ? 'style="background-color: '.$background_color.';"' : '');
 	ob_start(); ?>

	<div class="section full-height">
				
		<div class="parallax-business24" style="background: url('<?php echo esc_url($img); ?>') <?php if($parallax==true){echo 'repeat fixed';} ?>;"></div>
		
		<div class="story-split <?php if($align=='left'){echo 'story-split-right';} ?> white-background" <?php echo esc_attr($background_color1); ?>>
			<div class="hero-wrap-story">
				<?php if($tag1=='h3'){echo '<h3>';}else{echo '<h2>';} ?><?php echo htmlspecialchars_decode($title); ?><?php if($tag1=='h3'){echo '</h3>';}else{echo '</h2>';} ?>
				<?php if($subtitle){ ?><div class="subtext"><?php echo htmlspecialchars_decode($subtitle); ?></div><?php } ?>	
				<?php if($content){ ?><p><?php echo htmlspecialchars_decode($content) ?></p><?php } ?>				
				<?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
					echo '<a class="button-short-block '.esc_attr($size1).'" href="' . esc_attr( $url['url'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ).'</a>';
				} ?>  
			</div>
		</div>
		
	</div>

<?php
	return ob_get_clean();
}

// Map
add_shortcode('maps','maps_func');
function maps_func($atts, $content = null){
	extract(shortcode_atts(array(		
		'iconmap'	 	=> '',
		'photo'			=>	'',
		'address'       => '',		
		'latitude'		=> '',
		'longitude'	 	=> '',
		'zoommap'       => '',
		'height'		=> '',	
	), $atts));

	$img1 = wp_get_attachment_image_src($photo,'full');
	$img1 = $img1[0];
	$img = wp_get_attachment_image_src($iconmap,'full');
	$img = $img[0];
	$height1 = (!empty($height) ? $height : 500);

	ob_start(); ?>

	<div id="cd-google-map">
		<div id="google-container" style="position: relative;width: 100%;height: <?php echo esc_attr($height1); ?>px;"></div>
		<div id="cd-zoom-in"></div>
		<div id="cd-zoom-out"></div>
		<?php if($photo || $address){ ?>
			<address>
				<?php if($photo){ ?><img src="<?php echo esc_url($img1); ?>" alt=""><?php } ?>
				<?php if($address){ ?><p><?php echo htmlspecialchars_decode($address); ?></p><?php } ?>
			</address>
		<?php } ?>
	</div>	

	<script type="text/javascript">
		
		(function($) { "use strict"
			var latitude = <?php echo esc_attr($latitude); ?>,
				longitude = <?php echo esc_attr($longitude); ?>,
				map_zoom = <?php echo esc_attr($zoommap); ?>;

			//google map custom marker icon - .png fallback for IE11
			var is_internetExplorer11= navigator.userAgent.toLowerCase().indexOf('trident') > -1;
			var marker_url = '<?php echo esc_url( $img ); ?>';
				
			//define the basic color of your map, plus a value for saturation and brightness
			var	main_color = '#e67e22',
				saturation_value= -50,
				brightness_value= 14;

			//we define here the style of the map
			var style= [
	            {
	                "featureType": "all",
	                "elementType": "labels.text.fill",
	                "stylers": [
	                    {
	                        "saturation": 36
	                    },
	                    {
	                        "color": "#000000"
	                    },
	                    {
	                        "lightness": 40
	                    }
	                ]
	            },
	            {
	                "featureType": "all",
	                "elementType": "labels.text.stroke",
	                "stylers": [
	                    {
	                        "visibility": "on"
	                    },
	                    {
	                        "color": "#000000"
	                    },
	                    {
	                        "lightness": 16
	                    }
	                ]
	            },
	            {
	                "featureType": "all",
	                "elementType": "labels.icon",
	                "stylers": [
	                    {
	                        "visibility": "off"
	                    }
	                ]
	            },
	            {
	                "featureType": "administrative",
	                "elementType": "geometry.fill",
	                "stylers": [
	                    {
	                        "color": "#000000"
	                    },
	                    {
	                        "lightness": 20
	                    }
	                ]
	            },
	            {
	                "featureType": "administrative",
	                "elementType": "geometry.stroke",
	                "stylers": [
	                    {
	                        "color": "#000000"
	                    },
	                    {
	                        "lightness": 17
	                    },
	                    {
	                        "weight": 1.2
	                    }
	                ]
	            },
	            {
	                "featureType": "landscape",
	                "elementType": "geometry",
	                "stylers": [
	                    {
	                        "color": "#000000"
	                    },
	                    {
	                        "lightness": 20
	                    }
	                ]
	            },
	            {
	                "featureType": "poi",
	                "elementType": "geometry",
	                "stylers": [
	                    {
	                        "color": "#000000"
	                    },
	                    {
	                        "lightness": 21
	                    }
	                ]
	            },
	            {
	                "featureType": "road.highway",
	                "elementType": "geometry.fill",
	                "stylers": [
	                    {
	                        "color": "#000000"
	                    },
	                    {
	                        "lightness": 17
	                    }
	                ]
	            },
	            {
	                "featureType": "road.highway",
	                "elementType": "geometry.stroke",
	                "stylers": [
	                    {
	                        "color": "#000000"
	                    },
	                    {
	                        "lightness": 29
	                    },
	                    {
	                        "weight": 0.2
	                    }
	                ]
	            },
	            {
	                "featureType": "road.arterial",
	                "elementType": "geometry",
	                "stylers": [
	                    {
	                        "color": "#000000"
	                    },
	                    {
	                        "lightness": 18
	                    }
	                ]
	            },
	            {
	                "featureType": "road.local",
	                "elementType": "geometry",
	                "stylers": [
	                    {
	                        "color": "#000000"
	                    },
	                    {
	                        "lightness": 16
	                    }
	                ]
	            },
	            {
	                "featureType": "transit",
	                "elementType": "geometry",
	                "stylers": [
	                    {
	                        "color": "#000000"
	                    },
	                    {
	                        "lightness": 19
	                    }
	                ]
	            },
	            {
	                "featureType": "water",
	                "elementType": "geometry",
	                "stylers": [
	                    {
	                        "color": "#000000"
	                    },
	                    {
	                        "lightness": 17
	                    }
	                ]
	            }
	        ];
				
			//set google map options
			var map_options = {
				center: new google.maps.LatLng(latitude, longitude),
				zoom: map_zoom,
				panControl: false,
				zoomControl: false,
				mapTypeControl: false,
				streetViewControl: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				scrollwheel: false,
				styles: style,
			}
			//inizialize the map
			var map = new google.maps.Map(document.getElementById('google-container'), map_options);
			//add a custom marker to the map				
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(latitude, longitude),
				map: map,
				visible: true,
				icon: marker_url,
			});

			//add custom buttons for the zoom-in/zoom-out on the map
			function CustomZoomControl(controlDiv, map) {
				//grap the zoom elements from the DOM and insert them in the map 
				var controlUIzoomIn= document.getElementById('cd-zoom-in'),
					controlUIzoomOut= document.getElementById('cd-zoom-out');
				controlDiv.appendChild(controlUIzoomIn);
				controlDiv.appendChild(controlUIzoomOut);

				// Setup the click event listeners and zoom-in or out according to the clicked element
				google.maps.event.addDomListener(controlUIzoomIn, 'click', function() {
					map.setZoom(map.getZoom()+1)
				});
				google.maps.event.addDomListener(controlUIzoomOut, 'click', function() {
					map.setZoom(map.getZoom()-1)
				});
			}

			var zoomControlDiv = document.createElement('div');
			var zoomControl = new CustomZoomControl(zoomControlDiv, map);

			//insert the zoom div on the top left of the map
			map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomControlDiv);			
		})(jQuery);

	</script>

	<?php

    return ob_get_clean();

}

?>