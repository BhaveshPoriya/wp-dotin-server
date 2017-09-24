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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'ajayport');

/** MySQL database password */
define('DB_PASSWORD', 'openitnowforme2'); 

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'D;lw;>|}<mA=8E5TyWD>Ycx93%/8[1BZ/urw^G4i5&g/FnQzK9^.A&vImjDyd;jU');
define('SECURE_AUTH_KEY',  'D;cT9>)^-l7y}{rcfH.;%]c^h8U^id9(lk7#BB|i.^]JA+Y9f*77!& 3?ou}FM~d');
define('LOGGED_IN_KEY',    'VJ[aqfNe(MjCzG=N4Hy[&RxM&JWbVq`kC7%ub[2G1-$K3B&u[eSSFj]Yo*L5Nmo!');
define('NONCE_KEY',        'ux`|?>i3nTmH:u%!;ZHtsn_9l}dv+L58F,7,F20EZCAC}o~f`yBm#ia[my.7jn%U');
define('AUTH_SALT',        'c0&vvY1ElB~c+mlW*?_=;ob^UC,4 ;xN|&Fng{#gTp&xD)I^sJr1 B8xMT1ic|WD');
define('SECURE_AUTH_SALT', 'R<c6%Nm,6Apoo#rVC)mbR`}B;6vbbb{$dS/G+:=g$|VKuRKO5qHhMH>uXVR+2&Xi');
define('LOGGED_IN_SALT',   '}4+MjgNw8}dr*2KK.UrJ6B/hqN#AnBew9fblE;<c;SLYLI.o>vp/wGUZ6.(BKah[');
define('NONCE_SALT',       '^.D`~W/Dawr}EQ;w{eM(&SLJ$7&!#.D94$w/1n#M;z)B??CWHEx@lF?JP[HaC]~U');

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
