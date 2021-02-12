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
define( 'DB_NAME', 'practicawp1db' );

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
define( 'AUTH_KEY',         'I?LqrKKlCWe4+?01%=i$bN}_LE&@i@kLE$w`x*!QOWX+/eS1|&;Y7+>}+#zBN4h!' );
define( 'SECURE_AUTH_KEY',  'XoSiLQGQPm7P|H)f6Ts:J//aQ>`bk6::~tYBahYw/,Kc=[/zH``En7:J7):%3[=+' );
define( 'LOGGED_IN_KEY',    '+?UjMT#yDOUtdVm7:l!~EVVyhmiKpi<$o9OaWd8AnWs_8[<;2Q=j%I}yLhohfr:G' );
define( 'NONCE_KEY',        'mkG*2^BS7%96rzl.X`xq3~XdDzunw>rBdoB,3Weo|K6XV;v(]IEU)/zc-PovXD+i' );
define( 'AUTH_SALT',        'mhZNu+>fkkEcJQ,dZq;YrfjzK2b#8Zh>NaLn2%ovQ_.cN(.k5`8pA?nV.=&a1Sop' );
define( 'SECURE_AUTH_SALT', 'X&gJfnGrvM!rl~OgVs_D/{XpWdK`U5w_Xn*!gJL9XiX}r>X`8uOWD:btVdD/j{m5' );
define( 'LOGGED_IN_SALT',   'XrkBkIIM#{LB<LmW<UQdij!3Ig&m>j>U]vrIghS+aWog^u+z+gQ@B`&,1+qqOr,*' );
define( 'NONCE_SALT',       ',V+.1(O{ZJ@U:-Uk&1_ru{};bkM~.x3=[{mF_oK#Ng2ZVX$?4RIR<5a-6SO+BQ-L' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
