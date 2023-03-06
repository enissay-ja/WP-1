<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ix7wo4`2NE$Ej`mpy~@w_$,u:Vb-|_N[9g1++TQ!at=c|_pGj~?5?cZxX.UiA}lA' );
define( 'SECURE_AUTH_KEY',  'QDVCVAyV&,ccn;hngpC]/NTYO`+LsV+_x%F($1wsrYq]Y:@0_DY3e8R7oz|X$1z{' );
define( 'LOGGED_IN_KEY',    ']VbJc]K2-oIl658hE2Su<<(.OajS7-X5lO#,j)Pn)36Q(V%#6_x|,j3$GK41OVdt' );
define( 'NONCE_KEY',        'GP@iGAS<Ns~oJ6dqaVt?9juV6qV>J& =D;;QxI6mp8@ HEYrO%TM/d6@t6E+XU{l' );
define( 'AUTH_SALT',        'xaoPL%0_Hc(gu`y99wbq>e ~WS-*rHQS_>7=Wl]n1BNQ6luhi=#w+rkE%8[+9vZ`' );
define( 'SECURE_AUTH_SALT', 'DCDG@{)ZM /Mp;#(dD;x}J>!0e3eL*)[XU5OI]tILbZAZhF~D{K0}5D,,t@-2#KR' );
define( 'LOGGED_IN_SALT',   'q1HO/I(($K>ko NLL8Aq}kwz3X(FXS+y9tVuFTTWP4N#0~:rABn3Rv0+06JXxPg$' );
define( 'NONCE_SALT',       'E AsCX!~/`m;jmBG^GjBRDHlOn+yjf=X<]jIu8AOqwPaO{kZZ?nkP8?>3bdXF6>p' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
