<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/autoload.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];

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
        $mail->setFrom("tucorreo@gmail.com", "Mi Web");
        $mail->addAddress($email);
        $mail->Subject = "Registro completado";
        $mail->MsgHTML("Gracias por registrarte");

        $mail->send();
        echo "Correo enviado";
    } catch (Exception $e) {
        echo "Error: " . $mail->ErrorInfo;
    }
}
