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
define( 'DB_NAME', 'church-krop_wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'robokop67' );

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
define( 'AUTH_KEY',         '*-+k)EOh>xBChPq1:4q)=?rVii~> >(:[ZW)F*A8mKp53(aLQ{s s3!g&>N]m1&]' );
define( 'SECURE_AUTH_KEY',  '_Q<.5zdB#?AN5CaRqK^Q,eD=x=!H&SSnIYWjndN,E4|gzqT`jSq-Zz@+3c.eakB)' );
define( 'LOGGED_IN_KEY',    'D<f:R4@(V;HM*f}JgG.&=z?j`:%E07VKRzD[RD,GD#tG*)60i=X^FStp4mP+kQ0B' );
define( 'NONCE_KEY',        'Yi*~R5,y&^Xv0`??z#Lm<~1XT&Xf8.r!jJ^@P~yc2.K?KN=3,wzb%sgjx_TbSP]$' );
define( 'AUTH_SALT',        '>32C=dm]y1LLUj4Ld`g:KM,Fh$KtOzs7rb=-/G}r$i2W^92_0OfcH-UW,dezc^3s' );
define( 'SECURE_AUTH_SALT', 'N D8[+yb}M$,RJrqEb7d@LemkKQ@Lc+J[~iYq-2SHWtX-4K Tx*^_=ILEBr/BChB' );
define( 'LOGGED_IN_SALT',   'IUrw%cF/bQ~XON_FiuE@GX}R<hHYyI1K%m%fX)Za.0/HG60(7]+g}|?Nl5iuhs_i' );
define( 'NONCE_SALT',       'e#rxCB`Sea^EVmZF7X$?#LEwN>aB&me8PIJvB.P.ys&Lt%- jyq>.sMWZ+SQ85^t' );

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
