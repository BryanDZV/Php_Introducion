<?php




namespace App\ContactoMvc\Model;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;

class MailModel
{
    public function enviarCorreo($email, $mensaje)
    {
        $mail = new PHPMailer(true);

        try {
            // CONFIGURACIÓN MAILTRAP
            $mail->isSMTP();
            $mail->Host = "smtp.mailtrap.io";
            $mail->SMTPAuth = true;
            $mail->Username = "e0881087bdfe14";
            $mail->Password = "f0dfb865118f55";
            $mail->Port = 2525;

            // CORREO
            $mail->setFrom("pruebas@mailtrap.io", "Prueba MVC");
            $mail->addAddress("destino@mailtrap.io");
            $mail->addReplyTo($email);

            $mail->Subject = "Correo de prueba con Mailtrap";
            $mail->MsgHTML($mensaje);

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
