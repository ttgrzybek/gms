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
define('DB_NAME', 'gms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'coderslab');

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
define('AUTH_KEY',         '6Sb;Q6;Hl)23`n|v;v#scM;u~<oX#:?uxb2]ox8v%m:a|z0_`i6UCD  <X=*(8sM');
define('SECURE_AUTH_KEY',  '1u0nGD](hji>nYmzVOKv7#qQm!;lUy<D.fP~IB@EyGhC7p2T(mL3$stV7aK13LRm');
define('LOGGED_IN_KEY',    'HX}_aV8~@jh&-%%[=ooX{]ro^5vSuB<8u^9!7fj_+Hq^$&%FRh2V.5T_@x%9-hp#');
define('NONCE_KEY',        'yNCX]G!Mkfqy{A}Rav&efe3PV%Nolf5a`]~JY`M)J?=:n#BWxFws*x`tP[?}qu`t');
define('AUTH_SALT',        'BRaUC$fdN1i[fjrc]b8_b;2iH<U3w*eu0i.cAwa=y}fy7mO#^ep:@ZlB+NZoz|Cr');
define('SECURE_AUTH_SALT', '=4=yyW87m,Xq2N|LT_%6]a-P4cCyl+sssJ/A zFtjIc]>Ija}ay> Ju3325;+DX%');
define('LOGGED_IN_SALT',   '^M:X8o>)P[uWgI])vE.Am=[P%H(1Isr;-M:|:`AfF t:Dw6/RGPdPL{SCF7iu[qi');
define('NONCE_SALT',       'GTH}kk)BA=a:g=tRz.D$WEun_=T(eu]wUvn.oylF%A$I<-4[nxa4LbJvnZ$$F[dh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hg_';

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
