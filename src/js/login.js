$(document).ready(function() {
    $('.login').click(function() {
        //Redirect to login page
        window.location.href = 'inicio.html';
    });
    $('.form').submit(function(e) {
        // Evitar que el formulario se envíe de forma convencional
        e.preventDefault();

        // Obtener los datos del formulario
        var formData = {
            al_cuenta: $('#al_cuenta').val(),
            al_clave: $('#al_clave').val()
        };

        // Realizar una solicitud AJAX POST
        $.ajax({
            type: 'POST',
            url: 'http://127.0.0.1:5500/inicio.html',  // Cambia la URL del servidor según tu configuración
            data: formData,
            success: function(response) {
                // Manejar la respuesta del servidor
                console.log('Respuesta del servidor:', response);
            },
            error: function(error) {
                // Manejar errores
                console.error('Error en la solicitud AJAX:', error);
            }
        });
    });
});