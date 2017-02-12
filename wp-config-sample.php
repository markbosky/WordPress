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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'u;I$X!h%bL5x^|1-gCNs!/-|~)zv;4-y$|Xr?+9C8={6@2J0+@BDl_[>a?%V+WZg');
define('SECURE_AUTH_KEY',  'JGXu-+0K-#8%M`cwGnV1f5)+D1-He foGtA)Qey*:8,RaMmmn|_)6Ay$UkZR>|l;');
define('LOGGED_IN_KEY',    'kGL0}b^odbB/|-lBk7+&[]HjX_OvM@i(d$t|ez`qM/-ZVpSR9f|E=UR]~{XRuA>4');
define('NONCE_KEY',        '!2m^~shiW#u/-|$qC<NV2J[5je*f(@ZJB`6i6+VoBt&_#<8yTNov=xnz2CfJx{1F');
define('AUTH_SALT',        '`|! cV#f9F@@NI[IGetdV&TJt@wqN[!Fo0N*+u)<]Jytq+VU6mos|or:Bc #NO/+');
define('SECURE_AUTH_SALT', '<X*#>7_cUz.bX)-DS].CJ:SQciD}MQ=?va3!M*B}[*NLDf1x<H^~[e%aQ~6|;@e$');
define('LOGGED_IN_SALT',   '+xQ+Th*|Nw_a;@@@P^-9C[a~D3s8n6A-}-!rHW7VlBns`Nm+1*c;gvL wzgEc]W*');
define('NONCE_SALT',       'D)1]u`KuxN2aqO=NL<T8(z{WD3q<{qdSC|>N8 VHD&:@(J!Ew~*qj6ygi4h`UXeG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '5QNx_';

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
