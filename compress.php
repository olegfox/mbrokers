<?php
class mod_compress
{
// настройки
// уровень сжатия
static public $deflatelevel = 9;
// минимальный размер ответа (в байтах), который будет сжат
// (0 — нет ограничений)
static public $minsize = 0;
// максимальный размер
static public $maxsize = 500000;
// внутренняя переменная — поддерживает ли браузер сжатие
static private $supported = null;
static public function init()
{
// поддерживает ли браузер gzip?
if (!self::issupportgzip()) {
return self::$supported = false;
}
// каков тип ответа, тело которого будет сжимать?
$type = self::detecttype();
if ($type == 'unknown') {
return self::$supported = false;
}
$ua = $_SERVER['HTTP_USER_AGENT'];
// сжатие браузер поддерживает, теперь нужно исключить браузер,
// который поддерживает его с ошибками — MSIE < 6.0SP2
if (preg_match('/MSIE [4-6](?:.(?!Opera|SV1))+/', $ua)) {
return self::$supported = false;
}
// если требуется сжимать CSS/JS, то нужно
// отфильтровать небезопасные браузеры
if (
$type == 'notsafe' &&
preg_match('@Chrome/2|Konqueror|Firefox/(?:[0-2]\.|3\.0)@', $ua)
) {
return self::$supported = false;
}
return self::$supported = true;
}
// посмотрим — поддерживает ли браузер gzip
static private function issupportgzip()
{
foreach (preg_split('/\s*,\s*/', $_SERVER['HTTP_ACCEPT_ENCODING']) as $method) {
// некоторые браузеры указывают вес (предпочтения)
// методов сжатия например, «bzip2;q=0.9, gzip;q=0.1»
// говорит о том, что браузер
// хотел бы, чтобы ему отдавали контент, сжатый
// методом bzip2,
// но он поддерживает и gzip
$method = explode(';', $method, 2);
// но так как мы поддерживаем только gzip, вес мы игнорируем
if ($method[0] == 'gzip' || $method[0] == 'x-gzip') {
return true;
}
}
return false;
}
// отделим «безопасные» типы от «небезопасных»
static private function detecttype()
{
// поддерживаются не всеми браузерами
//$notsafe = array('text/css', 'text/javascript',
//'application/javascript', 'application/x-javascript',
//'text/x-js', 'text/ecmascript',
//'application/ecmascript', 'text/vbscript',
//'text/fluffscript');
// поддерживаются всеми браузерами
$safe = array('text/html', 'image/x-icon', 'text/plain',
'text/xml', 'application/xml', 'application/rss+xml','text/css', 'text/javascript',
'application/javascript', 'application/x-javascript',
'text/x-js', 'text/ecmascript',
'application/ecmascript', 'text/vbscript',
'text/fluffscript');
foreach (headers_list() as $header) {
if (stripos($header, 'content-type') === 0) {
$header = preg_split('/\s*:\s*/', $header);
$type = strtolower($header[1]);
if (in_array($type, $safe)) return 'safe';
if (in_array($type, $notsafe)) return 'notsafe';
return 'unknown';
}
}
// в случае, если Content-type не задан, считаем,
// что это text/html
return 'safe';
}
// проверка ограничний на размер
static private function checksize($len)
{
if ($minsize && $len < $minsize) return false;
if ($maxsize && $len > $maxsize) return false;
return true;
}
// проверка, прош?л ли запрос через прокси
static private function checkproxy()
{
// в версии HTTP 1.1 есть обязательный заголовок,
// который выставляет прокси — «Via», в HTTP/1.0
// такого признака нет
return $_SERVER['SERVER_PROTOCOL'] == 'HTTP/1.0' ||
isset($_SERVER['HTTP_VIA']);
}
// обработчик, который решит будет ли сжат контент и сожм?т его
static public function handler($content, $stage)
{
// проверим — нужно ли сжимать (не срабатывают ли
// ограничения на размер)
if ($content == '' || !self::checksize(strlen($content))) {
return $content;
}
if (self::$supported === null) {
self::init();
}
// браузер не поддерживается, высылаем оригинал
if (self::$supported === false) {
return $content;
}
// этот заголовок скажет прокси-серверу и браузеру,
// что возвращаемое нами будет иметь разное
// содержимое в зависиомости от типа браузера и заголовка
// типа кодирования
header('Vary: User-agent, Content-encoding');
// запрещаем прокси сохранять содержимое, для обхода
// прокси не справляющихся
// с кэшированием сжатого контента
if (self::checkproxy()) {
header('Cache-control: private');
}
return self::compress($content);
}
static public function compress($content)
{
// сжимаем текст gzip'ом
$content = gzencode ($content, $deflatelevel, FORCE_GZIP);
// не забываем отдать длину сжатого потока,
// это *очень* важно: некоторые браузеры не
// обрабатывают сжатый поток без указания длины
header('Content-length: ' . strlen($content));
// …и метод его кодирования
header('Content-encoding: gzip');
return $content;
}
}
ob_start(array('mod_compress', 'handler'));
?>