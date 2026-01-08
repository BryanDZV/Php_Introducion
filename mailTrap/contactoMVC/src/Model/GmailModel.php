<?php

namespace App\ContactoMvc\Model;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;

class GmailModel
{
    /**
     * Envía un correo usando Gmail SMTP con TLS
     * @param string $email   Email del usuario (Reply-To)
     * @param string $mensaje Mensaje del formulario
     * @return bool           true si se envía, false si falla
     */
    public function enviarCorreo($email, $mensaje)
    {
        // 1️⃣ Crear el objeto PHPMailer
        // true → lanza excepciones si ocurre un error
        $mail = new PHPMailer(true);

        try {
            /* ===============================
               CONFIGURACIÓN SMTP (GMAIL)
               =============================== */

            // 2️⃣ Indicamos que vamos a usar SMTP (no mail())
            $mail->isSMTP();

            // 3️⃣ Servidor SMTP de Gmail
            $mail->Host = $_ENV['MAIL_HOST']; // smtp.gmail.com

            // 4️⃣ Activamos autenticación SMTP
            $mail->SMTPAuth = true;

            // 5️⃣ Usuario de Gmail (correo completo)
            $mail->Username = $_ENV['MAIL_USER'];

            // 6️⃣ Contraseña de aplicación de Gmail
            // ⚠️ NUNCA es la contraseña real
            $mail->Password = $_ENV['MAIL_PASS'];

            // 7️⃣ Tipo de cifrado → TLS (STARTTLS)
            // Es el recomendado y el más estable en local
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            // 8️⃣ Puerto SMTP para TLS
            $mail->Port = 587;

            /* ===============================
               DATOS DEL CORREO
               =============================== */

            // 9️⃣ Remitente del correo
            // Debe ser el mismo correo autenticado en Gmail
            $mail->setFrom($_ENV['MAIL_USER'], 'Web MVC');

            // 🔟 Destinatario real del correo a quien llega el correo OSEA A MI
            $mail->addAddress($_ENV['MAIL_USER']);

            // 1️⃣1️⃣ Dirección de respuesta (el email del usuario) A QUIEN RESPONDO
            $mail->addReplyTo($email);

            // 1️⃣2️⃣ Asunto del correo
            $mail->Subject = 'Mensaje desde formulario';

            // 1️⃣3️⃣ Cuerpo del correo en HTML
            $mail->MsgHTML($mensaje);

            /* ===============================
               ENVÍO
               =============================== */

            // // ⚠️ SOLO PARA LOCALHOST (evita error de certificados en Windows)USAR UN SERVIDOR REALpara no poner esto
            // $mail->SMTPOptions = [
            //     'ssl' => [
            //         'verify_peer' => false,
            //         'verify_peer_name' => false,
            //         'allow_self_signed' => true,
            //     ],
            // ];


            // 1️⃣4️⃣ Enviar el correo
            $mail->send();

            // 1️⃣5️⃣ Si todo va bien, devolvemos true
            return true;
        } catch (Exception $e) {

            // 1️⃣6️⃣ Si hay error, mostramos el error real de PHPMailer
            echo "❌ Error real: " . $mail->ErrorInfo;

            // 1️⃣7️⃣ Indicamos que el envío ha fallado
            return false;
        }
    }
}
