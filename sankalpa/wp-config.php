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
define( 'DB_NAME', 'sankalpa_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'UAZ7i_C7{6 2+3$%kY/[V>5[(FojMZK$% v|Bwf8e=K~l8<0DE#GUF/~BxT__2aM' );
define( 'SECURE_AUTH_KEY',  'QR=SnB@B),L@eEdm!NHhgV5ls2N^M.ERemfL_fC$/aKbEjm@{]^?:Q7TX;cM;:F&' );
define( 'LOGGED_IN_KEY',    'mr>a3#=-w.0;W,pwP^q])*kP!_<0 %+Seb:Jkrh|}F&u?0s~=W/5n_I;cG<8ydGR' );
define( 'NONCE_KEY',        ':y58;VQX?Iaj3a7bYmc]qLMP}gy *&G@lh(|!V%<Dr7aG6Fi+;>eUvca.|-*zBkH' );
define( 'AUTH_SALT',        '!qTs[4],,%AW% zs1H:$];jsQa/hVbM3:CU&M7N%2-bK2Ue+hb<xC|#EGP-[Bk_w' );
define( 'SECURE_AUTH_SALT', 'kjGXa]a.6k.z:>%?^YjG}m=<I h0LR/=IRb6/Cu=^uhLvI64VtTKt/ATuutP4[ <' );
define( 'LOGGED_IN_SALT',   'owwD[tEIW3V0QMmVXrCxdJj5qW5ib<:DXU/p|VUPFf=5}FSo]f/Yo?lz).?^Xnte' );
define( 'NONCE_SALT',       'Y;FUaDtmRMSMsf`UN@S6pRH1Ux!mIzUc;Q;g/8SU@Zg}IaE4oo}(N&6.E8]D5rB_' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
