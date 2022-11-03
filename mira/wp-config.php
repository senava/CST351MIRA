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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'QaWn8d,|v~e6-8q)ZS/B>q{,x)+<e/y <e7CsFzV7mh|?GK_D1px*CpTEg,te].4' );
define( 'SECURE_AUTH_KEY',  'UD_0bT2_0+0H0^362[SN:D_aM`>5uDO}=NGG_%)8dNG9ELsHYX#iCY`#>B}W/~KY' );
define( 'LOGGED_IN_KEY',    '!s>P;1u*[^[vsQ-UUiERj.uCg5[{`nh4ZubK5F(U>ZQ(<KnpdP~)|SZ6O0>Z~Pm:' );
define( 'NONCE_KEY',        'dLgU/]lfvMXFa|;lZriE;K6w->{mg:X3Vl(Rb:+L:gI2(*EA6m+I?TmM)[B](i%p' );
define( 'AUTH_SALT',        'PMf>/cCI0x/R~cV#6|``ZH-MBuk=e&FA0(~0xK-Tc^2:qmga;qp3pW!<a__eR::7' );
define( 'SECURE_AUTH_SALT', 'Xog0dI&n@NQApir=|!YamlVa4}+J&!pomX>#A87A[f?uC[G8~{*vZg5BcI$2gX[[' );
define( 'LOGGED_IN_SALT',   '0Y=t]f&>vmPZV]K3cYH`zRU+PKP!K[ [`LjuH$#*]zR6]Mtb+q>3hfH4b9>u76x!' );
define( 'NONCE_SALT',       'o4$}CogSLVX6#-wS?k!niQ0i/+42O&FFz;?g)kx:8x7DzP{tAQSZs%E9w,{hK9)S' );

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
