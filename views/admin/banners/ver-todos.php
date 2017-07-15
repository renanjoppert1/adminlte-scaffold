<?php
require_once DIR_ADMIN . 'includes/header.inc.php';
?>
<input type="hidden" name="callbackStatus" id="callbackStatus" <?php echo (isset($url[3])) ? 'value="' . $url[3] . '"' : ''; ?>/>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Todos Banners
            <small>Banners</small><br/>
            <a href="<?= HTTP_ADMIN ?>/banners/adicionar" class="btn btn-info btn-flat">Novo Banner</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?= HTTP_ADMIN ?>/banners/ver-todos">Banners</a></li>
            <li class="active">Todos Banners</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php
            foreach (Banner::ListaTodosBanners()->fetchAll(PDO::FETCH_OBJ) as $banner) {
                ?>
                <div class="col-xs-4">
                    <div class="box box-solid bannerSnipshat bannerSnipshat-<?= $banner->idBanner ?>">
                        <div class="box-header"></div>
                        <div class="box-body">
                            <figure>
                                <img src="<?= DIR_PUBLIC_UPLOADS ?>/banners/<?= $banner->imagem ?>" />
                            </figure>
                        </div>
                        <div class="box-footer">
                            <p class="col-xs-4"><?= $banner->nome ?></p>
                            <div class="box-tools pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-cogs"></i></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="<?= HTTP_SERVER ?>/views/uploads/banners/<?= $banner->imagem ?>" rel="shadowbox">Ver</a></li>
                                        <li><a href="<?= HTTP_ADMIN ?>/banners/editar-banner/<?= $banner->idBanner ?>">Editar</a></li>
                                        <li><a href="<?= HTTP_ADMIN ?>/banners/excluir-banner/<?= $banner->idBanner ?>">Excluir</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pull-right">
                                <input type="checkbox" id="ativaBanner-<?= $banner->idBanner ?>" name="ativaBanner-<?= $banner->idBanner ?>" <?php echo ($banner->status == 1) ? 'checked="cheked"' : ''; ?> class='switch'/>
                                <label class="switchCheckboxLabel" data-id="<?= $banner->idBanner ?>" data-status="<?= $banner->status ?>" for="ativaBanner-<?= $banner->idBanner ?>"></label>
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