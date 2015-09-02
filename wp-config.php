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
define('DB_NAME', 'SQLhande');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'CeZ_:a1{KA /$d)qzCx|o3F.kAv>RuX<=IE>N:7JL4&F258u0S|H,d?;f$W|<]nd');
define('SECURE_AUTH_KEY',  'MbH(^topk-eQ75{NB|,{T*tkYxEH.oV&0j_(}`VQPE;_zaCg-9+O,MCm{}&a:C:&');
define('LOGGED_IN_KEY',    'a9o19M[-O..WQ-NT-ZU+)NK-G=XjiwG)L_(K9mZXpJK{_Ak-ot>,Qc<MV6J@c|EU');
define('NONCE_KEY',        ';=b.4#(ql=GU(gtlG!g>qmH2yF^k4z8!*=]>ElgtjDIY)2e|u6OQ:pU_ri+-ZrN*');
define('AUTH_SALT',        '`@Om0zI`.M@na0I/7w~_&g[5D~J( Gq7ED2]??oZG1w9OtV_Y &c7(SG2 l*#_x}');
define('SECURE_AUTH_SALT', '`O]v1~Ia5gQoIsSm@Er7((j/~1nmOd0i[K|/<4%JiUn!GP}a~t96#H,p2!$T<mX&');
define('LOGGED_IN_SALT',   'CUR26U3?q?G%ZFHWz=-,A_NDtYs)}0 =QS-Yn w(`R`L@Rl_02A1{-*MWbL5hif>');
define('NONCE_SALT',       '%?+Tjti!&&%@Ot o,1R~d=0I[&?_<-m`8#-GCm|3LNVAunf7#D4y+h|`>*L-P^d)');

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
