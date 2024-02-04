<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'corethemedevelopment' );

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
define( 'AUTH_KEY',         'S]~s<%&Rn42`KlN^hXKK<PZ.m%DY#L?WpQ}:16)%dKHsYcGpEmG|>4g0?)#^YfH}' );
define( 'SECURE_AUTH_KEY',  '5!zD!t9j&*>J^M=i6zVGMp0@GN<o`>nlTLEs%-;Bd[qms@ffBd^[fM8j;2e.n<ko' );
define( 'LOGGED_IN_KEY',    '$ap<e6dJ,-^>h45:!IB~05{w6N2jTnyQP{eemr51C1>Gao]w ;S}7.v,QJPy)0yM' );
define( 'NONCE_KEY',        'Qua5:D].SjyV~axC_TOA8,YO<1%6UBlHab_&{nc{h1e0L^3aT4#rR`mV(Nj4A? W' );
define( 'AUTH_SALT',        'Xlj[M3l7W^H_TGeGFC7lqfI)]QuhoLECH%OB%Jf^lJ r`0:Ds?1+#sxw7F@oO%N4' );
define( 'SECURE_AUTH_SALT', 'pG..>9A$fYnrC~8![)Os:{0F869L~$#r2ZKy6GFPuh(XEcMrfIdr<;E6Str(<^mG' );
define( 'LOGGED_IN_SALT',   '/s>&3|d2qCi{<~{x!eZu`T9Vg=MJf([!`vzO3RABfmXUt7]wt[#)<ZeMa#Tsp!,+' );
define( 'NONCE_SALT',       'k T,CPv}}}](GapNKa-D{ X$i,Doo6ecIYF^1&EuC-Zd~*pt`[cLqpO<L9}#S-+{' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
