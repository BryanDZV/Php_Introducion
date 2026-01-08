<?php


namespace App\ContactoMvc\Controller;

use App\ContactoMvc\Model\MailModel;




class ContactController
{
    public function enviarMensaje()
    {
        if (isset($_POST['email']) && isset($_POST['mensaje'])) {

            $email = $_POST['email'];
            $mensaje = $_POST['mensaje'];

            $mailModel = new MailModel();
            $resultado = $mailModel->enviarCorreo($email, $mensaje);

            require __DIR__ . '/../Views/result.php';
        }
    }
}
