<?php

class Lead {

    public static function SelecionaTodosLeads() {

        $stmt = DB::newPDO()->prepare('SELECT * FROM newsletter_lead');
        $stmt->execute();

        return $stmt;
    }

    public static function CadastraLead() {

        if (isset($_POST['cadastraLead'])) {


            $stmt = DB::newPDO()->prepare('INSERT INTO newsletter_lead(nome, email, criado_em, status) VALUES (?,?,?, ?)');
            ;
            $stmt->bindValue(1, $_POST['nome'], PDO::PARAM_STR);
            $stmt->bindValue(2, $_POST['email'], PDO::PARAM_STR);
            $stmt->bindValue(3, Format::getDataNow(), PDO::PARAM_STR);
            $stmt->bindValue(4, '1', PDO::PARAM_INT);
            $stmt->execute();
            
            echo $stmt->rowCount();

            if ($stmt->rowCount() == 1) {
                echo '<div class="container"><div class="success"><p class="text-center">Obrigado por se cadastrar em nossa base de envios!</p></div></div>';
            }
        }
    }

    public static function CadastraLeadPaginaConstrucao() {
        if (isset($_POST['emailadd'])) {

            $stmt = DB::newPDO()->prepare('INSERT INTO pagina_construcao_leads(email, criado_em, status) VALUES (?, ?, ?)');
            $stmt->bindValue(1, strtolower($_POST['emailadd']), PDO::PARAM_STR);
            $stmt->bindValue(2, Format::getDataNow(), PDO::PARAM_STR);
            $stmt->bindValue(3, 0, PDO::PARAM_INT);
            $stmt->execute();

        } else {
            echo 'Nenhum dado foi enviado';
        }
    }

}
