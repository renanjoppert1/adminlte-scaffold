<!doctype html>
<html lang="pt-br">
<head>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta charset="utf-8" />
    <title>Página em Construção</title>
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?= DIR_PUBLIC_CSS ?>/bootstrap.min.css">
    <style>
        html{position:relative;min-height:100%}
        body{text-align:center;background-image:url(http://lorempixel.com/650/650/city/);background-size:cover;background-attachment:fixed;background-repeat:no-repeat;font-family:'Open Sans Condensed',sans-serif}
        .overlay{position:absolute;top:0;left:0;right:0;bottom:0;width:100%;height:100%;z-index:-1;overflow:hidden;background:rgba(0,0,0,.8)}
        .content{width:75%;position:relative;margin:2% auto;padding:8px}
        .content h1{font-size:3em;color:#fff;letter-spacing:3px;padding:25px 0;text-transform:uppercase; margin-bottom: 50px;}
        .content .input-group{margin:0 auto;width:75%}
        .content p{color:#fff;line-height:30px;padding-bottom:12px}
        @media (max-width: 450px) {
            .content h1{letter-spacing:2px;font-size:25px}
            .content .input-group{margin:0 auto;width:100%}
        }
        .content ul.social{margin-top:45px}
        .content li a{color:#fff;margin:2%}

    </style>
    <!-- jQuery 2.2.3 -->
    <script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
</head>
<body>
    <div class="overlay"></div>
    <div class="wrap">
        <div class="content">
            <h1><img src="<?= DIR_PUBLIC_IMG ?>/logo-bro-imoveis.png"</h1>
            <h1>este site está em <span style="color:#fb0;">construção</span></h1>
            <p>Deseja saber quando o site for ao ar? <strong>Se cadastre!</strong></p>
            <div class="input-group input-group-lg">

                <input id="emailadd" name="emailadd" type="email" placeholder="Digite seu e-mail" class="form-control" required="required" />
                <span class="input-group-btn">
                    <button id="btn-ok" class="btn btn-warning">OK!</button>
                </span>


            </div>
            <ul class="social list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-codepen"></i></a></li>
            </ul>

        </div>
        <!-- END #CONTENT -->

    </div>
    <!-- END #WRAP -->

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog  modal-sm">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Sucesso!</h4>
                </div>
                <div class="modal-body">
                    <p>Obrigado por se cadastrar</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <script>

        $(function () {
            $('#btn-ok').on('click', function () {

                if ($('#emailadd').val().length === 0) {
                    alert('Digite um e-mail para se cadastrar');
                } else {

                    var email = $('#emailadd').val();
                    var data = 'emailadd=' + email;

                    $.ajax({
                        type: 'POST',
                        url: '<?= HTTP_SERVER ?>' + '/views/public/funcoes/cadastro-pagina-em-construcao.php',
                        data: data,
                        success: function (enviou) {

                           $(".input-group-lg").css('color', '#f90').html("Obrigado por se cadastrar!");;
                           $("#myModal").modal("show");

                        },
                        error: function () {
                            alert('Houve um erro ao cadastrar o E-mail');
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>