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
define( 'DB_NAME', 'heyu_app' );

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
define( 'AUTH_KEY',         '3,aXN*ER&zL*7cH1_Yap! bN|g2GZ^nrnVK-_<&/!<ItsGt2MNdqQTxV[WQgHbuy' );
define( 'SECURE_AUTH_KEY',  '2+Qd(?#>W]T(0I#[^*Wu6.F}LIwhFHbYgCO@`oZERm:ysiD&h[:7aa|4DlIU7up$' );
define( 'LOGGED_IN_KEY',    'v/lBVy/$z>]-Ai }wCpy+!sz9=T)_BtBoY#SW2|UR2RZW].qr([&p$)<q!hBJ~_e' );
define( 'NONCE_KEY',        ']v/!Bva(Eef,h8scvKJ>9mIn_Pz%ucA#~(y~t|MNdi+8)=d%>jR}KD4o+pF/GHMV' );
define( 'AUTH_SALT',        '5~YAJ4u[/`M=&FS(3O,DN?oZU?qK3!ag(!.)bN{&+p~]EpHsn}j@~>low(pbh`5`' );
define( 'SECURE_AUTH_SALT', '&)P@:O|rjG:/MTJs> 8+*vs(NaYm<)9IZHq|Ddw|1,]i.`F*usV|*)lfx|!S*8WS' );
define( 'LOGGED_IN_SALT',   'lrT46s3mh_~zz-N:8&5TrB%q}`B1^E?;KnWt.%iMhFUEPi~Wh)S)FxEjMnE%HF!O' );
define( 'NONCE_SALT',       '-[$G<w^bFA)t2czN<kvWN Nyun?}hoOLFI#E(txgZ{0*PbQ?Ie8?Nzd:Eghpot=7' );

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
