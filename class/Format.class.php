<?php

class Format {

    public static function urlConvert($string) {
        $str = strip_tags($string);
        $str = substr($str, 0, 100);
        $str = strtolower(utf8_decode($str));
        $i = 1;
        $str = strtr($str, utf8_decode('àáâãäåæçèéêëìíîïñòóôõöøùúûýýÿ'), 'aaaaaaaceeeeiiiinoooooouuuyyy');
        $str = preg_replace("/([^a-z0-9])/", '-', utf8_encode($str));
        while ($i > 0)
            $str = str_replace('--', '-', $str, $i);
        if (substr($str, -1) == '-')
            $str = substr($str, 0, -1);

        return $str;
    }
    
    public static function RetiraEspaco( $string ){
        return str_replace(' ', '', $string);        
    }
    
    public static function getDataNow(){
        return date('Y/m/d H:i:s');
    }

}
