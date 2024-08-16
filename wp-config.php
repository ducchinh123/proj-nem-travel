<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'asfyvn666bef_nemtravel' );

/** Database username */
define( 'DB_USER', 'asfyvn666bef_wp_tjwbg' );

/** Database password */
define( 'DB_PASSWORD', 'asfy2024@**@' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'gR4K;eef?]0dMqdG~w|GZ:2xx>XAlU&McwPUQ^wNu?P}6Eb[AuhHRS?o#yB@>gz*' );
define( 'SECURE_AUTH_KEY',  '.:.Ty;XY IH{pxYS6?EYf33$(SoW#d21B QT%S-9hQ7<xD{MnnVC9GDav7*^,z;y' );
define( 'LOGGED_IN_KEY',    'NsbxY]+=s^]c:x)|W.i$d$eSuqL1.BB%pRMPl#CL2*<CoX:&2Iy)tF(1X<#}*Knd' );
define( 'NONCE_KEY',        'iBa95C]nZdBDxS+gsB5R%Z56f#;d.gZVK{l<[w=6uHc?7Tq-#L~{?}+G=:i{+UMe' );
define( 'AUTH_SALT',        'B.Ww$lR5kC_7pSV =6/J~a=NhFCjKGBxb4_*)vZ2%gKR;7~QOOhu3aFk$<[O.(b,' );
define( 'SECURE_AUTH_SALT', '/{01<[w3CGEYYlwFi*(~|iuX*5_JU04ip~:#4cQ39QHypq,/bg4Y+~1z6tBFZ,93' );
define( 'LOGGED_IN_SALT',   'Kp)Bf;mlijM]oH,o_`q#B!~zh7(b>NQy|P&(:(p};rLkC[a0`#vPJ;z9iR3p1BXo' );
define( 'NONCE_SALT',       '.dJ,2p.Vql92vLzt0gCNd,=g/qcn@t] ]FNYHA*NV4|=1=JQ7(>0v%/0nBuGy-^r' );

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
