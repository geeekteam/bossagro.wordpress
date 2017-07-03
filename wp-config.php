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
define('DB_NAME', 'boss');

/** Имя пользователя MySQL */
define('DB_USER', 'boss');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '}OwtuHZa2#y1');

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
define('AUTH_KEY',         'X:<7&OZ;2 -?r:Hm:*Nb`KzfU?$t0N4_;DR_X.!.6H^i*:Kd.+Iix]{S`ykgmsDE');
define('SECURE_AUTH_KEY',  ',Z, E-)XQ[BmCZh_-pEa.x_c&T7(0(._.9^%g/o2i6)lGYoG.x;EhIgn39q] B Y');
define('LOGGED_IN_KEY',    'V&z_<ttk7^%T/]TLb%}Ds)sq<G&ZC66+G;J,sJ_#DjZ1Irt4ny~!9f-?,x)=>=E<');
define('NONCE_KEY',        'YQ=hB@wja{Cdb`/86x?01KdIe?=7E6eGF`|$Y-P_7{OPnw>>Nk//>>{; o_%[a=n');
define('AUTH_SALT',        'M<[N1GqJ:bV?]B JYbw56zoiq$F&Qxqb>8Edm5 H whAk#n1wo3vny0Y{IveMX;I');
define('SECURE_AUTH_SALT', 'Vy0N/<{TC4m|CKulsPzPSL](.c%@nacPHM%My[=SbOnEaQtr|VRhpH=?2{Q+i7X ');
define('LOGGED_IN_SALT',   'Ie2AVynD-C*z+HVmalF0W<6/;e^[Y#P0XG?(D#8A&@L}~eT6{=k$J-#}r)w`Wy2t');
define('NONCE_SALT',       'Mm(2SQvB=;-I~2dXTIFHvGsw_F, SD|&&e|(5Y[-KIq58euLM]_%wqiK1!O~?KfA');

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
