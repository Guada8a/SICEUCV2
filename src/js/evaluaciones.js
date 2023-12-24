$(document).ready(function () {
    
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