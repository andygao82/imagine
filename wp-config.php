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
define( 'DB_NAME', 'imagine_interior_v2' );

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
define( 'AUTH_KEY',         'q10Y|-}oPeK7=P80CNC#eQe^]!iN2^l3Nkx8LnT}pAVyqMw=4-[PieO7^xbFFeg?' );
define( 'SECURE_AUTH_KEY',  'H^:3-stkJl#us40]k]L$@YbBrI}PUfp4mX4Q Xb7h:f)|5rOWk~O<O^~2ed.1AUT' );
define( 'LOGGED_IN_KEY',    'xWhdEReI^CKS68TcT{I;.VA6lSlIGdM_]:Us3Z`_[M3R%HO*yf?iz1U?1*``VY!l' );
define( 'NONCE_KEY',        '%RMCVbza3k>j[$TU{~YD<-aH0mrgPS/Hr<nn)8om:*fl(qar;Uuy_KJqMp>! mO7' );
define( 'AUTH_SALT',        '6v%G(x;f>$*>7?%//KTM?3VHED{.<WuEKoNf_jrUn^bqHe>$1.BNSLwE-j7Nibdw' );
define( 'SECURE_AUTH_SALT', '_Zq[ubh1pGpUk..zFg|32PE;F]d>pV,_bs#.%;,XYlo8O&AHkpM+b3QWXm5Kt#m3' );
define( 'LOGGED_IN_SALT',   'O*w8ZZf1mj;U&|#*MMr~]+7zKeD(;_GMz->f+c}c/Lj@R2)yaup!<61xykS5->{!' );
define( 'NONCE_SALT',       '>=5E ~bg_1]^<N0Q;r$7@J?}f!KSp_xLM7W}}]cP%p~lv3n{s)9U!L#D(nZqQ9jz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ii_';

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
