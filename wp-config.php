<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress__dev' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Sj=OY;BxS:joSXiRWQCq5:y&jYwX7;W.|pfV:8+j4biedDgYG+3q|=0bC^|PAv}P' );
define( 'SECURE_AUTH_KEY',  'DT?&ohFLkh6|{%k9S;ZG<uujVAPJ<*suyYx[AZ|zH/_me4Ip*Doe?1Efqfh91Y`0' );
define( 'LOGGED_IN_KEY',    'j{g5f7$vDq5{.oe(+^)Ei*(Yxq~<IP%vTtGj!g3(>ml0T>K&(+7u4+d+10JRG7zR' );
define( 'NONCE_KEY',        'y,%:l}UeEy~X&z+J6oz-k&Hmuom@U(X/8^yg6T#1I5x1Pd>x)33L,[``jqTo|w<-' );
define( 'AUTH_SALT',        'q/!~IVa0NDiUJe2/WuItiIw:3~#HVK/x>)7qH`Y+{=IIm7XfZRP)DMKNCa&A{82e' );
define( 'SECURE_AUTH_SALT', 'HY,_Dy@rR}4dWWD)Ha@zk=pWD(~p0$^ybV4QcH#?~^}Bl;Q[K}fb&Lo-nn3C^G-)' );
define( 'LOGGED_IN_SALT',   'vXSrg>Is7A!uIHI/&_<$|~!((K0htz<pANppJs 0&c@&t:8>9[B07Kr~r`}FO@12' );
define( 'NONCE_SALT',       'M9(lh}23LDQrMLz>8eE&b!|T[h!iLhof$=>+7dI|r&*.05sqPOQNR$mdx.)a<HLI' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_dev';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', 'erreurs.txt' );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG', true );
define('SAVEQUERIES', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
