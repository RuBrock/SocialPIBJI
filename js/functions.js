$(document).ready(function () {
    
    $('#aceito').click(function () {
        if ($(this).is(':checked')) {
            $('#buttonsOptions').show();
        } else {
            $('#buttonsOptions').hide();
        }
    });

    $('#buttonformPES').click(function () {
        $('#modalProdutosServicos').modal('show')
    })

    $('#formSendPES').click(function () {
        if ($(this).is(':checked')) {
            $('#buttonAcceptPES').show();
        } else {
            $('#buttonAcceptPES').hide();
        }
    });

    $('#voluntarioSim').click(function () {
        if ($(this).is(':checked')) {
            $('#voluntarios').show();
        } else {
            $('#voluntarios').hide();
        }
    });

    $('#chkOutros').click(function () {
        if ($(this).is(':checked')) {
            $('#divDescricao').show();
        } else {
            $('#divDescricao').hide();
        }
    });

    /*$('#formSendVol').click(function () {
        if ($(this).is(':checked')) {
            $('#buttonAcceptVol').show();
        } else {
            $('#buttonAcceptVol').hide();
        }
    });*/

    $("#buttonFormVolunt").click(function () {
        //$("#formsv").show();
        $('#modalVoluntariado').modal('show')
    });


})