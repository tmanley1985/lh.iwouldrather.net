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
define('DB_NAME', 'iwouldrather');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'lh.iwouldrather.net');

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
define('AUTH_KEY',         '*zu}]b(sIzgYsf#$9]:58G$Q^>- XCW?|?Z*bz/@m~$H0EvPXg1)iSLZcsf)H3KR');
define('SECURE_AUTH_KEY',  '>UZJ5kiY<+3S`=P2^XVvSaG?%#Rd7K9SXuLW *2E/@@*5`ba|I]S]9b?sYM|qW9x');
define('LOGGED_IN_KEY',    'xP!iK?$P:F3u8,A:x#ic-{|6)<*iD~me(nJ(Y<M$p}!s0t-LDo5bXC>GM@T~RR&9');
define('NONCE_KEY',        'jL(|df{~@TWN4GWMA;-%SX#NP0U,CD!;:j.~VaW}{%DzGT-y|&/-}47E[5?`rwO!');
define('AUTH_SALT',        '>Y1;DLniK(]+3j^9/eD[-Od;ypj!E6iy@}A`WpIOjza5Yo?+p8{<g#N,}--z:PNU');
define('SECURE_AUTH_SALT', 'v=Y:[)W)Sm2b|KxMJ6-(9va/:j-YU&R|:Q,_|R[1Qk,hQ$vy:hZiC0gdB &`9:Bk');
define('LOGGED_IN_SALT',   'Vf].~zVpL]enrB3J&W-Ksl)G4Z;)yLYEb%axOa@)LDo&<lwH9|5$RJaf&U,=*(9^');
define('NONCE_SALT',       '1)3TijnL^7?dvd6S]rf2%-N0&G-US&oSE*}5Rndy?KA+|667{E_NK5Ojilzo$n{I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
