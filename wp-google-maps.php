<?php
/*
Plugin Name: WP Google Maps
Plugin URI: https://www.wpgmaps.com
Description: The easiest to use Google Maps plugin! Create custom Google Maps with high quality markers containing locations, descriptions, images and links. Add your customized map to your WordPress posts and/or pages quickly and easily with the supplied shortcode. No fuss.
Version: 7.0.00
Author: WP Google Maps
Author URI: https://www.wpgmaps.com
Text Domain: wp-google-maps
Domain Path: /languages
*/

namespace WPGMZA;

require_once(__DIR__ . '/example.php');

require_once(__DIR__ . '/constants.php');
require_once(__DIR__ . '/php/class.plugin.php');

include_once(ABSPATH . 'wp-admin/includes/plugin.php');
if(is_plugin_active('wp-google-maps-pro/wp-google-maps-pro.php'))
	require_once(WPGMZA_PRO_DIR . 'php/class.pro-plugin.php');

include_once(ABSPATH . 'wp-admin/includes/plugin.php');

$wpgmza = null;

function wpgmza_create_instance_filter()
{
	if(is_plugin_active('wp-google-maps-pro/wp-google-maps-pro.php'))
		return new ProPlugin();
	else
		return new Plugin();
}

function wpgmza_create_instance_delegate()
{
	global $wpgmza;
	
	$wpgmza = apply_filters('wpgmza_create_plugin_instance', null);
}

add_filter('wpgmza_create_plugin_instance', 'WPGMZA\\wpgmza_create_instance_filter');
add_action('plugins_loaded', 'WPGMZA\\wpgmza_create_instance_delegate');

?>