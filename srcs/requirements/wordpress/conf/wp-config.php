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
define( 'DB_NAME', 'inception' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'anbourge' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'inception' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mariadb:3306' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '71_n8bZmPBGrrIC$$_$i{xi+KDmz+J*?y4!##4&s#$U1h3U; xG.Mo|N?:@(;BnN');
define('SECURE_AUTH_KEY',  's4~f6sry5hF`t@X2n:/SyAu`cn#Vf*p+&I<+*h4K~;d-Q^35sK#-U9:Jk2DG__]E');
define('LOGGED_IN_KEY',    'ZykGKTD]vx^h-N7m]-3>-uYhR6]js/+YV}x;qn dhhtFW0M>NAt%dSJHe+XrEpnO');
define('NONCE_KEY',        'J*sgE/ilyIqu?)cOuW=S>HYh/kHOb(5D6hxXu`{:n^y2<12rlR[}H}LC$p(v#[s.');
define('AUTH_SALT',        'Mic2|,gdF-~y8|!$<Gd]H?]%Fs^RKCJ+2iIUNA5 *9+Q3U3iAG6[RMm5PBqVwhQ~');
define('SECURE_AUTH_SALT', '^}5%JQAIVCy)*&*+!0 =`$B^|`76~)^p0~7t!t[.jk{:2/(kzO/``}u7_Ul+?1aE');
define('LOGGED_IN_SALT',   'G0D}#;1[0uqr-Wtow>VE*>201!lZI0}dsLY!2je(H<x?-d*`.y.oTN(whGkbiG l');
define('NONCE_SALT',       '[=H<Mqcj9xC:^Z0PR2re%[`d*(uX6# X=#nwKf7@uUt!8NvVoUX~1r+d?i!)UAE/');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
