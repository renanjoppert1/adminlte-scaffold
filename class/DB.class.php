<?php
class DB {
    private static $isPDO;
    private static $isPDOBrasil;
    
    public static function newPDO(){
        try {
            self::$isPDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            self::$isPDO->exec('SET NAMES utf8');
            
            return self::$isPDO;
            return new PDO();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public static function newPDOBrasil(){
        try {
            if (is_null(self::$isPDOBrasil)) {
                self::$isPDOBrasil = new PDO('mysql:host=' . DB_HOST . '; dbname=' . DB_NAME2, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            }

            return self::$isPDOBrasil;
            return new PDO();
            
        } catch (PDOException $e) {
            die('Connection Failed newPDOBrasil!: ' . $e->getMessage());
        }
    }
}
