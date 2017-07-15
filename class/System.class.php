<?php

class System {

    public static function SelecionaConfiguracoes() {
        $stmt = DB::newPDO()->prepare('SELECT * FROM configuracoes');
        $stmt->execute();

        return $stmt;
    }

    public static function ForceHTTPS() {

        if (SSL_HTTP == true) {
            if ($_SERVER['HTTP_HOST'] != 'localhost') {
                if ($_SERVER['HTTPS'] == null) {
                    $url = HTTP_SERVER . $_SERVER['REQUEST_URI'];
                    header('Location:' . $url);
                }
            }
        }
    }

    public static function AtualizaConfiguracoes() {
        $uploaddir = '/views/assets/img/';

        if (isset($_POST['alteraConfiguracoes'])) {

            if (isset($_POST['paginaConstrucao'])) {
                $paginaConstrucao = 1;
            } else {
                $paginaConstrucao = 0;
            }

            if (isset($_POST['favicon'])) {
                $favicon = $_POST['hFavicon'];
            } else {
                $favicon = $_POST['favicon'];
            }
            if (isset($_POST['logo'])) {
                $logo = $_POST['hLogo'];
            } else {
                $logo = $_POST['logo'];
            }
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $whatsapp = $_POST['whatsapp'];
            $endereco = $_POST['endereco'];
            $copyright = $_POST['copyright'];

            echo $paginaConstrucao;
            echo '<br/>';
            echo $favicon;
            echo '<br/>';
            echo $logo;
            echo '<br/>';
            echo $telefone;
            echo '<br/>';
            echo $email;
            echo '<br/>';
            echo $whatsapp;
            echo '<br/>';
            echo $endereco;
            echo '<br/>';
            echo $copyright;
            echo '<br/>';

            $stmt = DB::newPDO()->prepare('UPDATE configuracoes SET paginaConstrucao=?,favicon=?,logo=?,telefone=?,email=?,whatsapp=?,endereco=?,copyright=?');
            $stmt->bindValue(1, $paginaConstrucao, PDO::PARAM_INT);
            $stmt->bindValue(2, $favicon, PDO::PARAM_STR);
            $stmt->bindValue(3, $logo, PDO::PARAM_STR);
            $stmt->bindValue(4, $telefone, PDO::PARAM_STR);
            $stmt->bindValue(5, $email, PDO::PARAM_STR);
            $stmt->bindValue(6, $whatsapp, PDO::PARAM_INT);
            $stmt->bindValue(7, $endereco, PDO::PARAM_STR);
            $stmt->bindValue(8, $copyright, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() == 1) {
                echo 'deu boa';
            } else {
                echo 'deu ruim';
            }
        }
    }

}
