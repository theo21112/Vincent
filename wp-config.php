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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'Gg:KG7#?}.+:?*8O=#bP;+9$hLWG0eI+{3?uHA#>pn/ QaREzNn5*5Dk2>siJH$r');
define('SECURE_AUTH_KEY',  'hN+|Abxbb!ftzZcF- $^f_N.eonx7Al:W52;^!VTn~LfZ8rK71|@OkE(YOQtu,d!');
define('LOGGED_IN_KEY',    'W<j/1XPt0(?UupI/j2a|u9SGz|6.<uD|7Tn+@IPfG~tHw]6HV=LT(e`_I`>!_M7R');
define('NONCE_KEY',        'xnaty,`K^WY]};Dk(ceM^/ z[S7PD.ZIkPHPk!GYmA(f#E[uI?TSI:wRU/$nU(i{');
define('AUTH_SALT',        'smGTVUcKF;cWzFFg`ixsT<pxzcKjXiiupLa}g6oYE=@?/Nv)STwNy)OF=rHQapMQ');
define('SECURE_AUTH_SALT', '6VMb<-D:0CJf!CgZ^<XfHOZ+R H{mplAQwbev?hty$^Nfa=u4LYTd:=OOA[$a!jg');
define('LOGGED_IN_SALT',   'Sw/{k,=g_W_uU7]p>Bm#2er0+U+FVZ-`,hoy&17</?I~E5kfG85QWW%SY68[2~-<');
define('NONCE_SALT',       'JpV]rUL/`A|nv8;l?h2]6vbe;/Y)ljx27|#ezOZ8z2.H|<[2`i!,|}3d~kZ]_M]P');

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
