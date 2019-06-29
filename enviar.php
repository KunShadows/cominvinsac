<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $destino = 'anthonydp1509@gmail.com';

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $contenido = 'Nombre: ' . $nombre . '\nCorreo: ' . $correo . '\nTeléfono: ' . $telefono . '\Mensaje: ' . $mensaje;

    mail($destino, 'Contacto', $contenido);
    //header('Location:contact.html');
?>