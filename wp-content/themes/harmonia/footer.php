<?php
/**
 * The template for displaying the footer
 */
 global $harmonia_option; 
?>

	<div class="section padding-top-bottom-small white-footer footer-wrap">
		<div class="parallax-5"></div>
		<div class="container">
			<?php get_sidebar('footer');?>		
		</div>	
	</div>
	
	<div class="section grey-background-footer">
		<div class="container">
			<div class="twelve columns">
				<div class="footer-down">
					<p><?php echo wp_kses( $harmonia_option['footer_text'], wp_kses_allowed_html('post') ); ?></p>
				</div>
			</div>
		</div>	
	</div>

	<div class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>   
</div><!-- .animsition -->
<?php wp_footer(); ?>
</body>
</html>