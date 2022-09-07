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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kalimatg_iffco3' );

/** MySQL database username */
define( 'DB_USER', 'kalimatg_iffco3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Iffco@1234' );

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
define( 'AUTH_KEY',         ',*Fq18l;065EZL=K&TR@3r%Kg$lrcg]ZYH{*i.Io& 9a+gW;76yMjFfBK.PAG-7@' );
define( 'SECURE_AUTH_KEY',  'GR*?FnD%$Rw<|S+U_X;$jQ2BXfR/z$H[&cf^(g`!GCq>KCh)>f*h@Pw`PWfquwJ1' );
define( 'LOGGED_IN_KEY',    '[>_@C o$ubA?MnhEq*Lq!X=y:XSU%-p,y65hSk%@F=JH{K35.PA]@nh_pQ=lH[pV' );
define( 'NONCE_KEY',        'j+&wW*}P_cSm%{)I;_3KQ4DF<rE=:*6jvJkq+(eul3>j4zas/lz~X~mau$9iYfz5' );
define( 'AUTH_SALT',        '+cJc|zG(k&pf8>>M r}O&PVl+o!L/$6!S?UWs~UH%HW^2UTsx{Pjsy7@~J0^-4BS' );
define( 'SECURE_AUTH_SALT', '# 0;^>x8N>;G.T*y#oi=|`=;F4M_z{4WaslHguK|&9wU0 <P^/ZLjJ^?&UI&N:>f' );
define( 'LOGGED_IN_SALT',   'y%cd 3+!^V4im/?>v*9EMU/i:I3:4a4tnZmiI?7_Sij6aQC|]Uuooo5dUlI|],U`' );
define( 'NONCE_SALT',       '.bIRIXFSt/xUPNLG%11s*P-f{]UFI.-O)3oa)4rn)5>l3{z{7>zbl5a}(A{CGcX>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
