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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'djuice');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Jdvzu-AI$n`iTO`p`H*v0v>g;D6?w~`d]Nr0.@Lm$mQkXicu _3VOiW7>-kkhe/w');
define('SECURE_AUTH_KEY',  '%iewYMtYL<nl;PafsZGfG`l|`! 8;8T`b}lqe<}|M6-w&o*%r3U:]Y7AjtG`roCJ');
define('LOGGED_IN_KEY',    'cTsD]tTveneG8,B{QG^F8&j?kNJiP{r<)9xrS^<YES&v.y>A^=b9N(G]x:WVVE55');
define('NONCE_KEY',        'J!&g#Yv;C!cA421@ *UhO[Mq#,*g-Yr{i)95:Uxn%e8%3pD2SzQ[f#GfbJ<V1 DM');
define('AUTH_SALT',        '?[N0@T4=s0teV6)8@Bh+S&m]yF4[J!V-Lb`e4F>/=af<=l)}kjJ[rOU-P}&SMu&T');
define('SECURE_AUTH_SALT', '9p4%v<;wEFT(!R}OzX9ehsQ8m6BF[}_2U-p^v|&{QQ7q,sj.m7-S.s9S @S#(!46');
define('LOGGED_IN_SALT',   'PpS;4fH<(5aKWo*V|}:eq@icyl`P~f+x`r`Nr$w]f<0I[jv+xtX-%HG.<~Ls_RlE');
define('NONCE_SALT',       'G9MlXc`$v9=zxfd$^iW97Kn(;sCJ7q J0}qyS.74[.aF`YV@Bx%kMDt:l2kbG`6*');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
