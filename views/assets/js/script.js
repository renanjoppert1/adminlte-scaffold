$(document).ready(function () {


    $('.cidadeBusca').select2({
        placeholder: "Selecione uma Cidade"
    });
    
    $('#tipoImovel').select2({
        placeholder: "Selecione o Tipo de Imóvel",
        allowClear: true
    });

    $('.menu-anchor').bigSlide();

    $('*[data-href]').click(function () {
        window.location = $(this).data('href');
        return false;
    });
    
    $('#bairro').select2({
        placeholder: "Select a state"
    });
});