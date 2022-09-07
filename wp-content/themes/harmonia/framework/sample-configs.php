<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "harmonia_option";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'harmonia_option',
        'use_cdn' => TRUE,
        'display_name'     => $theme->get('Name'),
        'display_version'  => $theme->get('Version'),
        'page_title' => 'Harmonia Options',
        'update_notice' => FALSE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Harmonia Options',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => false,
        'dev_mode'   => false,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => esc_html__( 'Theme Information 1', 'harmonia' ),
            'content' => esc_html__( 'This is the tab content, HTML is allowed.', 'harmonia' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => esc_html__( 'Theme Information 2', 'harmonia' ),
            'content' => esc_html__( 'This is the tab content, HTML is allowed.', 'harmonia' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = esc_html__( 'This is the sidebar content, HTML is allowed.', 'harmonia' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    // ACTUAL DECLARATION OF SECTIONS          
            Redux::setSection( $opt_name, array(
                'icon' => ' el-icon-stackoverflow',
                'title' => esc_html__('Miscellaneous Settings', 'harmonia'),
                'fields' => array(
                    array(
                        'id'       => 'preload-switch',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Preload Off?', 'harmonia'),
                        'subtitle' => esc_html__('If you do not want to use the preloader when load page, just turn it off.', 'harmonia'),
                        'default'  => true,
                    ), 
                    array(
                        'id' => 'menu-mob',
                        'type' => 'text',
                        'title' => esc_html__('Menu Button Text', 'harmonia'),
                        'subtitle' => esc_html__('', 'harmonia'),
                        'desc' => esc_html__('Enter menu button title on mobile version.', 'harmonia'),
                        'default' => 'MENU'
                    ),
					array(
						'id' => 'gmap_api',
						'type' => 'text',
						'title' => esc_html__('Google Map API Key', 'harmonia'),
						'subtitle' => esc_html__('Add your Google map api key', 'harmonia'),
						'desc' => esc_html__('Create your Gmap API key here: https://developers.google.com/maps/documentation/javascript/get-api-key', 'harmonia'),
						'default' => 'AIzaSyDZJDaC3vVJjxIi2QHgdctp3Acq8UR2Fgk'
					),  
                )
            ) );

            Redux::setSection( $opt_name, array(
                'icon' => ' el-icon-picture',
                'title' => esc_html__('Logo & Favicon Settings', 'harmonia'),
                'fields' => array(                    
                    array(
                        'id' => 'logo',
                        'type' => 'media',
                        'url' => false,
                        'title' => esc_html__('Logo', 'harmonia'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => esc_html__('Upload your logo image.', 'harmonia'),
                        'subtitle' => esc_html__('Recommended logo size: 195x41', 'harmonia'),
                       'default' => array('url' => get_template_directory_uri().'/images/logo.png'),                     
                    ), 
                    array(
                        'id'   =>'divider_1',
                        'desc' => esc_html__('Please fixed Width & Height for Logo static.', 'harmonia'),
                        'type' => 'divide'
                    ),
                    array(
                        'id' => 'logo_width',
                        'type' => 'text',
                        'title' => esc_html__('Fix Width Logo static, default: 160', 'harmonia'),
                        'subtitle' => esc_html__('Input Width logo, remember enter number.', 'harmonia'),                        
                        'default' => ''
                    ),  
                    array(
                        'id' => 'logo_height',
                        'type' => 'text',
                        'title' => esc_html__('Fix Height Logo static, default: 50', 'harmonia'),
                        'subtitle' => esc_html__('Input Height Logo, remember enter number.', 'harmonia'),                        
                        'default' => ''
                    ),     
                    array(
                        'id' => 'logo_margin',
                        'type' => 'text',
                        'title' => esc_html__('Fix margin Top for Logo Scroll, default: 10', 'harmonia'),
                        'subtitle' => esc_html__('Input Width logo, remember enter number.', 'harmonia'),                        
                        'default' => ''
                    ), 
                    array(
                        'id'   =>'divider_2',
                        'desc' => esc_html__('Please fixed Width & Height for Logo scroll.', 'harmonia'),
                        'type' => 'divide'
                    ),
                    array(
                        'id' => 'logos_width',
                        'type' => 'text',
                        'title' => esc_html__('Fix Width Logo Scroll, default: 150', 'harmonia'),
                        'subtitle' => esc_html__('Input Width logo, remember enter number.', 'harmonia'),                        
                        'default' => ''
                    ),  
                    array(
                        'id' => 'logos_height',
                        'type' => 'text',
                        'title' => esc_html__('Fix Height Logo Scroll, default: 40', 'harmonia'),
                        'subtitle' => esc_html__('Input Height Logo, remember enter number.', 'harmonia'),                        
                        'default' => ''
                    ),
                    array(
                        'id' => 'favicon',
                        'type' => 'media',
                        'url' => false,
                        'title' => esc_html__('Favicon', 'harmonia'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => esc_html__('Upload your favicon icon.', 'harmonia'),
                        'subtitle' => esc_html__('Recommended favicon size: 32x32', 'harmonia'),
                       'default' => array('url' => get_template_directory_uri().'/images/favicon.png'),                     
                    ),                  
                    array(
                        'id' => 'apple_icon',
                        'type' => 'media',
                        'url' => false,
                        'title' => esc_html__('Apple Touch Icon 57x57', 'harmonia'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => esc_html__('Upload your Apple touch icon 57x57.', 'harmonia'),
                        'subtitle' => esc_html__('', 'harmonia'),
                        'default' => array('url' => get_template_directory_uri().'/images/apple-touch-icon.png'),
                    ),                  
                    array(
                        'id' => 'apple_icon_72',
                        'type' => 'media',
                        'url' => false,
                        'title' => esc_html__('Apple Touch Icon 72x72', 'harmonia'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => esc_html__('Upload your Apple touch icon 72x72.', 'harmonia'),
                        'subtitle' => esc_html__('', 'harmonia'),
                        'default' => array('url' => get_template_directory_uri().'/images/apple-touch-icon-72x72.png'),
                    ),
                    array(
                        'id' => 'apple_icon_114',
                        'type' => 'media',
                        'url' => false,
                        'title' => esc_html__('Apple Touch Icon 114x114', 'harmonia'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => esc_html__('Upload your Apple touch icon 114x114.', 'harmonia'),
                        'subtitle' => esc_html__('', 'harmonia'),
                        'default' => array('url' => get_template_directory_uri().'/images/apple-touch-icon-114x114.png'),
                    ), 
                )
            ) );
            
            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-qrcode',
                'title' => esc_html__('Header Settings', 'harmonia'),
                'fields' => array(
                    array(
                        'id' => 'header_layout',
                        'type' => 'select',
                        'title' => esc_html__('Header layout', 'harmonia'),
                        'subtitle' => esc_html__('Header layout', 'harmonia'),
                        'desc' => esc_html__('Header layout : select header style.', 'harmonia'),
                        'options'  => array(
                            'header1' => 'Header Normal',
                            'header2' => 'Header Center',
                            'header3' => 'Header Padding Top',
                            'header4' => 'header Pushing'
                        ),
                        'default' => 'header1',
                    ),
                    array(
                        'id'       => 'menu-search',
                        'type'     => 'switch', 
                        'title'    => esc_html__('Use Search In Menu', 'harmonia'),
                        'subtitle' => esc_html__('If you do not want to use the search box on the header, just turn it off.', 'harmonia'),
                        'default'  => true,
                    ), 
                    array(
                        'id' => 'header-background-color',
                        'type' => 'color',
                        'title' => esc_html__('Header Static Background Color', 'harmonia'),
                        'subtitle' => esc_html__('Pick the header static background color for the theme (default: rgba(20,20,20,0.9)).', 'harmonia'),
                        'default' => 'rgba(20,20,20,0.9)',
                        'validate' => 'color',
                    ),
                    array(
                        'id' => 'header-scroll-background-color',
                        'type' => 'color',
                        'title' => esc_html__('Header Scroll Background Color', 'harmonia'),
                        'subtitle' => esc_html__('Pick the header scroll background color for the theme (default: rgba(20,20,20,0.9)).', 'harmonia'),
                        'default' => 'rgba(20,20,20,0.9)',
                        'validate' => 'color',
                    ),                 
                    array(
                        'id' => 'header-text-color',
                        'type' => 'color',
                        'title' => esc_html__('Header Text Color', 'harmonia'),
                        'subtitle' => esc_html__('Pick the header text color for the theme (default: #fff).', 'harmonia'),
                        'default' => '#fff',
                        'validate' => 'color',
                    ),
                    array(
                        'id' => 'header_text',
                        'type' => 'editor',
                        'title' => esc_html__('Header Pushing Text', 'harmonia'),
                        'subtitle' => esc_html__('Infomation Text', 'harmonia'),
                        'default' => 'contact@harmonia.com',
                    ),                                                   
                )
            ) );
            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-font',
                'title' => esc_html__('Typography', 'harmonia'),
                'fields' => array(
                    array(
                        'id' => 'h1-typography',
                        'type' => 'typography',
                        'output' => array('h1'),
                        'title' => esc_html__('Heading 1', 'harmonia'),
                        'subtitle' => esc_html__('Specify the heading 1 font properties.', 'harmonia'),
                        'google' => true,
                        'word-spacing' => true,
                        'letter-spacing' => true,
                        'text-transform' => true,
                        'font-backup' => true,         
                        'default' => array(
                            'color'       => '', 
                            'font-style'  => '', 
                            'font-family' => '',
                            'font-size'   => '', 
                            'line-height' => ''
                        ),
                    ),   
                    array(
                        'id' => 'h2-typography',
                        'type' => 'typography',
                        'output' => array('h2'),
                        'title' => esc_html__('Heading 2', 'harmonia'),
                        'subtitle' => esc_html__('Specify the heading 2 font properties.', 'harmonia'),
                        'google' => true,
                        'word-spacing' => true,
                        'letter-spacing' => true,
                        'text-transform' => true,
                        'font-backup' => true, 
                        'default' => array(
                            'color'       => '', 
                            'font-style'  => '', 
                            'font-family' => '',
                            'font-size'   => '', 
                            'line-height' => ''
                        ),
                    ), 
                    array(
                        'id' => 'h3-typography',
                        'type' => 'typography',
                        'output' => array('h3'),
                        'title' => esc_html__('Heading 3', 'harmonia'),
                        'subtitle' => esc_html__('Specify the heading 3 font properties.', 'harmonia'),
                        'google' => true,
                        'word-spacing' => true,
                        'letter-spacing' => true,
                        'text-transform' => true,
                        'font-backup' => true, 
                        'default' => array(
                            'color'       => '', 
                            'font-style'  => '', 
                            'font-family' => '',
                            'font-size'   => '', 
                            'line-height' => ''
                        ),
                    ), 
                    array(
                        'id' => 'h4-typography',
                        'type' => 'typography',
                        'output' => array('h4'),
                        'title' => esc_html__('Heading 4', 'harmonia'),
                        'subtitle' => esc_html__('Specify the heading 4 font properties.', 'harmonia'),
                        'google' => true,
                        'word-spacing' => true,
                        'letter-spacing' => true,
                        'text-transform' => true,
                        'font-backup' => true, 
                        'default' => array(
                            'color'       => '', 
                            'font-style'  => '', 
                            'font-family' => '',
                            'font-size'   => '', 
                            'line-height' => ''
                        ),
                    ), 
                    array(
                        'id' => 'h5-typography',
                        'type' => 'typography',
                        'output' => array('h5'),
                        'title' => esc_html__('Heading 5', 'harmonia'),
                        'subtitle' => esc_html__('Specify the heading 5 font properties.', 'harmonia'),
                        'google' => true,
                        'word-spacing' => true,
                        'letter-spacing' => true,
                        'text-transform' => true,
                        'font-backup' => true, 
                        'default' => array(
                            'color'       => '', 
                            'font-style'  => '', 
                            'font-family' => '',
                            'font-size'   => '', 
                            'line-height' => ''
                        ),
                    ), 
                    array(
                        'id' => 'h6-typography',
                        'type' => 'typography',
                        'output' => array('h6'),
                        'title' => esc_html__('Heading 6', 'harmonia'),
                        'subtitle' => esc_html__('Specify the heading 6 font properties.', 'harmonia'),
                        'google' => true,
                        'word-spacing' => true,
                        'letter-spacing' => true,
                        'text-transform' => true,
                        'font-backup' => true, 
                        'default' => array(
                            'color'       => '', 
                            'font-style'  => '', 
                            'font-family' => '',
                            'font-size'   => '', 
                            'line-height' => ''
                        ),
                    ),    

                    array(
                        'id' => 'menu-typography',
                        'type' => 'typography',
                        'output' => array('#mainmenu a'),
                        'title' => esc_html__('Menu item', 'harmonia'),
                        'subtitle' => esc_html__('Specify the Menu item font properties.', 'harmonia'),
                        'google' => true,
                        'word-spacing' => true,
                        'letter-spacing' => true,
                        'text-transform' => true,
                        'font-backup' => true, 
                        'default' => array(
                            'color'       => '', 
                            'font-style'  => '', 
                            'font-family' => '',
                            'font-size'   => '', 
                            'line-height' => '',
                        ),
                    ),                                   
                )
            ) );
            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-blogger',
                'title' => esc_html__('Blog Settings', 'harmonia'),
                'fields' => array(
                    array(
                        'id' => 'blog_layout',
                        'type' => 'select',
                        'title' => esc_html__('Blog layout', 'harmonia'),
                        'subtitle' => esc_html__('Blog layout', 'harmonia'),
                        'desc' => esc_html__('Blog layout : select style Blog page', 'harmonia'),
                        'options'  => array(
                            'left' => 'With Left Sidebar',
                            'full' => 'Fullwidth',
                            'right' => 'With Right Sidebar',
                        ),
                        'default' => 'right',
                    ),
                    array(
                        'id' => 'blog_excerpt',
                        'type' => 'text',
                        'title' => esc_html__('Blog custom excerpt lenght', 'harmonia'),
                        'subtitle' => esc_html__('Input Blog custom excerpt lenght', 'harmonia'),
                        'desc' => esc_html__('Blog custom excerpt lenght', 'harmonia'),
                        'default' => '30'
                    ),                     
                 )
            ) );
            Redux::setSection( $opt_name, array(
                'icon' => 'el el-briefcase',
                'title' => esc_html__('Portfolio Settings', 'harmonia'),
                'fields' => array(
                    array(
                        'id' => 'portfolio_layout',
                        'type' => 'select',
                        'title' => esc_html__('Single Portfolio layout', 'harmonia'),
                        'subtitle' => esc_html__('Single portfolio layout', 'harmonia'),
                        'options'  => array(
                            'left' => 'With Left Sidebar',
                            'full' => 'Fullwidth',
                            'right' => 'With Right Sidebar',
                        ),
                        'default' => 'full',
                    ),
                 )
            ) );
            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-graph',
                'title' => esc_html__('404 Settings', 'harmonia'),
                'fields' => array(
                    array(
                        'id' => '404_background',
                        'type' => 'media',
                        'url' => false,
                        'title' => esc_html__('Background 404', 'harmonia'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => esc_html__('Upload your background image.', 'harmonia'),
                        'subtitle' => esc_html__('Recommended size 1920x1000', 'harmonia'),
                       'default' => array('url' => get_template_directory_uri().'/images/parallax-20.jpg'),                     
                    ),
                    array(
                        'id' => '404_title',
                        'type' => 'text',
                        'title' => esc_html__('404 Title', 'harmonia'),
                        'subtitle' => esc_html__('Input 404 Title', 'harmonia'),
                        'desc' => esc_html__('Enter your 404 title.', 'harmonia'),
                        'default' => '404'
                    ),                              
                     array(
                        'id' => '404_content',
                        'type' => 'editor',
                        'title' => esc_html__('404 Content', 'harmonia'),
                        'subtitle' => esc_html__('Enter 404 Content', 'harmonia'),
                        'desc' => esc_html__('Enter your 404 content.', 'harmonia'),
                        'default' => 'OOPS, THIS PAGE CAN NOT BE FOUND'
                    ),                  
                 )
            ) );            
            Redux::setSection( $opt_name, array(
                'icon' => ' el-icon-credit-card',
                'title' => esc_html__('Footer Settings', 'harmonia'),
                'fields' => array(                      
                    array(
                        'id' => 'footer_text',
                        'type' => 'editor',
                        'title' => esc_html__('Footer Text', 'harmonia'),
                        'subtitle' => esc_html__('Copyright Text', 'harmonia'),
                        'default' => 'Copyright 2017 - Harmonia by OceanThemes',
                    ), 
                    array(
                        'id' => 'footer_background',
                        'type' => 'media',
                        'url' => false,
                        'title' => esc_html__('Background Footer', 'harmonia'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => esc_html__('Background Image Footer', 'harmonia'),
                        'subtitle' => esc_html__('Background Footer', 'harmonia'),
                       'default' => array('url' => get_template_directory_uri().'/images/parallax-7.jpg'),                     
                    ),
                    array(
                        'id' => 'footer_background_color',
                        'type' => 'color',
                        'title' => esc_html__('Footer Background Color', 'harmonia'),
                        'subtitle' => esc_html__('If dont use Background Image,Pick the Footer Text color for the theme (default: Transparent).', 'harmonia'),
                        'default' => 'transparent',
                        'validate' => 'color',
                    ),
                    array(
                        'id' => 'footer_textcolor',
                        'type' => 'color',
                        'title' => esc_html__('Footer Bottom Text Color', 'harmonia'),
                        'subtitle' => esc_html__('Pick the Footer Text color for the theme (default: #212121).', 'harmonia'),
                        'default' => '#212121',
                        'validate' => 'color',
                    ),
                    
                    array(
                        'id' => 'footer_bottom_bgcolor',
                        'type' => 'color',
                        'title' => esc_html__('Footer Bottom Background Color', 'harmonia'),
                        'subtitle' => esc_html__('Pick the Footer Bottom Background color for the theme (default: #f2f2f2).', 'harmonia'),
                        'default' => '#f2f2f2',
                        'validate' => 'color',
                    ),                    
                )
            ) );
            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-hourglass',
                'title' => esc_html__('Coming Soon Settings', 'harmonia'),
                'fields' => array(  
                    array(
                        'id' => 'cs_bg',
                        'type' => 'media',
                        'title' => esc_html__('Background Image', 'harmonia'),
                        'subtitle' => esc_html__('Background Image', 'harmonia'),
                        'desc' => esc_html__('Use For Coming Soon Page', 'harmonia'),
                        'default' => array('url' => get_template_directory_uri().'/images/parallax-22.jpg')
                    ),                
                   array(
                        'id'          => 'cmsoon_date',
                        'type'        => 'date',
                        'title'       => esc_html__('Date Option', 'harmonia'), 
                        'subtitle'    => esc_html__('No validation can be done on this field type', 'harmonia'),
                        'desc'        => esc_html__('This is the description field, again good for additional info.', 'harmonia'),
                        'placeholder' => 'Click to enter a date',
                        'default' => '12/23/2018'
                    ),                    
                    array(
                        'id' => 'cs_title',
                        'type' => 'text',
                        'title' => esc_html__('Coming Soon Title', 'harmonia'),
                        'subtitle' => esc_html__('Coming Soon Title', 'harmonia'),
                        'desc' => esc_html__('Coming Soon Title', 'harmonia'),
                        'default' => 'Coming Soon!'
                    ),                              
                    array(
                        'id' => 'cs_stitle',
                        'type' => 'text',
                        'title' => esc_html__('Coming Soon Subtitle', 'harmonia'),
                        'subtitle' => esc_html__('Coming Soon Subtitle', 'harmonia'),
                        'desc' => esc_html__('Coming Soon Subtitle', 'harmonia'),
                        'default' => 'WE ARE ALMOST READY',
                    ),                                     
                )    
            ) );           
            Redux::setSection( $opt_name, array(
                'icon' => 'el-icon-website',
                'title' => esc_html__('Styling Options', 'harmonia'),
                'fields' => array(
                    array(
                        'id' => 'bg_allpage',
                        'type' => 'media',
                        'url' => false,
                        'title' => esc_html__('Background Header All Pages', 'harmonia'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => esc_html__('Background Header All Pages', 'harmonia'),
                        'subtitle' => esc_html__('Background Header All Pages', 'harmonia'),
                       'default' => array('url' => get_template_directory_uri().'/images/parallax-25.jpg'),                     
                    ), 
                    array(
                        'id' => 'main-color',
                        'type' => 'color',
                        'title' => esc_html__('Theme Main Color', 'harmonia'),
                        'subtitle' => esc_html__('Pick the main color for the theme (default: #e67e22).', 'harmonia'),
                        'default' => '#e67e22',
                        'validate' => 'color',
                    ),  
                    
                    array(
                        'id' => 'body-font2',
                        'type' => 'typography',
                        'output' => array('body'),
                        'title' => esc_html__('Body Font', 'harmonia'),
                        'subtitle' => esc_html__('Specify the body font properties.', 'harmonia'),
                        'google' => true,
                        'word-spacing' => true,
                        'letter-spacing' => true,
                        'text-transform' => true,
                        'font-backup' => true, 
                        'default' => array(
                            'color' => '',
                            'font-size' => '',
                            'line-height' => '',
                            'font-family' => '',
                            'font-weight' => ''
                        ),
                    ),
                     array(
                        'id' => 'custom-css',
                        'type' => 'ace_editor',
                        'title' => esc_html__('CSS Code', 'harmonia'),
                        'subtitle' => esc_html__('Paste your CSS code here.', 'harmonia'),
                        'mode' => 'css',
                        'theme' => 'monokai',
                        'desc' => 'Possible modes can be found at.',
                        'default' => ""
                    ),
                )
            ) );

    /*
     * <--- END SECTIONS
     */
