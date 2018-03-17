<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'majorproject');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'i_$(Q9$yB{@dQ&oPA &QY $my=7]kDAM+A[@ b@c*EE|k+wZId5aYK0kmR<us@sG');
define('SECURE_AUTH_KEY',  '+5[]cv?jPeo3;eP(41=Gtv7<I2jbRT$f?6ykXn@ :{a~p(2:LYQq/cQWxk?8f&V8');
define('LOGGED_IN_KEY',    'd;~NuvnHYt8_]+S6_b/-haY5dy5H!ZLxt|u^+!uKw)x^1W5t!|J5q7>q>mDigU40');
define('NONCE_KEY',        '/<lhPv>V1.RRAy:u2(M8nLA>o7m=_v*UM0K0v/]i:.W{reCUVGUV}&{jCEK:>rhp');
define('AUTH_SALT',        'o6 vsN0@B)x|k*BO$T&]Nz*E*q5h;8XJ*DT=`%7aj0p[W6*45m2N14~{T`$U37kE');
define('SECURE_AUTH_SALT', 'fuTL:1x!H4)Tm_}e_5CiLV&L4;h]p*[0#9>)gT/m:2u$>IvYNw!OKY;T.a#jP);V');
define('LOGGED_IN_SALT',   'd6h!  <ou%S|V2d|TFyB@1F%B*mM{f-XbvtLp2g>Y)2)x^lXCYr5>YDjFCc}UYxR');
define('NONCE_SALT',       '+4wP(>f]W#7sy6N5@{1yg( n~gPZZ/%k?O_g2HSZ}UYwK]>c|`Q{Jcwk|5@U)5Gq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
