<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$destinatario = filter_input(INPUT_POST, 'destino');
$asunto = filter_input(INPUT_POST, 'asunto');
$mensaje = filter_input(INPUT_POST, 'mensaje');

$mail = new PHPMailer(true);

try {
    // Configuración del servidor
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'prueba@gmail.com'; 
    $mail->Password = 'prueba'; //Reemplazar por una contraseña de aplicación real
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Destinatarios
    $mail->setFrom('prueba@gmail.com', 'Mailer'); //Reemplazar por un correo real
    $mail->addAddress($destinatario);

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = $asunto;
    $mail->Body = $mensaje;

    $mail->send();
    // echo 'Mensaje enviado correctamente';
    require 'confirm.php';
} catch (Exception $e) {
    echo "El mensaje no pudo ser enviado. Error de PHPMailer: {$mail->ErrorInfo}";
}
?>
