<?php
Imoveis::ListaImoveisFilterByTipo();
require_once DIR_FRONT . 'includes/header.inc.php';
?>
<main class="cd-main-content">
    <div class="cd-tab-filter-wrapper">
        <div class="cd-tab-filter filter-is-visible">
            <ul class="cd-filters">
                <li class="placeholder"> 
                    <a data-type="all" href="#0">Tudo</a> <!-- selected option on mobile -->
                </li> 
                <li class="filter"><a class="selected" href="#0" data-type="all">Tudo</a></li>
                <?php
                Imoveis::SelecionaTiposImovelDistinct();
                ?>
            </ul> <!-- cd-filters -->
        </div> <!-- cd-tab-filter -->
    </div> <!-- cd-tab-filter-wrapper -->

    <section class="cd-gallery filter-is-visible">
        <ul>
<!--            <li class="mix color-1 check1 radio2 option3 Curitiba"><img src="<?= DIR_PUBLIC_PLUGINS ?>/content-filter/img/img-1.jpg" alt="Image 1"></li>-->
            <?php
            foreach (Imoveis::ListaTodosImoveisOrderByID()->fetchAll(PDO::FETCH_OBJ) as $imovel) {
                ?>
            <li class="<?= Imoveis::FilterClassImovelByID($imovel->id_imovel) ?>" data-href="<?= HTTP_SERVER . '/imovel/categoria/' . Format::urlConvert($imovel->tipo_imovel) . '/' . Format::urlConvert($imovel->titulo) . '/' . $imovel->id_imovel ?>">
                    <img src="<?= DIR_PUBLIC_UPLOADS ?>/imoveis/<?= $imovel->imagem_principal ?>" height="100%" alt="<?= $imovel->titulo ?>">
                </li>
                <?php
            }
            ?>

            <li class="gap"></li>
            <li class="gap"></li>
            <li class="gap"></li>
        </ul>
        <div class="cd-fail-message">Não Há Resultados</div>
    </section> <!-- cd-gallery -->

    <div class="cd-filter filter-is-visible">
        <form>
            <div class="cd-filter-block">
                <h4>Busca</h4>
                <div class="cd-filter-content">
                    <input type="search" placeholder="Digite um critério">
                </div> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>O que você deseja fazer ?</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
                        <label class="radio-label" for="radio1">Todos</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".venda" type="radio" name="radioButton" id="venda">
                        <label class="radio-label" for="venda">Vender</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".locacao" type="radio" name="radioButton" id="locacao">
                        <label class="radio-label" for="locacao">Alugar</label>
                    </li>
                </ul> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->


            <div class="cd-filter-block">
                <h4>Cidade</h4>

                <div class="cd-filter-content">
                    <div class="cd-select cd-filters">
                        <select class="filter cidadeBusca" name="selectThis">
                            <option value=".mix" data-filter="mix">Escolha a sua Cidade</option>
                            <?php
                            Imoveis::SelecionaCidadesDistintas();
                            ?>
                        </select>
                    </div> <!-- cd-select -->
                </div> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->
            <div class="cd-filter-block">
                <!--<h4>Detalhes</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <p>Quartos (1-10)</p>
                        <input type="text" value="" class="slider form-control" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="[1,10]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="yellow">
                    </li>                    
                    <li>
                        <p>Banheiros (1-10)</p>
                        <input type="text" value="" class="slider form-control" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="[1,10]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="yellow">
                    </li>                    
                    <li>
                        <p>Área (20m² - 1000 m²)</p>
                        <input type="text" value="" class="slider form-control" data-slider-min="20" data-slider-max="1000" data-slider-step="1" data-slider-value="[1,1000]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="yellow">
                    </li>                
                </ul>--. <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->
        </form>

        <a href="#0" class="cd-close">Fechar</a>
    </div> <!-- cd-filter -->

    <a href="#0" class="cd-filter-trigger filter-is-visible">Busca Avançada</a>
</main> <!-- cd-main-content -->
<?php
require_once DIR_FRONT . 'includes/footer.inc.php';
?>