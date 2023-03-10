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
define( 'DB_NAME', 'plan_per_3' );

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
define( 'AUTH_KEY',         '?Vhi#[U*3G5}i.T~9g3p(`pnUmdp4|_e*#M0:)4T{)48;|m0y_;{vCG65uO$k<;z' );
define( 'SECURE_AUTH_KEY',  ',U{.V?E:|P2PBXK@j`o$6~p<%k({Yi-Y<HjZ7u5Vl(_F!f&2p;tF!RJ$K~zm.(HE' );
define( 'LOGGED_IN_KEY',    'BVpVW(_A0l00cO,Q0$[*-4w?P5-%pc)-%3ZgU-IX3IlO;$to7`|ySHBK|rj}>GMy' );
define( 'NONCE_KEY',        '.Bg)!-L*7>2(Q!uENrMm.nM:VEiINBIq5I`7Hnt_un[vk3rq6DPFU8!817h/v-mb' );
define( 'AUTH_SALT',        'M;t*)p}Tt4WQT`Q)NMc.a.(2tnHcg;uld|Y@$cRW`:yjGu;jg+QR7@}Wn{`E%vr/' );
define( 'SECURE_AUTH_SALT', 'dH#Abz9*;#9$ Hn>k{lx9J592 Fqr rT;44!i$!=dRC0d^+q*I[ 72v(5?Us.^$t' );
define( 'LOGGED_IN_SALT',   'h@?Y<U:_y6)#li!N~LVL0RGQNBqKm|@,4?|P;hROKhuY/oGO1]-3/x@AS!eF,Z0R' );
define( 'NONCE_SALT',       'nWH;?r4 VYk}_2K:0Sw+3]NRUG]Ek+XF<qKI!eFKn j9,R=6.i[4BQ^vIle2ZM-%' );

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
