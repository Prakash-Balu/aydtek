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
define('DB_NAME', 'aydtech');

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
define('AUTH_KEY',         ';+&49;Z2n!cUtKO.Dc@,o^>> )J&kl#:[W^*2k~WdVyrqcdHKdD=[6md1*_$>zVZ');
define('SECURE_AUTH_KEY',  '$0l>n2inpA3V%{/(S}BjK$}10k<tqlD 1kesZp>Y_!O/Xt+*UTUR{1tW>(f<XPDK');
define('LOGGED_IN_KEY',    'h=6pz]]9pLBd!;V[0}$Uio$l0~e*+47@Z!pvYi-!rYq5C/${L~QW->s]-9u;1fHq');
define('NONCE_KEY',        'v(n9F!/n2o|v3m,j:[u5x2C.<@y~D77V2,CXYfwVOsf2{ J/ew}A5*kDvinbW3RB');
define('AUTH_SALT',        '5d`.~?z<x@;f61-%p6ON,.-ggDl.={[CQ)Qq,X%`3@KHnC{1~S=I^*p0{borm~ny');
define('SECURE_AUTH_SALT', 'P<Lj2PH&L#q:Q1tDkcM$C{)YF]+<;K[8896J.]bxB=N=M>1hMEWRzi$No*I?kCTA');
define('LOGGED_IN_SALT',   '@V9[*!6#uTJnCUoqIi>-jK]b^<rwiru6Kvv^W^)(`)e|h^+=Zhb_kH_I?7z3+Mwe');
define('NONCE_SALT',       'wqq~]wY#Gr;rq5yluljvv;&QV,$mq<DtH[!F-cBmpQ>^X&a5OB9^9vp{9&07RJR6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ayd_';

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
