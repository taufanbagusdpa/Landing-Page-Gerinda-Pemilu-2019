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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'GU^hSmD-3HvNOrD&A&jWd f*6Xw`5R;TqfVHCV!u^c//d,u4:qQ<)R,l@`4u+J5$');
define('SECURE_AUTH_KEY',  'mOgz?XzNWk*,{$ahsB$3S?5uTM2Sl6drcTNecTG%v$RTyxCJ9)qLi2w[3[oKT%?R');
define('LOGGED_IN_KEY',    '@3p(2giOWqg]5z#3>>{28jpGT6}8^ME?n#{n4ay[r*eH@7Bp[9{1n#x}POqr-vPB');
define('NONCE_KEY',        'l][TY@glJ*^lv#u1HKxYF0``Td??CP=W$}]sa,xG:RLGEkThc8yG/b@}%@+_VEJ7');
define('AUTH_SALT',        '3>h*quF7A*`<P#N1&cTd9~idBNMC`WC}v>}&mETJ>/@?W2Bzq*N$f@zGRmhf]$ny');
define('SECURE_AUTH_SALT', ';xaze{}~-,9rD[E=S!pYtjg5sc8l~G$vfPR7IBp?G-<Lgm eo0Ayj~Cfa,8Yi$>&');
define('LOGGED_IN_SALT',   ')cJSw_q<gD,]9OXyNyAvuk*{KrW7v`$rgMQXJg}i K;Y:K+hW&`Cia+wq`R2axcq');
define('NONCE_SALT',       'Gn;#3ft4ggvwZa_8owjeHAF #NR<ZZo3I[Tz-3P]ra7-=9@*ba8>%%7SC(byY^dB');

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
