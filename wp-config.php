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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '9p[JJ]NCxPLQ[l8-C xhV,@u |&% &sr FvVEB@DfWeeM/b*3~bvXi_tSEln%NdZ' );
define( 'SECURE_AUTH_KEY',  'M8r) :w!f-OowWle/@JgK/Mx~=NJ.PYcC)]DJR[9A-zu6;oCFTPo7mBE_n+IhnJ-' );
define( 'LOGGED_IN_KEY',    '!%39bUNIA|;}PBjrUIuLIel{9il]+>C67~ZfVgD8 da!e)(lTo5t<z,f ;8zTt.D' );
define( 'NONCE_KEY',        'fR+y|P}fp)hI;^%%r;g>hmIjJti3znY$6CsPwc*=Ue;Rj_QP@N.+?Z_`H2cc=XYC' );
define( 'AUTH_SALT',        'bU{fiWO^LT6T$u ur{PDeWO|OX2}$&%{CT*=>Abp]$cv;8bQb#K}>]kkC)  2Ok8' );
define( 'SECURE_AUTH_SALT', 'K+ ~)kjuBC-O+a}1(Nqo2r0Fb#yru!2%tWLJ$*Q&Nj* A_eFwd$TS59=Ak*;}@J&' );
define( 'LOGGED_IN_SALT',   '-&I:JqtkO(K_@GYmld`CB6BM01NYX^~(U(%f_0nOr`{p$2`@5:QkcebHD@BYNwwX' );
define( 'NONCE_SALT',       'H>*2646W_},/eFujvmimBgTqX[]M}VJ{)WS{,W^D*}=dL_Xm>qht|nR[k}[ZzE]-' );

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
