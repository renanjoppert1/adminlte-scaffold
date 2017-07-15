<?php

class Usuario {
    
    public static function exibeUsuario() {
        $select = DB::newPDO()->prepare('SELECT * FROM usuarios WHERE email = ?');
        $select->bindValue(1, $_SESSION['email'], PDO::PARAM_STR);
        $select->execute();
        $result = $select->fetch(PDO::FETCH_OBJ);
        
        return $result;
    }

}
