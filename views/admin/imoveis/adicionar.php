<?php
Imoveis::AdicionaImovel();
require_once DIR_ADMIN . 'includes/header.inc.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Adicionar Imóvel
            <small>Imóvel</small><br/>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= HTTP_ADMIN ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?= HTTP_ADMIN ?>/imoveis/ver-todos">Imóveis</a></li>
            <li class="active">Adicionar Imóvel</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="col-xs-8">
                        <div class="box box-solid">
                            <div class="box-header"></div>
                            <div class="box-body">
                                <div class="row">
                                    <label class="col-xs-3">
                                        Título do Imóvel
                                    </label>
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="titulo" placeholder="Título do Imóvel" />
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Tipo do Imóvel
                                    </label>
                                    <div class="col-xs-6">
                                        <select class="select" name="tipoImovel" id="tipoImovel" style="width: 200px;">
                                            <option value="0" data-subtext="Residencial">Selecione</option>
                                            <optgroup label="Residencial">
                                                <option value="Apartamento" data-subtext="Residencial">Apartamento</option>
                                                <option value="Casa" data-subtext="Residencial">Casa</option>
                                                <option value="Casa em condomínio" data-subtext="Residencial">Casa em condomínio</option>
                                                <option value="Chácara" data-subtext="Residencial">Chácara</option>
                                                <option value="Fazenda" data-subtext="Residencial">Fazenda</option>
                                                <option value="Flat" data-subtext="Residencial">Flat</option>
                                                <option value="Garagem" data-subtext="Residencial">Garagem</option>
                                                <option value="Kitnet" data-subtext="Residencial">Kitnet</option>
                                                <option value="Loft" data-subtext="Residencial">Loft</option>
                                                <option value="Sobrado" data-subtext="Residencial">Sobrado</option>
                                                <option value="Sobrado em condomínio" data-subtext="Residencial">Sobrado em condomínio</option>
                                                <option value="Stúdio" data-subtext="Residencial">Stúdio</option>
                                                <option value="Terreno em condomínio" data-subtext="Residencial">Terreno em condomínio</option>
                                                <option value="Terreno/Área" data-subtext="Residencial">Terreno/Área</option>
                                            </optgroup>
                                            <optgroup label="Comercial">
                                                <option value="Barracão/Galpão" data-subtext="Comercial">Barracão/Galpão</option>
                                                <option value="Casa Comercial" data-subtext="Comercial">Casa Comercial</option>
                                                <option value="Edifício" data-subtext="Comercial">Edifício</option>
                                                <option value="Garagem Comercial" data-subtext="Comercial">Garagem Comercial</option>
                                                <option value="Loja" data-subtext="Comercial">Loja</option>
                                                <option value="Ponto/Negócios" data-subtext="Comercial">Ponto/Negócios</option>
                                                <option value="Sala/Conjunto Comercial" data-subtext="Comercial">Sala/Conjunto Comercial</option>
                                                <option value="Terreno/Área Comercial" data-subtext="Comercial">Terreno/Área Comercial</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Tipo do Anúncio
                                    </label>
                                    <div class="col-xs-6">
                                        <input class="checkbox" id="venda" name="venda" type="checkbox" value="1">
                                        <label for="venda">Venda</label>&nbsp;&nbsp;&nbsp;

                                        <input class="checkbox" id="aluga" name="aluga" type="checkbox" value="1">
                                        <label for="aluga">Aluguel</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Quartos
                                    </label>
                                    <div class="col-xs-6">
                                        <input type="number" class="form-control" name="quartos" placeholder="Quartos" />
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Banheiros
                                    </label>
                                    <div class="col-xs-6">
                                        <input type="number" class="form-control" name="banheiros" placeholder="Banheiros" />
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Vagas de Garagem
                                    </label>
                                    <div class="col-xs-6">
                                        <input type="number" class="form-control" name="garagem" placeholder="Vagas de Garagem" />
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Área em m²
                                    </label>
                                    <div class="col-xs-6">
                                        <input type="number" class="form-control" name="area" placeholder="Área em m² do Imóvel" />
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        CEP
                                    </label>
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control cep" name="cep" id="cep" placeholder="CEP do Imóvel" />
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Endereço
                                    </label>
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="rua" id="rua" placeholder="Endereço do Imóvel" />
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Bairro
                                    </label>
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro do Imóvel" />
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Cidade
                                    </label>
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade do Imóvel" />
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Estado
                                    </label>
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado do Imóvel" />
                                    </div>
                                </div>

                            </div>
                            <div class="box-footer">

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="box box-solid">
                            <div class="box-header"></div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <input class="checkbox" id="bannerDestaque" name="bannerDestaque" type="checkbox" value="1">
                                        <label for="bannerDestaque">Destaque no Banner</label>&nbsp;&nbsp;&nbsp;

                                        <input class="checkbox" id="homeDestaque" name="homeDestaque" type="checkbox" value="1">
                                        <label for="homeDestaque">Destaque na Página Principal</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Imagens Principal
                                    </label>
                                    <div class="col-xs-6">
                                        <input type="file" class="form-control" name="imagemPrincipal" />
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Imagens do Imóvel
                                    </label>
                                    <div class="col-xs-6">
                                        <button class="btn bg-yellow" id="cadGaleriaImovel" data-toggle="modal" data-target="#cadGaleriaImovelModal" onclick="return false;">Adicionar Galeria de Fotos</button>
                                        <input type="hidden" name="galeriaId" value="" />
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Valor de Venda
                                    </label>
                                    <div class="col-xs-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">R$</div>
                                            <input type="text" class="form-control" name="valorVenda" id="valorVenda" placeholder="Valor">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Valor de Locação
                                    </label>
                                    <div class="col-xs-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">R$</div>
                                            <input type="text" class="form-control" id="valorLocacao" name="valorLocacao" placeholder="Valor">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Valor do IPTU
                                    </label>
                                    <div class="col-xs-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">R$</div>
                                            <input type="text" class="form-control" id="valorIPTU" name="valorIPTU" placeholder="Valor">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="row">
                                    <label class="col-xs-3">
                                        Valor do Condomínio
                                    </label>
                                    <div class="col-xs-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">R$</div>
                                            <input type="text" class="form-control" id="valorCondominio" name="valorCondominio" placeholder="Valor">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>

                            </div>
                            <div class="box-footer">

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <input type="submit" name="adicionaImovel" value="Adicionar Imóvel" class="btn pull-right btn-info" />
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<!-- Modal -->
<div class="modal fade" id="cadGaleriaImovelModal" tabindex="-1" role="dialog" aria-labelledby="cadGaleriaImovelModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastrar Galeria de Imóvel</h4>
            </div>
            <div class="modal-body">
                <div class="upload_div">
                    <form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="<?= HTTP_SERVER ?>/views/admin/imoveis/funcoes/uploadImagens.php">
                        <input type="hidden" name="image_form_submit" value="1"/>
                        <label>Choose Image</label>
                        <input type="file" name="images[]" id="images" multiple >
                        <div class="uploading none">
                            <label>&nbsp;</label>
                            <img src="uploading.gif"/>
                        </div>
                    </form>
                </div>

                <div class="gallery" id="images_preview"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Cadastrar Galeria</button>
            </div>
        </div>
    </div>
</div>
<?php
require_once DIR_ADMIN . 'includes/footer.inc.php';
?>