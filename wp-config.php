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
define('DB_NAME', 'panaromadb');

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
define('AUTH_KEY',         '$10d$KD]5fW)gu.D]=Whv$8T;Q?6}am&(3owz5tn[C8#c*).]y67[3p.B99^^Ib.');
define('SECURE_AUTH_KEY',  'f4+$9<G:c4$kVQEs5vjSik=S)3YLby~|HkwPKNdL[y*&ZXM+{)Oi1lkW+g!:BGLB');
define('LOGGED_IN_KEY',    '#!X`~r4A{Hpbb(*CwK^#cGPCd,/5oT%zD gIa?@uUpLmGS2j?72c,bMi@Cv^{0Zw');
define('NONCE_KEY',        '/7TaIF<t-RK8](FAMCv4TNl&`;$cH #&r]9EU;y:eTprF%;L*5!UL:Hjx!whel=K');
define('AUTH_SALT',        '<3}m2asm`_NBJ&8ZzjGB]7oz/L]~8{ngjG_;.feIC)O(bbWv!oPuOKPW.:xtm6(P');
define('SECURE_AUTH_SALT', 'P q#dE|UB9hSHC]$w~ olbo=KM,a<b[OYpAz;!^(J]9PWRfAJp%!iQzsh_u2v +Z');
define('LOGGED_IN_SALT',   'E#=?kg(5[`kY$}CV%3P&=VDQ]JM;>L%8NBNu/OlIYIY2_gv%gk*?K8`PMQG3lXel');
define('NONCE_SALT',       'S:4B!6Q+;W2/H-[a+I(wn`Fp5vu.pwYG8>PLZ%.yrnD[o=TYoZ_#tTPM)RMt?y*C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'st_';

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
define('WP_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
