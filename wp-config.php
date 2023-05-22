<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress2');

/** Database username */
define('DB_USER', 'wordpress2');

/** Database password */
define('DB_PASSWORD', '123456');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O:&5Gd2KMVp@K%*hGj`UAtssnQr3TbN,d(*j! v*v|]U>vo9z+0jHsh.%O~aNX.M');
define('SECURE_AUTH_KEY',  'qkDpE:k-C=VO0QXh-<l y?0p4tM&L6{sxNb@zge}PhBl{7Qve5u#};I{F1onaS[&');
define('LOGGED_IN_KEY',    ']F)0%,iZyxrXbD>D.>DI=3</,H3_`+|S]bSMpyDBJv*oDh.)g-KQzdRbZS 6(hT{');
define('NONCE_KEY',        '6!6ygJ6.`=rpml4>*DHCqaHwL,[ -U]b:}RL(3ku&e1|s;z{%:4%Q$B@x)<L2zlt');
define('AUTH_SALT',        'Io2&4Y7U$F?tE{6Sf`hri~2GzO mIb(r)!,4C9$8qQ~>y )D%[e@i?2b=ozSMSHJ');
define('SECURE_AUTH_SALT', 'aM`oIZ|c+.{oQ{20m:5f8G,5GtpvBQM7M[_T}?fgtr%UeD4s0rum>ogf/Agw<j^5');
define('LOGGED_IN_SALT',   'LPj]n^#zZ_;qWOJQk+t-_w4`duXkh]xMA!DKrj$R34X4g_kO:4?>y}9Z!>g&Wt@o');
define('NONCE_SALT', ',p2VD2Kex6q(uej/|%iU7lo*ya6;cYq)t-9M@nB3vK*BYzYxzI=dA}NosdLEe0@G');

/**#@-*/

/**
* WordPress database table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'wp_';

/**
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*
* For information on other constants that can be used for debugging,
* visit the documentation.
*
* @link https://wordpress.org/documentation/article/debugging-in-wordpress/
*/
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';