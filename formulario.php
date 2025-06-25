<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre    = htmlspecialchars($_POST['nombre']);
    $apellido  = htmlspecialchars($_POST['apellido']);
    $email     = htmlspecialchars($_POST['email']);
    $telefono  = htmlspecialchars($_POST['telefono']);
    $mensaje   = htmlspecialchars($_POST['mensaje']);

    $destino = "frandevdev@gmail.com"; 
    $asunto = "Nuevo mensaje desde el formulario web";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Apellido: $apellido\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    $headers = "From: $email";

    if (mail($destino, $asunto, $contenido, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>