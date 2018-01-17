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
define('DB_NAME', 'caribean');

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
define('AUTH_KEY',         '9=_qQwd_Q0S~u9l1c;6MN)~8YX|pBwSH1z>yA~Z:1zG^yBfD!IXJ_=jirt<}Wp4g');
define('SECURE_AUTH_KEY',  'o)1jW=vUyL~<6euZ:Wpd_%jc7ad-_[BydA)2qHm(E|$MSs&s-lO_^?1{:Y?ufWS:');
define('LOGGED_IN_KEY',    'W%MFN =7`N;,*3rq}WyLNBgf|v?+HY>}&DuI{S;hyvXX{ht<2+ta=13Nkum%gl<@');
define('NONCE_KEY',        'nmi@]qx?@pAK ~Rl<obI9vhCG#qOWQR#Rs+$p,7v?A=4?vvlCi>:6vnu&?CntY,L');
define('AUTH_SALT',        'uK5]MO;KYP^# &rbLbo:ZS97/4@L)>D|R}!Uekx d2P<OXs{]9,MGbj7oUU!UYW!');
define('SECURE_AUTH_SALT', 'd;<3A(`M}&^a*fe.FZeFKcpl>x9oj)n8i3y}a9J_w7}~Q[k=}-jlj}K_TE=)3&u`');
define('LOGGED_IN_SALT',   'Z%5RjJ99,3s^Tee7nO`69}19XTE>-vk5CCFaERJPs<Ns31D_$&,Xpf<4>75?dT,3');
define('NONCE_SALT',       '5_{}7{1G~]mY*LGVZe^#6izAeyVeD>9o<L<[:pdv,N(@q|]3:|QuGN=tTeyKi{&2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cn_';

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
