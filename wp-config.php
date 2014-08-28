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
define('DB_NAME', '78');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'adminM9I1rYn');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'A8Xudv2QFngV');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'umFGjHq?Y+N{uHAjZ,SuK%FPKuo*R?f#NfhD/_dbP-I1~|-1d]QF/ cbW^=[U1vW'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'UmtgH(lzop{:(DT}IGNEwlvgU||%y<8y|XAUUv<g!n|Ca/m,0QkT.u8([j;,zQc}'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'h :Nb,en|nPzLxJ2zN:9nJe+={HFaPNyN8U+rqs0R;+~L4e>]%NETLW,/6*1l)3>'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'F5]_E -L~ht->R|G )h|!t^k(U=k1-d2W{H`?e<>w3puRq)1|?8:0vM7-|HY/YmH'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'J+TBXTo&aOts+)yrH:9pP<RNnwa9<hU$Ft&)9_|,p*w|lAJR+-U#>q%;B*?|8?_['); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'y5W;9<sgeU:5zUC6p9v9/Vk|>i<?hlpwA53DEh2e|[<PUGo!+{s%]$s69B.YpheB'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'f9i]]sj>QT9`o!qHGgob]u%iVMQ3^w+6TuIa-b<(|yG9BhycLXfx,LFZ<R{>l4AA'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '4g0T?Q-!Ew1UcwSr36WInIil[0TmI=R-=)@2kSB}bI|9y6v;!siy_m+{-o?L-#aW'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

