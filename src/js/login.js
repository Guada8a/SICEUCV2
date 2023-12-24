$(document).ready(function() {
    
    $('.form-control').click(function() {
        $('.form-control').removeClass("input-error");
        $('.field-validation-valid[data-valmsg-for="al_cuenta"]').text("");
        $('.field-validation-valid[data-valmsg-for="al_clave"]').text("");
    });
    $('.form').submit(function(e) {
        // Evitar que el formulario se envíe de forma convencional
        e.preventDefault();

        // Obtener los datos del formulario
        var formData = {
            al_cuenta: $('#al_cuenta').val(),
            al_clave: $('#al_clave').val()
        };
        console.log(formData);
        if(formData.al_cuenta == "" || formData.al_clave == ""){
            if(formData.al_cuenta == ""){
                $('#al_cuenta').addClass("input-error");
                $('.field-validation-valid[data-valmsg-for="al_cuenta"]').text($("#al_cuenta").attr("data-val-required"));
            }
            if(formData.al_clave == ""){
                $('#al_clave').addClass("input-error");
                $('.field-validation-valid[data-valmsg-for="al_clave"]').text($("#al_clave").attr("data-val-required"));
            }
            //Evitar que se envie el formulario
            e.preventDefault();
        }else{
            // // Realizar una solicitud AJAX POST
            // $.ajax({
            //     type: 'POST',
            //     url: 'http://127.0.0.1:5500/inicio.html',  // Cambia la URL del servidor según tu configuración
            //     data: formData,
            //     success: function(response) {
            //         // Manejar la respuesta del servidor
            //         console.log('Respuesta del servidor:', response);
            //     },
            //     error: function(error) {
            //         // Manejar errores
            //         console.error('Error en la solicitud AJAX:', error);
            //     }
            // });
            window.location.href = "inicio.html";
        }

    });
});