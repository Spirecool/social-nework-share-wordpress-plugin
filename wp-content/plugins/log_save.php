<?php

/**
 * @package Hook
 * @version 1.0.0
*/

/*
Plugin Name: Logs save
Plugin URI: http://localhost/wordpress/plugins/
Description: Créé une entrée dans un fichier, à chaque fois qu'un article est sauvegardé
Author: John Doe
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

function log_save() 
{
    var_dump(did_action('wp_loaded'));
}

add_action('wp_loaded', 'log_save', 90);
