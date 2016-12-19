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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'bananas');

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
define('AUTH_KEY',         ',j&Z64}he_F&dDLmTiO*Xv`:T|H0&-S{AM#zA[JH?Pj3N]_;uRqLk6O3Gk =D+lP');
define('SECURE_AUTH_KEY',  'x<(j)9q#; X0.]ok*jJc/-^Ua]@ZlT;e@ qqA0NYVCc<x?LM7P-/zJAfuRK((;`$');
define('LOGGED_IN_KEY',    '(sy`e]Y2o_elPstLmM{-H|3yh0?Kb#0DbI^cONzJ<j=#OTY_>9tM-i/4l.<]{MAB');
define('NONCE_KEY',        'z!b<+]?D+aExX9R~|^1>xV{@EKVdC8evFjnA!z}0VEV@t(8bxXwyJEeh[)eTTk9t');
define('AUTH_SALT',        'B2>*(0t#HAs~bxb.1fpyZO;,4MlBV%nDhsC03byx[}|G^D6rn7-A5ysXOS~`$/!o');
define('SECURE_AUTH_SALT', 'TgDL%y5}h~^/[T,9`8rLrqx=jLT(qmvn?|>WIsOB:/qdji<ev{+-raDa@T6mKM#(');
define('LOGGED_IN_SALT',   '_TbB#IE^HekYzh-#b>iMs,b:QDiJ1N}9~~)zgnu|GET]w1M@{R]?i_cqOZUHRwK^');
define('NONCE_SALT',       ',LS)N:]jxWpM`y`L8C`CV)cM^QA*Y9mUF-Ip4N%tN3?QQrhMu&/[.t5uYlyi^Om^');

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

