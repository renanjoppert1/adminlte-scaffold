<?php

if( isset($url[3]) ){
    echo Banner::DeletaBannerByID($url[3])->rowCount();
    header('Location:'.HTTP_ADMIN.'/banners/ver-todos/sucesso');
}