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
define('DB_NAME', 'u124183212_blog');

/** MySQL database username */
define('DB_USER', 'u124183212_blog');

/** MySQL database password */
define('DB_PASSWORD', '2tmP8D');

/** MySQL hostname */
define('DB_HOST', 'sql130.main-hosting.eu');

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
define('AUTH_KEY',         'r%:!ov1N=jVC@K@gaWX1nfw={JB0W*XBn8yU[:KW 3iIJjNc-47ZzHx dA%/(Vl*');
define('SECURE_AUTH_KEY',  'T!h-kxmS7eB98NcCzKryFT5/]hM/<hT5@NmDSb~ak_ydnsK1,(Kj6Vq6Ye?c3/M)');
define('LOGGED_IN_KEY',    'Y[D$d_G_Vf4)%2bd~u:B0eDq=,5o8,,&(.R:{S|xdo*jLo#=GdoUyjAL2<LmID06');
define('NONCE_KEY',        '?Q(>-dZ@?HP]r^$na(k4iIfkVvS3!rNE>Au@M,j.,@*};na,|Ar&JxH[q76b}YFp');
define('AUTH_SALT',        'Y~4x{zsBP/:l}K`:4vHg#&24F]dFLInDU[ro,fYg!56SPY/h-8;4>z`E}f$qm-:>');
define('SECURE_AUTH_SALT', '+m@3nkvuxX-.T/`g6WFWw<sW<HH7 !7nWKIx~f[1veK$,gJPV4G,kNU$]#Z~@ l+');
define('LOGGED_IN_SALT',   '&9ADx9Y%;?w>Y#[l4rc|i;4.Q9WHRoY).wtm1vDm*M+)- x|%Z 8, C.+VQK_ugU');
define('NONCE_SALT',       '[Z~$`^qVEHGR~|eUaml_qgL}Fa)sk3vc=rZk2+#V|NiaRkTmc=Q,&vrV+1dmwW{&');

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
