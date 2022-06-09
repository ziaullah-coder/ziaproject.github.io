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
define( 'DB_NAME', 'ziaullah' );

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
define( 'AUTH_KEY',         'VhB!03*w[Axz mb/IWA0Cq5aV 1%^.j6vIBo/Mx5%w7x84khD(~ob7X_p.`Se1[|' );
define( 'SECURE_AUTH_KEY',  'HlLiem}i~tqp#mT&?hkS5V0972,K:?!CtqVV`=D?{[_(kUVSRIUSFtIE0kSdsN8j' );
define( 'LOGGED_IN_KEY',    'B*8u%CNP%ARRT)hd]^$}ybN~Cf-9mcm)2QHG9/{<%`M$`e~?:X;c?ZCGq#j4CQ#=' );
define( 'NONCE_KEY',        'B)Fxfw9@^HcYw$z8jHn43&,87FoxC!NN*y%U<N=F&g:z_e4iaZ=wEgj40.M}08? ' );
define( 'AUTH_SALT',        '%(H%Xhu!(9[l4y|(CPGCuvHLlQDp_=0QMZm%mzhv~VUQq`P@dTmBE,d9U?9?~Sf9' );
define( 'SECURE_AUTH_SALT', 'lHZpW!SH>>1L!Qg65[ 5URLqzq/q(yslnthG>W)Z,xe^O#hmPGf9{FeW:s)[8fez' );
define( 'LOGGED_IN_SALT',   '=Q.M-wFd{TQ4UXR<nZ}+Ctws~oqJQxz/3YyFX)kIO^#H36lsU$M}#`9eOzRWqtLK' );
define( 'NONCE_SALT',       '@`jM2mn16W~%B/J+aAX,JHMr_#fU.4tV[!<ROc^Vepxc(S7),9ksEbF2O!sp_<RK' );

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
