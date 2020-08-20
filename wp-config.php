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
define( 'DB_NAME', 'cjdtfaqDBi3hzk');

/** MySQL database username */
define( 'DB_USER', 'cjdtfaqDBi3hzk');

/** MySQL database password */
define( 'DB_PASSWORD', 'otRX7rCrzi');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

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
define( 'AUTH_KEY', ':@JR8GCo-dZg184@[cYgNVR@[sozGCJ084gsVRZ_[|s-GOK:5lhpVdZ#1-w~VdZCN');
define( 'SECURE_AUTH_KEY', '_aieHS*+_pxt2E<.{bifLTP+<qmuEMI62mxaXe;]2*<.PbEAHx*+eqUQYEMIu$jr');
define( 'LOGGED_IN_KEY', '6{2fmPMX.*<u$yLXA6Euqxemi;A.*<XfbIPLMXA6EuqyfmjA.^<XUbIQM*{uqyI');
define( 'NONCE_KEY', 'A;]XiLHP*<.mxLHP629qxtWie]6*+.TaXALH{7^$.UbXAMyu$jfn7EB,jfqTPX<');
define( 'AUTH_SALT', 'em2;6.]<UfJFM$,^jvB7F}>0gnjNY{>$,^QYU7Ivryfnj3B7^}RNUBJFv@zco408');
define( 'SECURE_AUTH_SALT', '$q63E<.{bjfIT73B>0}cjgJU^@,rzvBN0}4rnvbjf}7^$,UQYFMJv^jfn0}4!>VcY');
define( 'LOGGED_IN_SALT', '$^QYU7Iuryfnj>4@z^QNUBJFrY,}>r$JQN0BnjrUg|![Vc:[0z}40co[1holOZ|_[');
define( 'NONCE_SALT', 'ksVRZ[0:w!NJR8GCs-wZk84C>|}ckgJV!@|szvFNJ}8dZhOKR_[|o-GCK1:5lspSd');

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
