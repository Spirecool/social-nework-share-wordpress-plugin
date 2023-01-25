<?php
/*
Plugin Name: Debug Admin Notices
Plugin URI: http://localhost/wordpress/plugins/
Description: Affiche un message dans la zone de notification de l'administration WordPress lorsque
le mode débogage est activé
Author: John Doe
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/




function get_apache_version() {
    $version = apache_get_version();
    echo "$version\n";

}



/**
 * Déclaration de l'action pour WordPress.
 */
add_action( 'admin_notices', 'apache_get_version' );
get_apache_version();
