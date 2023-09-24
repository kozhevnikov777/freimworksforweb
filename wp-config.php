<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mywebsite' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'freimworksforweb' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'isi6086405t' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J}WZs@r[mQt;{XBm2Lvv]XwV Z%F{R7N@Gd^:/bi,eq2!&CK;}smay#m=irOo+%K' );
define( 'SECURE_AUTH_KEY',  'NVk!*#!>y@~Kj/7@8D%,o!7`28UXu:Y^^Bwu}<2A&<`hisf1oE$Q]X1-s/a{lYFC' );
define( 'LOGGED_IN_KEY',    ':r=G (G0w9_[Yf)Du&Q9U]<z5,+6 %f..s7ZX^4abiNwPBdDTe(AI<jOXE-nI~fJ' );
define( 'NONCE_KEY',        '8PZViD!0dKO:TtD[M/h &Hz]qyJ$)u%M1{+/v17 gDBg5]>|1Q-`|i6Suf7z,n!]' );
define( 'AUTH_SALT',        'GI@>z_wD?2cqJ(&EAU;F==}e,n3>MO]hTCuRQw?P+UwuL/J7/0Ec?1zYQ9A*]<o&' );
define( 'SECURE_AUTH_SALT', '4HV>|k2R&#!R!ipDv<(mj7:.nG54TKUcS9g~ibiON8cgS&qpmwpQbnMSxt%f!Eyl' );
define( 'LOGGED_IN_SALT',   'S|l6G?$+&P#G3Hre:r:8}$dF6hb`zNAAfeDq::j<}e*z`mRRsr8R7fry#`3S0)@+' );
define( 'NONCE_SALT',       '6O|(w+7om5 SbtML#JudlzTX@awA]K901(v~}%b[w4a@ E1p2ifc85/@+D[}tWZe' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
