<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'word_press' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'word_press' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345678' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'snZe+AlQa36g_7.NBy1pNiI}*YtcyKeIj?XUO=mDTUDr800T^l;{F(9m#;]w=&@i' );
define( 'SECURE_AUTH_KEY',  'teqB};|c:dz:JM&UwMfo{i>O|{+cd]&x:hi3y}{i+wb7iIMS JRnO6!K]F_[.wju' );
define( 'LOGGED_IN_KEY',    '+>~D8~5E5NJ1(Y;5pv8rjjW9b8B1~3oT8>0)3#(:@2z3!ve!IJn?TFQI7Wy,zz~S' );
define( 'NONCE_KEY',        '5,7d$_vC=38soe~$i~L-s[gUp$9LgUU0lGgfYu2ko9z/O_p%a+q=5yBP,Lj>}dgX' );
define( 'AUTH_SALT',        'jo5o=SZ2$31!% mURJN^Up;_U4@$tL<QU}5(<<8aUoXIz MGtd*>s&d RmA E/ey' );
define( 'SECURE_AUTH_SALT', '2O[Wq+:e`.e:L:k|6Ia[(3kPH.FaAb=.q>*%bD?(j.B^:O}O2A]*l3N#2X@*EP;L' );
define( 'LOGGED_IN_SALT',   '36VSr>L 2,ykWkMnah]!oaV>u:mP&tJ^yjE0p*c;KXe=p@]krTnb`!aN7-pGqd%G' );
define( 'NONCE_SALT',       'GY4K rhqcUO*~o,fA.oQ]1QImnJBSXW65>4rA^~l01i# c3u{Pz|>?<0Ox#iXiG_' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
