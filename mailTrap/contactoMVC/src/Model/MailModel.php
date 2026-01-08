<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

class MailModel
{
    public function enviarEmail($email, $mensaje)
    {
        $mail = new PHPMailer(true);

        try {
            // Configuración SMTP
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "tucorreo@gmail.com";
            $mail->Password = "CLAVE_DE_APLICACION";
            $mail->SMTPSecure = "ssl";
            $mail->Port = 465;

            // Correo
            $mail->setFrom("tucorreo@gmail.com", "Contacto Web");
            $mail->addAddress("tucorreo@gmail.com");
            $mail->addReplyTo($email);
            $mail->Subject = "Nuevo mensaje de contacto";
            $mail->MsgHTML($mensaje);

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
