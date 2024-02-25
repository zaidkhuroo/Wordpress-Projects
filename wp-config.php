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
define( 'DB_NAME', 'word2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         ']x_CU8JJj#3iE6F#n+[COso2Y+s{*z)QR$+]<w{9,N6,SCf_{fMPw`kmDHhJAh_K' );
define( 'SECURE_AUTH_KEY',  'F6kwcm:SJHzD37N5LK<yw.,UB-<wM[Y(XKgldW:qng=;p{jEszp}<Qm+S$yre*UP' );
define( 'LOGGED_IN_KEY',    '+dE$x>q=ginc[j<MbtLfh_8;O<,wmLp77cpcZlINz6Utaf-CXhz%3X@gSQAV).]N' );
define( 'NONCE_KEY',        '_&#1a3Y_GC,t.!-/LvH$16u($ 7d1er`2iD)4(PM|H}LN}__VW.G%rUb/J.^H{sM' );
define( 'AUTH_SALT',        '*6z`/$ll]N0q@[QyZcff:DpI&*IpIAP]-x&V0<(&g7iNzVX$I 47~9iI+#;zzd^2' );
define( 'SECURE_AUTH_SALT', 'g}anMFx :%ihZX.XT48#@%*uBAixYdVoAb2Qg+&2|Iq+D[p0ey:J~Uc}i+kE$0C$' );
define( 'LOGGED_IN_SALT',   'T{;x/Lv~|h-=9~!/.<(=byjmSROn-=#^(KSe<RV:z%B<#n9+x#*`YW|%qW^;a#c%' );
define( 'NONCE_SALT',       'pS]u:AS[9|`5OIs^T2XhC;b7Hf&oJ1t3p`J]1DF7$~t9TWA*Wld.q2s=sV[XNP{p' );

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
