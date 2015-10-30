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
define('DB_NAME', 'gixante');

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
define('AUTH_KEY',         'mT2cM3Mc*2L+T)2fjA!_6Ahc}&  %ui9+&TrlsI|?`@i**;[G_[JFa?K%4&u(emQ');
define('SECURE_AUTH_KEY',  'o9Q;wmf[vtWGTkm{j=WeRRqr-Kk&lk^=*H759Ti~S]0% TES_E;{O-X,l28/RrQG');
define('LOGGED_IN_KEY',    'Ix.|EVkq,>WR.S:YvhIQ`pM|.x:sDmmBU.`I?]V`|`4+|<JP[s<|KCw3](pQ,U?m');
define('NONCE_KEY',        'k?`zbIyA&gyn;Pxyb2w_B`*b+j+d/5`+XWYrut+lVZJ0@UsyG#m_*!br6fa-kPk=');
define('AUTH_SALT',        'X2|Fk8@Nw{`h*PF>|I{3*?d%!_?7a+dv%?<,uC+|Bf3|Jz7-@=!Py&pSm=Pv-my4');
define('SECURE_AUTH_SALT', '8aJ;%IC<fjK./Y5b:4C+L|jw~rkJpw>+Zu((@0;xC`euh1Cw,vt?]mycw3UwCHq:');
define('LOGGED_IN_SALT',   '+p0!n/e2MEW}R]9B6jb_;$!3vsVDQ70./i3 2J9EPEEyIlh-`~wzS!Q$.;)&-40%');
define('NONCE_SALT',       'FFd4tnC;C |oVCP*6(D;-2 1>/v05$%[lS{:1n-0~?$/3B5Hwf#`n>h/_!laRW0I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gix_';

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
