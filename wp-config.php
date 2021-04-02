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
define( 'DB_NAME', 'fashion' );

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
define( 'AUTH_KEY',         '7bVm=7}aHCI{uGdvFXX;TmBTTU<u=-P|`yk`L?e1+4Ng~+]HMN-Tx^13Gsi2&ble' );
define( 'SECURE_AUTH_KEY',  '41bXrM(/~-8N!d9hgKU}V<.YBubzpw=Hib}MyB4$nmvUMHj/+p}[AY}PRCu6t/#^' );
define( 'LOGGED_IN_KEY',    'FmkAznoGq1|z-{o,1&+J`X5yI}OJRyapUz~,wpgc$oeS{-;v-8g_nyo?M59|hz3i' );
define( 'NONCE_KEY',        'n-VHx*4z_[orH6sw+IXf.;aK}TCa-<q+iHm,Ss7I[m3NAmht8fC9V&(7!:}>Gexx' );
define( 'AUTH_SALT',        '?gcYJM|Wa:W0X]Dc>^gbI/o;*nMX|FOU5vYJQ2mu%:h0j(6YMRrD[s:BnJ3LOH6W' );
define( 'SECURE_AUTH_SALT', 'Cn7Igh^W8:J<oTj:9JY1u__64uYa_z7mfddabYnco6QGa<YneB=Cq,j{OC1PHY_H' );
define( 'LOGGED_IN_SALT',   '4/u,G8 E._[JK tpeR>EKrr6!M/=;b[S>9Kz-.q.=KUNbp%G]B</ng(C(2|nUxeJ' );
define( 'NONCE_SALT',       '@[RJ%g5?5dM5VOp[<D.}B$Zd?2;t|]OQM_T)!Rsf`tsoX[p;gNK#+0>)O6(=X4Q;' );

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
