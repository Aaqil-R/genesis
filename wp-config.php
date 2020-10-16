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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'genesis' );

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
define( 'AUTH_KEY',         'z&gdyUKydh*P:u>~^r3hG]&@XbS-f.r_p~r39Q3q gI-xKE;gIj2IO=B^Cekr{1M' );
define( 'SECURE_AUTH_KEY',  'X*=G:9q<=g>~?0%[~[7FAp^xgT_zw,Dt[2^B)Y$;Upoz2|aRlmS9.]79`b=G`.pZ' );
define( 'LOGGED_IN_KEY',    'Hd[es!kgZ vTX(1r;|SqomPec_4sDHRa$Ic~S?Y:O)Nz=VH,*gGrkpg?G$ Mk$*i' );
define( 'NONCE_KEY',        '}0R}%N-s[b3>hh>{*xIZX)9{[!#g9+he8<_I(Ayf2J9TdI3?:|f}:_M_o!8=4>F,' );
define( 'AUTH_SALT',        'f^@d-bCPT(!2IX>tgxFh,XGaR /<S4%}Npvv!pvA.n,gnM~gPN};`}p/EnI Ki3x' );
define( 'SECURE_AUTH_SALT', '}^CC=++a ^}Q0`[lU6g$xH8,94G9=1(EV[5MEXA/Y64//D2tFWe OfXAk=6d^+pJ' );
define( 'LOGGED_IN_SALT',   'zvV6qPEM=@&Yt1U{U*<M(Ho onssBjq8b/+!,+Pv[*G~G_GNDMtnFcN?2?JOD ch' );
define( 'NONCE_SALT',       'FD|++NqJ&y:10C`LPZaxro/hEsd1OgMyaZ$S|{5K;j]FYCh~xL[,^9 u1K~y2>Lc' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
