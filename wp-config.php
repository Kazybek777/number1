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
define( 'DB_NAME', 'number1_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+3MfE;!hU`/qQ753fTr| R_~rcT [D!$na%^vj%_mtzo iw>40m.SHmr$3syjeU{' );
define( 'SECURE_AUTH_KEY',  'rA.b0K]FyBx[$U9]QU`LAH*5E~>nY5i%eDe0T~+n{;ZMAkR@to1`{=ASzR%E~D@,' );
define( 'LOGGED_IN_KEY',    '1H)Y).Lq)unJ&|8m;fqN{%&iGk:!rUj(wyC1q$:)< W|kXR.OrDS,WgDb5(]BC<*' );
define( 'NONCE_KEY',        'LQiD@?|N9#C(7=0OQgb8|Lcnc XZ/dlC:YTq5|tmz/ 9|y8H%!m^uh61oZ0:TG(Z' );
define( 'AUTH_SALT',        'T=ciZD8z<x`[0p=qf%vC}k}VqgFd_D^uzf;+]gCW^b$<]v24Vt;A,e$O[BIL<:Ru' );
define( 'SECURE_AUTH_SALT', 'QKTI2u=$U7=Ae<3]chCrE@KT1rzT!6gw0N[E./6BVUWEzj*O7/-[B2(:FDQt$M1-' );
define( 'LOGGED_IN_SALT',   'yL{PQ`R4@EV`,-6i.`Wr?RlH}A*gWi/0!,yZ*T(JSM2%E#3&Vcra@i23HQ:P$bGA' );
define( 'NONCE_SALT',       'B9,3Dq;[|Xe76c,@Ak.-}FUZV=P?]4M}_~grsQJ3Nj,<Av{!4fZz@G8 ZtaOlg[J' );

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
