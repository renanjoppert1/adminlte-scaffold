<?php


class FrontEnd {
    
    public static function MensagemSucesso($string){
        
        $corpo = '<div class="col-sm-12 success" style="border-radius: 5px; margin-bottom: 20px; text-align: center;">'.$string.'</div>';
        echo $corpo;
    }
    
    public static function MensagemErro($string){
        
        $corpo = '<div class="col-sm-12 bg-danger" style="border-radius: 5px; margin-bottom: 20px; text-align: center;">'.$string.'</div>';
        echo $corpo;
    }
    
}
