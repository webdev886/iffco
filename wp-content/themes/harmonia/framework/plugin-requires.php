<?php
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'harmonia_register_required_plugins' );
function harmonia_register_required_plugins() {
	$plugins = array(		
		// Plugin Download the http://wordpress.org
        array(
            'name'               => esc_html__( 'Meta Box', 'harmonia' ),
            'slug'               => 'meta-box',
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ),
        array(
            'name'               => esc_html__( 'Redux Framework', 'harmonia' ),
            'slug'               => 'redux-framework',
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ),
        array(
            'name'                     => esc_html__( 'Contact Form 7', 'harmonia' ), // The plugin name
            'slug'                     => 'contact-form-7', // The plugin slug (typically the folder name)
            'required'                 => false, // If false, the plugin is only 'recommended' instead of required
        ),
        array(
            'name'               => esc_html__( 'Woocommerce', 'harmonia' ), // The plugin name
            'slug'               => 'woocommerce', // The plugin slug (typically the folder name)
            'required'           => false, // If false, the plugin is only 'recommended' instead of required
        ),

        // This is an example of how to include a plugin from a private repo in your theme.
        array(            
            'name'               => esc_html__( 'WPBakery Visual Composer', 'harmonia' ), // The plugin name.
            'slug'               => 'js_composer', // The plugin slug (typically the folder name).
            'source'             => 'http://oceanthemes.net/plugins-required/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '6.0.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.

        ),
        array(
            'name'               => esc_html__( 'Revolution Slider', 'harmonia' ), // The plugin name.
            'slug'               => 'revslider', // The plugin slug (typically the folder name).            
            'source'             => 'http://oceanthemes.net/plugins-required/revslider.zip', // The plugin source.            
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '6.0.7', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.

        ),          
        array(            
            'name'               => esc_html__( 'OT Themes One Click Import', 'harmonia' ), // The plugin name.
            'slug'               => 'ot-themes-one-click-import', // The plugin slug (typically the folder name).
            'source'             => 'http://oceanthemes.net/plugins-required/harmonia/ot-themes-one-click-import.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),  
        array(            
            'name'               => esc_html__( 'OT Portfolios', 'harmonia' ), // The plugin name.
            'slug'               => 'ot_portfolio', // The plugin slug (typically the folder name).
            'source'             => 'http://oceanthemes.net/plugins-required/harmonia/ot_portfolio.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => esc_html__( 'OT Slider Text', 'harmonia' ), // The plugin name.
            'slug'               => 'ot_slider_text', // The plugin slug (typically the folder name).
            'source'             => 'http://oceanthemes.net/plugins-required/harmonia/ot_slider_text.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => esc_html__( 'OT Testimonials', 'harmonia' ), // The plugin name.
            'slug'               => 'ot_testimonial', // The plugin slug (typically the folder name).
            'source'             => 'http://oceanthemes.net/plugins-required/harmonia/ot_testimonial.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => esc_html__( 'OT Visual Composer', 'harmonia' ), // The plugin name.
            'slug'               => 'ot_composer', // The plugin slug (typically the folder name).
            'source'             => 'http://oceanthemes.net/plugins-required/harmonia/ot_composer.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(            
            'name'               => esc_html__( 'Newsletter', 'harmonia' ), // The plugin name.
            'slug'               => 'newsletter', // The plugin slug (typically the folder name).
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        ), 
	);
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
