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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Gd|M8(1#j+UHREr+gU>k/>vn54iK7G%``A5>GY mv4jowEfA`RyJ[J`6S-v?w`Px');
define('SECURE_AUTH_KEY',  'l&TB6^VkfVN/-8^X3Nt)+6E#{7*-+rg|0|v71du#ihM**/j)-_J6KH&Sq7Umi<b+');
define('LOGGED_IN_KEY',    '|ZDN-f;*<ABTW[MVKs%v5,jm,]ntD|C(R!*a(}0 NQ1uAlQWdca]sP;,Md+xx yN');
define('NONCE_KEY',        '&dw80=$7bo6?0GOj%]hE$[hcm;8+<s^|G}e_]MC6hB2P@5%o_4Bf{LzGoM XrGU-');
define('AUTH_SALT',        'RP{zbW+#z;T #n>q]-:Bg((*WppF+gnb@G&pax1cbc8BCQ-+[5|dWT38?^v-DX=`');
define('SECURE_AUTH_SALT', ']rz`0,V2@mbE-8;l%Jz.AS8o&vHS.. sg(P+,R%1*U(W.Gw^i+d>}X(=UODXk|(N');
define('LOGGED_IN_SALT',   ',^P&2-cCbvI+xoK&X=M#MqpEygBt4B=(J>)v^p4;)D8g~};5 (:E|,P~q%!U2_++');
define('NONCE_SALT',       'T)LR!F$/_I[$D<=&[F(;P J^8=(npmS+I(M1aY5|>6k:+8(-[&pS0Z#N}^c)=Rf3');

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
define('WPLANG', '');

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

/** change permisssions for plugin installation */
define("FS_METHOD","direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);

