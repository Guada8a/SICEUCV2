$(document).ready(function () {
    //Agregar cursor pointer a li
    //Al hacer click en li, ejecuta evento click de su hijo a
    $(".menu-session li").click(function () {
        $(this).children("a")[0].click();
    });
    let menu = $(".menu-session li");
    let menuArray = [];

    menu.each(function (index, element) {
        menuArray.push(element);
    });

    let active = $(".active");
    active.removeClass("active");
    let path = window.location.pathname;
    //Si empieza con /SICEUCV2, quitarlo
    if (path.indexOf("/SICEUCV2") == 0) {
        path = path.replace("/SICEUCV2", "");
    }
    console.log(path);
    switch (path) {
        case "/inicio.html":

            menuArray.forEach(element => {
                //elemnent.children[0].textContent
                if (element.children[0].textContent == "Inicio") {
                    $(element).addClass("active");
                }
            });
            break;
        case "/evaluaciones.html":
        case "/analisis.html":
            menuArray.forEach(element => {
                //elemnent.children[0].textContent
                if (element.children[0].textContent == "Evaluaciones") {
                    $(element).addClass("active");
                }
            });
            break;
        default:
            break;
    }
    //Click en el botón de menú
    $(".menu-button").click(function () {
        //Si el menú esta visible, ocultarlo
        if ($(".main-menu").is(":visible")) {
            $(".main-menu").hide({
                effect: "scale",
                percent: 100
            }, 500);
            $(this).removeClass("menu-open");
            if($("#menuLbl").css("display") != "none"){
                $("#menuLbl").css("display", "none");
            }
        } else {
            //Si no, mostrarlo
            $(".main-menu").show({
                effect: "scale",
                percent: 100
            }, 500);
            $(this).addClass("menu-open");
            if($("#menuLbl").css("display") != "block"){
                $("#menuLbl").css("display", "block");
            }
        }
    });
    //Si da click fuera del menú, cerrarlo
    $(document).mouseup(function (e) {
        //Solo si la ventana tiene un ancho menor a 768px
        if ($(window).width() > 808) {
            return;
        }else{
            var container = $(".main-menu");
            //Si ya esta oculto, no hacer nada
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.hide({
                    effect: "scale",
                    percent: 100
                }, 500);
                if($(".menu-button").hasClass("menu-open")){
                    $(".menu-button").removeClass("menu-open");
                }
                if($("#menuLbl").css("display") != "none"){
                    $("#menuLbl").css("display", "none");
                }
            }
        }
    });
});