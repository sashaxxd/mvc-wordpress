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
define('DB_NAME', 'mvc-wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ', pKv&m-[7;W]UY9:tEWw!3MhHGaT){>-=e/}mYK7L=!>FZA8)K6;nQSfD1zdGKU');
define('SECURE_AUTH_KEY',  'qrG=QRU`c6`o9PF&vB(,@=vR |w,M?h_{l,+In/yaaXM{UU)3dkD50uJ::Uh>pQn');
define('LOGGED_IN_KEY',    '~)jj|DVRp~BXjBz1pTgkeYj80ku+lR.^>I{fNUK/:$Vb54 vU=.b,NQ*c;brV9U[');
define('NONCE_KEY',        'Smz*[!fNjHzy@Uysy&f*h.LYB(K]@@76`GsDDZ[&)vf$HxlRXDRRc}l$QZXHx! @');
define('AUTH_SALT',        '6k.E]1?H|)iBv`,Li]3h3ESqz}aK_FQC6sMi(d-tzq4t*}-bv.bflu]O*[0AE*wR');
define('SECURE_AUTH_SALT', 'TY!kIxXYFAe2y^CN0hi!WOJDS5/j3-jVx566E9IyRz!nl v&Xj,4@to:6Q`6s~sp');
define('LOGGED_IN_SALT',   'qWw!YsFxi7bn8duC_Y0pq;>}R+/$ouGr~UANX@$i_Q,2uM)jL(vnJ_CK>_BS}vF;');
define('NONCE_SALT',       'q7R2^TMv*)#m6u1&F2[s-#}gY{Fg.] m~AcDX#o=@(A[<DpYi@m&Tw7;&y12@Ew0');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'mvc_';

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
