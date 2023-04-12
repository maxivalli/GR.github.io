<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$destinatario = 'maximilianovalli.sc@gmail.com';
$asunto = 'Mensaje desde la WEB';
$mensaje_correo = "Nombre: $nombre $apellido\n"
                . "Teléfono: $telefono\n"
                . "Mensaje: \n$mensaje";

mail($destinatario, $asunto, $mensaje_correo);

echo "Gracias por su mensaje, $nombre. Le responderemos a la brevedad.";

?>