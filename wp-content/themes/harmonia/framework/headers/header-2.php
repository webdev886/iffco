<?php global $harmonia_option; ?>

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

            <?php if (class_exists('Woocommerce')) { ?>                
                <ul class="sf-menu search-menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom right">
                        <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="harmonia-cart">
                            <i class="fa fa-single fa-shopping-cart"></i> <small>(0)</small>
                        </a>
                    </li>   
                </ul>   
            <?php } ?> 

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
                                    <input type="search" placeholder="<?php echo esc_attr__( 'Search', 'harmonia' ) ?>" value="<?php echo get_search_query() ?>" name="s" />                             
                                    <button class="button" type="submit"><?php echo esc_attr__( 'Go', 'harmonia' ) ?></button>                             
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
 