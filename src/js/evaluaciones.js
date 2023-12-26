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
    //Leer JSON de evaluaciones
    $.getJSON("src/js/calif.json", function (data) {
        // Recorrer JSON
        $.each(data, function (key, val) {
            // Crear el contenedor para la tabla del semestre
            var semestreContainer = $("<div>").addClass("semestre-container");
            var semestreTitle = $("<div>").addClass("subtitle-primary-variant").text("Semestre " + key);
            var semestreTable = $("<table>").attr("width", "98%").attr("border", "0").attr("cellpadding", "1").attr("cellspacing", "0").addClass("table").attr("id", "analisis" + key).append("<tbody>");
            semestreTable.find("tbody").append("<tr><td>Materia</td><td>Calificación</td><td>Examen</td></tr>");
            // Agregar evaluaciones a la tabla del semestre
            for (var i = 0; i < val.materias.length; i++) {
                var row = "<tr><td>" + val.materias[i] + "</td><td><b>" + val.calificaciones[i] + "</b></td><td>" + val.examenes[i] + "</td></tr>";
                semestreTable.find("tbody").append(row);
            }
    
            // Agregar la tabla del semestre al contenedor
            semestreContainer.append(semestreTitle).append(semestreTable);
            // Crear tfoot con promedio
            var tfoot = $("<tfoot>");
            var row = $("<tr>");
            //Cols span completo
            var col = $("<td>").attr("colspan", "3").css("text-align", "center");
            col.append("<b>Promedio: " + val.promedio + "</b>");
            row.append(col);
            
            tfoot.append(row);
            semestreTable.append(tfoot);
            // Agregar el contenedor del semestre al documento
            $("#analisis-container").append(semestreContainer);
        });
        $("#analisis-container").append("<div class='badge-success'><span>Promedio General: 9.58</span><br><span>Total de Materias: 35</span></div>");
    });
    
    
});