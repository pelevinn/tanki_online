<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 't_online' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y%<i4`^o>{SQZ %Bs$$[;D,-8nk]V20n[5%fSDr6Bpo1SNB<QO4pRkoYI)*TV^[i' );
define( 'SECURE_AUTH_KEY',  ']N/oJ;;>.[=eRcajmn>NlEWH-X!HAiN<v%*9z35W:UVijt[9wD;^^q1gi}>*2[Ub' );
define( 'LOGGED_IN_KEY',    '5NHc6@`#As7eE1qK2dOM@79TaQ9a*lK?x+e;IeZG{SmMq+ftnb:c&^$mb1R1qh7P' );
define( 'NONCE_KEY',        'OJ9,%]o8{t.ahs5|-V>J~d,I2_AKR!5PDG))Y}@O4|=*mag>fGD{Bl0SlBWPv_n]' );
define( 'AUTH_SALT',        '9{46RBQpDa>ayCa{&RH/!,(=H*.]ZZGzSnz8$km2S!sArleENLxFs)fF%wMqox0w' );
define( 'SECURE_AUTH_SALT', ',EVhO.~y9StG%-RFJvREa*[ pXM_$9pPoY ^<LZtwQ(H{!Wu6i*vvjO.!omV%0j|' );
define( 'LOGGED_IN_SALT',   ')!55$6U>%YZD}}l=vC)m@$$f.9JnV%>=Q`ndHoFSV;_J<5qwt2QGa :%h@#GCb6!' );
define( 'NONCE_SALT',       'BVnn} =o,SXCo-%Fb7^mza|v0PfnoXSws=o4l.`0FzEx!E(=- Cc4^7&0^R`{d)(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
