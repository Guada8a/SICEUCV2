var base_url = 'https://siceuc2.ucol.mx/cultural/';
//var base_url = 'http://localhost:50465/';

$(document).ready(function () {
    $('[data-toggle=tooltip]').tooltip({
        container: 'body'
    });

    $('[data-val-maxlength-max]').each(function (index, element) {
        var length = parseInt($(this).attr("data-val-maxlength-max"));
        if (!isNaN(length)) {
            $(this).prop("maxlength", length);
        }
    });

});

// Configura la paginacion del webgrid
// @Params
//      parametros: Filtros 
//      objeto: Link de acción
function configurarPaginacion(parametros, objeto) {
    if (objeto !== undefined) {
        var page = '';
        var tempLink = objeto.attr('href');
        var posIni = 0;
        var posFin = 0;

        posIni = tempLink.toString().indexOf('page=');
        if (posIni !== -1) {
            posIni += 5;
            posFin = tempLink.indexOf('&', posIni)

            if (posFin !== -1)
                page = tempLink.substr(posIni, posFin - posIni);
            else
                page = tempLink.substr(posIni);

            objeto.attr('href', 'javascript:void(0)');
            link = '?page=' + page + parametros;
            window.location.href = $('.sysForm').attr('href') + link
        }
    }
}

//  Configura un mensaje informativo
function bootbox_msg(msg) {
    bootbox.dialog({
        message: msg,
        title: 'Información',
        buttons: {
            main: {
                label: 'Entendido',
                className: 'btn-default'
            }
        }
    });
}

function iOS() {
    return [
        'iPad Simulator',
        'iPhone Simulator',
        'iPod Simulator',
        'iPad',
        'iPhone',
        'iPod'
    ].includes(navigator.platform)
        // iPad on iOS 13 detection
        || (navigator.userAgent.includes("Mac") && "ontouchend" in document)
}