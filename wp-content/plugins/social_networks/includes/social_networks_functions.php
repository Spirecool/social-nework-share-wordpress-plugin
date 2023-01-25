<?php

// FICHIER BACK

/* START - ADMIN CSS */

function my_admin_theme_style()
{
    wp_enqueue_style('my-admin-theme', plugins_url('social_networks.css', __FILE__));
    wp_enqueue_style( 'bootstrap-css',plugins_url( '/bootstrap/css/bootstrap.min.css', __FILE__ ) );
}

add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

/* END - ADMIN CSS */


/* START - ADMIN SIDEBAR CSS */

function social_media_sidebar()
{
    add_menu_page('My First Page', 'Social networks', 'manage_options', 'social-media', 'social_media_page', 'dashicons-share');
}

add_action('admin_menu', 'social_media_sidebar');

/* END - ADMIN SIDEBAR CSS */


/* START - ADMIN TOPBAR CSS */

function social_media_topbar($wp_admin_topbar)
{
    $admin_topbar = array (
        'id' => 'social_networks',
        'title' => 'Social networks',
        'href' => admin_url('admin.php?page=social-media'),
    );

        $wp_admin_topbar->add_node($admin_topbar);
}

add_action('admin_bar_menu', 'social_media_topbar', 999);

/* END - ADMIN TOPBAR CSS */


/* START - CREATING ADMIN PAGE : FUNCTIONS */

function social_media_section_settings()
{
    // Création d'une section
    add_settings_section("social_media_section", "", null, 'social-media');

    // Création des champs
    add_settings_field("social-media-facebook", "Share on Facebook", "social_media_facebook_switch", "social-media", "social_media_section");
    add_settings_field("social-media-whatsapp", "Share on What's app", "social_media_whatsapp_switch", "social-media", "social_media_section");
    add_settings_field("social-media-linkedin", "Share on Linkedin", "social_media_linkedin_switch", "social-media", "social_media_section");
    add_settings_field("social-media-twitter", "Share on Twitter", "social_media_twitter_switch", "social-media", "social_media_section");

    // Enregistrement des champs
    register_setting("social_media_section", "social-media-facebook");
    register_setting("social_media_section", "social-media-whatsapp");
    register_setting("social_media_section", "social-media-linkedin");
    register_setting("social_media_section", "social-media-twitter");
}

/* END - CREATING ADMIN PAGE : FUNCTION */


/* START - CREATING ADMIN PAGE : HTML */

function social_media_facebook_switch()
{ ?>
    <label class="switch">
        <input type="checkbox" name="social-media-facebook" value="activate" <?php checked('activate', get_option('social-media-facebook') , true); ?>>
        <span class="slider round"></span>
    </label>
<?php }
function social_media_whatsapp_switch()
{ ?>
    <label class="switch">
        <input type="checkbox" name="social-media-whatsapp" value="activate" <?php checked('activate', get_option('social-media-whatsapp') , true); ?>>
        <span class="slider round"></span>
    </label>
<?php }

function social_media_linkedin_switch()
{ ?>
    <label class="switch">
        <input type="checkbox" name="social-media-linkedin" value="activate" <?php checked('activate', get_option('social-media-linkedin') , true); ?>>
        <span class="slider round"></span>
    </label>
<?php }

function social_media_twitter_switch()
{ ?>
    <label class="switch">
        <input type="checkbox" name="social-media-twitter" value="activate" <?php checked('activate', get_option('social-media-twitter') , true); ?>>
        <span class="slider round"></span>
    </label>
<?php }

/* END - CREATING ADMIN PAGE : HTML */



add_action("admin_init", "social_media_section_settings");



/*  START - CREATING ADMIN PAGE : HTML FORM  */

function social_media_page()
{ ?>
    <div class="container">
        <h1>Social networks</h1>

        <form method="post" action="options.php">
            <?php
            settings_fields("social_media_section");
            do_settings_sections("social-media");
            submit_button();
            ?>
        </form>
    </div>
<?php }

/*  END - CREATING ADMIN PAGE : HTML HTML  */


// Fichier FRONT


/*  START - CREATING FRONT PAGE :  HTML  */


function social_media_icons_front($social_media_icons)
{
    // Création et récupérations des variables
    global $post;

    $link = get_permalink($post->ID);
    $link = esc_url($link);

    // Création de la structure HTML
    $html = "<div class='container row'><div class='h3'>Share on : </div>";

    if (get_option("social-media-facebook") == 'activate')
    {
        $html = $html . "
        <div class='col-1'>
            <a target='_blank' href='https://www.facebook.com/sharer.php?" . $link . "'>
                <i class='fab fa-facebook-square fa-2x'></i>
            </a>
        </div>";
    }

    if (get_option("social-media-twitter") == 'activate')
    {
        $html = $html . "
        <div class='col-1'>
            <a target='_blank' href='https://twitter.com/share?url=" . $link . "'>
                <i class='fab fa-twitter-square fa-2x'></i>
            </a>
        </div>";
    }

    if (get_option("social-media-linkedin") == 'activate')
    {
        $html = $html . "
        <div class='col-1'>
            <a target='_blank' href='http://www.linkedin.com/shareArticle?url=" . $link . "'>
                <i class='fab fa-linkedin fa-2x'></i>
            </a>
        </div>";
    }

    if (get_option("social-media-whatsapp") == 'activate')
    {
        $html = $html . "
        <div class='col-1'>
            <a target='_blank' href='tel:123-456-7890'>
                <i class='fab fa-whatsapp-square fa-2x'></i>
            </a>
        </div>";
    }

    $social_media_icons = $social_media_icons . $html;
    return $social_media_icons;
}

add_filter("the_content", "social_media_icons_front");


/*  END - CREATING FRONT PAGE :  HTML  */