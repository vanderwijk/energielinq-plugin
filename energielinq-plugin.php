<?php
/**
 * Plugin Name:  Energielinq Plugin
 * Plugin URI:   https://energielinq.nl
 * Description:  Boilerplate plugin voor Energielinq
 * Version:      1.1
 * Author:       Johan van der Wijk
 * Author URI:   https://thewebworks.nl
 * Text Domain:  energielinq
 * License:      GPL-2.0+
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort
if ( ! defined( 'WPINC' ) ) {
	die;
}


// Launch the plugin
function eq_plugin_init() {
	load_plugin_textdomain( 'energielinq', false, 'energielinq-plugin/languages' );
}
add_action( 'plugins_loaded', 'eq_plugin_init' );

require 'custom-post-types.php';


// Hide the admin bar for users less than Editor
function remove_admin_bar() {
	if (!current_user_can('edit_others_pages') && !is_admin()) {
		show_admin_bar(false);
	}
}
add_action('after_setup_theme', 'remove_admin_bar');


// Remove admin menu's
function eq_remove_menus(){
	remove_menu_page( 'tools.php' ); //Tools
}
add_action( 'admin_menu', 'eq_remove_menus' );


// Remove 'New' from admin bar
function eq_remove_nodes() {
	global $wp_admin_bar;
	$wp_admin_bar -> remove_node( 'wp-logo' );
	$wp_admin_bar -> remove_node( 'new-media' );
	$wp_admin_bar -> remove_node( 'new-user' );
	$wp_admin_bar -> remove_node( 'comments' );
}
add_action( 'admin_bar_menu', 'eq_remove_nodes', 999 );


// Remove admin footer text
function eq_change_footer_admin () {
	return;
}
add_filter('admin_footer_text', 'eq_change_footer_admin', 9999);


function eq_plugin_scripts() {
//
}
add_action( 'admin_enqueue_scripts', 'eq_plugin_scripts' );