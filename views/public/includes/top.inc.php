<?php
$configuracoes = System::SelecionaConfiguracoes()->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BRO Imóveis</title>
        <?php
        if( $configuracoes->favicon != null ){
            echo '<link href="'. DIR_PUBLIC_IMG .'/'. $configuracoes->favicon .'" rel="icon">';
        }
        ?>
        <!-- BOOTSTRAP STYLE -->
        <link href="<?= DIR_PUBLIC_CSS ?>/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
        <!-- FONT MONTSERRAT -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i" rel="stylesheet"> 
        <!-- FONT ICON AWESOME -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
        <!-- Slick Style -->
        <link href="<?= DIR_PUBLIC_PLUGINS ?>/slick/slick.css" rel="stylesheet"> 
        <link href="<?= DIR_PUBLIC_PLUGINS ?>/slick/slick-theme.css" rel="stylesheet"> 
        <!-- PLUGIN STYLE SELECT2 -->
        <link href="<?= DIR_PUBLIC_PLUGINS ?>/select2/select2.min.css" rel="stylesheet" type="text/css" /> 
        <!-- Parallax Style -->
        <link href="<?= DIR_PUBLIC_PLUGINS ?>/parallaxBackground/css/main.css" rel="stylesheet" type="text/css" /> 
        <!-- Slider Bootstrap Style -->
        <link href="<?= DIR_PUBLIC_PLUGINS ?>/bootstrap-slider/slider.css" rel="stylesheet" type="text/css" /> 
         <!-- iCheck Style -->
        <link href="<?= DIR_PUBLIC_PLUGINS ?>/iCheck/skins/all.css" rel="stylesheet" type="text/css" /> 
        <link href="<?= DIR_PUBLIC_PLUGINS ?>/iCheck/skins/flat/red.css" rel="stylesheet" type="text/css" /> 
        <!-- Shadowbox Style -->
        <link rel="stylesheet" href="<?= DIR_PUBLIC_PLUGINS ?>/shadowbox/shadowbox.css">
        <!-- CSS STYLE-->
        <link rel="stylesheet" type="text/css" href="<?= DIR_PUBLIC_CSS ?>/style.css" media="screen" />
    </head>
    <body>