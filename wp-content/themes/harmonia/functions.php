<?php
/**
 * Redux Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package harmonia
 */

if ( ! class_exists( 'ReduxFramewrk' ) ) {
    require_once( get_template_directory() . '/framework/sample-configs.php' );
 function harmonia_removeDemoModeLink() { // Be sure to rename this function to something more unique
  if ( class_exists('ReduxFrameworkPlugin') ) {
   remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
  }
  if ( class_exists('ReduxFrameworkPlugin') ) {
   remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
  }
 }
 add_action('init', 'harmonia_removeDemoModeLink');
}

if( is_admin() ) {
    require get_template_directory() . '/framework/nav-menus.php';
} else {
    // Frontend functions and shortcodes
    require get_template_directory() . '/framework/menu-walker.php'; 
}

//Theme Set up:
function harmonia_theme_setup() {

    /** Set Content width **/
    if ( ! isset( $content_width ) ) {
        $content_width = 900;
    }

   /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on cubic, use a find and replace
     * to change 'cubic' to the name of your theme in all the template files
     */
	load_theme_textdomain( 'harmonia', get_template_directory() . '/languages' );

    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    //Post formats
    add_theme_support( 'post-formats', array(
        'audio',  'gallery', 'image', 'video', 'quote',
    ) );
	//Tags
	add_theme_support( 'title-tag' );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'   => esc_html__('Primary Menu', 'harmonia'),
        'onepage'   => esc_html__('One Page Menu', 'harmonia'),
        'landing'   => esc_html__('Landing Page Menu', 'harmonia'),
	) );

    if( is_admin()  ) {
      new harmonia_Walker_Nav_Menu_Custom_Fields;
    }
}
add_action( 'after_setup_theme', 'harmonia_theme_setup' );

function harmonia_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $open_sans = _x( 'on', 'Open Sans: on or off', 'harmonia' );
 
    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $dosis = _x( 'on', 'Dosis: on or off', 'harmonia' );

     /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $tangerine = _x( 'on', 'Tangerine: on or off', 'harmonia' ); 
    $inconsolata = _x( 'on', 'Inconsolata: on or off', 'harmonia' );
    $playfair_display = _x( 'on', 'Playfair Display: on or off', 'harmonia' ); 
 
    if ( 'off' !== $open_sans || 'off' !== $dosis || 'off' !== $tangerine || 'off' !== $tangerine || 'off' !== $inconsolata || 'off' !== $playfair_display ) {
        $font_families = array();
 
        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,latin-ext,cyrillic,cyrillic-ext';
        }

        if ( 'off' !== $dosis ) {
            $font_families[] = 'Dosis:400,200,300,500,600,700,800&subset=latin,latin-ext';
        }
 
        if ( 'off' !== $tangerine ) {
            $font_families[] = 'Tangerine:400,700';
        }

        if ( 'off' !== $inconsolata ) {
            $font_families[] = 'Inconsolata:400,700&subset=latin,latin-ext';
        }

        if ( 'off' !== $playfair_display ) {
            $font_families[] = 'Playfair Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic';
        }        
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}

function harmonia_theme_scripts_styles() {
	global $harmonia_option;
	$protocol = is_ssl() ? 'https' : 'http';
	$gmap_api = $harmonia_option['gmap_api'];
    
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'harmonia-fonts', harmonia_fonts_url(), array(), null );
	
    /** All frontend css files **/ 
    wp_enqueue_style( 'harmonia-base', get_template_directory_uri().'/css/base.css');
	wp_enqueue_style( 'harmonia-skeleton', get_template_directory_uri().'/css/skeleton.css');	
	wp_enqueue_style( 'harmonia-animsition', get_template_directory_uri().'/css/animsition.min.css');
    wp_enqueue_style( 'harmonia-font-awesome', get_template_directory_uri().'/css/font-awesome/css/font-awesome.css');
    wp_enqueue_style( 'harmonia-ionicons', get_template_directory_uri().'/css/ionicons.css');
    wp_enqueue_style( 'harmonia-simple-line-icons', get_template_directory_uri().'/css/simple-line-icons.css');	
    wp_enqueue_style( 'harmonia-pe-icon-7-stroke', get_template_directory_uri().'/css/pe-icon-7-stroke.css');
    wp_enqueue_style( 'harmonia-sky-mega-menu', get_template_directory_uri().'/css/superfish.css');
    wp_enqueue_style( 'harmonia-carousel', get_template_directory_uri().'/css/owl.carousel.css');
    wp_enqueue_style( 'harmonia-transitions', get_template_directory_uri().'/css/owl.transitions.css');
    wp_enqueue_style( 'harmonia-fancybox', get_template_directory_uri().'/css/jquery.fancybox.css');
    wp_enqueue_style( 'harmonia-retina', get_template_directory_uri().'/css/retina.css');	
    wp_enqueue_style( 'harmonia-mCustomScrollbar', get_template_directory_uri().'/css/jquery.mCustomScrollbar.css'); 
    wp_enqueue_style( 'harmonia-bootstraps', get_template_directory_uri().'/css/bootstraps.css'); 
    wp_enqueue_style( 'harmonia-woo', get_template_directory_uri().'/css/woocommerce.css');

    wp_enqueue_style( 'harmonia-style', get_stylesheet_uri(), array(), '21-05-2016' );


    /** Js for comment on single post **/    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
    	wp_enqueue_script( 'comment-reply' );
	}

    /** All frontend js files **/    
	wp_enqueue_script("harmonia-modernizr", get_template_directory_uri()."/js/modernizr.custom.js",array('jquery'),false,false); 
    wp_enqueue_script("harmonia-mapapi", "$protocol://maps.googleapis.com/maps/api/js?key=$gmap_api",array('jquery'),false,false);   
	wp_enqueue_script("harmonia-animsition", get_template_directory_uri()."/js/jquery.animsition.min.js",array('jquery'),false,true);
    wp_enqueue_script("harmonia-retina", get_template_directory_uri()."/js/retina-1.1.0.min.js",array('jquery'),false,true);	
    wp_enqueue_script("harmonia-easing", get_template_directory_uri()."/js/jquery.easing.js",array('jquery'),false,true);
    wp_enqueue_script("harmonia-superfish", get_template_directory_uri()."/js/superfish.js",array('jquery'),false,true);      
    wp_enqueue_script("harmonia-parallax", get_template_directory_uri()."/js/jquery.parallax-1.1.3.js",array('jquery'),false,false);
    wp_enqueue_script("harmonia-carousel", get_template_directory_uri()."/js/owl.carousel.min.js",array('jquery'),false,false);
    wp_enqueue_script("harmonia-imagesloaded", get_template_directory_uri()."/js/imagesloaded.pkgd.min.js",array('jquery'),false,true);
    wp_enqueue_script("harmonia-masonry", get_template_directory_uri()."/js/masonry.js",array('jquery'),false,true);
    wp_enqueue_script("harmonia-isotope", get_template_directory_uri()."/js/isotope.pkgd.js",array('jquery'),false,true);
    wp_enqueue_script("harmonia-fitvids", get_template_directory_uri()."/js/jquery.fitvids.js",array('jquery'),false,true);
    wp_enqueue_script("harmonia-counterup", get_template_directory_uri()."/js/jquery.counterup.min.js",array('jquery'),false,true);
    wp_enqueue_script("harmonia-waypoints", get_template_directory_uri()."/js/waypoints.min.js",array('jquery'),false,true);
    wp_enqueue_script("harmonia-visible", get_template_directory_uri()."/js/visible.min.js",array('jquery'),false,true);
    wp_enqueue_script("harmonia-typed", get_template_directory_uri()."/js/typed.js",array('jquery'),false,true);
    wp_enqueue_script("harmonia-fancybox", get_template_directory_uri()."/js/jquery.fancybox.pack.js",array(),false,true);
    wp_enqueue_script("harmonia-imagesloaded", get_template_directory_uri()."/js/imagesloaded.pkgd.min.js",array('jquery'),false,true);

    wp_enqueue_script("harmonia-multiscroll", get_template_directory_uri()."/js/jquery.multiscroll.min.js",array('jquery'),false,false);
    wp_enqueue_script("harmonia-mCustomScrollbar", get_template_directory_uri()."/js/jquery.mCustomScrollbar.concat.min.js",array('jquery'),false,false);
    wp_enqueue_script("harmonia-mmenu", get_template_directory_uri()."/js/jquery.mobile-menu.js",array('jquery'),false,false);

    if(!is_page_template('page-templates/template-coming-soon-page.php')){ 
        wp_enqueue_script("harmonia-classie", get_template_directory_uri()."/js/classie.js",array('jquery'),false,true);
        wp_enqueue_script("harmonia-cbpAnimatedHeader", get_template_directory_uri()."/js/cbpAnimatedHeader.min.js",array('jquery'),false,true);
    }  
    
	if(is_page_template('page-templates/template-onepage.php')){
        wp_enqueue_script("harmonia-malihu", get_template_directory_uri()."/js/jquery.malihu.PageScroll2id.js",array('jquery'),false,true);
        wp_enqueue_script("harmonia-custom", get_template_directory_uri()."/js/custom-index11.js",array('jquery'),false,true);
    }
    elseif(is_page_template('page-templates/template-landing.php')){
        wp_enqueue_script("harmonia-malihu", get_template_directory_uri()."/js/jquery.malihu.PageScroll2id.js",array('jquery'),false,true);
        wp_enqueue_script("harmonia-custom", get_template_directory_uri()."/js/custom-index12.js",array('jquery'),false,true);
    }    
    else{
        wp_enqueue_script("harmonia-custom", get_template_directory_uri()."/js/custom.js",array('jquery'),false,true);
    }    
    	    
}
add_action( 'wp_enqueue_scripts', 'harmonia_theme_scripts_styles');

// Widget Sidebar
function harmonia_widgets_init() {
	register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'harmonia' ),
        'id'            => 'sidebar-1',        
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'harmonia' ),        
		'before_widget' => '<div id="%1$s" class="widget %2$s">',        
		'after_widget'  => '</div>',        
		'before_title'  => '<h6>',        
		'after_title'   => '</h6><div class="small-border"></div>'
    ) );
	register_sidebar( array(
        'name'          => esc_html__( 'Shop Sidebar', 'harmonia' ),
        'id'            => 'shop-sidebar',        
        'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'harmonia' ),        
        'before_widget' => '<div id="%1$s" class="widget %2$s">',        
        'after_widget'  => '</div>',        
        'before_title'  => '<h6>',        
        'after_title'   => '</h6><div class="small-border"></div>'
    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer One Widget Area', 'harmonia' ),
		'id'            => 'footer-area-1',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'harmonia' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two Widget Area', 'harmonia' ),
		'id'            => 'footer-area-2',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'harmonia' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three Widget Area', 'harmonia' ),
		'id'            => 'footer-area-3',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'harmonia' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Fourth Widget Area', 'harmonia' ),
		'id'            => 'footer-area-4',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'harmonia' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );    
    
}
add_action( 'widgets_init', 'harmonia_widgets_init' );

//if(class_exists('WPBakeryVisualComposerSetup')){
function harmonia_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
        $class_string = preg_replace('/vc_col-sm-1/', 'one columns', $class_string);
        $class_string = preg_replace('/vc_col-sm-2/', 'two columns', $class_string);        
        $class_string = preg_replace('/vc_col-sm-3/', 'three columns', $class_string);
        $class_string = preg_replace('/vc_col-sm-4/', 'four columns', $class_string);       
        $class_string = preg_replace('/vc_col-sm-5/', 'five columns ', $class_string);
        $class_string = preg_replace('/vc_col-sm-6/', 'six columns', $class_string);
        $class_string = preg_replace('/vc_col-sm-7/', 'seven columns', $class_string);
        $class_string = preg_replace('/vc_col-sm-8/', 'eight columns', $class_string);
        $class_string = preg_replace('/vc_col-sm-9/', 'nine columns', $class_string);
        $class_string = preg_replace('/vc_col-sm-10/', 'ten columns', $class_string);
        $class_string = preg_replace('/vc_col-sm-11/', 'eleven columns', $class_string);    
        $class_string = preg_replace('/vc_col-sm-12/', 'twelve columns', $class_string);    
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'harmonia_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 

// Add new Param in Row
if(function_exists('vc_add_param')){
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Container Class', 'harmonia'),
                              "param_name" => "container_class",
                              "value" => "",      
                            ) 
    );
vc_add_param('vc_row',array(
                              "type" => "dropdown",
                              "heading" => esc_html__('Fullwidth', 'harmonia'),
                              "param_name" => "fullwidth",
                              "value" => array(   
                                                esc_html__('No', 'harmonia') => 'no',  
                                                esc_html__('Yes', 'harmonia') => 'yes',                                                                                
                                              ),
                              "description" => esc_html__("Select Fullwidth or not, Default: No fullwidth", "harmonia"),      
                            ) 
    );

vc_add_param('vc_row',array(
                              "type" => "checkbox",
                              "heading" => esc_html__('Use Background Image Parallax', 'harmonia'),
                              "param_name" => "bg_parallax",
                              "value" => '',
                              "description" => esc_html__("If checked columns will use background parallax.", "harmonia"),      
                            ) 
    );
vc_add_param('vc_row',array(
                              'type' => 'attach_image',
                              'heading' => esc_html__( 'Image', 'harmonia' ),
                              'param_name' => 'photo',
                              'value' => '',
                              'description' => esc_html__( 'Select image from media library.', 'harmonia' ),
                              'dependency' => array(
                                  'element' => 'bg_parallax',
                                  'not_empty' => true,
                                ),     
                            ) 
    );
	
    vc_remove_param( "vc_row", "parallax" );
    vc_remove_param( "vc_row", "parallax_image" );
    vc_remove_param( "vc_row", "full_width" );
    vc_remove_param( "vc_row", "full_height" );
    vc_remove_param( "vc_row", "video_bg" );
    vc_remove_param( "vc_row", "video_bg_parallax" );
    vc_remove_param( "vc_row", "content_placement" );
    vc_remove_param( "vc_row", "video_bg_url" );
	vc_remove_param( "vc_row", "parallax_speed_bg" );
	vc_remove_param( "vc_row", "parallax_speed_video" );
    
}
//}


/**
 * Customizer Shop.
 */
require get_template_directory() . '/framework/woocommerce-customize.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/framework/customizer.php';
/**
 * Customizer crop image by bfi-thumb.
 */
require_once get_template_directory() . '/framework/bfi_thumb-master/BFI_Thumb.php';
/**
 * Implement the Custom Meta Boxs.
 */
require get_template_directory() . '/framework/meta-boxes.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/framework/template-tags.php';
/**
 * Customizer widget.
 */
require_once get_template_directory() . '/framework/widget/widget.php';
/**
 * Customizer Menu.
 */
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';

/**
 * Require plugins install for this theme.
 *
 * @since GoCargo 1.0
 */
require_once get_template_directory() . '/framework/plugin-requires.php';

?>