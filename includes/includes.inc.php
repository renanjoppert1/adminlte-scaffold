<?php

include 'includes/define.inc.php';

function __autoload($classe) {
    $pastas = array('class');
    foreach ($pastas as $pasta) {
        if (file_exists($pasta . '/' . $classe . '.class.php')) {
            require_once $pasta . '/' . $classe . '.class.php';
            break;
        }
    }
}
