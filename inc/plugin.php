<?php


add_action( 'tgmpa_register', 'praxis_register_required_plugins' );


function praxis_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		
		array(
			'name'               => 'Page scroll to id', // The plugin name.
			'slug'               => 'page-scroll-to-id', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugins/page-scroll-to-id.1.6.6.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '1.0.1', // E.g. 1.0.0. If set, the active plugin must be 
		),

		// This is an example of how to include a plugin from an arbitrary external source in your theme.
		array(
			'name'         => 'TGM New Media Plugin', // The plugin name.
			'slug'         => 'tgm-new-media-plugin', // The plugin slug (typically the folder name).
			'source'       => 'https://s3.amazonaws.com/tgm/tgm-new-media-plugin.zip', // The plugin source.
			'required'     => true, // If false, the plugin is only 'recommended' instead of required.
			'external_url' => 'https://github.com/thomasgriffin/New-Media-Image-Uploader', // If set, overrides default API URL and points to an external URL.
		),

		

		// This is an example of how to include a plugin from the WordPress Plugin Repository. 
		array(
			'name'      => 'BuddyPress',
			'slug'      => 'buddypress',
			'required'  => false,
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
		),
		array(
			'name'      => 'One Click Demo Import',
			'slug'      => 'one-click-demo-import',
			'required'  => true,
		),
		array(
			'name'      => 'Widget Importer & Exporter', //  Claint don't need this file /Claint ka daora dorkar ni
			'slug'      => 'widget-importer-exporter',//  Claint don't need this file /Claint ka daora dorkar ni
			'required'  => true,
		),
		array(
			'name'      => 'Customizer Export/Import', //  Claint don't need this file /Claint ka daora dorkar ni
			'slug'      => 'customizer-export-import', //  Claint don't need this file /Claint ka daora dorkar ni
			'required'  => true,
		),
		array(
			'name'      => 'Essential Addons for Elementor',
			'slug'      => 'essential-addons-for-elementor-lite',
			'required'  => true,
		),

		// This is an example of the use of 'is_callable' functionality. A user could - for instance -
		// have WPSEO installed *or* WPSEO Premium. The slug would in that last case be different, i.e.
		// 'wordpress-seo-premium'.
		// By setting 'is_callable' to either a function from that plugin or a class method
		// `array( 'class', 'method' )` similar to how you hook in to actions and filters, TGMPA can still
		// recognize the plugin as being installed.
		array(
			'name'        => 'WordPress SEO by Yoast',
			'slug'        => 'wordpress-seo',
			'is_callable' => 'wpseo_init',
		),

	);

	$config = array(
		'id'           => 'praxis',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		
	);

	tgmpa( $plugins, $config );
}
