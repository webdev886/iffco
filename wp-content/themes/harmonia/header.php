<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php global $harmonia_option; ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Favicons
	================================================== -->
	<?php harmonia_custom_favicon(); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="overlay"></div>
<div class="mobile-menu-first">
  <div id="mobile-menu-right" class="mobile-menu-dark">
    <div class="mCustomScrollbar light" data-mcs-theme="minimal-dark">
      <div class="header-mobile-menu hmm-v1">
          <?php get_search_form(); ?>
      </div> <!-- End header mobile menu -->
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </div>
  </div>
</div>

<div id="page" class="<?php if($harmonia_option['preload-switch']==true){echo 'animsition';}else{echo 'main';} ?> ">
    <?php 
        if(isset($harmonia_option['header_layout']) and $harmonia_option['header_layout']=="header2" ){
            get_template_part('framework/headers/header-2');
        }elseif(isset($harmonia_option['header_layout']) and $harmonia_option['header_layout']=="header3" ){
            get_template_part('framework/headers/header-3'); 
        }elseif(isset($harmonia_option['header_layout']) and $harmonia_option['header_layout']=="header4" ){
            get_template_part('framework/headers/header-4'); 
        }else{  
    ?>
        <nav class="section-menu-fixed cbp-af-header grey-menu-background section-shadow menu-section">
            <div class="container">
                <div class="twelve columns">
                    <div class="logo-wrap">
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                            <img src="<?php echo esc_url($harmonia_option['logo']['url']); ?>" alt="">
                        </a> 
                    </div> 

                    <div class="mm-toggle menu-mobile">
                        <i class="fa fa-bars"></i><?php echo esc_attr($harmonia_option['menu-mob']); ?>              
                    </div>                                                          
                    
                    <?php if($harmonia_option['menu-search']==true){ ?>    
                        <ul class="sf-menu search-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom right">
                                <a href="#">
                                    <i class="fa fa-single fa-search"></i>
                                </a>
                                <div class="grid-container2">
                                    <ul>
                                    <li class="search"> 
                                        <form role="search" method="get" class="header-search" action="<?php echo home_url( '/' ); ?>">
                                            <input type="search" placeholder="<?php echo esc_attr__( 'Search', 'harmonia' ); ?>" value="<?php echo get_search_query() ?>" name="s" />                             
                                            <button class="button" type="submit"><?php echo esc_html__('Go', 'harmonia'); ?></button>                             
                                        </form>
                                    </li>
                                </ul>
                                </div>
                            </li>   
                        </ul>                  
                    <?php } ?>

                    <?php if (class_exists('Woocommerce')) { ?>                
                        <ul class="sf-menu search-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom right">
                                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="harmonia-cart">
                                    <i class="fa fa-single fa-shopping-cart"></i> <small><?php echo esc_html__('(0)', 'harmonia'); ?></small>
                                </a>
                            </li>   
                        </ul>   
                     <?php } ?> 

                    <?php
                        $primary = array(
                            'theme_location'  => 'primary',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'sf-menu main-menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new harmonia_Walker_Mega_Menu(),
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                        );
                        if ( has_nav_menu( 'primary' ) ) {
                            wp_nav_menu( $primary );
                        }
                    ?>
                </div>
            </div>
        </nav>
    <?php } ?>