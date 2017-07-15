<?php
require_once DIR_FRONT . 'includes/header.inc.php';
?>
<section class="row breadcrumb" style="background-image: url(<?= DIR_PUBLIC_IMG ?>/bg-sobre.jpg);">
    <div class="container">
        <h1 class="col-lg-6 col-md-6 col-sm-6 col-xs-6">DEPOIMENTOS</h1>
        <ol class="breadcrumb pull-right col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <li><a href="<?= HTTP_SERVER ?>/">HOME</a></li>
            <li><a href="<?= HTTP_SERVER ?>/depoimentos">DEPOIMENTOS</a></li>
        </ol>
    </div>
</section>

<section id="depoimentos" class="row depoimentosPage">
    <div class="container">
        <p class="col-sm-12 text-center" style="margin-top: 20px; margin-bottom: 50px;">
            A BRO Imóveis se preocupa sempre em atender os seus clientes de forma excelente.<br/>Confira o que alguns de nossos clientes falam sobre nós!<br/>
            <img src="<?= DIR_PUBLIC_IMG ?>/hr.png" width="280" height="2" />
        </p>
        <div class="col-sm-6">
            <div class="col-sm-12 depoimento-item">
                <div class="col-sm-4 avatar" style="padding-right: 0px;">
                    <img src="<?= DIR_PUBLIC_IMG ?>/img-avatar.png" class="img-responsive" />
                </div>
                <div class="col-sm-8 depoimento-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
                <div class="col-sm-offset-4 col-sm-8">
                    <div class="col-sm-12">
                        <img src="<?= DIR_PUBLIC_IMG ?>/icon-depoimento.jpg" />
                    </div>
                    <h3>Renan Joppert</h3>
                    <h4>Desenvolvedor Web</h4>
                </div>
            </div>
            <div class="col-xs-12">
                <hr/>
            </div>
            <div class="col-sm-12 depoimento-item">
                <div class="col-sm-4 avatar pull-right" style="padding: 0px;">
                    <img src="<?= DIR_PUBLIC_IMG ?>/img-avatar.png" class="img-responsive" />
                </div>
                <div class="col-sm-8 depoimento-text pull-right" style="margin: 0px; min-height: 170px;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
                <div class="col-sm-offset-4 col-sm-8">
                    <div class="col-sm-12">
                        <img src="<?= DIR_PUBLIC_IMG ?>/icon-depoimento.jpg" />
                    </div>
                    <h3>Renan Joppert</h3>
                    <h4>Desenvolvedor Web</h4>
                </div>
            </div>
            <div class="col-xs-12">
                <hr/>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="col-sm-12 col-xs-12" style="margin-bottom: 50px;">
                <?php
                Depoimento::CadastraDepoimento();
                ?>
                <form id="maisInfo" method="post" enctype="multipart/form-data">
                    <h2 class="margin">Quer deixar um depoimento ?</h2>
                    <p>Quer falar algo sobre a BRO Imóveis ?<br/>Deixe o seu depoimento no formulário abaixo.</p>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" />
                    <input type="email" class="form-control" name="email" placeholder="E-mail" />
                    <input type="text" class="form-control" name="profissao" placeholder="Profissao" />
                    <input type="file" class="" name="foto" />
                    <textarea class="form-control" name="depoimento" placeholder="Mensagem do Depoimento"></textarea>
                    <input type="submit" class="btn" name="depoimentoBtn" value="Deixar Depoimento" />
                </form>
            </div>
        </div>
    </div>
</section>
<?php
require_once DIR_FRONT . 'includes/newsletter.inc.php';
require_once DIR_FRONT . 'includes/footer.inc.php';
?>