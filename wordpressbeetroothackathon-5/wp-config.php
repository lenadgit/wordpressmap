<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wpbeetroothack');

/** Имя пользователя MySQL */
define('DB_USER', 'wpbeetroothack');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'wpbeetroothack');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'rGI!7HT6=IREk;/+b]k_U`h-R6bZU3L(xZW+59DG:}K3sIb{j7Ja#ftiRP~+|7fr');
define('SECURE_AUTH_KEY',  ';/F&{<M?}xmB{lrUdAjiXMMlR]qLKe97S%7z@*?@dar|~Tl^idtQ2x>~Bj)I#VSx');
define('LOGGED_IN_KEY',    'WVT[V{G>![^+rG|2Kz/V<khH|**#]t;D;|iNWya>wl;Sw>}2g-mZ7U)m.N7@x9@o');
define('NONCE_KEY',        'tgS1,#e;PtU~DmBM@0lm.W9|Dv%awoW$6)`X96oo-TWP> a9sza/]uji`7:}t`~}');
define('AUTH_SALT',        '%lMCsOm)qlTyh752b-17lU(]-Leo.A61V4i5rFBk?X|f?OqdIZLd}0+-8DM%1UNa');
define('SECURE_AUTH_SALT', '=<KR:9>M|M|2++14ul4254AfGke{ATf{fFW!D:^U+TT|w] Dr:zpgmQ1W6x)Ezk}');
define('LOGGED_IN_SALT',   'C I/Y[QP0,&:-bM2?+B8|r,e,2Ve>!wj;Hb -4PZ+Sx;WzbIO<:LNl&r2n]3tP[7');
define('NONCE_SALT',       '+|3l=-gAt0W_PBtU+7Q+<Qb5nj=ZH#BJ$Z>D=+|^-rx([2Iy-+u.)O4j~&R<!3+-');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
