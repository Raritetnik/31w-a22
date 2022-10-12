<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         '?g;=N<XB}avK9aD_A*x[i&oCjT-!SDCvwU~1}%c.mdL?~b5,K|f`pljBW84IOHWw' );
define( 'SECURE_AUTH_KEY',  '}^2?wVFM5bf}:L}cEL9gjfPo,=rs{4_*8xrs*v6nThTopB^Y>W}z, x1P(Ss&-Zw' );
define( 'LOGGED_IN_KEY',    'vgQxOB9}LGk|F>SA4,7.{gT<A0 g$|(9$!*xM6@;#s#2(}f0]X@#I?4~amB=}+{v' );
define( 'NONCE_KEY',        'n65;>)[q0X_yP:s6/[h2]?m2fs$+7TnJA~<KT!$S`Z==_lmvO}<e^vGI#)zb`9h[' );
define( 'AUTH_SALT',        'xaQX5BLv*2nhU1%y~ }A`8-VHAP]@}N2= i`S:l/#NEmv-9DymGx}=O!nT(Tq!xK' );
define( 'SECURE_AUTH_SALT', 'T+xp}QF3l~w]c>}Q)MN~ESeZ6AA>:,-v4Y[OFtK4Xh7sK;Mr{EG7CMV$^!Bt#48p' );
define( 'LOGGED_IN_SALT',   'wSXaq[ XM)Q9}4=P/fuc:bBXReaUb/|XX>sJ4C.we$,KJ>Joet/880;Y4XTUab8-' );
define( 'NONCE_SALT',       '8%MkF&M33,EY&*J_(ZcNr %%b>CclqD$]S4#fY}WdrN0Q|T+A(Y$9`}?`gWPer:a' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
