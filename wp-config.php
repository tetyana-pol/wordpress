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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '6l-/foyo|PLGO}O{3vEe&oc*>[93EZ?ZjwPZtB}pHRxTdE![:3/3I-:e}BVj+*~g');
define('SECURE_AUTH_KEY',  ':+Aq_p`#c+W<>l (n/yXR!_/![],4(>?i=x$ED{zUYPELWtL@|hd_k#38iieLz+.');
define('LOGGED_IN_KEY',    'iT.C V%WvA8!EmcPF==as8.0jz^%45wja*n WOej?c;TFPcRvz+(/mN9tbO)>HfV');
define('NONCE_KEY',        '/VzbWG^ZZaSZ<HJK!T)B_!GiEoln9vF.z6BTeIk+ijTDR)iB^q<N*?HG4e1(jk6?');
define('AUTH_SALT',        'c@<a5$6D,W:A#I5M?&fDCz`sy4o(1i={uB`/|]R#^R/ EMpJ5e,?1$utkr9p mYY');
define('SECURE_AUTH_SALT', 'Gq1ODyxJ6@J[I3yiEb%AM:HLh/|nt9#$v{PnEc${tjv/#&5jc:,%S-B41pw-1Iz>');
define('LOGGED_IN_SALT',   'jCU%/z]KC@&PCTA85TNQ;@ATKlT=gq.?KyIAC.5+gpPJ8<MFs3E1)_=96AOBpw(4');
define('NONCE_SALT',       'M%L&f}G5d@-*fL2 `$6+_#0i-#<dE KW)g/:X,S;!:<f>QR49 ?KOalo9XeQ:r,3');

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
