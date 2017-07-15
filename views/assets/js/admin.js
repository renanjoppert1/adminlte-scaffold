$(document).ready(function () {

    $('.cep').mask('99.999-999');

    var url_atual = window.location.href;
    var n = url_atual.indexOf('localhost');
    var HTTP_SERVER = null;

    if (n > -1) {
        HTTP_SERVER = 'http://localhost/br/';
    } else {
        HTTP_SERVER = 'https://www.broimoveis.com.br/';
    }

    if ($('#callbackStatus').val() == 'sucesso') {
        var notification = alertify.notify('Sucesso', 'success', 5, function () {
            console.log('dismissed');
        });
    } else if ($('#callbackStatus').val() == 'erro') {
        alertify.error('Houve um erro na operação');
    }

    $('.switchCheckboxLabel').click(function () {
        var idBanner = $(this).attr('data-id');
        var status = $(this).attr('data-status');
        var forBanner = $(this).attr('for');
        var data = 'idBanner=' + idBanner + '&status=' + status;
        $.ajax({
            type: 'POST',
            url: HTTP_SERVER + 'views/admin/banners/funcoes/ativa.php',
            data: data,
            beforeSend: function () {
                //alertify.message('ID: ' + idBanner, 0);
            },
            success: function (enviou) {

                var notification = alertify.notify('Status alterado com sucesso', 'success', 5, function () {
                    console.log('dismissed');
                });

                if (status == 1) {
                    $('[for=' + forBanner + ']').attr('data-status', '0');
                } else {
                    $('[for=' + forBanner + ']').attr('data-status', '1');
                }

            },
            error: function () {
                var notification = alertify.error('Houve um erro ao ativar o banner');
                return false;

            }
        });
    });

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        $("#ibge").val("");
    }

    //Quando o campo cep perde o foco.
    $("#cep").blur(function () {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#estado").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#estado").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        var notification = alertify.error('O CEP digitado não foi encontrado');
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                var notification = alertify.error('Digite um CEP válido');
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });

    $('#images').on('change', function () {
        $('#multiple_upload_form').ajaxForm({
            target: '#images_preview',
            beforeSubmit: function (e) {
                $('.uploading').show();
            },
            success: function (e) {
                $('.uploading').hide();
            },
            error: function (e) {
            }
        }).submit();
    });

});
