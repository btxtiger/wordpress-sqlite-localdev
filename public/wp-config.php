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

 // ** SQLite-Settings ** //
define('DB_FILE', 'wp-content-db.sqlite');
define('DB_DIR', __DIR__ . '/wp-database/');
define('USE_MYSQL', false);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'Ob*1R-[T)[gFjHCIH9@N[pu3Q)(iVs<{aeR}aA6KT~Hn[.,G;7+uZ^9e_q2+Far&');
define('SECURE_AUTH_KEY',  'i_MdcN3itf9bPmee_D;$wj15P@6-;2#+5T#y#Y+=IEq&/kiz&{n5}.6T~_myOd@;');
define('LOGGED_IN_KEY',    '+`=CQP>#wVk~}-]-xZF_+!)dJI}q>A> g9-&=#DkX1QpC:&Z?9PK{&%QNN542(Og');
define('NONCE_KEY',        '<~8:/N RS-gNY%H$UWAN-b1&Ry[DHNQI*,6C-1+TJ,]|<8!8&gCQdmr%3l0dk4Y9');
define('AUTH_SALT',        'y>GW^*BRAr|IE[[*(py}P=/^.Cbk+%QF4Q9VZX!287!gJV/w[5&~^ ^1Uo&s`2B%');
define('SECURE_AUTH_SALT', '|o&vF& 5nwxB@57;]7rx|<|%TziAjTawS0?:38&)(~0+8P7;|P8,g^h+ F]E#HG;');
define('LOGGED_IN_SALT',   'q#|G,MCHK4^~KtH$/5Bi4^vF}He*LOP|{Bhfp!c/wowx.(iMA,dct~sTzKuDG)Lx');
define('NONCE_SALT',       '%0tAw+4@,u4<[bR;GBi6iVZ<95c|2a$S3E`G1jnL}=mOTgF-f|m48hrz(a.NbmQK');

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
