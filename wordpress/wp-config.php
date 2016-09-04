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
define('DB_NAME', 'tuut');

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
define('AUTH_KEY',         'Cr!bC4&|:5W.ex`:ld`w~yE.bS{;&v#=E;J;~;VCs7cV,L4Md#j~b<:Z?5D]=1@6');
define('SECURE_AUTH_KEY',  'aH+2>)N0Vx(18/.Q_dv:XUiN82_?rRwe1G+?}J[4PI0R554>6dA~`$SC}{=40aZC');
define('LOGGED_IN_KEY',    '?,$te&{T(uT|_y#qlMd?w~z{^DVt5F&o&/,Xbdf83)5dq2svI`$+z`>z!8yO?cq6');
define('NONCE_KEY',        'xpTJ!@OGdSnifdpDAhWdL{2|V0_RX4C?{xO5}e:#Q^jVo{-QyvsOp}ZkW,&Y*cg0');
define('AUTH_SALT',        'z4u:XAou+<,{Y{HQi (RSV9!aK^=<mmP!bgP`CbmmD09,%XQAh|.fr>%ci;Eg#h5');
define('SECURE_AUTH_SALT', 'rxw9j)u%oiarYvtV4|=Tgwu;a7>I!IB{|2ex:._(]4a1@V E,]eL$DXrbQBhN9z%');
define('LOGGED_IN_SALT',   '^^zWPv]`eJ789O$-35R[BCT[6q5dohXM|T}udv75*C75tBI^r4aei3rf:!CJodVo');
define('NONCE_SALT',       '?)nKtZ6&0OuTT3Kz}qtv5].PQ1byK9.>OW75wc#rIPZO!hvQe}{Vs,)=+)[3pLs/');

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
define ('WPCF7_LOAD_CSS', false);
define( 'WPCF7_AUTOP', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
