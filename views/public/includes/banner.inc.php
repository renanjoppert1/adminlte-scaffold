<!--
        #################################
                - MAIN BANNER -
        #################################
-->

<div id="carousel-example-generic" class="carousel slide bannerDestaque" data-ride="carousel">
    <!-- Indicators -->
    <!--<ol class="carousel-indicators">
    <?php
    $count = 0;
    foreach (Banner::ListaTodosBannersOrderNome()->fetchAll(PDO::FETCH_OBJ) as $banner) {
        ?>
                <li data-target="#carousel-example-generic" data-slide-to="0" <?php echo ($count == 0) ? 'class="active"' : ''; ?>></li> 
        <?php
        $count++;
    }
    foreach (Imoveis::ListaTodosImoveisOrderByID()->fetchAll(PDO::FETCH_OBJ) as $banner) {
        ?>
                <li data-target="#carousel-example-generic" data-slide-to="0" <?php echo ($count == 0) ? 'class="active"' : ''; ?>></li> 
        <?php
        $count++;
    }
    ?>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php
        $count = 0;
        foreach (Imoveis::ListaTodosImoveisOrderByID()->fetchAll(PDO::FETCH_OBJ) as $imovel) {
            ?>
            <div class="item  <?php echo ($count == 0) ? 'active' : ''; ?>">
                <div id="info">
                    <h2><?= $imovel->titulo ?><hr/></h2>
                    <p><img src="<?= DIR_PUBLIC_IMG ?>/icon-maps.png" /> <?= $imovel->bairro ?> - <?= $imovel->cidade ?>/<?= $imovel->estado ?></p>
                    <ul class="col-sm-12">
                        <li class="col-sm-6"><img src="<?= DIR_PUBLIC_IMG ?>/icon-area.png" /> Área total de <?= $imovel->area ?> m²</li>
                        <li class="col-sm-6"><img src="<?= DIR_PUBLIC_IMG ?>/icon-banheiro.png" /> <?= $imovel->banheiros ?> Banheiros e um BWC</li>
                        <li class="col-sm-6"><img src="<?= DIR_PUBLIC_IMG ?>/icon-quarto.png" /> <?= $imovel->quartos ?> Quartos e 3 Suítes</li>
                        <li class="col-sm-6"><img src="<?= DIR_PUBLIC_IMG ?>/icon-garagem.png" /> Garagem para <?= $imovel->vagas ?> carros</li>
                    </ul>

                    <div class="col-sm-12">
                        <a href="#" class="btn btn-bro btn-large">CONFIRA TODOS OS DETALHES</a>
                    </div>
                </div>
                <img src="<?= DIR_PUBLIC_IMG ?>/overlay-bg.png" class="overlay-slider" alt="...">
                <img src="<?= DIR_PUBLIC_UPLOADS ?>/imoveis/<?= $imovel->imagem_principal ?>" class="bg" alt="...">

                ?>
            </div>

            <?php
            $count++;
        }
        foreach (Banner::ListaTodosBannersOrderNome()->fetchAll(PDO::FETCH_OBJ) as $banner) {
            ?>
            <div class="item  <?php echo ($count == 0) ? 'active' : ''; ?>">
                <?php
                echo '<img src="' . DIR_PUBLIC_UPLOADS . '/banners/' . $banner->imagem . '" class="bg" alt="' . $banner->alt . '">';
                ?>
            </div>

            <?php
        }
        ?>
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