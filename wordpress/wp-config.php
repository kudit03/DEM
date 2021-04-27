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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'erje7P".' );

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
define( 'AUTH_KEY',         '-o7H9%5[:d6xcU,5;S`5`/bso+Mcx[-$qQ]7N!8G;4a)W2C=kmJ+eb GSkFiewID' );
define( 'SECURE_AUTH_KEY',  'SvJAA6Qw., z+f?`!)aeYMNs[0@t%(hB{DmU)dCxGigyeFyK$flIz)dDQ)!OM~=L' );
define( 'LOGGED_IN_KEY',    's`qA6T+9/-}ch9lJ(],~A8m4hDWg#@3o;D^:S{PvV%Vwv@wzePH;i*ak_j69wxrE' );
define( 'NONCE_KEY',        'mKJy6wkeeRWI_QimZSb$tW6PM/$u-ke8.9|DH%q7vB{G+I1Y4PQ?cT$W&]f[iHPJ' );
define( 'AUTH_SALT',        'Q{PiG]oDV]yNUmF}H #;en%wW<xjd<%1$M^@ R2,n/#2uKvgsnNd^dp7b@7d>n:R' );
define( 'SECURE_AUTH_SALT', 'Dn(.RR%!lQHprV{5 y7QaNAln[p<D.I_@>x3c7`m(3#W=s}SSY1}QF[3OGJ]3QmX' );
define( 'LOGGED_IN_SALT',   'Wm=OUq^>5rS2D)iUhby.l{FzK#7SOqdOi e->zn?51%:]0sT<jI4$Lx9T5K-#}H-' );
define( 'NONCE_SALT',       '%K}#v32$ic w_MPaERtDt1ldh_,pJ2AS?bbVa%?,V}v3Y$cR<(m;trfh4+v5y:,f' );

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
