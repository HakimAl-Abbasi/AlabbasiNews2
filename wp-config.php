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
define( 'DB_NAME', 'wp-news' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UUsnI/q|JA:7~mg  yKaEUU&!n8[C1q{l*_CPSDGj*jmm#51`|O#g=1dn#j1MeH*' );
define( 'SECURE_AUTH_KEY',  'Kh(Pni,QHd[B|1RzOpr<gT^5E&$U/c?*^>16Rg=`fBHHMSlXND^t_:xLi4QC[M4Z' );
define( 'LOGGED_IN_KEY',    '(bh*d6ApBR=~Q;pv!MmLC <L3#f3|X3@<]JWIQa%;]=N)Hvgdr<-vK&N:u1F(hwP' );
define( 'NONCE_KEY',        'ovMN4vc=wXP~C^{xKg_X$~cR6OX-ejEsFXqrWUfTcmhT!NvJOGW|Yd!dT%lz(9?)' );
define( 'AUTH_SALT',        'uPmvQz|Gn1{?>/]E}=/>^w.=8<We/0^8W>+s!pqZv!g:faWtSu}yg(R}D!h&%?Cb' );
define( 'SECURE_AUTH_SALT', 'baH-|eNWF&kfT[H;8A=>F):o*%wIT^p^hWibo*6#KUMKY53u}mgn7@;Ik{flF.VH' );
define( 'LOGGED_IN_SALT',   '2U:-AVUOd(R#xs,|{6V,bM0I1}(NSy5P!vzFu^.W`[,r/dW~MmgGFUO</mBye-~v' );
define( 'NONCE_SALT',       'H&2GcB.VR?1(4CUWV&v-|^vD|E?0$M))/W]6PwkV^gdY)Beaa#w`O&QUtuv$mK~^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ne_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
