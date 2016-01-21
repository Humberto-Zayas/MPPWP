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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&}-MQha=pRb<&)9HtTR<)+A+IEyuy-D]S+-oH:gt7W]4~f]omrI_x,5x-(en<-|H');
define('SECURE_AUTH_KEY',  '|RHC<KA8/`2|v#U3d?jK|(X N|8=Rf#Z<j}5:bP|Lys|6f(i%o+mt49ZmdJ|/vpD');
define('LOGGED_IN_KEY',    ':cp#)yp|-UD:bqr9)N]wmvS-Km1+[q*BOPiA9~Vo/8ipdwZ9KDkqlF FO?_Y/>7}');
define('NONCE_KEY',        'I~ksnlZwtH^nEyOO?W4DURH(oLj~8}!t:(Q4pqJ8H$K$I?KI -=EGt-K!/2X=B+g');
define('AUTH_SALT',        '&p,c%x,M(GG{l u3=H3XFc6 #Dxmi6Xmts2>;MeXf@pC .-0W5]u,++7U*dn%r50');
define('SECURE_AUTH_SALT', '%5JqK*@ fHWX6]VIJI4!3QyFrtF?5d-*N;m?OS@Xg|)g2H~|OcFd[fkZ8&8!m=+z');
define('LOGGED_IN_SALT',   'hQ Npb.P/H=+zy$kqxzBVm)0G^HOPcBG2{J6Jhh[j^}j:VNA9? t*7 )2o-@J/>M');
define('NONCE_SALT',       '.7)[B%U{dYIm@gGALsB>Xh6:dNiDUY$(A;6c`q9]B}->q=DJ2+L7)M*]}Fj|hD8q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
