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
define('DB_NAME', 'jf-starter');

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
define('AUTH_KEY',         'kDV;&O>d$p]VVCHg 3G&4Ne/~|DhIF!LS1<:?[OetZ;c=lb}/,w[PvJ,RVLGXQL8');
define('SECURE_AUTH_KEY',  'pwJ&Bi^,g}4 VGT&%L`6&L?zy*L]@bH8u*gZ-RnQcrReOt9}bUOCS:p963h/0P3}');
define('LOGGED_IN_KEY',    '!4ep<v^nevy)!ANj$ThW~zLw`[}Tu8s&}e`g9F{o|GVArkJLLLX7GJawwTY(`zf|');
define('NONCE_KEY',        'Y{yKpqug>lT4$+i3*u)is}:UbfJ4W.+7?EQ Q/X?7/A}uPXp0Bzq5s`&s:m#tdLc');
define('AUTH_SALT',        'hI%RpQ}}cOu~<J@}lE1D~F USS1J<z]_N[i^]p*Z8Q|z|_P-L8MiINoB7[pAF]2e');
define('SECURE_AUTH_SALT', 'T)WFSU;`8ylD<7b>:[!XD^kCyz&?~(8[,yHTHD96i9p/mZM.(HI^KhC~moqA3+nC');
define('LOGGED_IN_SALT',   'XT&#w96WmAwx-C=F$|G)/&/n; `*Y}`+0g)g)l.pKa!p]TB>a>8cysx-#p$mJiyG');
define('NONCE_SALT',       ')nT=%_r#}>YG7M]/I8Eo_LP]cmVu*+}LtPho`1,Yt4ld1#;zrz@1!:wE&)mRW%P?');

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
