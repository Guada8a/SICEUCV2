$(document).ready(function () {
    var urlParams = new URLSearchParams(window.location.search);

    // Obtener el valor de un parámetro específico
    var al_cuenta = urlParams.get('al_cuenta');
    var al_clave = urlParams.get('al_clave');

    // Mostrar los valores en la consola (puedes hacer lo que quieras con estos valores)
    console.log('al_cuenta:', al_cuenta);
    console.log('al_clave:', al_clave);

    //--------------CARGAR CONTENIDO DINAMICO----------------
    $("#header-container").load("src/components/header.html");
    
    var menu = "src/components/menu.html";
    $.get(menu, function (data) {
        $(".main-container-centered").prepend(data);
    });

    var dataPage = "src/components/datos.html";
    $.get(dataPage, function (data) {
        $(".attendances").prepend(data);
    });
});