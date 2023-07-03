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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tech' );

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
define( 'AUTH_KEY',         '{4FhVJ9,MN;U&E+FVS!dq}op06!sI)J8<@u`2?+z8MCBE-7::eFVD<>QZ!C _Nrp' );
define( 'SECURE_AUTH_KEY',  'cpd*HFz&90gB&>s{b2cb_ck] l5=nE,s2=|mD.-_AnpTq6<J[Era255u{J6g{d=>' );
define( 'LOGGED_IN_KEY',    'u5hot=x=}cm6>!Ffz!*/5|ksojk8 %wouA@r}!o(o>[WO]),([i@lNW3mJ)0fn)g' );
define( 'NONCE_KEY',        '8uBzcE@GW0Y6}9,ndSm8)Kr1c_5]@{d4@ayn]a^;p&QK2@W=+0>yV1r8oQ4hZBb*' );
define( 'AUTH_SALT',        ']l-A^ww15S(D`:hJ;.(xj%XFSev,A:G_`A+_:f9dVYFV_8,1Sm 2%!y&e9V[QDo|' );
define( 'SECURE_AUTH_SALT', '[7|S=KNS E<Ek*k7b#vaWtCRqySp<iKR@X}7Vqmp=g|:.2t;kai!_A#:FV2d*VL[' );
define( 'LOGGED_IN_SALT',   '}2OsDp)QBU!hMzS(2#z7j0{IV2Q_-~=uC`;]ePaQ|(-2/SuF0&w[HVXYbG;4zY.V' );
define( 'NONCE_SALT',       '((0HRC0kzH=.ufu23GMuz[d*K.GN.D-RB(2<*7$ vuS.*@)a=PN,Ilu3R!)BK^f/' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
