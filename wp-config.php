<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'prognosys');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ',&EzqD$<I4Q{A)4x!M/^.cW6)5(TTSsf?eMY`n$E48eZoEi8qzMWPFarm_g)mJi-');
define('SECURE_AUTH_KEY', '7Ea*#G15=%*dgmFFioWi4e5|W2f6=#st>&sNPjrs2+1dLC=i02=]AeGo0dQiKrP2');
define('LOGGED_IN_KEY', '*}^wbe`` *{HZwM!q+@xBa^;,B(,y39-L5aTw%klZ9RQ~Y3m~6kbJ<z(2g/7,}WT');
define('NONCE_KEY', ':xTn>Ci^.E8[3a|v.Y~>b||VHHc|4zwe5qWjjE2A}}HJG#?zgG%+O]eYA3tN![bs');
define('AUTH_SALT', 'Fn&BmiKB2Wj7JV2oxHE]!JB#tEd%CrcWpg+Yz8Z5pAkI7O(kAZuYBMPac9Bj:vX]');
define('SECURE_AUTH_SALT', 'i<K+2${kdJqs_h4_Z^]<Hg%q8[m}z|*1?siQReO14]B:dW@3Iea>LX-vLVC+L0+A');
define('LOGGED_IN_SALT', 'fWWcl:[tEv[f#R)J 9fx$[bw|IQVNn}avsGZ&Cw}qwo8q5Lpxa(rN`WbSYGcbYcn');
define('NONCE_SALT', 'm)ygE$V=ZQD%D40lI,)~o_k?iXn}xjD]9OEKyiq`RI*w!}^u@tKXH*Qx&G:rj@%[');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

