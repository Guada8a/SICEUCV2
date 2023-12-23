<?php
// Verifica si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los valores de los campos del formulario
    $numeroCuenta = $_POST["al_cuenta"];
    $clave = $_POST["al_clave"];

    // Aquí puedes realizar operaciones con los datos recibidos, como verificar credenciales, guardar en una base de datos, etc.
    
    // Ejemplo: Imprimir los valores recibidos
    echo "Número de cuenta: " . $numeroCuenta . "<br>";
    echo "Clave: " . $clave;

    // Redirige a inicio.html después de procesar el formulario
    header("Location: inicio.html");
    exit(); // Asegura que el script se detenga después de la redirección
} else {
    // Si no se recibieron datos por POST, redirige o realiza alguna acción
    echo "Error: No se recibieron datos del formulario.";
}
?>
