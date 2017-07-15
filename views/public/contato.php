<?php
require_once DIR_FRONT . 'includes/header.inc.php';
?>
<section class="row breadcrumb" style="background-image: url(<?= DIR_PUBLIC_IMG ?>/bg-sobre.jpg);">
    <div class="container">
        <h1 class="col-lg-6 col-md-6 col-sm-6 col-xs-6">CONTATO</h1>
        <ol class="breadcrumb pull-right col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <li><a href="<?= HTTP_SERVER ?>/">HOME</a></li>
            <li><a href="<?= HTTP_SERVER ?>/sobre">CONTATO</a></li>
        </ol>
    </div>
</section>
<section id="contato" class="row">
    <div class="container">
        <div class="col-sm-12">
            <h2>ENTRE EM CONTATO CONOSCO</h2>
            <h3>ENVIE SEU IMÓVEL OU DÚVIDA ATRAVÉS DO FORMULÁRIO DE CONTATO.</h3>
            <hr/>
            <?php
                FormMailer::FormContato();
            ?>
            <div class="col-sm-12">
                <form data-form-output="form-output-global" method="post" class="offset-top-40 rd-mailform text-left" >
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Left Inputs -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <!-- Name -->
                            <input type="text" name="nome" id="name" required="required" class="form" placeholder="Nome" />
                            <!-- Email -->
                            <input type="email" name="email" id="mail" required="required" class="form" placeholder="E-mail" />
                            <!-- Fone -->
                            <input type="text" name="fone" id="fone" required="required" class="form celular" placeholder="Telefone" />
                            <!-- Subject -->
                            <input type="text" name="assunto" id="subject" required="required" class="form" placeholder="Assunto" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <!-- Message -->
                            <textarea name="mensagem" id="message" class="form textarea" required="required"  placeholder="Mensagem"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="enviaContato" class="form-btn semibold">Entrar em Contato</button> 
                        </div><!-- End Bottom Submit -->

                    </div><!-- End Contact Form Area -->
                </form>
            </div>
        </div>
    </div>
</section>
<section id="motivacional" class="row">
    <div id="mapa" style="height: 500px; width: 100%"></div>

    <!-- Maps API Javascript -->
<!--    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBM7yub5dfPeguAUxVSyrYe6kMeR55O_GU&callback=initMap"></script>-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBM7yub5dfPeguAUxVSyrYe6kMeR55O_GU&callback=initMap" async defer></script>

    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('mapa'), {
                center: {lat: -25.437964283784815, lng: -49.27083088498576},
                zoom: 16,
                scrollwheel: false,
                navigationControl: false,
                mapTypeControl: false,
                scaleControl: false,
                draggable: false,
                styles: [{"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]}, {"featureType": "landscape", "elementType": "geometry", "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]}, {"featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{"color": "#ffffff"}, {"lightness": 17}]}, {"featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]}, {"featureType": "road.arterial", "elementType": "geometry", "stylers": [{"color": "#ffffff"}, {"lightness": 18}]}, {"featureType": "road.local", "elementType": "geometry", "stylers": [{"color": "#ffffff"}, {"lightness": 16}]}, {"featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]}, {"featureType": "poi.park", "elementType": "geometry", "stylers": [{"color": "#dedede"}, {"lightness": 21}]}, {"elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]}, {"elementType": "labels.text.fill", "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]}, {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "geometry", "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]}, {"featureType": "administrative", "elementType": "geometry.fill", "stylers": [{"color": "#fefefe"}, {"lightness": 20}]}, {"featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]}]
            });
        }
    </script>
</section>

<section id="depoimentos" class="row">
    <div class="container">
        <h2 class="col-sm-12 text-center">
            O QUE DIZEM<br/>
            SOBRE NÓS<br/>
            <img src="<?= DIR_PUBLIC_IMG ?>/hr.png" width="280" height="2" />
        </h2>
        <div class="col-sm-12">
            <div class="col-sm-6 depoimento-item">
                <div class="col-sm-4 avatar" style="padding-right: 0px;">
                    <img src="<?= DIR_PUBLIC_IMG ?>/img-avatar.png" class="img-responsive" />
                </div>
                <div class="col-sm-8 depoimento-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
                <div class="col-sm-offset-4 col-sm-8">
                    <div class="col-sm-12">
                        <img src="<?= DIR_PUBLIC_IMG ?>/icon-depoimento.jpg" />
                    </div>
                    <h3>Renan Joppert</h3>
                    <h4>Desenvolvedor Web</h4>
                </div>
            </div>
            <div class="col-sm-6 depoimento-item">
                <div class="col-sm-4 avatar" style="padding-right: 0px;">
                    <img src="<?= DIR_PUBLIC_IMG ?>/img-avatar.png" class="img-responsive" />
                </div>
                <div class="col-sm-8 depoimento-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
                <div class="col-sm-offset-4 col-sm-8">
                    <div class="col-sm-12">
                        <img src="<?= DIR_PUBLIC_IMG ?>/icon-depoimento.jpg" />
                    </div>
                    <h3>Renan Joppert</h3>
                    <h4>Desenvolvedor Web</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require_once DIR_FRONT . 'includes/newsletter.inc.php';
require_once DIR_FRONT . 'includes/footer.inc.php';
?>