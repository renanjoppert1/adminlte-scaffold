<?php
$imovel = Imoveis::SelecionaImovelByID($url[4])->fetch(PDO::FETCH_OBJ);
require_once DIR_FRONT . 'includes/header.inc.php';
?>
<section class="row breadcrumb imovelHeader" style="background-image: url(<?= DIR_PUBLIC_IMG ?>/bg-sobre.jpg);">
    <div class="container">
        <h1 id="tituloImovel" class="col-lg-6 col-md-6 col-sm-12 col-xm-6"><?= $imovel->titulo ?></h1>
        <ol class="breadcrumb pull-right col-lg-6 col-md-6 col-sm-12 col-xm-6">
            <li><a href="<?= HTTP_SERVER ?>/">HOME</a></li>
            <li><a href="<?= HTTP_SERVER ?>/imoveis">IMÓVEIS</a></li>
            <li><a href="<?= HTTP_SERVER ?>/imoveis/categoria/<?= Format::urlConvert($imovel->tipo_imovel) ?>"><?= $imovel->tipo_imovel ?></a></li>
        </ol>
    </div>
</section>
<section id="imovel" class="row">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="col-xs-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <a href="<?= DIR_PUBLIC_UPLOADS ?>/imoveis/<?= $imovel->imagem_principal ?>" rel="shadowbox"><img src="<?= DIR_PUBLIC_UPLOADS ?>/imoveis/<?= $imovel->imagem_principal ?>" width="100%"></a>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12  col-md-12 col-lg-12">
                    <h2>CARACTERÍSTICAS DO IMÓVEL</h2>
                    <div class="col-xs-12" id="descImovelIcons">
                        <ul>
                            <li class="col-xs-6"><img src="<?= DIR_PUBLIC_IMG ?>/icon-area.png" /> Área Total: <?= $imovel->vagas ?></li>
                            <li class="col-xs-6"><img src="<?= DIR_PUBLIC_IMG ?>/icon-area.png" /> Área Útil: <?= $imovel->vagas ?></li>
                            <li class="col-xs-6"><img src="<?= DIR_PUBLIC_IMG ?>/icon-banheiro.png" /> Banheiros: <?= $imovel->banheiros ?></li>
                            <li class="col-xs-6"><img src="<?= DIR_PUBLIC_IMG ?>/icon-quarto.png" /> Quartos: <?= $imovel->quartos ?></li>
                            <li class="col-xs-6"><img src="<?= DIR_PUBLIC_IMG ?>/icon-garagem.png" /> Vagas de Garagem: <?= $imovel->vagas ?></li>
                            <li class="col-xs-6"><img src="<?= DIR_PUBLIC_IMG ?>/icon-area.png" /> Tipo: <?= $imovel->tipo_imovel ?></li>
                            <li class="col-xs-6"><img src="<?= DIR_PUBLIC_IMG ?>/icon-quarto.png" /> Suítes: <?= $imovel->banheiros ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hidden-xs hidden-sm col-md-6 col-lg-6">
                <?php
                Imoveis::InteresseImovel();
                ?>
                <form id="maisInfo" method="post">
                    <h2 class="margin">Ficou Interessado ?</h2>
                    <p>Deixe o seu contato que ligamos para você!</p>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" />
                    <input type="email" class="form-control" name="email" placeholder="E-mail" />
                    <input type="text" class="form-control celular" name="fone" placeholder="Telefone" />
                    <input type="hidden" class="form-control" value="<?= $imovel->id_imovel ?>" name="idImovel" />
                    <textarea class="form-control" name="mensagem">Olá, gostaria de receber mais informações sobre este imóvel</textarea>
                    <input type="submit" class="btn" name="interesseImovel" value="Quero Mais Informações" />
                </form>
            </div>

            <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12">
                <h2 class="margin">VALORES</h2>
                <p style="margin-bottom: 50px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-xs-12  col-md-12 col-lg-12">
                <h2 class="margin">DETALHES DO IMÓVEL</h2>
                <p style="margin-bottom: 50px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-sm-12 col-xs-12 hidden-md hidden-lg" style="margin-bottom: 50px;">
                <form id="maisInfo">
                    <h2 class="margin">Ficou Interessado ?</h2>
                    <p>Deixe o seu contato que ligamos para você!</p>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" />
                    <input type="email" class="form-control" name="email" placeholder="E-mail" />
                    <input type="text" class="form-control" name="fone" placeholder="Telefone" />
                    <textarea class="form-control">Olá, gostaria de receber mais informações sobre este imóvel</textarea>
                    <input type="submit" class="btn" name="maisinfo" value="Quero Mais Informações" />
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <input type="hidden" style="width: 50%;" id="enderecoImovel" value="<?= $imovel->endereco ?>,<?= $imovel->cidade ?>,<?= $imovel->estado ?>"/>
            <div id="mapa" style="height: 620px; width: 100%;"></div>
        </div>
        <div class="col-xs-4">
        </div>
    </div> 

</section>
<?php
require_once DIR_FRONT . 'includes/footer.inc.php';
?>