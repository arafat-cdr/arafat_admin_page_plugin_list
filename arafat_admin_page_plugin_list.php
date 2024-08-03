<?php

/*
 *
 * Plugin Name:       Arafat Admin Page Plugin List
 * Plugin URI:        https://simplerscript.com/arafat-admin-page-plugin-list
 * Description:       Show List of Installed Plugin
 * Version:           1.0
 * Author:            Yeasir Arafat
 * Author URI:        https://simplerscript.com/
 * License:           Private Only
 * Update URI:        https://simplerscript.com/arafat-admin-page-plugin-list-update
 * Text Domain:       arafat-admin-page-plugin-list
 * Domain Path:       /languages
 *
 */


// Direct Access Not Allowed

if (!defined('ABSPATH')) {
    die;
}

// Helpers Goes Here

if( !function_exists('pr') ){
    
    function pr( $data, $die = false ){
        
        echo '<pre>';
        print_r( $data );
        echo '</pre>';

        if( $die ){
            die($die);
        }
    }

}

require_once( __DIR__.'/class/admin_page_plugin_list.php' );

function arafat_admin_page_load_plugin_modules(){

	admin_page_plugin_list::get_instance();

}

add_action( 'plugins_loaded', 'arafat_admin_page_load_plugin_modules' );