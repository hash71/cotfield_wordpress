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
define('DB_NAME', 'cotfield_wp');

/** MySQL database username */
define('DB_USER', 'cotfield_wp');

/** MySQL database password */
define('DB_PASSWORD', 'Cotfield_admin_29');

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
define('AUTH_KEY',         'd)2|bIjGDw@yzS6@Z=U;dgqcP%yQu7yla)5Q|_M}-b2xrUQSo|G5Hu=}1OqfR)D_');
define('SECURE_AUTH_KEY',  'M>p],#>@uF[|@mR.#eUA9=AIIF6;_z-]jQi+X(%lxLu/zTlGNH(}X8TA<{[ r)[j');
define('LOGGED_IN_KEY',    '79z? <Do{Z~L=TS}1lxkk*/e]%8viYkjo4kMV>VQ1~%[O%m,9(J}P<P5=/1nTz,n');
define('NONCE_KEY',        'D3G0U j^TKQtic[6G(gXRy{B8s?6$iR5f*wLQb{u9!WCaE@mZ*zGdE3v;R5ZV.kG');
define('AUTH_SALT',        'p:4@e&(-J>`)Ci@>3.X4)&ry7%?nR(+#C@A6ohls;6 ;)^OW8uJ__$MA3L_N2Lg#');
define('SECURE_AUTH_SALT', ';9_GaS#nbbdnH`_2F] F83f.Wp<$n/.>ytxzf_8ocJ*dwxl~io-<-*mn]iB^+ T_');
define('LOGGED_IN_SALT',   '@nN:/Y?uT9>CEl0OYy-~2o#7^r:?gEdq081I+-Jxp+B<z!JiY}4H!.*i:!WyPsa^');
define('NONCE_SALT',       'F(FW@;#TYR0cU~sgbR.74!EHpo*sc?C/*24QYuH2vb+!%x^I7&QkAYClN@!l)Ls$');

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
