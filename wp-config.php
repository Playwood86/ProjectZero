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
define( 'DB_NAME', 'projectz_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'WeR]HV~D6`aL,*yD(?on|]W=L.z95`J]SZW;aIQHVQ7lL T[X|-[Jag$;Az7HJ23' );
define( 'SECURE_AUTH_KEY',  'q&;^.~vd~Y:4(??g?BQ_BuYR<2cl!uvu2|?9?Yd]y/;G6?5)v:{;/dr<*q79w>*W' );
define( 'LOGGED_IN_KEY',    '!dt/#{G)ym`F0*9zgQdv+ldi14rfp6oE x#>L9YgYKE(UWQJj {XcC=/bM`c:%@-' );
define( 'NONCE_KEY',        'U9zqMt#xXiVXl%9ZD.3N~^NCF^.=mzVshW39t`J7~EIgiy;sdpf}/5luUrP1jz?j' );
define( 'AUTH_SALT',        '2kO5T?4H0&v}rLuP2Bwtq<i]WEgwh>V5u6fD[6/vway$xZYI<,250pk4$52 iJx2' );
define( 'SECURE_AUTH_SALT', 'VMr:w(xSg`KI%]N[-[|tIJC*=wF/N.fKcO0S=fFoGwp9Dz~.{-XQLK@!#!ya~-Bk' );
define( 'LOGGED_IN_SALT',   '`0aNe{d$1md$9Qe*WHn*}zZGMH>Y=.+Pz:]Th)Rlxp+z|%q 2Z:r}T.(/?AuL0Zm' );
define( 'NONCE_SALT',       'm4y#Q`)7hi*{lFT~92V$j{nj<e;6J?rUai,cP/v*[#;bGl8&6(*1<7C3MF;oBG;w' );

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
