<?php global $harmonia_option; ?>
<?php if($archi_option['ajax_work']!=false){ ?>
			
<?php }else { ?>
<?php get_header(); ?>
<!-- subheader begin -->
<div class="section half-height">				
	<div class="parallax-projects"
		<?php if( function_exists( 'rwmb_meta' ) ) { ?>       
	        <?php $images = rwmb_meta( '_cmb_portfolio_subheader', "type=image" ); ?>
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
				<p><?php $subtitle = rwmb_meta( '_cmb_page_subtitle', "type=text" ); ?><?php echo esc_html($subtitle); ?></p>	
			</div>
		</div>
	</div>					
</div>
<!-- subheader close -->
<?php if (have_posts()){ ?>
		<?php while (have_posts()) : the_post()?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php }else {
		_e('Page Canvas For Page Builder', 'harmonia'); 
}?>

<?php get_footer(); ?>	
<?php } ?>
