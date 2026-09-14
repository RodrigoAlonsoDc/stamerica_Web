<?php 

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'stamerica.com.pe';
define('URL', $protocol . $host . '/');
define('HOST', 'localhost');
define('DB', '');
define('USER', 'root');
define('PASSWORD', "");
define('CHARSET', 'utf8mb4');
?>