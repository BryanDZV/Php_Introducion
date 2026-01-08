<?php

require_once __DIR__ . '/../Model/MailModel.php';

class ContactController
{
    public function enviarMensaje()
    {
        if (isset($_POST['email']) && isset($_POST['mensaje'])) {

            $email = $_POST['email'];
            $mensaje = $_POST['mensaje'];

            $mailModel = new MailModel();
            $resultado = $mailModel->enviarEmail($email, $mensaje);

            require __DIR__ . '/../Views/result.php';
        }
    }
}
