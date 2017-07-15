<?php

require_once 'class/WideImage/WideImage.php';

class Imoveis {

    public static function AdicionaImovel() {
        if (isset($_POST['adicionaImovel'])) {

            if (!isset($_POST['venda'])) {
                $venda = 0;
            } else {
                $venda = $_POST['venda'];
            }

            if (!isset($_POST['aluga'])) {
                $aluga = 0;
            } else {
                $aluga = $_POST['aluga'];
            }

            if (!isset($_POST['bannerDestaque'])) {
                $bannerDestaque = 0;
            } else {
                $bannerDestaque = $_POST['bannerDestaque'];
            }

            if (!isset($_POST['homeDestaque'])) {
                $homeDestaque = 0;
            } else {
                $homeDestaque = $_POST['homeDestaque'];
            }



            if (isset($_FILES['imagemPrincipal'])) {
                $name = $_FILES['imagemPrincipal']['name']; //Atribui uma array com os nomes dos arquivos à variável
                $tmp_name = $_FILES['imagemPrincipal']['tmp_name']; //Atribui uma array com os nomes temporários dos arquivos à variável

                $dir = 'views/uploads/imoveis/';

                $allowedExts = array(".gif", ".jpeg", ".jpg", ".png", ".bmp"); //Extensões permitidas

                $ext = strtolower(substr($name, -4));

                if (in_array($ext, $allowedExts)) { //Pergunta se a extensão do arquivo, está presente no array das extensões permitidas
                    $new_name = 'imovel_' . $idImovel . '_' . md5(date("Y.m.d-H.i.s")) . '_DEFAULT' . $ext;
                    $image = WideImage::load($tmp_name); //Carrega a imagem utilizando a WideImage
                    $image = $image->resize(500, 250, 'inside'); //Redimensiona a imagem para 170 de largura e 180 de altura, mantendo sua proporção no máximo possível
                    $image->saveToFile($dir . $new_name); //Salva a imagem 
                }
            }

            $stmt = DB::newPDO()->prepare('INSERT INTO imoveis(tipo_imovel, venda, aluga, quartos, banheiros, vagas, area, referencia, endereco, valor_aluguel, valor_venda, valor_iptu, valor_condominio, titulo, cep, bairro, cidade, estado, bannerDestaque, homeDestaque, imagem_principal) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?, ?)');
            $stmt->bindValue(1, $_POST['tipoImovel'], PDO::PARAM_STR);
            $stmt->bindValue(2, $venda, PDO::PARAM_INT);
            $stmt->bindValue(3, $aluga, PDO::PARAM_INT);
            $stmt->bindValue(4, $_POST['quartos'], PDO::PARAM_INT);
            $stmt->bindValue(5, $_POST['banheiros'], PDO::PARAM_INT);
            $stmt->bindValue(6, $_POST['garagem'], PDO::PARAM_INT);
            $stmt->bindValue(7, $_POST['area'], PDO::PARAM_INT);
            $stmt->bindValue(8, @$_POST['referencia'], PDO::PARAM_INT);
            $stmt->bindValue(9, $_POST['rua'], PDO::PARAM_STR);
            $stmt->bindValue(10, $_POST['valorLocacao'], PDO::PARAM_INT);
            $stmt->bindValue(11, $_POST['valorVenda'], PDO::PARAM_INT);
            $stmt->bindValue(12, $_POST['valorIPTU'], PDO::PARAM_INT);
            $stmt->bindValue(13, $_POST['valorCondominio'], PDO::PARAM_INT);
            $stmt->bindValue(14, $_POST['titulo'], PDO::PARAM_STR);
            $stmt->bindValue(15, $_POST['cep'], PDO::PARAM_STR);
            $stmt->bindValue(16, $_POST['bairro'], PDO::PARAM_STR);
            $stmt->bindValue(17, $_POST['cidade'], PDO::PARAM_STR);
            $stmt->bindValue(18, $_POST['estado'], PDO::PARAM_STR);
            $stmt->bindValue(19, $bannerDestaque, PDO::PARAM_INT);
            $stmt->bindValue(20, $homeDestaque, PDO::PARAM_INT);
            $stmt->bindValue(21, $new_name, PDO::PARAM_STR);
            $stmt->execute();

            $stmtID = DB::newPDO()->prepare('SELECT * FROM imoveis ORDER BY id_imovel DESC LIMIT 1');
            $stmtID->execute();

            $dadosSELECTID = $stmtID->fetch(PDO::FETCH_OBJ);
            $idImovel = $dadosSELECTID->id_imovel;

            $stmtImovel = DB::newPDO()->prepare('SELECT * FROM imoveis WHERE id_imovel = ?');
            $stmtImovel->bindValue(1, $idImovel, PDO::PARAM_INT);
            $stmtImovel->execute();



            if (isset($_FILES['imagens'])) {
                $name = $_FILES['imagens']['name']; //Atribui uma array com os nomes dos arquivos à variável
                $tmp_name = $_FILES['imagens']['tmp_name']; //Atribui uma array com os nomes temporários dos arquivos à variável

                $dir = 'views/uploads/imoveis/';

                $allowedExts = array(".gif", ".jpeg", ".jpg", ".png", ".bmp"); //Extensões permitidas

                for ($i = 0; $i < count($tmp_name); $i++) { //passa por todos os arquivos
                    $ext = strtolower(substr($name[$i], -4));

                    if (in_array($ext, $allowedExts)) { //Pergunta se a extensão do arquivo, está presente no array das extensões permitidas
                        $new_name = 'imovel_' . $idImovel . '_' . md5(date("Y.m.d-H.i.s")) . '_FULL' . $ext;

                        $image = WideImage::load($tmp_name[$i]); //Carrega a imagem utilizando a WideImage

                        $image = $image->resize(170, 180, 'inside'); //Redimensiona a imagem para 170 de largura e 180 de altura, mantendo sua proporção no máximo possível
                        $image = $image->crop('center', 'center', 170, 180); //Corta a imagem do centro, forçando sua altura e largura

                        $image->saveToFile($dir . $new_name); //Salva a imagem 
                    }
                }
            }

            header('Location:' . HTTP_ADMIN);
        }
    }

    public static function ListaTodosImoveisOrderByID() {
        $stmt = DB::newPDO()->prepare('SELECT * FROM imoveis ORDER BY id_imovel DESC');
        $stmt->execute();

        return $stmt;
    }

    public static function SelecionaImovelByID($id) {
        $stmt = DB::newPDO()->prepare('SELECT * FROM imoveis WHERE id_imovel = ?');
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt;
    }

    public static function FilterClassImovelByID($id) {

        $stmt = DB::newPDO()->prepare('SELECT * FROM imoveis WHERE id_imovel = ?');
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $imovel = $stmt->fetch(PDO::FETCH_OBJ);

        $atributos = array();

        array_push($atributos, 'mix' . ' ');
        array_push($atributos, Format::RetiraEspaco($imovel->tipo_imovel) . ' ');
        if ($imovel->venda == 1) {
            array_push($atributos, 'venda ');
        }
        if ($imovel->aluga == 1) {
            array_push($atributos, 'locacao ');
        }
        if ($imovel->valor_venda_promocional != null) {
            array_push($atributos, 'promocao ');
        }
        array_push($atributos, $imovel->titulo . ' ');
        array_push($atributos, Format::RetiraEspaco($imovel->cidade) . ' ');
        array_push($atributos, $imovel->estado . ' ');

        foreach ($atributos as $class) {
            echo $class;
        }
    }

    public static function SelecionaTiposImovelDistinct() {

        $stmt = DB::newPDO()->prepare('SELECT DISTINCT tipo_imovel FROM imoveis');
        $stmt->execute();
        $categorias = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($categorias as $categoria) {
            echo '<li class="filter" data-filter=".' . Format::RetiraEspaco($categoria->tipo_imovel) . '"><a href="#' . Format::RetiraEspaco($categoria->tipo_imovel) . '" data-type="' . Format::RetiraEspaco($categoria->tipo_imovel) . '">' . $categoria->tipo_imovel . '</a></li>';
        }
    }

    public static function ListaImoveisFilterByTipo() {
        $stmt = DB::newPDO()->prepare('SELECT DISTINCT cidade FROM imoveis');
        $stmt->execute();
        $categorias = $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function SelecionaCidadesDistintas() {
        $stmt = DB::newPDO()->prepare('SELECT DISTINCT cidade FROM imoveis ORDER BY cidade ASC');
        $stmt->execute();
        $cidades = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($cidades as $cidade) {
            echo '<option value=".' . Format::RetiraEspaco($cidade->cidade) . '" data-filter="' . Format::RetiraEspaco($cidade->cidade) . '">' . $cidade->cidade . '</option>';
        }
    }

    public static function SelecionaImoveisDestaqueHome() {
        $stmt = DB::newPDO()->prepare('SELECT * FROM imoveis WHERE homeDestaque = 1');
        $stmt->execute();

        return $stmt;
    }

    public static function InteresseImovel() {
        if (isset($_POST['interesseImovel'])) {


            $stmt = DB::newPDO()->prepare('SELECT * FROM imoveis WHERE id_imovel = ?');
            $stmt->bindValue(1, $_POST['idImovel'], PDO::PARAM_INT);
            $stmt->execute();

            $imovel = $stmt->fetch(PDO::FETCH_OBJ);
            
            $param = array(
                'id' => $imovel->id_imovel,
                'titulo' => $imovel->titulo,
                'tipo' => $imovel->tipo_imovel,
                'nomeContato' => $_POST['nome'],
                'emailContato' => $_POST['email'],
                'foneContato' => $_POST['fone'],
                'mensagemContato' => $_POST['mensagem']
            );

            if (FormMailer::EnvioInteresseImovel($param) == true) {
                echo '<div class="col-sm-12 success" style="border-radius: 5px; margin-bottom: 20px;">Interesse enviado com sucesso!</div>';

                $stmt = DB::newPDO()->prepare('INSERT INTO interesse_imovel(id_imovel, nome, fone, email, mensagem) VALUES (?, ?, ?, ?, ?)');
                $stmt->bindValue(1, $imovel->id_imovel, PDO::PARAM_STR);
                $stmt->bindValue(2, $_POST['nome'], PDO::PARAM_STR);
                $stmt->bindValue(3, $_POST['fone'], PDO::PARAM_STR);
                $stmt->bindValue(4, $_POST['email'], PDO::PARAM_STR);
                $stmt->bindValue(5, $_POST['mensagem'], PDO::PARAM_STR);
                $stmt->execute();
                
            } else {
                echo '<div class="col-sm-12 bg-danger" style="border-radius: 5px; margin-bottom: 20px;"><p style="margin: 15px 0 15px;">Não foi possível enviar o e-mail.</p></div>';
            }
        }
    }

}
