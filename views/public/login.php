<?php
require_once './includes/define.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Sistema de Interessados Unipública</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?= DIR_PUBLIC_CSS ?>bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= DIR_PUBLIC_CSS ?>AdminLTE.min.css">
        <!-- Custom -->
        <link rel="stylesheet" href="<?= DIR_PUBLIC_CSS ?>style.css">
        <link rel="icon" href="<?= DIR_PUBLIC_IMG ?>favicon.ico" />

        <meta name="robots" content="noindex">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="login-box-body">
                <a href=""><img src="http://www.unipublicabrasil.com.br/img/logo-md.png" /></a>
                <p class="login-box-msg">Insira suas informações para acessar o painel</p>
                <?php
                if (isset($returnErro)) {
                    echo '<p class="bg-danger">' . $returnErro . '</p>';
                }
                ?>
                <form method="post">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="usuario" placeholder="Digite seu usuário">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Digite sua senha" name="senha">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-xs-12">
                            <input type="submit" name="login" class="btn bg-orange btn-block btn-flat" value="Fazer Login">
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 2.2.3 -->
        <script src="<?= DIR_PUBLIC_PLUGINS ?>jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?= DIR_PUBLIC_JS ?>bootstrap.min.js"></script>
        <!-- Angular -->
        <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
<!--        <script src="<?= DIR_PUBLIC_JS ?>script.js"></script>-->
        <script>
            // define application
            angular.module('loginApp', [])
                    .controler('userController'){
                        
                    }
        </script>
    </body>
</html>
