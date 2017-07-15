<?php
session_start();
include_once 'includes/includes.inc.php';
System::ForceHTTPS();
$System = System::SelecionaConfiguracoes()->fetch(PDO::FETCH_OBJ);

// URL AMIGAVEL

/*
 *   VERIFICA QUANTOS PARÂMETROS FORAM INSTANCIADOS NA URL
 */
@$url = array_filter(explode("/", $_GET['url']));

if (count($url) == 0) {
    $camada = 'public';
    $url[0] = 'home';
} else {
    $camada = $url[0];
}

switch ($camada) {
    case 'admin':
        if (count($url) == 1) {
            $file = 'views/admin/login.php';
        } else {
            if ($url[1] == 'painel') {
                $file = 'views/admin/' . $url[1] . '.php';
            } else {
                $file = 'views/admin/' . $url[1] . '/' . $url[2] . '.php';
            }
        }
        break;

    default:
        $file = 'views/public/' . $url[0] . '.php';
        break;
}

if ($System->paginaConstrucao == 1) {
    if (!isset($_COOKIE['liberado']) && $camada != 'admin') {
        $file = 'views/public/pagina-em-construcao.php';
    }

    if ($url[0] == 'liberado') {
        setcookie('liberado', 'LIBERADO', time() + (86400 * 30)); // 86400 = 1 day
        header("Location:" . HTTP_SERVER);
    }
}


if (file_exists($file)) {
    require_once $file;
} else {
    require_once 'views/public/404.php';
}
?>