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
define( 'DB_NAME', 'prueba2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'af1dc30efee0cb61acd3f2d1a6f6c3a40c5e98559c779b3d' );

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
define( 'AUTH_KEY',         'HF.nj|UB:f;~ra!q>UbDp4^-7zI[BL#&GnCE8*o*p7S|aP_9TA#j6Xh5KWZq(`M;' );
define( 'SECURE_AUTH_KEY',  'utqPq.NFv,7<T/:W*PN1,tej{xt=wO:rJ>K5+e`,33tX9IB<1x.jNGH$M|thD#e3' );
define( 'LOGGED_IN_KEY',    'OUVE;p/%`>`l^csf=:TTO61cWDDqo^h;A3<Y9NL!7<-T-5-q}3{K6]dO&Hct!MOR' );
define( 'NONCE_KEY',        'PJ?0-&7}5s,Xj-#^Xa:+s@7|<qnyF~;vUH3J+v^v8.s2SW%>2vU*Fo>E*zR!wwxC' );
define( 'AUTH_SALT',        'W}j:Hu~O|rrMRc.gNq@GaHU-URA(/d<KxqoaauL2_rL}`-/oiU7Tlin=.3.t*zxl' );
define( 'SECURE_AUTH_SALT', 'Pr=6C*!i j~ hBt(zsh!=,hSXb`G4WW0|mKKYlGO:W%7:5y!.,Hac%&ed`6{lsJU' );
define( 'LOGGED_IN_SALT',   'Bh3H,dq-W@i5BYu1$ND_*]~d8tqy|7@f53}iHzudWcW;-PcHN?V8N6(; 8BHUkil' );
define( 'NONCE_SALT',       'UE+nTvrCn~.^9]L3q&OTT O+&$1k:@RkO+A9R0211QQ<<3)ZnT.0MjElQ2n&nBlq' );

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
