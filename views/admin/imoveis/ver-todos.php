<?php
require_once DIR_ADMIN . 'includes/header.inc.php';
?>
<input type="hidden" name="callbackStatus" id="callbackStatus" <?php echo (isset($url[3])) ? 'value="' . $url[3] . '"' : ''; ?>/>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Todos Imóveis
            <small>Imóvel</small><br/>
            <a href="<?= HTTP_ADMIN ?>/imoveis/adicionar" class="btn btn-info btn-flat">Cadastrar Imóvel</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= HTTP_ADMIN ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?= HTTP_ADMIN ?>/imoveis/ver-todos">Imóveis</a></li>
            <li class="active">Todos Imóveis</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php
            foreach (Imoveis::ListaTodosImoveisOrderByID()->fetchAll(PDO::FETCH_OBJ) as $imovel) {
                ?>
                <div class="col-xs-4">
                    <div class="box box-solid bannerSnipshat bannerSnipshat-<?= $imovel->id_imovel ?>">
                        <div class="box-header"></div>
                        <div class="box-body">
                            <figure>
                                <img src="<?= DIR_PUBLIC_UPLOADS ?>/imoveis/<?= $imovel->imagem_principal ?>" />
                            </figure>
                        </div>
                        <div class="box-footer">
                            <p class="col-xs-11"><?= $imovel->titulo ?></p>
                            <div class="box-tools pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-cogs"></i></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="<?= HTTP_SERVER ?>/imovel/categoria/<?= Format::urlConvert($imovel->tipo_imovel) ?>/<?= Format::urlConvert($imovel->titulo) ?>/<?= $imovel->id_imovel ?>" rel="shadowbox">Ver</a></li>
                                        <li><a href="<?= HTTP_ADMIN ?>/imoveis/editar-imovel/<?= $imovel->id_imovel ?>">Editar</a></li>
                                        <li><a href="<?= HTTP_ADMIN ?>/imoveis/excluir-imovel/<?= $imovel->id_imovel ?>">Excluir</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
    <!-- /.content -->
</div>
<?php
require_once DIR_ADMIN . 'includes/footer.inc.php';
?>