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
define( 'DB_NAME', 'wp-restore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Database.1' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'CeB@>hHu0^qHy~W=3_AmJRHt@v>UB`7QEFxdMOm%={%H`vvYlH%+p5|V+7?FIMu5' );
define( 'SECURE_AUTH_KEY',  'VZ}xnSXW!&l,-Xf-c(,xh46*6YBKp8UK]&)b4C;Ib:8atp*&J3#J(?rfEQEW#6`L' );
define( 'LOGGED_IN_KEY',    'c?+:8.u~BI]^&cy<kkq%td2JpUmQ8-exTe =z{7<@,yT+C*!$*YNeaeQSp9Xfa,u' );
define( 'NONCE_KEY',        'F_l2,*X sfk%D:_j4En287hD@${D?l;<rpkUuB.|]B~22{3RE(~Ta8<J|L34#ynB' );
define( 'AUTH_SALT',        'Dpp|/hVizdobIM3D;>]Fg0:<X}vCvzp*0(to~dkM]b,JU_{ Kg;yFRK&]cz 7gjH' );
define( 'SECURE_AUTH_SALT', 'p8bVrw3U}],g^~.rvL9P}.dulNc0zYwfC{L*Z{Y6%.Fi6,,1=e~GOba}i02 iBmp' );
define( 'LOGGED_IN_SALT',   'n>U!G!VJeS4aUB|evNQ :N@k(&~V)fboC08]^; Us+Rs0[C.CE[wxczbEz#UtzXd' );
define( 'NONCE_SALT',       'm1PnSP,r=j&/9ai9@(Z`1b-l3/mT-dK-I1D-a0> UdiBJ:z)dy-gSMOf5Bumx*$/' );

/**#@-*/
define('WP_HOME','https://local.dev.kano.app:30000/');
define('WP_SITEURL','https://local.dev.kano.app:30000/');


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
