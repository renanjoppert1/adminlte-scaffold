<?php
Banner::AdicionaBanner();
require_once DIR_ADMIN . 'includes/header.inc.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Adicionar Banner
            <small>Banners</small><br/>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?= HTTP_ADMIN ?>/banners/ver-todos">Banners</a></li>
            <li class="active">Adicionar Banners</li> 
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="box box-solid">
                        <div class="box-header"></div>
                        <div class="box-body">
                            <div class="row">
                                <label class="col-xs-2">
                                    Nome
                                </label>
                                <div class="col-xs-5">
                                    <input type="text" class="form-control" name="nome" placeholder="Nome do Banner" />
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <hr/>
                            </div>
                            <div class="row">
                                <label class="col-xs-2">
                                    Descrição
                                </label>
                                <div class="col-xs-5">
                                    <input type="text" class="form-control" name="descricao" placeholder="Descrição do Banner" />
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <hr/>
                            </div>
                            <div class="row">
                                <label class="col-xs-2">
                                    Imagem
                                </label>
                                <div class="col-xs-5">
                                    <!--                                    <div class="file-drop-area col-xs-6">;
                                                                            <span class="fake-btn">Escolha o Arquivo</span>
                                                                            <span class="file-msg js-set-number">ou solte ele aqui</span>
                                                                            <input class="file-input" type="file" name="bannerimg">
                                                                        </div>-->

                                    <input type="file" name="bannerimg" />

                                           <?php
//                                    if ($configuracoes->favicon != null) {
//                                        echo '<img src="' . DIR_PUBLIC_IMG . '/' . $configuracoes->favicon . '" alt="Favicon">';
//                                        echo '<input type="hidden" name="hFavicon" value="' . $configuracoes->favicon . '"/>';
//                                    };
                                           ?>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <hr/>
                            </div>
                            <div class="row">
                                <label class="col-xs-2">
                                    Url
                                </label>
                                <div class="col-xs-5">
                                    <input type="text" class="form-control" name="url" placeholder="Link do Banner" />
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="adicionaBanner" value="Adicionar" class="btn pull-right btn-info" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<?php
require_once DIR_ADMIN . 'includes/footer.inc.php';
?>