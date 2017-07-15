<?php

class Login {

    public static function VerificaLogin() {
        if (isset($_SESSION['usuarioId']) && isset($_SESSION['usuarioNome']) && isset($_SESSION['usuarioEmail']) && isset($_SESSION['usuarioSenha']) && isset($_SESSION['usuarioPermissao']) && isset($_SESSION['usuarioStatus'])) {
             
            $stmt = DB::newPDO()->prepare("SELECT * FROM usuarios WHERE id_usuario = ? AND nome = ? AND email = ? AND senha = ? AND permissao = ? AND status = ?");
            $stmt->bindValue(1, $_SESSION['usuarioId'], PDO::PARAM_INT);
            $stmt->bindValue(2, $_SESSION['usuarioNome'], PDO::PARAM_STR);
            $stmt->bindValue(3, $_SESSION['usuarioEmail'], PDO::PARAM_STR);
            $stmt->bindValue(4, $_SESSION['usuarioSenha'], PDO::PARAM_STR);
            $stmt->bindValue(5, $_SESSION['usuarioPermissao'], PDO::PARAM_INT);
            $stmt->bindValue(6, $_SESSION['usuarioStatus'], PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() != 1) {
                
                header("Location:" . HTTP_SERVER . 'admin/');
            }
            
        } else {
            header("Location:" . HTTP_SERVER . 'admin/');
        }
    }
    
    public static function VerificaLoginPageLogin() {
        if (isset($_SESSION['usuarioId']) && isset($_SESSION['usuarioNome']) && isset($_SESSION['usuarioEmail']) && isset($_SESSION['usuarioSenha']) && isset($_SESSION['usuarioPermissao']) && isset($_SESSION['usuarioStatus'])) {
             
            $stmt = DB::newPDO()->prepare("SELECT * FROM usuarios WHERE id_usuario = ? AND nome = ? AND email = ? AND senha = ? AND permissao = ? AND status = ?");
            $stmt->bindValue(1, $_SESSION['usuarioId'], PDO::PARAM_INT);
            $stmt->bindValue(2, $_SESSION['usuarioNome'], PDO::PARAM_STR);
            $stmt->bindValue(3, $_SESSION['usuarioEmail'], PDO::PARAM_STR);
            $stmt->bindValue(4, $_SESSION['usuarioSenha'], PDO::PARAM_STR);
            $stmt->bindValue(5, $_SESSION['usuarioPermissao'], PDO::PARAM_INT);
            $stmt->bindValue(6, $_SESSION['usuarioStatus'], PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() == 1) {
                
                header("Location:" . HTTP_SERVER . '/admin/painel');
            }
            
        }
    }

    public static function FazLogin() {
        
        if (isset($_POST['login'])) {
            
            $stmt = DB::newPDO()->prepare('SELECT * FROM usuarios WHERE email = ? AND senha = ?');
            $stmt->bindValue(1, $_POST['email'], PDO::PARAM_STR);
            $stmt->bindValue(2, md5($_POST['senha']), PDO::PARAM_STR);
            $stmt->execute();
            
            $dadosAcesso = $stmt->fetch(PDO::FETCH_OBJ);
            
            if ($stmt->rowCount() == 1) {
                
                $_SESSION['usuarioId'] = $dadosAcesso->id_usuario;
                $_SESSION['usuarioNome'] = $dadosAcesso->nome;
                $_SESSION['usuarioEmail'] = $dadosAcesso->email;
                $_SESSION['usuarioSenha'] = $dadosAcesso->senha;
                $_SESSION['usuarioPermissao'] = $dadosAcesso->permissao;
                $_SESSION['usuarioStatus'] = $dadosAcesso->status;
                
                header('Location:' . HTTP_ADMIN . 'painel');
            } else {
                echo 'Os dados digitados não conferem!';
            }
        }
    }

    public static function Logout() {
//        session_start();
//        $_SESSION = array();
//        session_destroy();
//
//        header("Location:". HTTP_SERVER);
    }

}
