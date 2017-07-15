(function ($, MaskedInput) {
   $("#data_nascimento").mask("99/99/9999",{placeholder:"DD/MM/AAAA"});
   $(".data").mask("99/99/9999",{placeholder:"DD/MM/AAAA"});
   $("#cpf").mask("999.999.999-99");
   $("#rg").mask("9.999.999-9");
   $(".telefone").mask("(99) 9999-9999");
   $(".celular").mask("(99) 9999-9999?9");
   $(".tempo").mask("99:99",{placeholder:"HH:MM"});
   
   /***************************************************/
   
   $("#cnpj").mask("99.999.999/9999-99");
   $("#Fax").mask("(99) 9999-9999");
   
})(jQuery, $.MaskedInput);
