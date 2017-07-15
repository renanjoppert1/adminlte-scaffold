<?php
Banner::EditarBannerByID($url[3]);
require_once DIR_ADMIN . 'includes/header.inc.php';
$banner = Banner::SelecionaBannerByID($url[3])->fetch(PDO::FETCH_OBJ);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Editar Banner
            <small>Banners</small><br/>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?= HTTP_ADMIN ?>/banners/ver-todos">Banners</a></li>
            <li class="active">Editar Banners</li> 
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
                                    <input type="text" class="form-control" name="nome" value="<?= $banner->nome ?>" placeholder="Nome do Banner" />
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
                                    <input type="text" class="form-control" name="descricao" value="<?= $banner->alt ?>" placeholder="Descrição do Banner" />
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

                                    <input type="file" name="bannerimg" />

                                    <?php
                                    if ($banner->imagem != null) {
                                        echo '<br/>';
                                        echo '<a href="' . HTTP_SERVER .'views/uploads/banners/'. $banner->imagem .'" rel="shadowbox"><img src="' . DIR_PUBLIC_UPLOADS . '/banners/' . $banner->imagem . '" alt="Banner" style="width: 300px;"></a>';
                                        echo '<input type="hidden" name="hBannerImg" value="' . $banner->imagem . '"/>';
                                    };
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
                                    <input type="text" class="form-control" name="url" value="<?= $banner->link ?>" placeholder="Link do Banner" />
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="alteraBanner" value="Alterar" class="btn pull-right btn-info" />
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