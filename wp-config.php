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
define('DB_NAME', 'arkada');

/** MySQL database username */
define('DB_USER', 'arkada_admin');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'jm8uRf,wmqWFr/]A/x*=Y89F:zS#%{IAKl@c)ZXW4%=$8Qa[^jpcg<r|3Ib8TntS');
define('SECURE_AUTH_KEY',  'tGG4fV!,nEY+SeONCymvhw*I?$Qp{c1<+@l8(&^S]G<q+cP</OO0%F!ydfqaLY9[');
define('LOGGED_IN_KEY',    ':+c&rB56wHs* ]f+^713Zc1EAk=%vCWOVlsKNXGl][9QQ9=r}#oRF7Y<SCXP?S@*');
define('NONCE_KEY',        '[+n<B,(ZyA_fRKT@=dx=,hK@G+as?ysIj^X|Tjgd,Di;+<+; ,)9>&o%m7A8nS!z');
define('AUTH_SALT',        '<QGl|-GQMXlPALAbab]3e3oYD!bat;vR<(8Wa1[Z~Hn+2]S9<pK9VS0/9T+`gU+D');
define('SECURE_AUTH_SALT', '#nQY-{|~Q|yNl6CMrTU>}#r~w7~Hj`$U3M4lmF)v-mO?UB==&D-f)eV)8f~jiH?n');
define('LOGGED_IN_SALT',   'Qk<SBSz^zMR<tGUc[.:~I5W( d>!AuUJ!DE<.=+]S%Dsdkag-B=`Nv6NR+W T!oj');
define('NONCE_SALT',       '#prf>umsH8pHX_&YK`|Xn-RNheOr2nyA2CaTG/42!#z}j&n!EoKO[dRMhI:c)?,S');

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
