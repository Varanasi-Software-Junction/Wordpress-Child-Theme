<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z1C!%]Ez%M4MOvmJq[Zf>r(:|3v<+W6%x^n:cT)d9kJcUkipA[+o(6=9(N9k-(.*' );
define( 'SECURE_AUTH_KEY',  'Mb,BsoV~|P.}davWk[u?F!d+x^mT]^ nq+cjhCNB+o%~RdONj[4qU<Qo7>v+~{Pc' );
define( 'LOGGED_IN_KEY',    ']&EdUOf09.V~X#;<ORPb-dIj9hheX;WUJ!;pHXXXfR.P&xFvFDhns{)S**ip74T>' );
define( 'NONCE_KEY',        '}lE_p4^<o<OJOh, Y}/ZHckk-Frc/9Ih aG)%[Qc>qptAP_}2Sud%ddH3oBl+4{1' );
define( 'AUTH_SALT',        'vX(S(=CDp8{u C|~xDwDH)aRXyG4Z_2`}${paTE,qW@Pn5VVaq)LBT8%^zt8(R&D' );
define( 'SECURE_AUTH_SALT', 'BRQZ9)#hySMtOA(hCX)g|lQW)SJG=_L@PlxA/_(vq)OURL7rWeI~X$l>:?6gioNm' );
define( 'LOGGED_IN_SALT',   '/aGA3AD0y20]E>??060Oa* AA?<aQw7X8x|<HRdOedX4TEc_W((,.wXfc)i;D)#`' );
define( 'NONCE_SALT',       'j9#s@)$t[#]Hiq`w_RHCqs[H9b@[Nof-3Op51/P-n0 w4~APy%YfM9y+?CM4!-+s' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
