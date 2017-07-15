</main>
<footer class="row">
    <div class="container">
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
            <a href="<?= HTTP_SERVER ?>/"><img src="<?= DIR_PUBLIC_IMG ?>/logo-bro-imoveis.png" id="logo" /></a>
            <p>Lorem ipsum dollor sit amet, consectur adipisicing elit sed do euismod.</p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <h2>MENU</h2>
            <ul class="pull-left">
                <li><a href="<?= HTTP_SERVER ?>/">Home</a></li>
                <li><a href="<?= HTTP_SERVER ?>/sobre">Sobre</a></li>
                <li><a href="#">Depoimentos</a></li>
                <li><a href="#" id="newsletterBtn">Newsletter</a></li>
                <li><a href="<?= HTTP_SERVER ?>/contato">Contato</a></li>
            </ul>
            <ul class="pull-right">
                <li><a href="<?= HTTP_SERVER ?>/imoveis">Apartamentos</a></li>
                <li><a href="<?= HTTP_SERVER ?>/imoveis">Casas</a></li>
                <li><a href="<?= HTTP_SERVER ?>/imoveis">Chácaras</a></li>
                <li><a href="<?= HTTP_SERVER ?>/imoveis">Sobrados</a></li>
                <li><a href="<?= HTTP_SERVER ?>/imoveis">Busca Avançada</a></li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" id="contato">
            <h2>CONTATO</h2>
            <p><img src="<?= DIR_PUBLIC_IMG ?>/icon-email.png" /> contato<span>@broimoveis.com.br</span></p>
            <p><img src="<?= DIR_PUBLIC_IMG ?>/icon-fone.png" /> (41) 3333-3333</p>
            <p><img src="<?= DIR_PUBLIC_IMG ?>/icon-maps.png" /> AV. Marechal Floriano Peixoto, 895 - Curitiba</p>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-8"><p>Copyright 2017 - Todos os direitos reservados à BRO Imóveis.</p></div>
            <div class="col-xs-4"><a href="#"><p class="text-right">Desenvolvido por <img src="<?= DIR_PUBLIC_IMG ?>/logo-piscium.png" style="margin-top: -9px;" /></p></a></div>
        </div>
    </div>
</footer>
<!--
<div id="chat">
    <div class="buttons">
        <button id="icone-item"><img src="<?= DIR_PUBLIC_IMG ?>/chat.png" /></button>
        <button id="icone-item"><img src="<?= DIR_PUBLIC_IMG ?>/facebook.png" /></button>
        <button id="icone-item"><img src="<?= DIR_PUBLIC_IMG ?>/whatsapp.png" /></button>
        <button id="icone-item"><img src="<?= DIR_PUBLIC_IMG ?>/fone.png" /></button>
        <button id="icone-item"><img src="<?= DIR_PUBLIC_IMG ?>/chat.png" /></button>
    </div>
</div>-->
<!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
<!-- Bootstrap Script -->
<script src="<?= DIR_PUBLIC_JS ?>/bootstrap.min.js" type="text/javascript"></script> 
<!-- Select2 Script -->
<script src="<?= DIR_PUBLIC_PLUGINS ?>/select2/select2.full.min.js" type="text/javascript"></script> 
<!-- Slick Script -->
<script src="<?= DIR_PUBLIC_PLUGINS ?>/slick/slick.min.js" type="text/javascript"></script> 
<!-- BigSlide -->
<script src="<?= DIR_PUBLIC_PLUGINS ?>/bigSlide/bigSlide.min.js"></script>
<!-- Parallax Background Script -->
<script src="<?= DIR_PUBLIC_PLUGINS ?>/parallaxBackground/js/parallax-background.min.js" type="text/javascript"></script> 
<!-- Bootstrap Slider Script -->
<script src="<?= DIR_PUBLIC_PLUGINS ?>/bootstrap-slider/bootstrap-slider.js" type="text/javascript"></script> 
<!-- Content Filter Script -->
<script src="<?= DIR_PUBLIC_PLUGINS ?>/content-filter/js/jquery.mixitup.min.js" type="text/javascript"></script> 
<!-- Content Filter Script -->
<script src="<?= DIR_PUBLIC_PLUGINS ?>/maskedinput/jquery.maskedinput.min.js" type="text/javascript"></script> 
<!-- Shadowbox Script -->
<script src="<?= DIR_PUBLIC_PLUGINS ?>/shadowbox/shadowbox.js"></script>
<!-- Google Maps Script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBM7yub5dfPeguAUxVSyrYe6kMeR55O_GU&callback=initMap" async defer></script>
<script src="<?= DIR_PUBLIC_JS ?>/googleMapsImovel.js" type="text/javascript"></script> 
<!-- Custom Script -->
<script src="<?= DIR_PUBLIC_JS ?>/script.js" type="text/javascript"></script> 

<script type="text/javascript">
    $(document).ready(function () {
        
        
        $(".fone").mask("(99) 9999-9999");        
        $(".celular").mask("(99) 9999-9999?9");        

        $('.slider').slider();

        $('#newsletterBtn').click(function () {
            $('#modalNewsletter').modal();
            return false;
        });

        $('#bannerDestaque').carousel();

        $('#categoriaHome').parallaxBackground();
        $('footer').parallaxBackground();

        $('.tipoImovel').select2({
            placeholder: "Tipo de Imóvel"
        });

        $(".cidade").select2({
            placeholder: "Selecione uma Cidade"
        });
        $(".selectCidade").select2({
            placeholder: "Selecione uma Cidade"
        });

        $('#slickDepoimentos').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: true,
            arrows: true,
            nextArrow: '<button type="button" class="next-slider glyphicon glyphicon-chevron-right"></button>',
            prevArrow: '<button type="button" class="prev-slider glyphicon glyphicon-chevron-left"></button>'

        });

        $('#destaquesSlick').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
            arrows: true,
            nextArrow: '<button type="button" class="next-slider glyphicon glyphicon-chevron-right"></button>',
            prevArrow: '<button type="button" class="prev-slider glyphicon glyphicon-chevron-left"></button>',
            rows: 2

        });
    });

    $(document).ready(function ($) {
        //open/close lateral filter
        $('.cd-filter-trigger').on('click', function () {
            triggerFilter(true);
        });
        $('.cd-filter .cd-close').on('click', function () {
            triggerFilter(false);
        });

        function triggerFilter($bool) {
            var elementsToTrigger = $([$('.cd-filter-trigger'), $('.cd-filter'), $('.cd-tab-filter'), $('.cd-gallery')]);
            elementsToTrigger.each(function () {
                $(this).toggleClass('filter-is-visible', $bool);
            });
        }

        //mobile version - detect click event on filters tab
        var filter_tab_placeholder = $('.cd-tab-filter .placeholder a'),
                filter_tab_placeholder_default_value = 'Select',
                filter_tab_placeholder_text = filter_tab_placeholder.text();

        $('.cd-tab-filter li').on('click', function (event) {
            //detect which tab filter item was selected
            var selected_filter = $(event.target).data('type');

            //check if user has clicked the placeholder item
            if ($(event.target).is(filter_tab_placeholder)) {
                (filter_tab_placeholder_default_value == filter_tab_placeholder.text()) ? filter_tab_placeholder.text(filter_tab_placeholder_text) : filter_tab_placeholder.text(filter_tab_placeholder_default_value);
                $('.cd-tab-filter').toggleClass('is-open');

                //check if user has clicked a filter already selected 
            } else if (filter_tab_placeholder.data('type') == selected_filter) {
                filter_tab_placeholder.text($(event.target).text());
                $('.cd-tab-filter').removeClass('is-open');

            } else {
                //close the dropdown and change placeholder text/data-type value
                $('.cd-tab-filter').removeClass('is-open');
                filter_tab_placeholder.text($(event.target).text()).data('type', selected_filter);
                filter_tab_placeholder_text = $(event.target).text();

                //add class selected to the selected filter item
                $('.cd-tab-filter .selected').removeClass('selected');
                $(event.target).addClass('selected');
            }
        });

        //close filter dropdown inside lateral .cd-filter 
        $('.cd-filter-block h4').on('click', function () {
            $(this).toggleClass('closed').siblings('.cd-filter-content').slideToggle(300);
        })

        //fix lateral filter and gallery on scrolling
        $(window).on('scroll', function () {
            (!window.requestAnimationFrame) ? fixGallery() : window.requestAnimationFrame(fixGallery);
        });

        function fixGallery() {
            var offsetTop = $('.cd-main-content').offset().top,
                    scrollTop = $(window).scrollTop();
            (scrollTop >= offsetTop) ? $('.cd-main-content').addClass('is-fixed') : $('.cd-main-content').removeClass('is-fixed');
        }

        /************************************
         MitItUp filter settings
         More details: 
         https://mixitup.kunkalabs.com/
         or:
         http://codepen.io/patrickkunka/
         *************************************/

        buttonFilter.init();
        $('.cd-gallery ul').mixItUp({
            controls: {
                enable: false
            },
            callbacks: {
                onMixStart: function () {
                    $('.cd-fail-message').fadeOut(200);
                },
                onMixFail: function () {
                    $('.cd-fail-message').fadeIn(200);
                }
            }
        });

        //search filtering
        //credits http://codepen.io/edprats/pen/pzAdg
        var inputText;
        var $matching = $();

        var delay = (function () {
            var timer = 0;
            return function (callback, ms) {
                clearTimeout(timer);
                timer = setTimeout(callback, ms);
            };
        })();

        $(".cd-filter-content input[type='search']").keyup(function () {
            // Delay function invoked to make sure user stopped typing
            delay(function () {
                inputText = $(".cd-filter-content input[type='search']").val().toLowerCase();
                // Check to see if input field is empty
                if ((inputText.length) > 0) {
                    $('.mix').each(function () {
                        var $this = $(this);

                        // add item to be filtered out if input text matches items inside the title   
                        if ($this.attr('class').toLowerCase().match(inputText)) {
                            $matching = $matching.add(this);
                        } else {
                            // removes any previously matched item
                            $matching = $matching.not(this);
                        }
                    });
                    $('.cd-gallery ul').mixItUp('filter', $matching);
                } else {
                    // resets the filter to show all item if input is empty
                    $('.cd-gallery ul').mixItUp('filter', 'all');
                }
            }, 200);
        });
    });

    /*****************************************************
     MixItUp - Define a single object literal 
     to contain all filter custom functionality
     *****************************************************/
    var buttonFilter = {
        // Declare any variables we will need as properties of the object
        $filters: null,
        groups: [],
        outputArray: [],
        outputString: '',

        // The "init" method will run on document ready and cache any jQuery objects we will need.
        init: function () {
            var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "buttonFilter" object so that we can share methods and properties between all parts of the object.

            self.$filters = $('.cd-main-content');
            self.$container = $('.cd-gallery ul');

            self.$filters.find('.cd-filters').each(function () {
                var $this = $(this);

                self.groups.push({
                    $inputs: $this.find('.filter'),
                    active: '',
                    tracker: false
                });
            });

            self.bindHandlers();
        },

        // The "bindHandlers" method will listen for whenever a button is clicked. 
        bindHandlers: function () {
            var self = this;

            self.$filters.on('click', 'a', function (e) {
                self.parseFilters();
            });
            self.$filters.on('change', function () {
                self.parseFilters();
            });
        },

        parseFilters: function () {
            var self = this;

            // loop through each filter group and grap the active filter from each one.
            for (var i = 0, group; group = self.groups[i]; i++) {
                group.active = [];
                group.$inputs.each(function () {
                    var $this = $(this);
                    if ($this.is('input[type="radio"]') || $this.is('input[type="checkbox"]')) {
                        if ($this.is(':checked')) {
                            group.active.push($this.attr('data-filter'));
                        }
                    } else if ($this.is('select')) {
                        group.active.push($this.val());
                    } else if ($this.find('.selected').length > 0) {
                        group.active.push($this.attr('data-filter'));
                    }
                });
            }
            self.concatenate();
        },

        concatenate: function () {
            var self = this;

            self.outputString = ''; // Reset output string

            for (var i = 0, group; group = self.groups[i]; i++) {
                self.outputString += group.active;
            }

            // If the output string is empty, show all rather than none:    
            !self.outputString.length && (self.outputString = 'all');

            // Send the output string to MixItUp via the 'filter' method:    
            if (self.$container.mixItUp('isLoaded')) {
                self.$container.mixItUp('filter', self.outputString);
            }
        }
    };
</script>
<?php
require_once DIR_FRONT . 'includes/modal.inc.php';
?>
</body>
</html>