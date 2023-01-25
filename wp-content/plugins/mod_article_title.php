<?php

/**
 * @package Mod article title
 * @version 1.0.0
*/

/*
Plugin Name: Mod article title
Plugin URI: http://localhost/wordpress/plugins/
Description: Modifie le titre d'un article
Author: John Doe
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

function modify_title($title) 
{
    return 'Mon titre : '.$title;
}

add_filter('the_title', 'modify_title');