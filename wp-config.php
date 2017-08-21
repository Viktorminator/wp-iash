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
define('DB_NAME', 'iash');

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
define('AUTH_KEY',         'Ap<* bS5u8[vy(1)Lp4Om38O3<@N3idYlmE)YnsB.== x$fw)/o;`p5UhXh#]vOK');
define('SECURE_AUTH_KEY',  '6k/^ f3a4iu/Ny_/78M6Kr>P)g3C@$)>Aa}(ug4m-X8nINT1LOXm?s0cTZiX1Xfb');
define('LOGGED_IN_KEY',    'bl~=Va>P1tW%.(Y`Z_1d)VnY.?nyVQ-zBNzW)c:?@L;!L_D &Dxv(bU2jU1*e|1(');
define('NONCE_KEY',        '^0Y>(X&|*=-3|E+A1i]([UVK^xT{0tPy:)rJbn;x:+i4$?3-]9h@q+gUfy5mz[v!');
define('AUTH_SALT',        '4#xf,$iZUgMrHYc^pUlVB;TNmJJ1o]!0qJ| >ZNWQq,WQjoxbXAUK^)YT2|O;)dw');
define('SECURE_AUTH_SALT', 'zIe3~3,vLm.71IYzbhh%;+[bTb@3Q9t(D !fpF:s-ukfqQ=~h|(PD2jfz&:.vP5Z');
define('LOGGED_IN_SALT',   '2/V==sg6)k^1<J*j>@|jJ6M-7>q|aCR_|T/V0i|.SJi`aTlBt}4=AuAtQ7,ot@+?');
define('NONCE_SALT',       'P4+%7!WKpWuU!f)Bhk%WaW!2Zbt ZRLCfY+CnCRAY3)fx[i, fV^%$5UtCbPq f|');

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
