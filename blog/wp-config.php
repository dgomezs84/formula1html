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
define('DB_NAME', 'blogf1');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', 'f&uvqW[?v1hA#X#pq<(A;.Lkk<cyuY3I9JC&/?e41VFhZCr`?dFoF2`d*kpEfk-v');
define('SECURE_AUTH_KEY', '+=1kK .(l,m.BR^J@;4r2?&QwXj F?e}vOK)V)0z0 Jg&y!ncyWT^ODY/ri-SI{T');
define('LOGGED_IN_KEY', '~u^4ey<` ZwLB8hn81Rj%U%;K0Qd@&(ZtBDo8 pV0)v(FI/F,9QuEI-lRXk%`mj ');
define('NONCE_KEY', 'Y!1!sj FT|Gd/Vkc.oEn$`3)V5*T$[Or/Q|B N&%MAk?}D$&1<knEp)?;l`A6XUf');
define('AUTH_SALT', '3dR?tlH1u]AFDl(7^h9feR9[gc>-.]0mhJieZ_:=~e6c[j&j;Pif~q-RL 0}(RO.');
define('SECURE_AUTH_SALT', 'L/sRZ:vRX^R}Q8GR ,HT2catIh-!WqG`+Ux,ed}-72$*m`As;,SAW!td)k)vA!h,');
define('LOGGED_IN_SALT', 'CkaaJix8=PY]d(=..zLqEF%YTwomZVz*a#x]a8zG!D)/</oMoEdP(YRwD~8O&5r1');
define('NONCE_SALT', 'JZ_HXU S8E6G(DAi1P)MKeGWj;pq c)[zYmUW]It0-47&jNsFWv`b6p9*n.|i]9z');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'bf_';


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

