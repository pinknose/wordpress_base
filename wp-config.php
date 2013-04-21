<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_base');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Martin26');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@ESE%^KeIEj{}IeI-g(*@h#4UNGo),*OsFawx@<0vB]I9DyERo <L!0#5u)k63#q');
define('SECURE_AUTH_KEY',  'X+~->m@o2AWi83:1[yNL~O Eg%cn$e*U%`pW9KlmR^8>z;A-lXsyusQ$_npl261[');
define('LOGGED_IN_KEY',    '%e]9<AG-+~Q4j>d|8.]0U8jcqT?mJt oY/A;8ebdQ`88_X+ XAL<iIR-A4sRmH-X');
define('NONCE_KEY',        'Ox^U[R_I>BQ?#;?Sk%0[+ks-Jg/-AFRvF`[U$OozFp84&MJMq29OXDWX!$77KX6u');
define('AUTH_SALT',        '-mO[>3n5!SNh.lu^? Vc@Eh,A)bL*K(b-xobt6snD{SbH#::&5MTG)v4k^sb{fhb');
define('SECURE_AUTH_SALT', '^9..Tx6sZOI77tq=VOhF8rPE,UK_4DBdY4g2BtmoKfzSBO2.cH -|95<!v-n|O!v');
define('LOGGED_IN_SALT',   'KQ$3OWD,H$HL}[_JYxW*B+)|`Lvyf,pjF[0E]p:%yV|}1>[Gd2XEYW{BQ)Z-yTmt');
define('NONCE_SALT',       '0Mpv`c=sqoDz+tn]qdp1(_s/^|*&|<`*g&`v@L`R-x+/ay;3GS[]Ml{tb*+IRpB7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', 'da_DK');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
