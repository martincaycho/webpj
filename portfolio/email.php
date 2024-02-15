<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $to = "martincaychofalcon@gmail.com"; // Reemplaza con tu dirección de correo
    $subject = "Nuevo mensaje del formulario de contacto";

    $message = "Your name $nombre\n";
    $message .= "Your email $email\n";
    $message .= "Your mensage \n\n$mensaje";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}


