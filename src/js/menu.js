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
    path = path.substring(path.lastIndexOf("/"));
    switch (path) {
        case "/inicio.html":
            
            menuArray.forEach(element => {
                //elemnent.children[0].textContent
                if(element.children[0].textContent == "Inicio"){
                    $(element).addClass("active");
                }
            });
            break;
        case "/evaluaciones.html":
        case "/analisis.html":
            menuArray.forEach(element => {
                //elemnent.children[0].textContent
                if(element.children[0].textContent == "Evaluaciones"){
                    $(element).addClass("active");
                }
            });
            break;
        default:
            break;
    }
});