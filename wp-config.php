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
define( 'DB_NAME', 'tirranaa');

/** MySQL database username */
define( 'DB_USER', 'tirranaa');

/** MySQL database password */
define( 'DB_PASSWORD', 'PP6Q*cjVpXn84XJ');

/** MySQL hostname */
define( 'DB_HOST', 'www.db4free.net');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', ']xPD6xqiaW7>^cYQJ,^zrjJB3}>rjbU3{,$YUMFB$vnfcE7{nfXQM<^yrQIB3y');
define( 'SECURE_AUTH_KEY', 'j70>^nfYQM>^yrQIB3rjcUA3{.^bUMI,$urjE73{RKG81sohZ51[!-VRKC8!zskG');
define( 'LOGGED_IN_KEY', '*XPIA!@vnJB80>kgYR}>!zrYQJB7zrjgB4},^cUNF},$vQMF7vngcU0>,$fYQME^');
define( 'NONCE_KEY', 'peSO]_+t7>^cYQIF^yrjfB3>rnfXQ{<^yUQIB3yrjbYA3{<jbTQI.$unME7{um');
define( 'AUTH_SALT', 'qbT<.+uPIE6yqmfXA6;<ieXPH<*yqLIA2{xqiaW2].*aTLH*+umeLD5;pmeWP;#*');
define( 'SECURE_AUTH_SALT', 'H*tliD5;]meWPL;#~-WOHD5xple91;#~hdWO]#~wpOG91:phaW91[|~ZSOG_-sphC');
define( 'LOGGED_IN_SALT', 'wld91[_~hZRN[!-soKC51sldZR4:[!dVRKC@-skGC4:|skcVR}|@zVNGC4wogc.+t');
define( 'NONCE_SALT', 'Bvg7}^fU}^yQF7vncB<fYME,$unIB7>haSK#~+tlHD5;pleWO5:#~aWOH9~xphD');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
