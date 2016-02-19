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
define('DB_NAME', 'newdimenDBsujjb');

/** MySQL database username */
define('DB_USER', 'newdimenDBsujjb');

/** MySQL database password */
define('DB_PASSWORD', 'DlaArRG1t');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'EfPbH+mxi6.;*TAHT9taepa]+*p9L59]aLOaK+hpW]5#[-K59K1lSVGS#swd1C[1~');
define('SECURE_AUTH_KEY',  'UJUFyjrb{$^q$M7A{bnXbI$jq$j3.<y.XEYIyjuyj3^<3^UEIAubfP*q$*mA<;A<');
define('LOGGED_IN_KEY',    'SHSDthpW]x~lwG1VGw_swh1~[1~R8CN8oVdK@[wzk4|04|VGJVFvckRc0@!rBN8B>');
define('NONCE_KEY',        'jYr3,YIQbIyjnXj3^<uIUAIfqbfM*my*m6<{+<bIPEyemX]+*qAL29#aHTaHxelx');
define('AUTH_SALT',        'J7jU>z^3,{$M3nyjrX{$.uE3.fTbI$jqb6<;+P6E]ePbiPe2.]+P9H2Dxipa;5');
define('SECURE_AUTH_SALT', '$q$nA{3.XIM6qbiX{y*uI2A]ePXH+mte2.]+P9iS]+_tH1eKS9tahtd:~#sG15|1l');
define('LOGGED_IN_SALT',   'UAu^nub$<yM3EM2jPXiT.qye2E{;*PALPAqa*]xL29#2iSWHx_txh1~]1~S9DO9');
define('NONCE_SALT',       'G5oVdK-|w-k4![4!VCkRc0@!rCN8B}kUYN@nvc}@>}$N7BM7nYcIU>vyj3,3^QBM');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
