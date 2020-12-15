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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'WCM=3WNw?Nn?}3uGk3px{@< teE6%F^M~B3!vJC(3_#+oxb:v_o/|T;7Bxm{AF(k' );
define( 'SECURE_AUTH_KEY',  'H 0M=D7Kn1 OJ9vW^-8e)TI4h7Xi*B3i#p6 oGJP}daE4zbm{GVDz,_R!98k>Emg' );
define( 'LOGGED_IN_KEY',    'h4HoS=[@4rxT$(-~6gwb+rETB6L7z_SL0&/ly`JkX;PY<,jub%#&5Rf^.J9~wvOZ' );
define( 'NONCE_KEY',        'dGvj(zJw`,*Tm1)%C:8am[8^OAU^ Xn,9${/J3gM%[!Mw]Y.%*|4Mr3p-0G `s0n' );
define( 'AUTH_SALT',        '(Mh=$0<$6}LmxFWSE_cP=B*=2t55c b`46#r7o/}4G0{wL+2~rB(9,<Ir*I2U~>c' );
define( 'SECURE_AUTH_SALT', 'aeM|SN4[;!jpoPDl#tkJ1ss_PLRD,PGOr^2|kR~|q|f90zE|QrQlx;jKAQp{f8yX' );
define( 'LOGGED_IN_SALT',   'Q~|l!bF/r>{nc{al_PAt6K%nbud)?Ez@X|tl3cl{ulE!nD4fgHrXFj&X_nXj^D@o' );
define( 'NONCE_SALT',       'RX~r%_7Q/7([OM0uY}k}.!YSBt{T7gQj/Xu($Gn?Xx%x9AOR&y{BCMc9+~B}a#Cq' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
