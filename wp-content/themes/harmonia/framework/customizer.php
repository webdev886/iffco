<?php
/**
 * Enqueues front-end CSS for color scheme.
 *
 * @since Harmonia 1.0
 *
 * @see wp_add_inline_style()
 */
function harmonia_color_scheme_css() {
	global $harmonia_option; 
	wp_add_inline_style( 'harmonia-style', harmonia_get_color_scheme_css() );
}
add_action( 'wp_enqueue_scripts', 'harmonia_color_scheme_css' );

/**
 * Returns CSS for the color schemes.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param array $colors Color scheme colors.
 * @return string Color scheme CSS.
 */
function harmonia_get_color_scheme_css() {
	global $harmonia_option;
	$css = <<<CSS
	
	.grey-menu-background,.dark-menu-background .container{background:{$harmonia_option['header-background-color']};}
	.grey-menu-background.cbp-af-header-shrink,.dark-menu-background.cbp-af-header-shrink{background:{$harmonia_option['header-scroll-background-color']};}
	.parallax-blog-pages,.parallax-about{background-image:url({$harmonia_option['bg_allpage']['url']});}
	.parallax-5{background-image:url({$harmonia_option['footer_background']['url']});}
	.parallax-404{background-image:url({$harmonia_option['404_background']['url']});}
	.parallax-comingsoon{background-image:url({$harmonia_option['cs_bg']['url']});}
	.white-footer.footer-wrap p, .footer-wrap ul li a, .grey-background .footer-down p,.footer-wrap h3{color:{$harmonia_option['footer_textcolor']};}
	.footer-wrap{background-color:{$harmonia_option['footer_background_color']};}
	.grey-background-footer{background-color:{$harmonia_option['footer_bottom_bgcolor']};}

	.sf-menu a,.search-menu a i {color:{$harmonia_option['header-text-color']};}

	.sky-mega-menu li li p, 
	.call-to-action-1 p,
	.call-to-action-1:hover p.call-to,
	.sign-section-left .sign,
	.footer-wrap p span,
	.footer-wrap-2-in a:hover,
	.sf-menu .grid-container2 .menu-item.current-menu-item > a,
	.sf-menu .mega-menu-container .mega-sub-menu.current-menu-item > a,
	.sf-menu .mega-menu-container .mega-menu-columns .grid-container3 .current-menu-item > a,
	.sf-menu .grid-container2 .menu-item.current-menu-item > a,
	ul.sf-menu li a.mPS2id-highlight,
	.hero-wrap-1 a.hero-link,
	.team-box-1 ul li a:hover,
	.blog-box-1 a:hover,
	.footer-wrap .footer-wrap-4 ul li a:hover,
	.team-box-2 .team-box-in .team-info ul li a:hover,
	.services-box-2 .number,
	.pricing-box-1 .text-top .price span,
	.dark-background .services-box-3 .services-box-in .icon,
	.white-footer .footer-wrap-2-in a:hover,
	#filter li .current,
	#filter li a:hover,
	.dark-background .footer-wrap-4 ul li a:hover,
	.split-text-wrap #owl-quote .item h6,
	.blog-box-2 a:hover,
	.shop-box-1 h6:hover,
	.footer-wrap ul li a:hover,
	.blog-pages-wrap-box  .blog-box-2 .subtext a:hover,
	.blog-pages-wrap-box  .blog-box-2 .link-to-post a:hover,
	ul.sky-mega-menu li a.mPS2id-highlight,
	.one-page-blog-box  .blog-box-2 .link-to-post a:hover,
	.one-page-blog-box  .blog-box-2 .subtext a:hover,
	.services-box-3 .services-box-in .icon,
	.sidebar-portfolio-wrapper-in a:hover,
	.project-descrip .info-text a:hover,
	.sidebar-blog-wrapper-in a:hover,
	.sidebar .widget_categories ul li a:hover,
	.sidebar .widget_archive ul li a:hover,
	.sidebar .widget_meta ul li a:hover,
	.sidebar .widget_recent_entries ul li a:hover,
	.content-comm .name-aut-replay span:hover,
	.product-price .price span,
	.checkout-top a:hover,
	.cart-wrap a:hover,
	.cart-wrap .close-icon:hover,
	.cart-wrap h6 span,
	.list-style-6 li .icon,
	.sky-mega-menu ul li a .new-menu,
	.sync22 .item:hover p,
	.sync22 .synced .item p,
	.section-call-action-link:hover p,
	.services-box-1 .icon.light-color-icon,
	td a,.name-aut-replay span.reply a:hover,
	.process-box-1 .icons,
	.split-text-wrap .link-sign-cosmetics.sign,
	.sf-menu .grid-container2 .title-menu.menu-item > a,
	.sf-menu .mega-menu-columns .title-menu.menu-item > a,
	a.menu-mobile:hover,a.menu-mobile:focus,
	.new-menu, .mm-toggle:hover, .mm-toggle:active, .mobile-menu .open, .mobile-menu .open + a, .mobile-menu li a:hover{
		color: {$harmonia_option['main-color']};
	}
	.title-text-center:after,
	.title-text-left:after,
	.services-box-2 .icons,
	.portfolio-wrap-third .mask h6:after,
	.portfolio-wrap-fourth .mask h6:after,
	.play-video .button:hover,
	.team-box-1 ul:before,
	.subscribe .button:hover,
	.about-box-1:hover .icons,
	.about-box-2:hover .icons,
	.team-box-2 .team-box-in .team-info .subtext:after,
	.services-box-4 .services-box-in .in-text-box a.button:hover,
	.services-box-4 .services-box-in.dark-backgrounds .in-text-box a.button:hover,
	.pricing-box-1 .button:hover,
	.shop-box-1 .sale,
	.hero-wrap.hero-landing p:after,
	#owl-app .item .zoom:hover,
	a.button-download,
	#buy .subscribe .button:hover,
	.sidebar-portfolio-wrapper ul li a:hover,
	.portfolio-box-1 h4:before,
	.sidebar .tagcloud ul li a:hover,
	.blog-pages-wrap-box  .blog-box-2 .link-text:hover,
	#sync1 .item .zoom:hover,
	.blockquote-3,
	.social-block.no-back:hover,
	.sync12 .synced .item,
	.sync12 .item:hover,
	.sync11 .item,
	#sync14 .item:hover,
	#sync14 .synced .item,
	.button-short-block:hover,
	.team-box-1 ul.business li a:hover,
	.sky-mega-menu ul li a .hot-menu,
	.portfolio-box-1 .zoom:hover,
	.woocommerce .button.add_to_cart_button, .woocommerce .added_to_cart.wc-forward,
	.hot-menu,.portfolio-box-1.gap-0 .mask h6:after,
	.portfolio-box-1.gap-1 .mask h6:after {
		background: {$harmonia_option['main-color']};
	}

	.social-block:hover{
		background: {$harmonia_option['main-color']};
	}

	a.hero-link:hover,
	.hero-wrap-1 a.hero-link:hover,  
	a.call-to-action-2-link:hover,
	.call-to-action-3 .button:hover,
	.call-to-action-1 .button:hover,
	.half-style .button:hover,
	.parallax-text-wrap a.button:hover {
		background:{$harmonia_option['main-color']};
		border-color:{$harmonia_option['main-color']};
	}

	.split-text-wrap .owl-theme .owl-controls .owl-page.active span,
	.split-text-wrap .owl-theme .owl-controls.clickable .owl-page:hover span,
	.owl-theme .owl-controls .owl-page.active span,
	.owl-theme .owl-controls.clickable .owl-page:hover span,
	#owl-blog-slider-1.owl-theme .owl-controls .owl-page.active span,
	#owl-blog-slider-1.owl-theme .owl-controls.clickable .owl-page:hover span,
	#owl-project-slider.owl-theme .owl-controls .owl-page.active span,
	#owl-project-slider.owl-theme .owl-controls.clickable .owl-page:hover span,
	#cd-zoom-in, #cd-zoom-out,
	.shop-box-1 .add-to-cart:hover,
	.shop-box-1 .zoom:hover,
	.hero-wrap.hero-landing a.hero-link:hover,
	.wpcf7 .button-contact:hover,
	.project-descrip .button--moema:hover,
	.transition-button .button--moema:hover,
	.tumb-wrap .zoom:hover,
	.hero-wrap-pages-parallax .button--moema,
	.hero-wrap-pages-parallax .button--moema::before,
	.tumb-wrap .hover-5 p:before,
	.highlight-2,
	.dropcaps-2,
	.dropcaps-5,
	.list-style-3 li .icon,
	.button-short-block.button--moema{
		background-color: {$harmonia_option['main-color']};
	}

	.list-style .icon-border.icons{
		border:1px solid {$harmonia_option['main-color']};
	}

	.wpcf7-form-control-wrap input:focus,
	.wpcf7-form-control-wrap input:active,
	.wpcf7-form-control-wrap textarea:focus,
	.wpcf7-form-control-wrap textarea:active {	
		border-bottom:1px solid {$harmonia_option['main-color']}!important;
	}
	.button-short-block.border-block:hover,
	.button-short-block.border-block-1{
		border:2px solid {$harmonia_option['main-color']};
	}
	::selection {
		background: {$harmonia_option['main-color']};
		}
	::-moz-selection {
		background: {$harmonia_option['main-color']};
	}
	/**** Custom logo 1 ****/	
	.logo-wrap img{      
		width: {$harmonia_option['logo_width']}px;  
		     
	}
	.cbp-af-header.cbp-af-header-shrink .logo-wrap img{  
		width: {$harmonia_option['logos_width']}px;  
		      
	}
	.logo-wrap img, .cbp-af-header.cbp-af-header-shrink .logo-wrap img {
		margin-top: {$harmonia_option['logo_margin']}px;
	}
	.vc_separator .vc_sep_holder .vc_sep_line{
		border-color: {$harmonia_option['main-color']}!important;
	}

	{$harmonia_option['custom-css']}

CSS;

	return $css;
}