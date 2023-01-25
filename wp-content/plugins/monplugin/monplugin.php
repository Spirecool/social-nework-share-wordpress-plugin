<?php

/**
 * @package Mon_Plugin
 * @version 1.0.0
 */
/*
Plugin Name: Mon plugin
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is just a test plugin.
Author: Jérôme OLLIVIER
Version: 1.0.0
Author URI: http://ma.tt/
*/

// Affiche bonjour en haut de l'écran

function plugin_page()
{
    echo 'Bonjour';
}

// on ajoute l'extension dans le menu
function bonjour() 
{
    add_menu_page('Mon plugin', 'Plugin Bonjour', 'administrator', 'mon_plugin/bonjour.php',
     'plugin_page', 'dashicons-admin-customizer', 2 );
}

add_action ('admin_menu', 'bonjour');

// Style

function add_custom_css()
{
    wp_enqueue_style('custom', get_template_directory_uri().'/custom.css', 999);
}

add_action('wp_enqueue_scripts', 'add_custom_css');

// shortcode

function bonjour_shortcode()
{
    return '<b><i>Bonjour à tous</i></b>';
}
add_shortcode('bonjour', 'bonjour_shortcode');
