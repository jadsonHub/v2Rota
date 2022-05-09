$(document).ready(function () {
    // $('.date').mask('00/00/0000' , {reverse: true});
    // $('.time').mask('00:00:00');
    $('#cep').mask('00000-000');
    //$('#telefone').mask('(00) 00000-0000');
    $('#cpf').mask('000.000.000-00');
    // $('.money').mask('000.000.000.000,00');

    //  $("#cnpj").mask('000.000.000-00');
});

$(document).ready(function () {
    $('#tableLista').DataTable({
        "language":{
            "url":"//cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json"
        }
    });
});

