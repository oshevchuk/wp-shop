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
define('DB_NAME', 'wp-test');

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
define('AUTH_KEY',         'gKble>m%bkH_{X0-nr7fcGET7w.05U#b,jzVo)5qlgAE1xw<Nc*J_*n[0]}c9+as');
define('SECURE_AUTH_KEY',  'Jaz$fa+7w9(&LGDEMbc,Bj}lvEQFp EDZ+Gk-a?7:[bo!K!-m+xq)}V?o3/,w.iG');
define('LOGGED_IN_KEY',    '2YQgs*37]S,{3(|CEIRZitmCW<Kd;?;Gf$BhQGOe]-qAoOs`orS^@Vs<(jy)#/ox');
define('NONCE_KEY',        ';Zv/N(.CFQF6s${*dd2:Eh=[I@R9;z8wBOE3[[/y^~v6aeld<&>GH=Q2*Eu/X8bj');
define('AUTH_SALT',        'Stz;6?!Dt:~53t M(@xL8I0M 0xueJ,J56UR,i6;hUk*9^wchYK6k<D;hv}ALGWS');
define('SECURE_AUTH_SALT', 'ZN?SO^6BeJFJ8HvGw#vLC`CP,e{@Or%:9Fm{Ixl-ic}<ZW._pB 0gV1}`&_ZAQOS');
define('LOGGED_IN_SALT',   '7d5Z9zs20ybmhxmzun`*e1HmN(AT4`7xTeEVVei~:^MJl<m*)QTj:Zk_#-QhPal:');
define('NONCE_SALT',       '4+wYJE,SgRp#21J9c$DX=uf[FGWB2I$YvIKGDv01*YIgh*Ic/nb^Az,:Wb9vA_8w');

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
