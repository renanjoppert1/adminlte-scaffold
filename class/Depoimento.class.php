<?php

class Depoimento {
    
    public static function CadastraDepoimento(){
        
        if(isset($_POST['depoimentoBtn'])){
            if(isset($_FILES['foto'])){
                $foto = $_FILES['foto']['name'];
            }else{
                $foto = null;
            }
            
            $stmt = DB::newPDO()->prepare('INSERT INTO depoimentos(pessoa, depoimento, img_pessoa, profissao, status, criado_em, email) VALUES (?, ?, ?, ?, ?, ?, ?)');
            $stmt->bindValue(1, $_POST['nome'], PDO::PARAM_STR);
            $stmt->bindValue(2, $_POST['depoimento'], PDO::PARAM_STR);
            $stmt->bindValue(3, $foto, PDO::PARAM_STR);
            $stmt->bindValue(4, $_POST['profissao'], PDO::PARAM_STR);
            $stmt->bindValue(5, 0, PDO::PARAM_INT);
            $stmt->bindValue(6, Format::getDataNow() , PDO::PARAM_STR);
            $stmt->bindValue(7, $_POST['email'] , PDO::PARAM_STR);
            $stmt->execute();
            
            if($stmt->rowCount() == 1){
                FrontEnd::MensagemSucesso('Obrigado por deixar o seu depoimento!');
            }else{
                FrontEnd::MensagemErro('Houve um erro ao cadastrar o seu depoimento.<br/>Entre em contato conosco');
            }
        }
        
    }
}
