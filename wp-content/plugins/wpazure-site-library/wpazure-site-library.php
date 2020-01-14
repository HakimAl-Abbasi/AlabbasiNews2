<?php
/**
 * Plugin Name: Wpazure Site Library
 * Description: Wpazure site library is a addon plugin for Wpazure WordPress theme. This plugin contain lot of pre made sites for nearly all niches. You can import these sites with a single click.
 * Version: 0.2.7.5
 * Author: wpazure
 * Author URI: https://wpazure.com
 * License: GPL-2.0+
 * WC requires at least: 3.3.0
 * WC tested up to: 5.2.2
 * Text Domain: wpazure-site-library
 *
 */
 
 
 /*
* Loading a text domain code for plugin translation 
*/
add_action('plugins_loaded', 'wsl_load_textdomain');
function wsl_load_textdomain() {
	load_plugin_textdomain( 'wpazure-site-library', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}

register_activation_hook(__FILE__, 'wpazure_site_liby_plugin_activate');
add_action('admin_init', 'wpazure_site_liby_plugin_redirect');

function wpazure_site_liby_plugin_activate() {
    add_option('wpazure_libry_do_activation_redirect', true);
}

function wpazure_site_liby_plugin_redirect() {
    if (get_option('wpazure_libry_do_activation_redirect', false)) {
        delete_option('wpazure_libry_do_activation_redirect');
        wp_redirect('themes.php?page=wpazure-demo-import');
    }
}

 
$theme = wp_get_theme();
if ('Wpazure' == $theme->name){
	// Load Demo Data
	require_once trailingslashit( plugin_dir_path( __FILE__ ) ) . 'demo-data/demo-install.php';
}

