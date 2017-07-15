<?php

class Banner {

    public static function AdicionaBanner() {
        if (isset($_POST['adicionaBanner'])) {

            $countBannerOder = DB::newPDO()->prepare('SELECT ordem FROM banners ORDER BY ordem DESC LIMIT 1');
            $countBannerOder->execute();

            $cb = $countBannerOder->fetch(PDO::FETCH_OBJ);
            $calOrdem = $cb->ordem + 1;

            $caminho = 'views/uploads/banners/';

            $hashNomeBanner = md5(date('Y/m/d H:i:s')) . '_' . md5($_FILES['bannerimg']['name']);
            $tipoBanner = explode('.', $_FILES['bannerimg']['name']);
            $nomeBanner = $hashNomeBanner . '.' . $tipoBanner[1];
            try {
                $stmt = DB::newPDO()->prepare('INSERT INTO banners(ordem, nome, alt, imagem, link, criado_em, enviado_por, status) VALUES (?, ?, ?, ?, ?, ?, ?, 1)');
                $stmt->bindValue(1, $calOrdem, PDO::PARAM_INT);
                $stmt->bindValue(2, $_POST['nome'], PDO::PARAM_STR);
                $stmt->bindValue(3, $_POST['descricao'], PDO::PARAM_STR);
                $stmt->bindValue(4, $nomeBanner, PDO::PARAM_STR);
                $stmt->bindValue(5, $_POST['url'], PDO::PARAM_STR);
                $stmt->bindValue(6, date('Y/m/d H:i:s'), PDO::PARAM_STR);
                $stmt->bindValue(7, $_SESSION['usuarioId'], PDO::PARAM_INT);
                $stmt->execute();
            } catch (PDOException $e) {
                echo 'Erro: ' . $e->getMessage();
            }


            if ($stmt->rowCount() == 1) {
                move_uploaded_file($_FILES["bannerimg"]["tmp_name"], $caminho . $nomeBanner);
                header("Location:" . HTTP_ADMIN . '/banners/ver-todos/sucesso');
                echo $nomeBanner;
            } else {
                header("Location:" . HTTP_ADMIN . '/banners/ver-todos/erro');
            }
//            }
        }
    }

    public static function ListaTodosBanners() {
        $stmt = DB::newPDO()->prepare('SELECT * FROM banners ORDER BY ordem DESC');
        $stmt->execute();

        return $stmt;
    }

    public static function EditarBannerByID($id) {
        if (isset($_POST['alteraBanner']) OR isset($_FILES['bannerimg']['name']) AND $_FILES['bannerimg']['name'] != NULL) {
            $caminho = 'views/uploads/banners/';

            if (isset($_FILES['bannerimg']['name']) AND $_FILES['bannerimg']['name'] != NULL) {
;
                $hashNomeBanner = md5(date('Y/m/d H:i:s')) . '_' . md5($_FILES['bannerimg']['name']);
                $tipoBanner = explode('.', $_FILES['bannerimg']['name']);
                $nomeBanner = $hashNomeBanner . '.' . $tipoBanner[1];
            } else {
                $nomeBanner = $_POST['hBannerImg'];
            }

            $stmt = DB::newPDO()->prepare('UPDATE banners SET nome=?,alt=?,imagem=?,link=? WHERE idBanner = ?');
            $stmt->bindValue(1, $_POST['nome'], PDO::PARAM_STR);
            $stmt->bindValue(2, $_POST['descricao'], PDO::PARAM_STR);
            $stmt->bindValue(3, $nomeBanner, PDO::PARAM_STR);
            $stmt->bindValue(4, $_POST['url'], PDO::PARAM_STR);
            $stmt->bindValue(5, $id, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() == 1) {
                move_uploaded_file($_FILES["bannerimg"]["tmp_name"], $caminho . $nomeBanner);
                header("Location:" . HTTP_ADMIN . '/banners/ver-todos/sucesso');
                echo $nomeBanner;
            } else {
                header("Location:" . HTTP_ADMIN . '/banners/ver-todos/erro');
            }
        }
    }

    public static function DeletaBannerByID($id) {
        $stmt = DB::newPDO()->prepare('DELETE FROM banners WHERE idBanner= ?');
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt;
    }

    public static function SelecionaBannerByID($id) {
        $stmt = DB::newPDO()->prepare('SELECT * FROM banners WHERE idBanner= ?'); 
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt;
    }
    
    public static function ListaTodosBannersOrderNome() {
        $stmt = DB::newPDO()->prepare('SELECT * FROM banners WHERE status = 1 ORDER BY nome DESC'); 
        $stmt->execute();

        return $stmt;
    }

}
