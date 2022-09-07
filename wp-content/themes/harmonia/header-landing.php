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
      <?php wp_nav_menu( array( 'theme_location' => 'landing' ) ); ?>
    </div>
  </div>
</div>
<div id="page" class="<?php if($harmonia_option['preload-switch']==true){echo 'animsition';}else{echo 'main';} ?> ">
        <?php if(isset($harmonia_option['header_layout']) and $harmonia_option['header_layout']=="header2" ){ ?>

            <nav class="section-menu-fixed cbp-af-header grey-menu-background section-shadow menu-section">
                <div class="container">                    
                    <div class="twelve columns  remove-bottom">
                        <div class="logo-wrap top-logo">
                            <a href="<?php echo esc_url( home_url('/') ); ?>" class="animsition-link">
                                <img src="<?php echo esc_url($harmonia_option['logo']['url']); ?>" alt="">
                            </a> 
                        </div> 
                    </div>
                    <div class="twelve columns center">    
                        <div class="mm-toggle menu-mobile">
                            <i class="fa fa-bars"></i><?php echo esc_attr($harmonia_option['menu-mob']); ?>              
                        </div>    
                        
                        <?php
                            $primary = array(
                                'theme_location'  => 'landing',
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
                            if ( has_nav_menu( 'landing' ) ) {
                                wp_nav_menu( $primary );
                            }
                        ?>
                        
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
                                                <button class="button" type="submit"><?php echo esc_attr__( 'Go', 'harmonia' ); ?></button>                             
                                            </form>
                                        </li>
                                    </ul>
                                    </div>
                                </li>   
                            </ul>                  
                        <?php } ?>
                    </div>
                </div>
            </nav>
 
                
        <?php }elseif(isset($harmonia_option['header_layout']) and $harmonia_option['header_layout']=="header3" ){ ?>
            <nav class="section-menu-fixed cbp-af-header dark-menu-background menu-section floating-menu">
                <div class="container">
                    <div class="twelve columns">
                        <div class="logo-wrap logo-fixed">
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
                                                <button class="button" type="submit"><?php echo esc_attr__( 'Go', 'harmonia' ); ?></button>                             
                                            </form>
                                        </li>
                                    </ul>
                                    </div>
                                </li>   
                            </ul>                  
                        <?php } ?>                        

                        <?php
                            $primary = array(
                                'theme_location'  => 'landing',
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
                            if ( has_nav_menu( 'landing' ) ) {
                                wp_nav_menu( $primary );
                            }
                        ?>

                        

                    </div>
                </div>
            </nav>

        <?php }elseif(isset($harmonia_option['header_layout']) and $harmonia_option['header_layout']=="header4" ){ ?> 
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
                                    'theme_location'  => 'landing',
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
                                if ( has_nav_menu( 'landing' ) ) {
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
    <?php }else{ ?>
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
                                            <button class="button" type="submit"><?php echo esc_attr__( 'Go', 'harmonia' ); ?></button>                             
                                        </form>
                                    </li>
                                </ul>
                                </div>
                            </li>   
                        </ul>                  
                    <?php } ?>
                    <?php
                        $primary = array(
                            'theme_location'  => 'landing',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'sf-menu',
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
                        if ( has_nav_menu( 'landing' ) ) {
                            wp_nav_menu( $primary );
                        }
                    ?>
                </div>
            </div>
        </nav>
    <?php } ?>