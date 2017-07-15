var map;
function initMap() {
    geocoder = new google.maps.Geocoder();

    map = new google.maps.Map(document.getElementById('mapa'), {
        center: {lat: -25.437964283784815, lng: -49.27083088498576},
        zoom: 16,
        scrollwheel: false,
        navigationControl: true,
        mapTypeControl: true,
        scaleControl: true,
        draggable: false
    });
}

function converteEndereco(endereco, avaliacao) {
    var endereco = document.getElementById('enderecoImovel').value;
    //alert(endereco);
    geocoder.geocode({'address': endereco}, function (resultado, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            
            alert(resultado[0].geometry.location.k);
            alert(resultado[0].geometry.location.D);
            
//            var marcador = {
//                latitude: resultado[0].geometry.location.k
//                , longitude: resultado[0].geometry.location.D
//                , titulo: 'Novo marcador'
//                , imagem: avaliacao
//            }
//            criaMarcador(marcador, map)
        } else {
            alert('Erro ao converter endereço: ' + status);
        }
    });
}


