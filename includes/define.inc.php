<?php

header('Content-type: text/html; charset=UTF-8');
date_default_timezone_set('America/Sao_Paulo');

define('COMPANY_NAME', 'BRO Imóveis');

define('SMTP_HOST', 'smtp.broimoveis.com.br');
define('SMTP_PORT', 587);
define('SMTP_USER', 'broimoveis@broimoveis.com.br');
define('SMTP_PASS', 'chuhUf28uBra');
define('SMTP_SENDER', 'contato@broimoveis.com.br');

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define('HTTP_SERVER', 'http://localhost/broimoveis');
} else {
    define('HTTP_SERVER', 'https://www.broimoveis.com.br');
}

define('SSL_HTTP', true);

define('HTTP_ADMIN', HTTP_SERVER . '/admin');

define('DIR_PUBLIC_CSS', HTTP_SERVER . '/views/assets/css');
define('DIR_PUBLIC_JS', HTTP_SERVER . '/views/assets/js');
define('DIR_PUBLIC_IMG', HTTP_SERVER . '/views/assets/img');
define('DIR_PUBLIC_FONTS', HTTP_SERVER . '/views/assets/fonts');
define('DIR_PUBLIC_PLUGINS', HTTP_SERVER . '/views/assets/plugins');
define('DIR_PUBLIC_UPLOADS', HTTP_SERVER . '/views/uploads');
define('DIR_ASSETS_ADMIN', HTTP_SERVER . '/views/assets/admin');

define('DIR_ADMIN', 'views/admin/');

define('DIR_FRONT', 'views/public/');

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'broimoveis');
    define('DB_USER', 'root');
    define('DB_PASS', '');
} else {
    define('DB_HOST', 'mysql.broimoveis.com.br');
    define('DB_NAME', 'broimoveis01');
    define('DB_USER', 'broimoveis01');
    define('DB_PASS', '5r4e3n2a1n');
}