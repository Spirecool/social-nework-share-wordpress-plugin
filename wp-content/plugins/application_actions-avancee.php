<?php
/*
Plugin Name: Bonjour ! John Doe
Plugin URI: http://localhost/wordpress/plugins/
Description: Affiche une notice dans l'administration WordPress
Author: John Doe
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

// la fonction affiche un texte avec 0 argument
function say_hello() {
    echo '<p>Bonjour !</p>';
}

// la fonction affiche un texte avec 2 arguments
function say_name($prenom, $nom) {
    echo '<p>' . $prenom .' '. $nom . '</p>';
}

//permet d'ajouter les actions
add_action('mon_hook', 'say_hello');
add_action('mon_hook', 'say_name', 10, 2);

// permet d'executer l'action du hook
function callback_admin_notices() {
    do_action('mon_hook', 'John', 'Doe');
}

add_action('admin_notices', 'callback_admin_notices');