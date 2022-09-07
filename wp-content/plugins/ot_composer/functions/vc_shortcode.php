<?php 

$GLOBALS['icons'] = get_icons();

if ( function_exists( 'vc_add_shortcode_param' ) ) {
   vc_add_shortcode_param( 'icon', 'icon_param', get_template_directory_uri() . '/js/vc/icon-field.js' );
} elseif ( function_exists( 'add_shortcode_param' ) ) {
   add_shortcode_param( 'icon', 'icon_param', get_template_directory_uri() . '/js/vc/icon-field.js' );
}

// Buttons
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Button", 'otvcp-i10n'),   
   "base" => "button",
   "class" => "",
   "category"  => 'Harmonia Elements',
   "admin_enqueue_css" => get_template_directory_uri() . '/css/vc/icon-field.css',
   "icon" => "icon-st",
   "params" => array(
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Link Button", 'otvcp-i10n'),
         "param_name" => "linkbox",         
         "description" => esc_html__("Add your link to button.", 'otvcp-i10n')
      ),
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Button Style', 'otvcp-i10n'),
        "param_name" => "style",
        "value" => array(   
                     esc_html__('Style 1 : Dark', 'otvcp-i10n')   => 'style1', 
                     esc_html__('Style 2 : Border Dark', 'otvcp-i10n')   => 'style2',
                     esc_html__('Style 3 : Border light', 'otvcp-i10n')   => 'style3',
                     esc_html__('Style 4 : Border Color', 'otvcp-i10n')   => 'style4',
                     esc_html__('Style 5 : With Icon', 'otvcp-i10n')   => 'style5',
                    ), 
      ),
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Button Size', 'otvcp-i10n'),
        "param_name" => "size",
        "value" => array(   
                     esc_html__('Small', 'otvcp-i10n')   => 'size1', 
                     esc_html__('Normal', 'otvcp-i10n')   => 'med',
                     esc_html__('Lagre', 'otvcp-i10n')   => 'big',
                    ),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1','style2','style3','style4' ) ), 
      ),
      array(
         "type" => "icon",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "fa fa-adjust",  
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style5' ) ),         
      ),
   )));
}

// Blog Masonry
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Blog Masonry", 'otvcp-i10n'),
   "base"      => "blogma",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Style",
         "param_name" => "style",
         "value" => array(
                     esc_html__('Style 1 : No Sidebar', 'otvcp-i10n') => 'style1',

                     esc_html__('Style 2 : Left Sidebar', 'otvcp-i10n') => 'style2',

                     esc_html__('Style 3 : Right Sidebar', 'otvcp-i10n') => 'style3',

                     esc_html__('Style 4 : No Fillter', 'otvcp-i10n') => 'style4',
                     
                    ),
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Text Show All Posts", 'otvcp-i10n'),
         "param_name"=> "all",
         "value"     => "",
         "description" => esc_html__("Text Filter Show All Posts.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1', 'style2', 'style3' ) ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts Per Page", 'otvcp-i10n' ),
         "param_name" => "num",
         "value" => 8,
         "description" => esc_html__("Enter Number Posts, Default: 8.", 'otvcp-i10n' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Select Columns.", 'otvcp-i10n'),
         "param_name" => "col",
         "value" => array( 
                     esc_html__('Columns 4', 'otvcp-i10n') => 4,
                     esc_html__('Columns 3', 'otvcp-i10n') => 3,
                     esc_html__('Columns 2', 'otvcp-i10n') => 2,
                    ),
         "description" => esc_html__("Select number columns for show.", 'otvcp-i10n')
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => "Use Fullwidth Content?",
         "param_name" => "fullwidthc",
         'value' => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1','style4' ) ),
      ),      
    )));
}

// Call To Action
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Call To Action", 'otvcp-i10n'),
   "base"      => "call_to",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "admin_enqueue_css" => get_template_directory_uri() . '/css/vc/icon-field.css',
   "params"    => array(       
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Style', 'otvcp-i10n'),
        "param_name" => "style",
        "value" => array(   
                     esc_html__('Call To Action Style 1', 'otvcp-i10n')   => 'style1', 
                     esc_html__('Call To Action Style 2', 'otvcp-i10n')   => 'style2',
                    ), 
      ),       
      array(
         "type" => "icon",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "fa fa-adjust",         
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Subtitle",
         "param_name" => "subtitle",
         "value" => "",
      ), 
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Link Button", 'otvcp-i10n'),
         "param_name" => "linkbox",         
         "description" => esc_html__("Add link to Button.", 'otvcp-i10n'),
      ), 
    )));
}

// Countdown
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Countdown", 'otvcp-i10n'),
   "base"      => "countdown",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image Parallax",
         "param_name" => "photo",
         "value" => "",
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Image Height",
         "param_name" => "height",
         "value" => "",
         "description" => esc_html__("Ex : 400px,500px... Default : 75vh", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Text", 'otvcp-i10n')
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => esc_html__("Text", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Day Option",
         "param_name" => "day",
         "value" => "",
         "description" => esc_html__("mm/dd/yyyy.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Time Option",
         "param_name" => "time",
         "value" => "",
         "description" => esc_html__("hh:mm:ss", 'otvcp-i10n')
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "Notification",
         "param_name" => "alert",
         "value" => "",
         "description" => esc_html__("Text notification when it's time", 'otvcp-i10n')
      ),
    )));
}

// Home Parallax
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Home Parallax", 'otvcp-i10n'),
   "base"      => "home_parallax",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Style",
         "param_name" => "style",
         "value" => array(
                     esc_html__('Home Medical', 'otvcp-i10n') => 'style1',
                     esc_html__('Home Profile && Software', 'otvcp-i10n') => 'style2',
                     esc_html__('Home Photography', 'otvcp-i10n') => 'style3',
                     esc_html__('Home Creative && Cosmetic', 'otvcp-i10n') => 'style4',
                     esc_html__('Home Original', 'otvcp-i10n') => 'style5',
                     esc_html__('Home Farmer', 'otvcp-i10n') => 'style6',
                    ),
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image Background Parallax",
         "param_name" => "photo",
         "value" => "",
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Image Height",
         "param_name" => "height",
         "value" => "",
         "description" => esc_html__("Ex : 400px,500px... Default : 75vh . Full height : 100vh", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Big Text",
         "param_name" => "btext",
         "value" => "",
         "description" => esc_html__("Text", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style3' ) ), 
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "Text Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Text", 'otvcp-i10n')
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => esc_html__("Text", 'otvcp-i10n')
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image SubTitle",
         "param_name" => "subphoto",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Text Color", 'otvcp-i10n'),
         "param_name"=> "color",
         "value"     => "",
         "description" => esc_html__("Color of text.", 'otvcp-i10n'),
      ),
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Link Button", 'otvcp-i10n'),
         "param_name" => "linkbox",         
         "description" => esc_html__("Add your link to button.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2','style4','style5' ) ),
      ),                       
    )));
}

// Home Pushing
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Home Pushsing", 'otvcp-i10n'),
   "base"      => "homepushing",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array( 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Image Align",
         "param_name" => "align",
         "value" => array(                     
                     esc_html__('Right', 'otvcp-i10n') => 'right',
                     esc_html__('Left', 'otvcp-i10n') => 'left',                   
                    ),
      ),         
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo",
         "param_name" => "photo",
         "value" => "",
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => "Use Parallax?",
         "param_name" => "parallax",
         'value' => "",
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Background Color", 'otvcp-i10n'),
         "param_name"=> "background_color",
         "value"     => "",
         "description" => esc_html__("Color of background. Default : #fff", 'otvcp-i10n'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Tag Title",
         "param_name" => "tag",
         "value" => array(                     
                     esc_html__('h2', 'otvcp-i10n') => 'h2',
                     esc_html__('h3', 'otvcp-i10n') => 'h3',                   
                    ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "SubTitle",
         "param_name" => "subtitle",
         "value" => "",
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Description", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Content right.", 'otvcp-i10n')
      ),
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Link Button", 'otvcp-i10n'),
         "param_name" => "linkbox",         
         "description" => esc_html__("Add your link to button.", 'otvcp-i10n')
      ),
    )));
}

// Home Split Left
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Home Split Left", 'otvcp-i10n'),
   "base"      => "homesplitleft",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array( 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "ID",
         "param_name" => "id",
         "value" => "",
      ),   
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo Left",
         "param_name" => "photo",
         "value" => "",
         "description" => esc_html__("Photo Left", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Big Text",
         "param_name" => "btext",
         "value" => "",
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "Text Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Text Title", 'otvcp-i10n')
      ),
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Link Button", 'otvcp-i10n'),
         "param_name" => "linkbox",         
         "description" => esc_html__("Add your link to button.", 'otvcp-i10n')
      ), 
    )));
}

// Home Split Right
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Home Split Right", 'otvcp-i10n'),
   "base"      => "homesplitright",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "ID",
         "param_name" => "id",
         "value" => "",
      ),   
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo Right",
         "param_name" => "photo",
         "value" => "",
         "description" => esc_html__("Photo Right", 'otvcp-i10n')
      ),
    )));
}

// Home Slider Carousel
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Home Slider Carousel", 'otvcp-i10n'),
   "base" => "homeslider",
   "class" => "",
   "category"  => 'Harmonia Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Show",
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Non-existing number for show all post.", 'otvcp-i10n')
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Height",
         "param_name" => "height",
         "value" => "",
         "description" => esc_html__("Ex : 400px,500px... Default : 100vh", 'otvcp-i10n')
      ),    
    )
    ));
}

// Image Post
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Image Post", 'otvcp-i10n'),
   "base"      => "image_post",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(      
     array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image Post",
         "param_name" => "photo",
         "value" => "",
      ), 
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Style Image Hover', 'otvcp-i10n'),
        "param_name" => "style",
        "value" => array(   
                     esc_html__('Image Hover Zoom', 'otvcp-i10n')   => 'style1', 
                     esc_html__('Image Hover Dark', 'otvcp-i10n')   => 'style2',
                     esc_html__('Image Hover Dark With Title', 'otvcp-i10n')   => 'style3',
                     esc_html__('Image Hover Dark With Title & Sub title', 'otvcp-i10n')   => 'style4',
                     esc_html__('Image Hover Dark With Title | Sub title', 'otvcp-i10n')   => 'style5',
                     esc_html__('Image Hover Grayscale', 'otvcp-i10n')   => 'style6',
                    ), 
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title Image",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Title of image", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style3','style4','style5' ) ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Subtitle Image",
         "param_name" => "subtitle",
         "value" => "",
         "description" => esc_html__("Subtitle of image", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style4','style5' ) ),
      ),          
    )));
}

// Image Carousel
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Image Carousel", 'otvcp-i10n'),
   "base" => "image_gallery",
   "class" => "",
   "category"  => 'Harmonia Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Image Add",
         "param_name" => "gallery",
         "value" => "",
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => "Use Zoom Image",
         "param_name" => "zoom",
         'value' => "",
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Columns", 'otvcp-i10n'),
         "param_name" => "columns",
         "value" => array( 
                     esc_html__('1 Columns', 'otvcp-i10n') => '1',
                     esc_html__('2 Columns', 'otvcp-i10n') => '2',
                     esc_html__('3 Columns', 'otvcp-i10n') => '3',
                     esc_html__('4 Columns', 'otvcp-i10n') => '4',
                     esc_html__('5 Columns', 'otvcp-i10n') => '5',
                     esc_html__('6 Columns', 'otvcp-i10n') => '6',
                    ),
      ),         
    )));
}
//Video Player
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Video Post", 'otvcp-i10n'),
   "base"      => "videoplayer",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Style Video Post", 'otvcp-i10n'),
         "param_name" => "style",
         "value" => array( 
                     esc_html__('Style 1 : Video Popup', 'otvcp-i10n') => 'style1',
                     esc_html__('Style 2 : Video With Banner', 'otvcp-i10n') => 'style2',
                    ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Subtitle",
         "param_name" => "subtitle",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Banner",
         "param_name" => "photo",
         "value" => "",
         "description" => esc_html__("Banner of video", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Video",
         "param_name" => "video",
         "value" => "",
         "description" => esc_html__("Ex: http://player.vimeo.com/video/88883554 or http://www.youtube.com/embed/eP2VWNtU5rw", 'otvcp-i10n')
      ),       
    )));
}

// List style
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT List Style", 'otvcp-i10n'),
   "base"      => "list",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "admin_enqueue_css" => get_template_directory_uri() . '/css/vc/icon-field.css',
   "params"    => array( 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
      ),       
      array(
         "type" => "icon",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "fa fa-adjust",         
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Icon Color", 'otvcp-i10n'),
         "param_name"=> "color",
         "value"     => "",
         "description" => esc_html__("Color of icon. Default : #414141", 'otvcp-i10n'),
      ),    
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => "Use Border Circle?",
         "param_name" => "border",
         'value' => "",
      ), 
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Border Color", 'otvcp-i10n'),
         "param_name"=> "border_color",
         "value"     => "",
         "description" => esc_html__("Color of border", 'otvcp-i10n'),
         "description" => esc_html__("Color of border. Default : main color", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'border', 'value' => "true" ),
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Background Color", 'otvcp-i10n'),
         "param_name"=> "background_color",
         "value"     => "",
         "description" => esc_html__("Color of background. Default : #fff", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'border', 'value' => "true" ),
      ),                       
    )));
}

// Latest Blog Grid
if(function_exists('vc_map')){   
   vc_map( array(
   "name" => esc_html__("OT Latest Blog Grid", 'otvcp-i10n'),
   "base" => "bloggrid",
   "class" => "",
   "category"  => 'Harmonia Elements',
   "icon" => "icon-st",
   "params" => array(
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Posts Show",
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Number", 'otvcp-i10n')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Excerpt",
         "param_name" => "excerpt",
         "value" => "",
         "description" => esc_html__("Number", 'otvcp-i10n')
      ),
      )
    ));
}

// Latest Blog Slider
if(function_exists('vc_map')){   
   vc_map( array(
   "name" => esc_html__("OT Latest Blog Silder", 'otvcp-i10n'),
   "base" => "latestblog",
   "class" => "",
   "category"  => 'Harmonia Elements',
   "icon" => "icon-st",
   "params" => array(
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Posts Show",
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Number", 'otvcp-i10n')
      ),    
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Excerpt",
         "param_name" => "excerpt",
         "value" => "",
         "description" => esc_html__("Number", 'otvcp-i10n')
      ),
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Visible Of Row', 'otvcp-i10n'),
        "param_name" => "visible",
        "value" => array(   
                     esc_html__('2', 'otvcp-i10n')   => '2', 
                     esc_html__('3', 'otvcp-i10n')   => '3',
                     esc_html__('4', 'otvcp-i10n')   => '4',                    
                    ), 
      ),      
    )
    ));
}

// About
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Our About", 'otvcp-i10n'),
   "base" => "about",
   "class" => "",
   "category"  => 'Harmonia Elements',
   "icon" => "icon-st",
   "params" => array( 
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Style Of About', 'otvcp-i10n'),
        "param_name" => "style",
        "value" => array(   
                     esc_html__('Style 1 : No Image ', 'otvcp-i10n')   => 'style1', 
                     esc_html__('Style 2 : With Image ', 'otvcp-i10n')   => 'style2',
                     esc_html__('Style 3 : With Video In Image ', 'otvcp-i10n')   => 'style3',
                     esc_html__('Style 4 : With Fun Facts In Image', 'otvcp-i10n')   => 'style4',
                     esc_html__('Style 5 : With Testimonial Slider In Image', 'otvcp-i10n')   => 'style5',
                    ), 
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "photo",
         "value" => "",
         "description" => esc_html__("Image of about", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2','style3','style4','style5' ) ),
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => "Use Parallax Image",
         "param_name" => "parallax",
         'value' => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2','style3','style4','style5' ) ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title Video",
         "param_name" => "title_video",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style3' ) ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Video",
         "param_name" => "video",
         "value" => "",
         "description" => esc_html__("Ex: http://player.vimeo.com/video/88883554 or http://www.youtube.com/embed/eP2VWNtU5rw", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style3' ) ),
      ),
      array(
         "type" => "icon",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "fa fa-adjust",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style4' ) ),         
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title Fun Facts",
         "param_name" => "title_number",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style4' ) ),
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Fun Facts",
         "param_name" => "number",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style4' ) ),
      ),
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Image Align', 'otvcp-i10n'),
        "param_name" => "align",
        "value" => array(   
                     esc_html__('Left', 'otvcp-i10n')   => 'align1', 
                     esc_html__('Right', 'otvcp-i10n')   => 'align2',                   
                    ), 
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2','style3','style4','style5' ) ),
      ),   
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Background Color", 'otvcp-i10n'),
         "param_name"=> "background_color",
         "value"     => "",
         "description" => esc_html__("Color of background. Default : #282828", 'otvcp-i10n'),
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Text Color", 'otvcp-i10n'),
         "param_name"=> "text_color",
         "value"     => "",
         "description" => esc_html__("Color of text. Default : #fff", 'otvcp-i10n'),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Subtitle",
         "param_name" => "subtitle",
         "value" => "",
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Description", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Content right.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Author",
         "param_name" => "author",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Link Button", 'otvcp-i10n'),
         "param_name" => "linkbox",         
         "description" => esc_html__("Add link to Button.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1','style2','style3','style4' ) ),
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => "Use Big Padding?",
         "param_name" => "padding",
         'value' => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Select Border Split on Position?', 'otvcp-i10n'),
        "param_name" => "border_split",
        "value" => array(   
                     esc_html__('Border not show', 'otvcp-i10n')   => 'border_none', 
                     esc_html__('Border on content', 'otvcp-i10n')   => 'border_content', 
                     esc_html__('Border on image', 'otvcp-i10n')   => 'border_image',                   
                    ), 
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2','style3','style4','style5' ) ),
      ), 
    )));
}

// Clients Logo
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Our Clients Logo", 'otvcp-i10n'),
   "base"      => "clients",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(
      array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => "Logo Client",
         "param_name" => "gallery",
         "value" => "",
         "description" => esc_html__("Use link out for logo client by enter link input caption image, View guide here: http://vegatheme.com/images/add-link-logo.jpg , Recomended Size: 200 x 130. ", 'otvcp-i10n')
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Background Color", 'otvcp-i10n'),
         "param_name"=> "background_color",
         "value"     => "",
         "description" => esc_html__("Color of background", 'otvcp-i10n'),
      ),       
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Visible Of Row', 'otvcp-i10n'),
        "param_name" => "visible",
        "value" => array(   
                     esc_html__('6', 'otvcp-i10n')   => '6', 
                     esc_html__('5', 'otvcp-i10n')   => '5',
                     esc_html__('4', 'otvcp-i10n')   => '4',                    
                    ), 
      ),   
    )));
}

// Our Facts
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Our Facts", 'otvcp-i10n'),
   "base" => "ourfacts",
   "class" => "",
   "category"  => 'Harmonia Elements',
   "admin_enqueue_css" => get_template_directory_uri() . '/css/vc/icon-field.css',
   "icon" => "icon-st",
   "params" => array(
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Style Of Pricing', 'otvcp-i10n'),
        "param_name" => "style",
        "value" => array(   
                     esc_html__('Style 1 : Small Number', 'otvcp-i10n')   => 'style1', 
                     esc_html__('Style 2 : Big Number', 'otvcp-i10n')   => 'style2', 
                     esc_html__('Style 3 : Normal Number', 'otvcp-i10n')   => 'style3',
                    ),          
      ),
      array(
         "type" => "icon",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "fa fa-adjust",         
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Fact", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Number display in Our Facts box.", 'otvcp-i10n')
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => "Use Percent?",
         "param_name" => "percent",
         'value' => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title Fact", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Title display in Our Facts box.", 'otvcp-i10n')
      ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Subitle Fact", 'otvcp-i10n'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => esc_html__("Subitle display in Our Facts box.", 'otvcp-i10n')
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Background Color", 'otvcp-i10n'),
         "param_name"=> "background_color",
         "value"     => "",
         "description" => esc_html__("Color of background. Default : #282828", 'otvcp-i10n'),
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Text Color", 'otvcp-i10n'),
         "param_name"=> "text_color",
         "value"     => "",
         "description" => esc_html__("Color of text. Default : #fff", 'otvcp-i10n'),
      ),
    )));
}

// Features box
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Our Feature Box", 'otvcp-i10n'),
   "base"      => "featurebox",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Style Feature Box', 'otvcp-i10n'),
        "param_name" => "style",
        "value" => array(   
                     esc_html__('Style 1 : No Content', 'otvcp-i10n')   => 'style1', 
                     esc_html__('Style2 : With Content', 'otvcp-i10n')   => 'style2',                   
                    ), 
      ),      
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image Background",
         "param_name" => "photo",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),     
      ),        
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Style Text', 'otvcp-i10n'),
        "param_name" => "style_text",
        "value" => array(   
                     esc_html__('Light', 'otvcp-i10n')   => 'dark', 
                     esc_html__('Dark', 'otvcp-i10n')   => 'light',                   
                    ), 
      ),        
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Text", 'otvcp-i10n')
      ),       
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text SubTitle",
         "param_name" => "stitle",
         "value" => "",
         "description" => esc_html__("Text", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2' ) ), 
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Description", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2' ) ), 
      ),
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Link Button", 'otvcp-i10n'),
         "param_name" => "linkbox",         
         "description" => esc_html__("Add your link to button.", 'otvcp-i10n')
      ), 
    )));
}

// Infomation
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Our Infomation", 'otvcp-i10n'),
   "base"      => "infomation",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "admin_enqueue_css" => get_template_directory_uri() . '/css/vc/icon-field.css',
   "params"    => array(
      array(
         "type" => "icon",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "fa fa-adjust",         
      ),      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Title's infomation", 'otvcp-i10n')
      ), 
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Description", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Content right.", 'otvcp-i10n')
      ),                 
    )));
}

// Our Process
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Our Process", 'otvcp-i10n'),
   "base" => "process",
   "class" => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "admin_enqueue_css" => get_template_directory_uri() . '/css/vc/icon-field.css',
   "params" => array(
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Style Of Process', 'otvcp-i10n'),
        "param_name" => "style",
        "value" => array(   
                     esc_html__('Style 1 : Picture Circle', 'otvcp-i10n')   => 'style1', 
                     esc_html__('Style 2 : Picture Square', 'otvcp-i10n')   => 'style2', 
                     esc_html__('Style 3 : Icon', 'otvcp-i10n')   => 'style3', 
                    ), 
      ),
      array(
         "type" => "icon",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "fa fa-adjust", 
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style3' ) ),        
      ), 
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => "Use Line Left",
         "param_name" => "first",
         'value' => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Process", 'otvcp-i10n'),
         "param_name" => "number",
         "value" => "",
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
      ), 
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo Process",
         "param_name" => "photo",
         "value" => "",
         "description" => esc_html__("Image of process", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1','style2' ) ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Title's process", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Subtitle", 'otvcp-i10n'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => esc_html__("Subtitle's process", 'otvcp-i10n')
      ),      
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Description", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Content right.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1','style3' ) ),
      ),    
    )));
}

// Service
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Our Services", 'otvcp-i10n'),
   "base" => "service",
   "class" => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "admin_enqueue_css" => get_template_directory_uri() . '/css/vc/icon-field.css',
   "params" => array(
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Style Of Service', 'otvcp-i10n'),
        "param_name" => "style",
        "value" => array(   
                     esc_html__('Style 1 : No Content', 'otvcp-i10n')   => 'style1', 
                     esc_html__('Style 2 : With Content', 'otvcp-i10n')   => 'style2',                   
                    ), 
      ),
      
      array(
         "type" => "icon",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon", 'otvcp-i10n'),
         "param_name" => "icon",
         "value" => "fa fa-adjust",         
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Icon Color", 'otvcp-i10n'),
         "param_name"=> "color",
         "value"     => "",
         "description" => esc_html__("Color of Icon. Default : #fff", 'otvcp-i10n'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Icon Size", 'otvcp-i10n'),
         "param_name" => "size",
         "value" => "",
         "description" => esc_html__("Ex: 30px , 40px . . . ", 'otvcp-i10n')
      ),
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Icon Align', 'otvcp-i10n'),
        "param_name" => "align",
        "value" => array(   
                     esc_html__('Right', 'otvcp-i10n')   => 'align1', 
                     esc_html__('Left', 'otvcp-i10n')   => 'align2',
                     esc_html__('center', 'otvcp-i10n')   => 'align3',
                    ), 
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Border Right?", 'otvcp-i10n'),
         "param_name" => "border",
         "value" => "",
         "dependency"  => array( 'element' => 'align', 'value' => array( 'align3' ) ),
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Subtitle", 'otvcp-i10n'),
         "param_name" => "subtitle",
         "value" => "",
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Text Color", 'otvcp-i10n'),
         "param_name"=> "text_color",
         "value"     => "",
         "description" => esc_html__("Color of text", 'otvcp-i10n'),
      ),      
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Description", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Content right.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Extra Class", 'otvcp-i10n'),
         "param_name" => "el_class",
         "value" => "",
      ),    
    )));
}

// Quote
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Our Quote", 'otvcp-i10n'),
   "base"      => "quote",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Style",
         "param_name" => "style",
         "value" => array(
                     esc_html__('White Background', 'otvcp-i10n') => 'style1',
                     esc_html__('Dark Background', 'otvcp-i10n') => 'style2',
                     esc_html__('Main Color Background', 'otvcp-i10n') => 'style3',
                    ),
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Description", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Content right.", 'otvcp-i10n')
      ),                  
    )));
}

//Our Team
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Our Team", 'otvcp-i10n'),
   "base" => "team",
   "class" => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params" => array(
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Team Style', 'otvcp-i10n'),
        "param_name" => "style",
        "value" => array(   
                     esc_html__('Style 1 :  ', 'otvcp-i10n')   => 'style1', 
                     esc_html__('Style 2 :  ', 'otvcp-i10n')   => 'style2',                    
                    ), 
      ),  
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Photo Member",
         "param_name" => "photo",
         "value" => "",
         "description" => esc_html__("Avarta of member, Recomended Size: 420 x 420", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Name", 'otvcp-i10n'),
         "param_name" => "name",
         "value" => "",
         "description" => esc_html__("Member's Name", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Job", 'otvcp-i10n'),
         "param_name" => "job",
         "value" => "",
         "description" => esc_html__("Member's job.", 'otvcp-i10n')
      ),
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Contact Style', 'otvcp-i10n'),
        "param_name" => "cstyle",
        "value" => array(   
                     esc_html__('Use Text', 'otvcp-i10n')   => 'cstyle1', 
                     esc_html__('Use Icon', 'otvcp-i10n')   => 'cstyle2',                    
                    ), 
      ),      
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Contact 1", 'otvcp-i10n'),
         "param_name"=> "contact11",
         "value"     => "",
         "dependency"  => array( 'element' => 'cstyle', 'value' => array( 'cstyle1' ) ),         
      ),
      array(
         "type"      => "iconpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Contact 1", 'otvcp-i10n'),
         "param_name"=> "contact21",
         "value"     => "",
         "dependency"  => array( 'element' => 'cstyle', 'value' => array( 'cstyle2' ) ),         
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 1",
         "param_name"=> "url1",
         "value"     => "",
         "description" => esc_html__("Url.", 'otvcp-i10n')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Contact 2", 'otvcp-i10n'),
         "param_name"=> "contact12",
         "value"     => "", 
         "dependency"  => array( 'element' => 'cstyle', 'value' => array( 'cstyle1' ) ),         
      ),
     array(
         "type"      => "iconpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Contact 2", 'otvcp-i10n'),
         "param_name"=> "contact22",
         "value"     => "",
         "dependency"  => array( 'element' => 'cstyle', 'value' => array( 'cstyle2' ) ),         
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 2",
         "param_name"=> "url2",
         "value"     => "",
         "description" => esc_html__("Url.", 'otvcp-i10n')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Contact 3", 'otvcp-i10n'),
         "param_name"=> "contact13",
         "value"     => "", 
         "dependency"  => array( 'element' => 'cstyle', 'value' => array( 'cstyle1' ) ),         
      ),
     array(
         "type"      => "iconpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Contact 3", 'otvcp-i10n'),
         "param_name"=> "contact23",
         "value"     => "",
         "dependency"  => array( 'element' => 'cstyle', 'value' => array( 'cstyle2' ) ),         
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => "Url 3",
         "param_name"=> "url3",
         "value"     => "",
         "description" => esc_html__("Url.", 'otvcp-i10n')
      ),     
    )));
}

// Skill
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Our Skills", 'otvcp-i10n'),
   "base" => "skill",
   "class" => "",
   "category"  => 'Harmonia Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title Skill 1", 'otvcp-i10n'),
         "param_name" => "name1",
         "value" => "",
         "description" => esc_html__("Title display in Our Skill box.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Skill 1", 'otvcp-i10n'),
         "param_name" => "per1",
         "value" => "",
         "description" => esc_html__("Number display in Our Skill box.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title Skill 2", 'otvcp-i10n'),
         "param_name" => "name2",
         "value" => "",
         "description" => esc_html__("Title display in Our Skill box.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Skill 2", 'otvcp-i10n'),
         "param_name" => "per2",
         "value" => "",
         "description" => esc_html__("Number display in Our Skill box.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title Skill 3", 'otvcp-i10n'),
         "param_name" => "name3",
         "value" => "",
         "description" => esc_html__("Title display in Our Skill box.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Skill 3", 'otvcp-i10n'),
         "param_name" => "per3",
         "value" => "",
         "description" => esc_html__("Number display in Our Skill box.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title Skill 4", 'otvcp-i10n'),
         "param_name" => "name4",
         "value" => "",
         "description" => esc_html__("Title display in Our Skill box.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Skill 4", 'otvcp-i10n'),
         "param_name" => "per4",
         "value" => "",
         "description" => esc_html__("Number display in Our Skill box.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title Skill 5", 'otvcp-i10n'),
         "param_name" => "name5",
         "value" => "",
         "description" => esc_html__("Title display in Our Skill box.", 'otvcp-i10n')
      ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Skill 5", 'otvcp-i10n'),
         "param_name" => "per5",
         "value" => "",
         "description" => esc_html__("Number display in Our Skill box.", 'otvcp-i10n')
      ),   
    )));
}

// Pricing Table
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Pricing Table", 'otvcp-i10n'),
   "base" => "pricingtable",
   "class" => "",
   "category"  => 'Harmonia Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Style Of Pricing', 'otvcp-i10n'),
        "param_name" => "style",
        "value" => array(   
                     esc_html__('Classic', 'otvcp-i10n')   => 'style1', 
                     esc_html__('Menu', 'otvcp-i10n')   => 'style2',                   
                    ),          
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "photo",
         "value" => "",
         "description" => esc_html__("Image of pricing", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style2' ) ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Title Pricing", 'otvcp-i10n'),
         "param_name" => "title",
         "value" => "",
         "description" => esc_html__("Title display in Pricing Table.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Subtitle Pricing", 'otvcp-i10n'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => esc_html__("Subtitle display in Pricing Table.", 'otvcp-i10n')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Price Pricing", 'otvcp-i10n'),
         "param_name" => "price",
         "value" => "",
         "description" => esc_html__("Price display in Pricing Table.", 'otvcp-i10n'),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Price Unit", 'otvcp-i10n'),
         "param_name" => "unit",
         "value" => "",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Per Time", 'otvcp-i10n'),
         "param_name" => "time",
         "value" => "",
         "description" => esc_html__("Price per time in Pricing Table.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Detail Pricing", 'otvcp-i10n'),
         "param_name" => "content",
         "value" => "",
         "description" => esc_html__("Content Pricing Table.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Label Button", 'otvcp-i10n'),
         "param_name" => "btntext",
         "value" => "",
         "description" => esc_html__("Text display in button.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Link Button", 'otvcp-i10n'),
         "param_name" => "btnlink",
         "value" => "",
         "description" => esc_html__("Link in button.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),

     array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Featured Pricing?", 'otvcp-i10n'),
         "param_name" => "featured",
         "value" => "",
         "description" => esc_html__("Check Featured Pricing.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),         
    )));
}

// Portfolio Slider
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Portfolio Silder", 'otvcp-i10n'),
   "base" => "portfolioslider",
   "class" => "",
   "category"  => 'Harmonia Elements',
   "icon" => "icon-st",
   "params" => array(      
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Visible",
         "param_name" => "visible",
         "value" => array(
                     esc_html__('Select Visible', 'otvcp-i10n') => '',
                     esc_html__('2 Cols', 'otvcp-i10n') => '2',
                     esc_html__('3 Cols', 'otvcp-i10n') => '3', 
                     esc_html__('4 Cols', 'otvcp-i10n') => '4',
                     esc_html__('6 Cols', 'otvcp-i10n') => '6',                  
                    ),
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Show Portfolio",
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Non-existing number for show all post.", 'otvcp-i10n')
      ),    
    )
    ));
}

// Portfolio Show Style1
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Show Portfolio Style 1", 'otvcp-i10n'),
   "base"      => "portfoliof",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Use Filter",
         "param_name" => "style",
         "value" => array( 
                     esc_html__('Yes', 'otvcp-i10n') => 'style1',
                     esc_html__('No', 'otvcp-i10n') => 'style2',
                    ),
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Text Show All Portfolio", 'otvcp-i10n'),
         "param_name"=> "all",
         "value"     => "",
         "description" => esc_html__("Text Filter Show All Portfolio.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number portfolio per page", 'otvcp-i10n' ),
         "param_name" => "num",
         "value" => 8,
         "description" => esc_html__("Enter Number Portfolio, Default: 8.", 'otvcp-i10n' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Select Columns.", 'otvcp-i10n'),
         "param_name" => "col",
         "value" => array( 
                     esc_html__('Columns 5', 'otvcp-i10n') => 5,
                     esc_html__('Columns 4', 'otvcp-i10n') => 4,
                     esc_html__('Columns 3', 'otvcp-i10n') => 3,
                     esc_html__('Columns 2', 'otvcp-i10n') => 2,
                    ),
         "description" => esc_html__("Select number columns for show.", 'otvcp-i10n')
      ),   
    )));
}

// Portfolio Show Style2
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Show Portfolio Style 2", 'otvcp-i10n'),
   "base"      => "portfoliof2",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Use Filter",
         "param_name" => "style",
         "value" => array( 
                     esc_html__('Yes', 'otvcp-i10n') => 'style1',
                     esc_html__('No', 'otvcp-i10n') => 'style2',
                    ),
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Text Show All Portfolio", 'otvcp-i10n'),
         "param_name"=> "all",
         "value"     => "",
         "description" => esc_html__("Text Filter Show All Portfolio.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number portfolio per page", 'otvcp-i10n' ),
         "param_name" => "num",
         "value" => 8,
         "description" => esc_html__("Enter Number Portfolio, Default: 8.", 'otvcp-i10n' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Select Columns.", 'otvcp-i10n'),
         "param_name" => "col",
         "value" => array( 
                     esc_html__('Columns 5', 'otvcp-i10n') => 5,
                     esc_html__('Columns 4', 'otvcp-i10n') => 4,
                     esc_html__('Columns 3', 'otvcp-i10n') => 3,
                     esc_html__('Columns 2', 'otvcp-i10n') => 2,
                    ),
         "description" => esc_html__("Select number columns for show.", 'otvcp-i10n')
      ),   
    )));
}

// Portfolio Show Style3
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Show Portfolio Style 3", 'otvcp-i10n'),
   "base"      => "portfoliof3",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Use Filter",
         "param_name" => "style",
         "value" => array( 
                     esc_html__('Yes', 'otvcp-i10n') => 'style1',
                     esc_html__('No', 'otvcp-i10n') => 'style2',
                    ),
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Text Show All Portfolio", 'otvcp-i10n'),
         "param_name"=> "all",
         "value"     => "",
         "description" => esc_html__("Text Filter Show All Portfolio.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number portfolio per page", 'otvcp-i10n' ),
         "param_name" => "num",
         "value" => 8,
         "description" => esc_html__("Enter Number Portfolio, Default: 8.", 'otvcp-i10n' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Select Columns.", 'otvcp-i10n'),
         "param_name" => "col",
         "value" => array( 
                     esc_html__('Columns 5', 'otvcp-i10n') => 5,
                     esc_html__('Columns 4', 'otvcp-i10n') => 4,
                     esc_html__('Columns 3', 'otvcp-i10n') => 3,
                     esc_html__('Columns 2', 'otvcp-i10n') => 2,
                    ),
         "description" => esc_html__("Select number columns for show.", 'otvcp-i10n')
      ),   
    )));
}

// Portfolio With Sidebar
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Show Portfolio With Siderbar", 'otvcp-i10n'),
   "base"      => "portfoliofside",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Sidebar Layout",
         "param_name" => "layout",
         "value" => array( 
                     esc_html__('Right', 'otvcp-i10n') => 'layout1',
                     esc_html__('Left', 'otvcp-i10n') => 'layout2',
                    ),
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Use Filter",
         "param_name" => "style",
         "value" => array( 
                     esc_html__('Yes', 'otvcp-i10n') => 'style1',
                     esc_html__('No', 'otvcp-i10n') => 'style2',
                    ),
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Text Show All Portfolio", 'otvcp-i10n'),
         "param_name"=> "all",
         "value"     => "",
         "description" => esc_html__("Text Filter Show All Portfolio.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number portfolio per page", 'otvcp-i10n' ),
         "param_name" => "num",
         "value" => 8,
         "description" => esc_html__("Enter Number Portfolio, Default: 8.", 'otvcp-i10n' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Select Columns.", 'otvcp-i10n'),
         "param_name" => "col",
         "value" => array( 
                     esc_html__('Columns 5', 'otvcp-i10n') => 5,
                     esc_html__('Columns 4', 'otvcp-i10n') => 4,
                     esc_html__('Columns 3', 'otvcp-i10n') => 3,
                     esc_html__('Columns 2', 'otvcp-i10n') => 2,
                    ),
         "description" => esc_html__("Select number columns for show.", 'otvcp-i10n')
      ),   
    )));
}

// Portfolio Category
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Show Portfolio Category", 'otvcp-i10n'),
   "base"      => "cate_portfolio",
   'admin_enqueue_js'  => get_template_directory_uri() . '/framework/admin/js/select2.min.js',
   'admin_enqueue_css' => get_template_directory_uri() . '/framework/admin/css/select2.css',
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(            
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Number Show Portfolio", 'otvcp-i10n'),
         "param_name"=> "show",
         "value"     => 8,
         "description" => esc_html__("Number Show Portfolio, Default: 8.", 'otvcp-i10n')
      ),
      array(
         "type"      => "select_categories",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Categories", 'otvcp-i10n'),
         "param_name"=> "idcate",
         "value"     => "",
         "description" => esc_html__("Enter your category.", 'otvcp-i10n')
      ),   
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Select Columns.", 'otvcp-i10n'),
         "param_name" => "col",
         "value" => array(   
                     esc_html__('Columns 5', 'otvcp-i10n') => 5,
                     esc_html__('Columns 4', 'otvcp-i10n') => 4,
                     esc_html__('Columns 3', 'otvcp-i10n') => 3,
                     esc_html__('Columns 2', 'otvcp-i10n') => 2,
                    ),
         "description" => esc_html__("Select number columns for show.", 'otvcp-i10n')
      ),     
    )));
}

   if ( ! function_exists( 'is_plugin_active' ) ) {
      require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
   }
   if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {     
      if ( function_exists( 'vc_add_shortcode_param' ) ) {
         vc_add_shortcode_param( 'select_categories', 'select_param', get_template_directory_uri() . '/framework/admin/js/select-field.js' );
      } elseif ( function_exists( 'add_shortcode_param' ) ) {
         add_shortcode_param( 'select_categories', 'select_param', get_template_directory_uri() . '/framework/admin/js/select-field.js' );
      }
   }   
   
   function select_param( $settings, $value ) {
      // Generate dependencies if there are any
      $dependency = vc_generate_dependencies_attributes( $settings );
      $categories = get_terms( 'categories' );
      $cat = array();
      foreach( $categories as $category ) {
         if( $category ) {
            $cat[] = sprintf('<option value="%s">%s</option>',
               esc_attr( $category->slug ),
               $category->name
            );
         }

      }

      return sprintf(
         '<input type="hidden" name="%s" value="%s" class="wpb-input-categories wpb_vc_param_value wpb-textinput %s %s_field" %s>
         <select class="select-categories-post">
         %s
         </select>',
         esc_attr( $settings['param_name'] ),
         esc_attr( $value ),
         esc_attr( $settings['param_name'] ),
         esc_attr( $settings['type'] ),
         $dependency,
         implode( '', $cat )
      );
   }

// Portfolio Feature Image
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Portfolio Feature Image", 'otvcp-i10n'),
   "base"      => "portfoliofi",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Use Filter",
         "param_name" => "style",
         "value" => array( 
                     esc_html__('Yes', 'otvcp-i10n') => 'style1',
                     esc_html__('No', 'otvcp-i10n') => 'style2',
                    ),
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Item Padding",
         "param_name" => "padding",
         "value" => array( 
                     esc_html__('Yes', 'otvcp-i10n') => 'padding1',
                     esc_html__('No', 'otvcp-i10n') => 'padding2',
                    ),
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Text Show All Portfolio", 'otvcp-i10n'),
         "param_name"=> "all",
         "value"     => "",
         "description" => esc_html__("Text Filter Show All Portfolio.", 'otvcp-i10n'),
         "dependency"  => array( 'element' => 'style', 'value' => array( 'style1' ) ),
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number portfolio per page", 'otvcp-i10n' ),
         "param_name" => "num",
         "value" => 8,
         "description" => esc_html__("Enter Number Portfolio, Default: 8.", 'otvcp-i10n' )
      ), 
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Select Columns.", 'otvcp-i10n'),
         "param_name" => "col",
         "value" => array( 
                     esc_html__('Columns 5', 'otvcp-i10n') => 5,
                     esc_html__('Columns 4', 'otvcp-i10n') => 4,
                     esc_html__('Columns 3', 'otvcp-i10n') => 3,
                     esc_html__('Columns 2', 'otvcp-i10n') => 2,
                    ),
         "description" => esc_html__("Select number columns for show.", 'otvcp-i10n')
      ),   
    )));
}

// Social
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Social", 'otvcp-i10n'),   
   "base" => "social",
   "class" => "",
   "category"  => 'Harmonia Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
        'type' => 'vc_link',
         "heading" => esc_html__("Link Social", 'otvcp-i10n'),
         "param_name" => "linkbox",         
         "description" => esc_html__("Add your link to social.", 'otvcp-i10n')
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Background Color", 'otvcp-i10n'),
         "param_name"=> "background_color",
         "value"     => "",
         "description" => esc_html__("Color of background. Default #212121.", 'otvcp-i10n'),
      ),
      array(
         "type"      => "colorpicker",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Color", 'otvcp-i10n'),
         "param_name"=> "color",
         "value"     => "",
         "description" => esc_html__("Color of Icon. Default #ffffff", 'otvcp-i10n'),
      ),
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Social Style', 'otvcp-i10n'),
        "param_name" => "style",
        "value" => array(   
                     esc_html__('Style 1 : Square', 'otvcp-i10n')   => 'style1', 
                     esc_html__('Style 2 : Circle', 'otvcp-i10n')   => 'style2',
                    ), 
      ),
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Social Size', 'otvcp-i10n'),
        "param_name" => "size",
        "value" => array(   
                     esc_html__('Small', 'otvcp-i10n')   => 'small', 
                     esc_html__('Normal', 'otvcp-i10n')   => 'med',
                     esc_html__('Lagre', 'otvcp-i10n')   => 'big',
                    ), 
      ),
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Use Border', 'otvcp-i10n'),
        "param_name" => "border",
        "value" => array(   
                     esc_html__('No', 'otvcp-i10n')   => 'no', 
                     esc_html__('Yes', 'otvcp-i10n')   => 'no-back',
                    ), 
      ),   
   )));
}

// Tabs styel 1
if(function_exists('vc_map')){
   vc_map( array(
   "name"                    => esc_html__("OT Tabs Style1", 'otvcp-i10n'),
   "base"                    => "tab_slider",
   "as_parent"               => array('only' => 'tab_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
   "content_element"         => true,
   "icon"                    => "icon-st",
   "show_settings_on_create" => false,
   "js_view"                 => 'VcColumnView',
   "params"                  => array( 
         array(
            "type"        => "textfield",
            "heading"     => esc_html__("Extra class name", "harmonia"),
            "param_name"  => "el_class",
            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "harmonia")
         ), 
                                 
   )));
}

// Tabs styel 2
if(function_exists('vc_map')){
   vc_map( array(
   "name"                    => esc_html__("OT Tabs Style2", 'otvcp-i10n'),
   "base"                    => "tab_slider2",
   "as_parent"               => array('only' => 'tab_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
   "content_element"         => true,
   "icon"                    => "icon-st",
   "show_settings_on_create" => false,
   "js_view"                 => 'VcColumnView',
   "params"                  => array( 
         array(
            "type"        => "textfield",
            "heading"     => esc_html__("Extra class name", "harmonia"),
            "param_name"  => "el_class",
            "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "harmonia")
         ), 
                                 
   )));
}

// Tab Single
if(function_exists('vc_map')){
   vc_map( array(
   "name"                    => esc_html__("OT Tab Single", 'otvcp-i10n'),
   "base"                    => "tab_item",
   "as_child"                => array('only' => 'tab_slider', 'tab_slider2'), // Use only|except attributes to limit parent (separate multiple values with comma)
   "content_element"         => true,
   "icon"                    => "icon-st",
   "params"                  => array( 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title Tab",
         "param_name" => "title",
         "value" => "",
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "Content Tab",
         "param_name" => "subtitle",
         "value" => "",
      ),                                   
   )));
}
//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_Tab_Slider extends WPBakeryShortCodesContainer {
    }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Tab_Item extends WPBakeryShortCode {
    }
}
//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_Tab_Slider2 extends WPBakeryShortCodesContainer {
    }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Tab_Item2 extends WPBakeryShortCode {
    }
}

// Testimonial Slider
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Testimonial Silder", 'otvcp-i10n'),
   "base" => "testslide",
   "class" => "",
   "category"  => 'Harmonia Elements',
   "icon" => "icon-st",
   "params" => array(
      array(
        "type" => "dropdown",
        "heading" => esc_html__('Style', 'otvcp-i10n'),
        "param_name" => "style",
        "value" => array(   
                     esc_html__('Text Dark', 'otvcp-i10n')   => 'style1', 
                     esc_html__('Text Light', 'otvcp-i10n')   => 'style2',                   
                    ), 
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number Show Testimonial",
         "param_name" => "number",
         "value" => "",
         "description" => esc_html__("Non-existing number for show all post.", 'otvcp-i10n')
      ),    
    )
    ));
}

// Newsletters
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => esc_html__("OT Newsletters", 'otvcp-i10n'),
   "base"      => "newsletter",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(     
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Button Submit", 'otvcp-i10n'),
         "param_name"=> "btntext",
         "value"     => "",
         "description" => esc_html__("", 'otvcp-i10n')
      ),
    )));
}

//Google Map (use)
if(function_exists('vc_map')){
   vc_map( array(
   "name" => esc_html__("OT Harmonia Map", 'otvcp-i10n'),
   "base"      => "maps",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Harmonia Elements',
   "params"    => array(
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Height Map", 'otvcp-i10n'),
         "param_name"=> "height",
         "value"     => '',
         "description" => esc_html__("Height's Map. Ex : 300, 400, 500...(px). default : 500", 'otvcp-i10n')
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image Address",
         "param_name" => "photo",
         "value" => "",
         "description" => esc_html__("Image of address", 'otvcp-i10n'),
      ),
      array(
         "type"      => "textarea",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Enter your address", 'otvcp-i10n'),
         "param_name"=> "address",
         "value"     => '',
         "description" => esc_html__("", 'otvcp-i10n')
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Latitude", 'otvcp-i10n'),
         "param_name"=> "latitude",
         "value"     => 44.8013716,
         "description" => esc_html__("Find Latitude code: <a href='http://www.latlong.net/' target='_blank'>view more</a>", 'otvcp-i10n')
      ),
     array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Longitude", 'otvcp-i10n'),
         "param_name"=> "longitude",
         "value"     => 20.4631372,
         "description" => esc_html__("Find Longitude code: <a href='http://www.latlong.net/' target='_blank'>view more</a>", 'otvcp-i10n')
      ),     
     array(
         "type"      => "attach_image",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Location Image", 'otvcp-i10n'),
         "param_name"=> "iconmap",
         "value"     => "",
         "description" => esc_html__("Upload Location Image.", 'otvcp-i10n')
      ),
      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => esc_html__("Enter number for Zoom Map", 'otvcp-i10n'),
         "param_name"=> "zoommap",
         "value"     => 15,
         "description" => esc_html__("", 'otvcp-i10n')
      ),
    )));
}


function icon_param( $settings, $value ) {
  // Generate dependencies if there are any
   $icons = array();
  foreach( $GLOBALS['icons'] as $icon ) {
    $icons[] = sprintf(
      '<i data-icon="%1$s" class="%1$s %2$s"></i>',
      $icon,
      $icon == $value ? 'selected' : ''
    );
  }

  return sprintf(
    '<div class="icon_block">
      <span class="icon-preview"><i class="%s"></i></span>
      <input type="text" class="icon-search" placeholder="%s">
      <input type="hidden" name="%s" value="%s" class="wpb_vc_param_value wpb-textinput %s %s_field">
      <div class="icon-selector">%s</div>
    </div>',
    esc_attr( $value ),
    esc_attr__( 'Quick Search', 'claudio' ),
    esc_attr( $settings['param_name'] ),
    esc_attr( $value ),
    esc_attr( $settings['param_name'] ),
    esc_attr( $settings['type'] ),
    implode( '', $icons )
  );
}

function get_icons() {

   $icons_ion = array('ion-alert','ion-alert-circled','ion-android-add','ion-android-add-circle','ion-android-alarm-clock','ion-android-alert','ion-android-apps','ion-android-archive','ion-android-arrow-back','ion-android-arrow-down','ion-android-arrow-dropdown','ion-android-arrow-dropdown-circle','ion-android-arrow-dropleft','ion-android-arrow-dropleft-circle','ion-android-arrow-dropright','ion-android-arrow-dropright-circle','ion-android-arrow-dropup','ion-android-arrow-dropup-circle','ion-android-arrow-forward','ion-android-arrow-up','ion-android-attach','ion-android-bar','ion-android-bicycle','ion-android-boat','ion-android-bookmark','ion-android-bulb','ion-android-bus','ion-android-calendar','ion-android-call','ion-android-camera','ion-android-cancel','ion-android-car','ion-android-cart','ion-android-chat','ion-android-checkbox','ion-android-checkbox-blank','ion-android-checkbox-outline','ion-android-checkbox-outline-blank','ion-android-checkmark-circle','ion-android-clipboard','ion-android-close','ion-android-cloud','ion-android-cloud-circle','ion-android-cloud-done','ion-android-cloud-outline','ion-android-color-palette','ion-android-compass','ion-android-contact','ion-android-contacts','ion-android-contract','ion-android-create','ion-android-delete','ion-android-desktop','ion-android-document','ion-android-done','ion-android-done-all','ion-android-download','ion-android-drafts','ion-android-exit','ion-android-expand','ion-android-favorite','ion-android-favorite-outline','ion-android-film','ion-android-folder','ion-android-folder-open','ion-android-funnel','ion-android-globe','ion-android-hand','ion-android-hangout','ion-android-happy','ion-android-home','ion-android-image','ion-android-laptop','ion-android-list','ion-android-locate','ion-android-lock','ion-android-mail','ion-android-map','ion-android-menu','ion-android-microphone','ion-android-microphone-off','ion-android-more-horizontal','ion-android-more-vertical','ion-android-navigate','ion-android-notifications','ion-android-notifications-none','ion-android-notifications-off','ion-android-open','ion-android-options','ion-android-people','ion-android-person','ion-android-person-add','ion-android-phone-landscape','ion-android-phone-portrait','ion-android-pin','ion-android-plane','ion-android-playstore','ion-android-print','ion-android-radio-button-off','ion-android-radio-button-on','ion-android-refresh','ion-android-remove','ion-android-remove-circle','ion-android-restaurant','ion-android-sad','ion-android-search','ion-android-send','ion-android-settings','ion-android-share','ion-android-share-alt','ion-android-star','ion-android-star-half','ion-android-star-outline','ion-android-stopwatch','ion-android-subway','ion-android-sunny','ion-android-sync','ion-android-textsms','ion-android-time','ion-android-train','ion-android-unlock','ion-android-upload','ion-android-volume-down','ion-android-volume-mute','ion-android-volume-off','ion-android-volume-up','ion-android-walk','ion-android-warning','ion-android-watch','ion-android-wifi','ion-aperture','ion-archive','ion-arrow-down-a','ion-arrow-down-b','ion-arrow-down-c','ion-arrow-expand','ion-arrow-graph-down-left','ion-arrow-graph-down-right','ion-arrow-graph-up-left','ion-arrow-graph-up-right','ion-arrow-left-a','ion-arrow-left-b','ion-arrow-left-c','ion-arrow-move','ion-arrow-resize','ion-arrow-return-left','ion-arrow-return-right','ion-arrow-right-a','ion-arrow-right-b','ion-arrow-right-c','ion-arrow-shrink','ion-arrow-swap','ion-arrow-up-a','ion-arrow-up-b','ion-arrow-up-c','ion-asterisk','ion-at','ion-backspace','ion-backspace-outline','ion-bag','ion-battery-charging','ion-battery-empty','ion-battery-full','ion-battery-half','ion-battery-low','ion-beaker','ion-beer','ion-bluetooth','ion-bonfire','ion-bookmark','ion-bowtie','ion-briefcase','ion-bug','ion-calculator','ion-calendar','ion-camera','ion-card','ion-cash','ion-chatbox','ion-chatbox-working','ion-chatboxes','ion-chatbubble','ion-chatbubble-working','ion-chatbubbles','ion-checkmark','ion-checkmark-circled','ion-checkmark-round','ion-chevron-down','ion-chevron-left','ion-chevron-right','ion-chevron-up','ion-clipboard','ion-clock','ion-close','ion-close-circled','ion-close-round','ion-closed-captioning','ion-cloud','ion-code','ion-code-download','ion-code-working','ion-coffee','ion-compass','ion-compose','ion-connection-bars','ion-contrast','ion-crop','ion-cube','ion-disc','ion-document','ion-document-text','ion-drag','ion-earth','ion-easel','ion-edit','ion-egg','ion-eject','ion-email','ion-email-unread','ion-erlenmeyer-flask','ion-erlenmeyer-flask-bubbles','ion-eye','ion-eye-disabled','ion-female','ion-filing','ion-film-marker','ion-fireball','ion-flag','ion-flame','ion-flash','ion-flash-off','ion-folder','ion-fork','ion-fork-repo','ion-forward','ion-funnel','ion-gear-a','ion-gear-b','ion-grid','ion-hammer','ion-happy','ion-happy-outline','ion-headphone','ion-heart','ion-heart-broken','ion-help','ion-help-buoy','ion-help-circled','ion-home','ion-icecream','ion-image','ion-images','ion-information','ion-information-circled','ion-ionic','ion-ios-alarm','ion-ios-alarm-outline','ion-ios-albums','ion-ios-albums-outline','ion-ios-americanfootball','ion-ios-americanfootball-outline','ion-ios-analytics','ion-ios-analytics-outline','ion-ios-arrow-back','ion-ios-arrow-down','ion-ios-arrow-forward','ion-ios-arrow-left','ion-ios-arrow-right','ion-ios-arrow-thin-down','ion-ios-arrow-thin-left','ion-ios-arrow-thin-right','ion-ios-arrow-thin-up','ion-ios-arrow-up','ion-ios-at','ion-ios-at-outline','ion-ios-barcode','ion-ios-barcode-outline','ion-ios-baseball','ion-ios-baseball-outline','ion-ios-basketball','ion-ios-basketball-outline','ion-ios-bell','ion-ios-bell-outline','ion-ios-body','ion-ios-body-outline','ion-ios-bolt','ion-ios-bolt-outline','ion-ios-book','ion-ios-book-outline','ion-ios-bookmarks','ion-ios-bookmarks-outline','ion-ios-box','ion-ios-box-outline','ion-ios-briefcase','ion-ios-briefcase-outline','ion-ios-browsers','ion-ios-browsers-outline','ion-ios-calculator','ion-ios-calculator-outline','ion-ios-calendar','ion-ios-calendar-outline','ion-ios-camera','ion-ios-camera-outline','ion-ios-cart','ion-ios-cart-outline','ion-ios-chatboxes','ion-ios-chatboxes-outline','ion-ios-chatbubble','ion-ios-chatbubble-outline','ion-ios-checkmark','ion-ios-checkmark-empty','ion-ios-checkmark-outline','ion-ios-circle-filled','ion-ios-circle-outline','ion-ios-clock','ion-ios-clock-outline','ion-ios-close','ion-ios-close-empty','ion-ios-close-outline','ion-ios-cloud','ion-ios-cloud-download','ion-ios-cloud-download-outline','ion-ios-cloud-outline','ion-ios-cloud-upload','ion-ios-cloud-upload-outline','ion-ios-cloudy','ion-ios-cloudy-night','ion-ios-cloudy-night-outline','ion-ios-cloudy-outline','ion-ios-cog','ion-ios-cog-outline','ion-ios-color-filter','ion-ios-color-filter-outline','ion-ios-color-wand','ion-ios-color-wand-outline','ion-ios-compose','ion-ios-compose-outline','ion-ios-contact','ion-ios-contact-outline','ion-ios-copy','ion-ios-copy-outline','ion-ios-crop','ion-ios-crop-strong','ion-ios-download','ion-ios-download-outline','ion-ios-drag','ion-ios-email','ion-ios-email-outline','ion-ios-eye','ion-ios-eye-outline','ion-ios-fastforward','ion-ios-fastforward-outline','ion-ios-filing','ion-ios-filing-outline','ion-ios-film','ion-ios-film-outline','ion-ios-flag','ion-ios-flag-outline','ion-ios-flame','ion-ios-flame-outline','ion-ios-flask','ion-ios-flask-outline','ion-ios-flower','ion-ios-flower-outline','ion-ios-folder','ion-ios-folder-outline','ion-ios-football','ion-ios-football-outline','ion-ios-game-controller-a','ion-ios-game-controller-a-outline','ion-ios-game-controller-b','ion-ios-game-controller-b-outline','ion-ios-gear','ion-ios-gear-outline','ion-ios-glasses','ion-ios-glasses-outline','ion-ios-grid-view','ion-ios-grid-view-outline','ion-ios-heart','ion-ios-heart-outline','ion-ios-help','ion-ios-help-empty','ion-ios-help-outline','ion-ios-home','ion-ios-home-outline','ion-ios-infinite','ion-ios-infinite-outline','ion-ios-information','ion-ios-information-empty','ion-ios-information-outline','ion-ios-ionic-outline','ion-ios-keypad','ion-ios-keypad-outline','ion-ios-lightbulb','ion-ios-lightbulb-outline','ion-ios-list','ion-ios-list-outline','ion-ios-location','ion-ios-location-outline','ion-ios-locked','ion-ios-locked-outline','ion-ios-loop','ion-ios-loop-strong','ion-ios-medical','ion-ios-medical-outline','ion-ios-medkit','ion-ios-medkit-outline','ion-ios-mic','ion-ios-mic-off','ion-ios-mic-outline','ion-ios-minus','ion-ios-minus-empty','ion-ios-minus-outline','ion-ios-monitor','ion-ios-monitor-outline','ion-ios-moon','ion-ios-moon-outline','ion-ios-more','ion-ios-more-outline','ion-ios-musical-note','ion-ios-musical-notes','ion-ios-navigate','ion-ios-navigate-outline','ion-ios-nutrition','ion-ios-nutrition-outline','ion-ios-paper','ion-ios-paper-outline','ion-ios-paperplane','ion-ios-paperplane-outline','ion-ios-partlysunny','ion-ios-partlysunny-outline','ion-ios-pause','ion-ios-pause-outline','ion-ios-paw','ion-ios-paw-outline','ion-ios-people','ion-ios-people-outline','ion-ios-person','ion-ios-person-outline','ion-ios-personadd','ion-ios-personadd-outline','ion-ios-photos','ion-ios-photos-outline','ion-ios-pie','ion-ios-pie-outline','ion-ios-pint','ion-ios-pint-outline','ion-ios-play','ion-ios-play-outline','ion-ios-plus','ion-ios-plus-empty','ion-ios-plus-outline','ion-ios-pricetag','ion-ios-pricetag-outline','ion-ios-pricetags','ion-ios-pricetags-outline','ion-ios-printer','ion-ios-printer-outline','ion-ios-pulse','ion-ios-pulse-strong','ion-ios-rainy','ion-ios-rainy-outline','ion-ios-recording','ion-ios-recording-outline','ion-ios-redo','ion-ios-redo-outline','ion-ios-refresh','ion-ios-refresh-empty','ion-ios-refresh-outline','ion-ios-reload','ion-ios-reverse-camera','ion-ios-reverse-camera-outline','ion-ios-rewind','ion-ios-rewind-outline','ion-ios-rose','ion-ios-rose-outline','ion-ios-search','ion-ios-search-strong','ion-ios-settings','ion-ios-settings-strong','ion-ios-shuffle','ion-ios-shuffle-strong','ion-ios-skipbackward','ion-ios-skipbackward-outline','ion-ios-skipforward','ion-ios-skipforward-outline','ion-ios-snowy','ion-ios-speedometer','ion-ios-speedometer-outline','ion-ios-star','ion-ios-star-half','ion-ios-star-outline','ion-ios-stopwatch','ion-ios-stopwatch-outline','ion-ios-sunny','ion-ios-sunny-outline','ion-ios-telephone','ion-ios-telephone-outline','ion-ios-tennisball','ion-ios-tennisball-outline','ion-ios-thunderstorm','ion-ios-thunderstorm-outline','ion-ios-time','ion-ios-time-outline','ion-ios-timer','ion-ios-timer-outline','ion-ios-toggle','ion-ios-toggle-outline','ion-ios-trash','ion-ios-trash-outline','ion-ios-undo','ion-ios-undo-outline','ion-ios-unlocked','ion-ios-unlocked-outline','ion-ios-upload','ion-ios-upload-outline','ion-ios-videocam','ion-ios-videocam-outline','ion-ios-volume-high','ion-ios-volume-low','ion-ios-wineglass','ion-ios-wineglass-outline','ion-ios-world','ion-ios-world-outline','ion-ipad','ion-iphone','ion-ipod','ion-jet','ion-key','ion-knife','ion-laptop','ion-leaf','ion-levels','ion-lightbulb','ion-link','ion-load-a','ion-load-b','ion-load-c','ion-load-d','ion-location','ion-lock-combination','ion-locked','ion-log-in','ion-log-out','ion-loop','ion-magnet','ion-male','ion-man','ion-map','ion-medkit','ion-merge','ion-mic-a','ion-mic-b','ion-mic-c','ion-minus','ion-minus-circled','ion-minus-round','ion-model-s','ion-monitor','ion-more','ion-mouse','ion-music-note','ion-navicon','ion-navicon-round','ion-navigate','ion-network','ion-no-smoking','ion-nuclear','ion-outlet','ion-paintbrush','ion-paintbucket','ion-paper-airplane','ion-paperclip','ion-pause','ion-person','ion-person-add','ion-person-stalker','ion-pie-graph','ion-pin','ion-pinpoint','ion-pizza','ion-plane','ion-planet','ion-play','ion-playstation','ion-plus','ion-plus-circled','ion-plus-round','ion-podium','ion-pound','ion-power','ion-pricetag','ion-pricetags','ion-printer','ion-pull-request','ion-qr-scanner','ion-quote','ion-radio-waves','ion-record','ion-refresh','ion-reply','ion-reply-all','ion-ribbon-a','ion-ribbon-b','ion-sad','ion-sad-outline','ion-scissors','ion-search','ion-settings','ion-share','ion-shuffle','ion-skip-backward','ion-skip-forward','ion-social-android','ion-social-android-outline','ion-social-angular','ion-social-angular-outline','ion-social-apple','ion-social-apple-outline','ion-social-bitcoin','ion-social-bitcoin-outline','ion-social-buffer','ion-social-buffer-outline','ion-social-chrome','ion-social-chrome-outline','ion-social-codepen','ion-social-codepen-outline','ion-social-css3','ion-social-css3-outline','ion-social-designernews','ion-social-designernews-outline','ion-social-dribbble','ion-social-dribbble-outline','ion-social-dropbox','ion-social-dropbox-outline','ion-social-euro','ion-social-euro-outline','ion-social-facebook','ion-social-facebook-outline','ion-social-foursquare','ion-social-foursquare-outline','ion-social-freebsd-devil','ion-social-github','ion-social-github-outline','ion-social-google','ion-social-google-outline','ion-social-googleplus','ion-social-googleplus-outline','ion-social-hackernews','ion-social-hackernews-outline','ion-social-html5','ion-social-html5-outline','ion-social-instagram','ion-social-instagram-outline','ion-social-javascript','ion-social-javascript-outline','ion-social-linkedin','ion-social-linkedin-outline','ion-social-markdown','ion-social-nodejs','ion-social-octocat','ion-social-pinterest','ion-social-pinterest-outline','ion-social-python','ion-social-reddit','ion-social-reddit-outline','ion-social-rss','ion-social-rss-outline','ion-social-sass','ion-social-skype','ion-social-skype-outline','ion-social-snapchat','ion-social-snapchat-outline','ion-social-tumblr','ion-social-tumblr-outline','ion-social-tux','ion-social-twitch','ion-social-twitch-outline','ion-social-twitter','ion-social-twitter-outline','ion-social-usd','ion-social-usd-outline','ion-social-vimeo','ion-social-vimeo-outline','ion-social-whatsapp','ion-social-whatsapp-outline','ion-social-windows','ion-social-windows-outline','ion-social-wordpress','ion-social-wordpress-outline','ion-social-yahoo','ion-social-yahoo-outline','ion-social-yen','ion-social-yen-outline','ion-social-youtube','ion-social-youtube-outline','ion-soup-can','ion-soup-can-outline','ion-speakerphone','ion-speedometer','ion-spoon','ion-star','ion-stats-bars','ion-steam','ion-stop','ion-thermometer','ion-thumbsdown','ion-thumbsup','ion-toggle','ion-toggle-filled','ion-transgender','ion-trash-a','ion-trash-b','ion-trophy','ion-tshirt','ion-tshirt-outline','ion-umbrella','ion-university','ion-unlocked','ion-upload','ion-usb','ion-videocamera','ion-volume-high','ion-volume-low','ion-volume-medium','ion-volume-mute','ion-wand','ion-waterdrop','ion-wifi','ion-wineglass','ion-woman','ion-wrench','ion-xbox');
   $icons_simle = array('icon-user-female' , 'icon-user-follow' , 'icon-user-following' , 'icon-user-unfollow' , 'icon-trophy' , 'icon-screen-smartphone' , 'icon-screen-desktop' , 'icon-plane' , 'icon-notebook' , 'icon-moustache' , 'icon-mouse' , 'icon-magnet' , 'icon-energy' , 'icon-emoticon-smile' , 'icon-disc' , 'icon-cursor-move' , 'icon-crop' , 'icon-credit-card' , 'icon-chemistry' , 'icon-user' , 'icon-speedometer' , 'icon-social-youtube' , 'icon-social-twitter' , 'icon-social-tumblr' , 'icon-social-facebook' , 'icon-social-dropbox' , 'icon-social-dribbble' , 'icon-shield' , 'icon-screen-tablet' , 'icon-magic-wand' , 'icon-hourglass' , 'icon-graduation' , 'icon-ghost' , 'icon-game-controller' , 'icon-fire' , 'icon-eyeglasses' , 'icon-envelope-open' , 'icon-envelope-letter' , 'icon-bell' , 'icon-badge' , 'icon-anchor' , 'icon-wallet' , 'icon-vector' , 'icon-speech' , 'icon-puzzle' , 'icon-printer' , 'icon-present' , 'icon-playlist' , 'icon-pin' , 'icon-picture' , 'icon-map' , 'icon-layers' , 'icon-handbag' , 'icon-globe-alt' , 'icon-globe' , 'icon-frame' , 'icon-folder-alt' , 'icon-film' , 'icon-feed' , 'icon-earphones-alt' , 'icon-earphones' , 'icon-drop' , 'icon-drawer' , 'icon-docs' , 'icon-directions' , 'icon-direction' , 'icon-diamond' , 'icon-cup' , 'icon-compass' , 'icon-call-out' , 'icon-call-in' , 'icon-call-end' , 'icon-calculator' , 'icon-bubbles' , 'icon-briefcase' , 'icon-book-open' , 'icon-basket-loaded' , 'icon-basket' , 'icon-bag' , 'icon-action-undo' , 'icon-action-redo' , 'icon-wrench' , 'icon-umbrella' , 'icon-trash' , 'icon-tag' , 'icon-support' , 'icon-size-fullscreen' , 'icon-size-actual' , 'icon-shuffle' , 'icon-share-alt' , 'icon-share' , 'icon-rocket' , 'icon-question' , 'icon-pie-chart' , 'icon-pencil' , 'icon-note' , 'icon-music-tone-alt' , 'icon-music-tone' , 'icon-microphone' , 'icon-loop' , 'icon-logout' , 'icon-login' , 'icon-list' , 'icon-like' , 'icon-home' , 'icon-grid' , 'icon-graph' , 'icon-equalizer' , 'icon-dislike' , 'icon-cursor' , 'icon-control-start' , 'icon-control-rewind' , 'icon-control-play' , 'icon-control-pause' , 'icon-control-forward' , 'icon-control-end' , 'icon-calendar' , 'icon-bulb' , 'icon-bar-chart' , 'icon-arrow-up' , 'icon-arrow-right' , 'icon-arrow-left' , 'icon-arrow-down' , 'icon-ban' , 'icon-bubble' , 'icon-camcorder' , 'icon-camera' , 'icon-check' , 'icon-clock' , 'icon-close' , 'icon-cloud-download' , 'icon-cloud-upload' , 'icon-doc' , 'icon-envelope' , 'icon-eye' , 'icon-flag' , 'icon-folder' , 'icon-heart' , 'icon-info' , 'icon-key' , 'icon-link' , 'icon-lock' , 'icon-lock-open' , 'icon-magnifier' , 'icon-magnifier-add' , 'icon-magnifier-remove' , 'icon-paper-clip' , 'icon-paper-plane' , 'icon-plus' , 'icon-pointer' , 'icon-power' , 'icon-refresh' , 'icon-reload' , 'icon-settings' , 'icon-star' , 'icon-symbol-female' , 'icon-symbol-male' , 'icon-target' , 'icon-volume-1' , 'icon-volume-2' , 'icon-volume-off' , 'icon-users');
   $icons_awesome = array('fa fa-adjust', 'fa fa-adn', 'fa fa-align-center', 'fa fa-align-justify', 'fa fa-align-left', 'fa fa-align-right', 'fa fa-ambulance', 'fa fa-anchor', 'fa fa-android', 'fa fa-angellist', 'fa fa-angle-double-down', 'fa fa-angle-double-left', 'fa fa-angle-double-right', 'fa fa-angle-double-up', 'fa fa-angle-down', 'fa fa-angle-left', 'fa fa-angle-right', 'fa fa-angle-up', 'fa fa-apple', 'fa fa-archive', 'fa fa-area-chart', 'fa fa-arrow-circle-down', 'fa fa-arrow-circle-left', 'fa fa-arrow-circle-o-down', 'fa fa-arrow-circle-o-left', 'fa fa-arrow-circle-o-right', 'fa fa-arrow-circle-o-up', 'fa fa-arrow-circle-right', 'fa fa-arrow-circle-up', 'fa fa-arrow-down', 'fa fa-arrow-left', 'fa fa-arrow-right', 'fa fa-arrow-up', 'fa fa-arrows', 'fa fa-arrows-alt', 'fa fa-arrows-h', 'fa fa-arrows-v', 'fa fa-asterisk', 'fa fa-at', 'fa fa-automobile', 'fa fa-backward', 'fa fa-ban', 'fa fa-bank', 'fa fa-bar-chart', 'fa fa-bar-chart-o', 'fa fa-barcode', 'fa fa-bars', 'fa fa-beer', 'fa fa-behance', 'fa fa-behance-square', 'fa fa-bell', 'fa fa-bell-o', 'fa fa-bell-slash', 'fa fa-bell-slash-o', 'fa fa-bicycle', 'fa fa-binoculars', 'fa fa-birthday-cake', 'fa fa-bitbucket', 'fa fa-bitbucket-square', 'fa fa-bitcoin', 'fa fa-bold', 'fa fa-bolt', 'fa fa-bomb', 'fa fa-book', 'fa fa-bookmark', 'fa fa-bookmark-o', 'fa fa-briefcase', 'fa fa-btc', 'fa fa-bug', 'fa fa-building', 'fa fa-building-o', 'fa fa-bullhorn', 'fa fa-bullseye', 'fa fa-bus', 'fa fa-cab', 'fa fa-calculator', 'fa fa-calendar', 'fa fa-calendar-o', 'fa fa-camera', 'fa fa-camera-retro', 'fa fa-car', 'fa fa-caret-down', 'fa fa-caret-left', 'fa fa-caret-right', 'fa fa-caret-square-o-down', 'fa fa-caret-square-o-left', 'fa fa-caret-square-o-right', 'fa fa-caret-square-o-up', 'fa fa-caret-up', 'fa fa-cc', 'fa fa-cc-amex', 'fa fa-cc-discover', 'fa fa-cc-mastercard', 'fa fa-cc-paypal', 'fa fa-cc-stripe', 'fa fa-cc-visa', 'fa fa-certificate', 'fa fa-chain', 'fa fa-chain-broken', 'fa fa-check', 'fa fa-check-circle', 'fa fa-check-circle-o', 'fa fa-check-square', 'fa fa-check-square-o', 'fa fa-chevron-circle-down', 'fa fa-chevron-circle-left', 'fa fa-chevron-circle-right', 'fa fa-chevron-circle-up', 'fa fa-chevron-down', 'fa fa-chevron-left', 'fa fa-chevron-right', 'fa fa-chevron-up', 'fa fa-child', 'fa fa-circle', 'fa fa-circle-o', 'fa fa-circle-o-notch', 'fa fa-circle-thin', 'fa fa-clipboard', 'fa fa-clock-o', 'fa fa-close', 'fa fa-cloud', 'fa fa-cloud-download', 'fa fa-cloud-upload', 'fa fa-cny', 'fa fa-code', 'fa fa-code-fork', 'fa fa-codepen', 'fa fa-coffee', 'fa fa-cog', 'fa fa-cogs', 'fa fa-columns', 'fa fa-comment', 'fa fa-comment-o', 'fa fa-comments', 'fa fa-comments-o', 'fa fa-compass', 'fa fa-compress', 'fa fa-copy', 'fa fa-copyright', 'fa fa-credit-card', 'fa fa-crop', 'fa fa-crosshairs', 'fa fa-css3', 'fa fa-cube', 'fa fa-cubes', 'fa fa-cut', 'fa fa-cutlery', 'fa fa-dashboard', 'fa fa-database', 'fa fa-dedent', 'fa fa-delicious', 'fa fa-desktop', 'fa fa-deviantart', 'fa fa-digg', 'fa fa-dollar', 'fa fa-dot-circle-o', 'fa fa-download', 'fa fa-dribbble', 'fa fa-dropbox', 'fa fa-drupal', 'fa fa-edit', 'fa fa-eject', 'fa fa-ellipsis-h', 'fa fa-ellipsis-v', 'fa fa-empire', 'fa fa-envelope', 'fa fa-envelope-o', 'fa fa-envelope-square', 'fa fa-eraser', 'fa fa-eur', 'fa fa-euro', 'fa fa-exchange', 'fa fa-exclamation', 'fa fa-exclamation-circle', 'fa fa-exclamation-triangle', 'fa fa-expand', 'fa fa-external-link', 'fa fa-external-link-square', 'fa fa-eye', 'fa fa-eye-slash', 'fa fa-eyedropper', 'fa fa-facebook', 'fa fa-facebook-square', 'fa fa-fast-backward', 'fa fa-fast-forward', 'fa fa-fax', 'fa fa-female', 'fa fa-fighter-jet', 'fa fa-file', 'fa fa-file-archive-o', 'fa fa-file-audio-o', 'fa fa-file-code-o', 'fa fa-file-excel-o', 'fa fa-file-image-o', 'fa fa-file-movie-o', 'fa fa-file-o', 'fa fa-file-pdf-o', 'fa fa-file-photo-o', 'fa fa-file-picture-o', 'fa fa-file-powerpoint-o', 'fa fa-file-sound-o', 'fa fa-file-text', 'fa fa-file-text-o', 'fa fa-file-video-o', 'fa fa-file-word-o', 'fa fa-file-zip-o', 'fa fa-files-o', 'fa fa-film', 'fa fa-filter', 'fa fa-fire', 'fa fa-fire-extinguisher', 'fa fa-flag', 'fa fa-flag-checkered', 'fa fa-flag-o', 'fa fa-flash', 'fa fa-flask', 'fa fa-flickr', 'fa fa-floppy-o', 'fa fa-folder', 'fa fa-folder-o', 'fa fa-folder-open', 'fa fa-folder-open-o', 'fa fa-font', 'fa fa-forward', 'fa fa-foursquare', 'fa fa-frown-o', 'fa fa-futbol-o', 'fa fa-gamepad', 'fa fa-gavel', 'fa fa-gbp', 'fa fa-ge', 'fa fa-gear', 'fa fa-gears', 'fa fa-gift', 'fa fa-git', 'fa fa-git-square', 'fa fa-github', 'fa fa-github-alt', 'fa fa-github-square', 'fa fa-gittip', 'fa fa-glass', 'fa fa-globe', 'fa fa-google', 'fa fa-google-plus', 'fa fa-google-plus-square', 'fa fa-google-wallet', 'fa fa-graduation-cap', 'fa fa-group', 'fa fa-h-square', 'fa fa-hacker-news', 'fa fa-hand-o-down', 'fa fa-hand-o-left', 'fa fa-hand-o-right', 'fa fa-hand-o-up', 'fa fa-hdd-o', 'fa fa-header', 'fa fa-headphones', 'fa fa-heart', 'fa fa-heart-o', 'fa fa-history', 'fa fa-home', 'fa fa-hospital-o', 'fa fa-html5', 'fa fa-ils', 'fa fa-image', 'fa fa-inbox', 'fa fa-indent', 'fa fa-info', 'fa fa-info-circle', 'fa fa-inr', 'fa fa-instagram', 'fa fa-institution', 'fa fa-ioxhost', 'fa fa-italic', 'fa fa-joomla', 'fa fa-jpy', 'fa fa-jsfiddle', 'fa fa-key', 'fa fa-keyboard-o', 'fa fa-krw', 'fa fa-language', 'fa fa-laptop', 'fa fa-lastfm', 'fa fa-lastfm-square', 'fa fa-leaf', 'fa fa-legal', 'fa fa-lemon-o', 'fa fa-level-down', 'fa fa-level-up', 'fa fa-life-bouy', 'fa fa-life-buoy', 'fa fa-life-ring', 'fa fa-life-saver', 'fa fa-lightbulb-o', 'fa fa-line-chart', 'fa fa-link', 'fa fa-linkedin', 'fa fa-linkedin-square', 'fa fa-linux', 'fa fa-list', 'fa fa-list-alt', 'fa fa-list-ol', 'fa fa-list-ul', 'fa fa-location-arrow', 'fa fa-lock', 'fa fa-long-arrow-down', 'fa fa-long-arrow-left', 'fa fa-long-arrow-right', 'fa fa-long-arrow-up', 'fa fa-magic', 'fa fa-magnet', 'fa fa-mail-forward', 'fa fa-mail-reply', 'fa fa-mail-reply-all', 'fa fa-male', 'fa fa-map-marker', 'fa fa-maxcdn', 'fa fa-meanpath', 'fa fa-medkit', 'fa fa-meh-o', 'fa fa-microphone', 'fa fa-microphone-slash', 'fa fa-minus', 'fa fa-minus-circle', 'fa fa-minus-square', 'fa fa-minus-square-o', 'fa fa-mobile', 'fa fa-mobile-phone', 'fa fa-money', 'fa fa-moon-o', 'fa fa-mortar-board', 'fa fa-music', 'fa fa-navicon', 'fa fa-newspaper-o', 'fa fa-openid', 'fa fa-outdent', 'fa fa-pagelines', 'fa fa-paint-brush', 'fa fa-paper-plane', 'fa fa-paper-plane-o', 'fa fa-paperclip', 'fa fa-paragraph', 'fa fa-paste', 'fa fa-pause', 'fa fa-paw', 'fa fa-paypal', 'fa fa-pencil', 'fa fa-pencil-square', 'fa fa-pencil-square-o', 'fa fa-phone', 'fa fa-phone-square', 'fa fa-photo', 'fa fa-picture-o', 'fa fa-pie-chart', 'fa fa-pied-piper', 'fa fa-pied-piper-alt', 'fa fa-pinterest', 'fa fa-pinterest-square', 'fa fa-plane', 'fa fa-play', 'fa fa-play-circle', 'fa fa-play-circle-o', 'fa fa-plug', 'fa fa-plus', 'fa fa-plus-circle', 'fa fa-plus-square', 'fa fa-plus-square-o', 'fa fa-power-off', 'fa fa-print', 'fa fa-puzzle-piece', 'fa fa-qq', 'fa fa-qrcode', 'fa fa-question', 'fa fa-question-circle', 'fa fa-quote-left', 'fa fa-quote-right', 'fa fa-ra', 'fa fa-random', 'fa fa-rebel', 'fa fa-recycle', 'fa fa-reddit', 'fa fa-reddit-square', 'fa fa-refresh', 'fa fa-remove', 'fa fa-renren', 'fa fa-reorder', 'fa fa-repeat', 'fa fa-reply', 'fa fa-reply-all', 'fa fa-retweet', 'fa fa-rmb', 'fa fa-road', 'fa fa-rocket', 'fa fa-rotate-left', 'fa fa-rotate-right', 'fa fa-rouble', 'fa fa-rss', 'fa fa-rss-square', 'fa fa-rub', 'fa fa-ruble', 'fa fa-rupee', 'fa fa-save', 'fa fa-scissors', 'fa fa-search', 'fa fa-search-minus', 'fa fa-search-plus', 'fa fa-send', 'fa fa-send-o', 'fa fa-share', 'fa fa-share-alt', 'fa fa-share-alt-square', 'fa fa-share-square', 'fa fa-share-square-o', 'fa fa-shekel', 'fa fa-sheqel', 'fa fa-shield', 'fa fa-shopping-cart', 'fa fa-sign-in', 'fa fa-sign-out', 'fa fa-signal', 'fa fa-sitemap', 'fa fa-skype', 'fa fa-slack', 'fa fa-sliders', 'fa fa-slideshare', 'fa fa-smile-o', 'fa fa-soccer-ball-o', 'fa fa-sort', 'fa fa-sort-alpha-asc', 'fa fa-sort-alpha-desc', 'fa fa-sort-amount-asc', 'fa fa-sort-amount-desc', 'fa fa-sort-asc', 'fa fa-sort-desc', 'fa fa-sort-down', 'fa fa-sort-numeric-asc', 'fa fa-sort-numeric-desc', 'fa fa-sort-up', 'fa fa-soundcloud', 'fa fa-space-shuttle', 'fa fa-spinner', 'fa fa-spoon', 'fa fa-spotify', 'fa fa-square', 'fa fa-square-o', 'fa fa-stack-exchange', 'fa fa-stack-overflow', 'fa fa-star', 'fa fa-star-half', 'fa fa-star-half-empty', 'fa fa-star-half-full', 'fa fa-star-half-o', 'fa fa-star-o', 'fa fa-steam', 'fa fa-steam-square', 'fa fa-step-backward', 'fa fa-step-forward', 'fa fa-stethoscope', 'fa fa-stop', 'fa fa-strikethrough', 'fa fa-stumbleupon', 'fa fa-stumbleupon-circle', 'fa fa-subscript', 'fa fa-suitcase', 'fa fa-sun-o', 'fa fa-superscript', 'fa fa-support', 'fa fa-table', 'fa fa-tablet', 'fa fa-tachometer', 'fa fa-tag', 'fa fa-tags', 'fa fa-tasks', 'fa fa-taxi', 'fa fa-tencent-weibo', 'fa fa-terminal', 'fa fa-text-height', 'fa fa-text-width', 'fa fa-th', 'fa fa-th-large', 'fa fa-th-list', 'fa fa-thumb-tack', 'fa fa-thumbs-down', 'fa fa-thumbs-o-down', 'fa fa-thumbs-o-up', 'fa fa-thumbs-up', 'fa fa-ticket', 'fa fa-times', 'fa fa-times-circle', 'fa fa-times-circle-o', 'fa fa-tint', 'fa fa-toggle-down', 'fa fa-toggle-left', 'fa fa-toggle-off', 'fa fa-toggle-on', 'fa fa-toggle-right', 'fa fa-toggle-up', 'fa fa-trash', 'fa fa-trash-o', 'fa fa-tree', 'fa fa-trello', 'fa fa-trophy', 'fa fa-truck', 'fa fa-try', 'fa fa-tty', 'fa fa-tumblr', 'fa fa-tumblr-square', 'fa fa-turkish-lira', 'fa fa-twitch', 'fa fa-twitter', 'fa fa-twitter-square', 'fa fa-umbrella', 'fa fa-underline', 'fa fa-undo', 'fa fa-university', 'fa fa-unlink', 'fa fa-unlock', 'fa fa-unlock-alt', 'fa fa-unsorted', 'fa fa-upload', 'fa fa-usd', 'fa fa-user', 'fa fa-user-md', 'fa fa-users', 'fa fa-video-camera', 'fa fa-vimeo-square', 'fa fa-vine', 'fa fa-vk', 'fa fa-volume-down', 'fa fa-volume-off', 'fa fa-volume-up', 'fa fa-warning', 'fa fa-wechat', 'fa fa-weibo', 'fa fa-weixin', 'fa fa-wheelchair', 'fa fa-wifi', 'fa fa-windows', 'fa fa-won', 'fa fa-wordpress', 'fa fa-wrench', 'fa fa-xing', 'fa fa-xing-square', 'fa fa-yahoo', 'fa fa-yelp', 'fa fa-yen', 'fa fa-youtube', 'fa fa-youtube-play', 'fa fa-youtube-square', );
   $icons = array_merge( $icons_ion, $icons_awesome, $icons_simle );
   return apply_filters( 'claudio_theme_icons', $icons );
}

?>