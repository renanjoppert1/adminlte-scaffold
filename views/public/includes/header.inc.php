<?php
require_once DIR_FRONT . 'includes/top.inc.php';
?>
<body>
    <header>
        <div class="row">

            <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 text-center"><a href="<?= HTTP_SERVER ?>/"><img src="<?= DIR_PUBLIC_IMG ?>/logo-bro-imoveis.png" /></a></div>

            <div class="col-lg-6 col-sm-offset-0 col-md-8 col-sm-offset-1 col-sm-10 hidden-xs">
                <form id="busca-top" class="form-horizontal" method="post" action="<?= HTTP_SERVER ?>/imoveis">

                    <div class="row" id="info-form">
                        <p class="col-xs-12 no-padding" id="buscaAvancada"><a href="<?= HTTP_SERVER ?>/imoveis" class="active-item">Busca Avançada</a></p>
                    </div>

                    <div class="row" id="input-form">
                        <div class="form-group">
                            <div id="selectTipoImovel">
                                <select class="select" name="tipoImovel" id="tipoImovel" multiple="multiple" style="width: 200px;">
                                    <option value="0" data-subtext="Residencial">Selecione</option>
                                    <optgroup label="Residencial">
                                        <option value="3" data-subtext="Residencial">Apartamento</option>
                                        <option value="1" data-subtext="Residencial">Casa</option>
                                        <option value="2" data-subtext="Residencial">Casa em condomínio</option>
                                        <option value="8" data-subtext="Residencial">Chácara</option>
                                        <option value="12" data-subtext="Residencial">Fazenda</option>
                                        <option value="13" data-subtext="Residencial">Flat</option>
                                        <option value="14" data-subtext="Residencial">Garagem</option>
                                        <option value="15" data-subtext="Residencial">Kitnet</option>
                                        <option value="16" data-subtext="Residencial">Loft</option>
                                        <option value="4" data-subtext="Residencial">Sobrado</option>
                                        <option value="5" data-subtext="Residencial">Sobrado em condomínio</option>
                                        <option value="18" data-subtext="Residencial">Stúdio</option>
                                        <option value="7" data-subtext="Residencial">Terreno em condomínio</option>
                                        <option value="6" data-subtext="Residencial">Terreno/Área</option>
                                    </optgroup>
                                    <optgroup label="Comercial">
                                        <option value="9" data-subtext="Comercial">Barracão/Galpão</option>
                                        <option value="21" data-subtext="Comercial">Casa Comercial</option>
                                        <option value="11" data-subtext="Comercial">Edifício</option>
                                        <option value="22" data-subtext="Comercial">Garagem Comercial</option>
                                        <option value="17" data-subtext="Comercial">Loja</option>
                                        <option value="19" data-subtext="Comercial">Ponto/Negócios</option>
                                        <option value="10" data-subtext="Comercial">Sala/Conjunto Comercial</option>
                                        <option value="23" data-subtext="Comercial">Terreno/Área Comercial</option>
                                    </optgroup>
                                </select>
                            </div>
                            <select class="cidade select" name="tipoImovel" id="tipoImovel" style="width: 200px;" placeholder="Cidade">
                                <option value="#">Selecione uma Cidade</option>
                                <?php
                                Imoveis::SelecionaCidadesDistintas();
                                ?>
                            </select>
                            <select class="bairro select" name="bairro" id="bairro" style="width: 200px;" placeholder="Bairro">
                                <option value="#">Selecione um Bairro</option>
                                <option value="3" data-subtext="Residencial">São José dos Pinhais</option>
                                <option value="3" data-subtext="Residencial">Colombo</option>
                                <option value="3" data-subtext="Residencial">Almirante Tamandaré</option>
                                <option value="3" data-subtext="Residencial">Fazenda Rio Grande</option>
                                <option value="3" data-subtext="Residencial">Mandirituba</option>
                                <option value="3" data-subtext="Residencial">Agudos do Sul</option>
                                <option value="3" data-subtext="Residencial">Matinhos</option>
                                <option value="3" data-subtext="Residencial">Guaratuba</option>
                                <option value="3" data-subtext="Residencial">Camburiú</option>
                            </select>
                            <button type="submit" class="btn btn-primary" name="buscaTop" id="buscaTop"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="hidden-lg hidden-sm hidden-md col-xs-12 text-center buscaMobile">
                <button class="btn">Busque o que você está Procurando <i class="fa fa-search"></i></button>
            </div>
            <div class="col-sm-4 hidden-md hidden-sm hidden-xs">
                <ul class="menu-top pull-right">
                    <li class="menu-anchor"><a href="#"><img src="<?= DIR_PUBLIC_IMG ?>/icon-menu.png" /> MENU PRINCIPAL</a></li>
                    <li><a href="<?= HTTP_SERVER ?>/contato"><img src="<?= DIR_PUBLIC_IMG ?>/icon-contato.png" /> ENTRE EM CONTATO</a></li>
                </ul>
            </div>
        </div>
    </header>
    <nav id="menu" class="panel" role="navigation">
        <ul>
            <li class="logo-menu"><a href="<?= HTTP_SERVER ?>/"><img src="<?= DIR_PUBLIC_IMG ?>/logo-bro-imoveis.png" /></a></li>
            <li><a href="<?= HTTP_SERVER ?>/">Home</a></li>
            <li><a href="<?= HTTP_SERVER ?>/sobre">Sobre</a></li>
            <li><a href="<?= HTTP_SERVER ?>/imoveis">Imóveis</a></li>
            <li><a href="<?= HTTP_SERVER ?>/anuncie-seu-imovel">Anuncie Seu Imóivel</a></li>
            <li><a href="<?= HTTP_SERVER ?>/depoimentos">Depoimentos</a></li>
            <li><a href="<?= HTTP_SERVER ?>/newsletter">Newsletter</a></li>
            <li><a href="<?= HTTP_SERVER ?>/contato">Contato</a></li>
        </ul>
    </nav>
    <main>