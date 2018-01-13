<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define('DB_NAME', 'kacm-2018');

/** اسم مستخدم قاعدة البيانات */
define('DB_USER', 'root');

/** كلمة مرور قاعدة البيانات */
define('DB_PASSWORD', '');

/** عنوان خادم قاعدة البيانات */
define('DB_HOST', 'localhost');

/** ترميز قاعدة البيانات */
define('DB_CHARSET', 'utf8mb4');

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define('DB_COLLATE', '');

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^EyJUq_ Vo2Gw|g{Rf|!{gXXKq$uj`LT/B%c|vQ;+sy-lH_-Zfo/Y@R*(9v~I6K[');
define('SECURE_AUTH_KEY',  'fCEBf]PIUVs-6[2R$Nli1Vt+rW%CW5)1p&[.8p|f_29E;TyQlb6<=rgdSkcy6&<O');
define('LOGGED_IN_KEY',    '>44MvQ cJ&Iu:$6H%R6iR$HU|Y]4Q9X3>VXu;(%Juha<KvuWH*m0%[I<Q^oh7UlT');
define('NONCE_KEY',        'b&HF87,<;WB#Qv?eSLX mx]<21RHYgWSjT0[:z?rD@=r>5xDNo~[Zp6DUo:dmz3F');
define('AUTH_SALT',        'E:tPtB^B<Wl*9U#?2FynE/)sob@n]wN.5RHqSFQc f?)Ys.>6][th7&cS8_CS1Tu');
define('SECURE_AUTH_SALT', 'XSI6o#}l)B*:M@EvG,Q9n][-#s-(u1bzaf{eL>Zkn.DO(8qv0ya57IPf*kBz5Rhg');
define('LOGGED_IN_SALT',   '|`i~(VF!yniBgjW+BR@,*i@.&kXjg,4S.c9{=X5cp^gi-nn%F#&^IZj9rz5Y]|En');
define('NONCE_SALT',       '=,/wDfSKaPge^xC[`0)n}b{E<{!u@{E.1J5PyyFYL:ATd_oAI~=DYkj?[IQCO(IN');

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix  = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once(ABSPATH . 'wp-settings.php');