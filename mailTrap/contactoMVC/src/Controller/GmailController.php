<?php

namespace App\ContactoMvc\Controller;

use App\ContactoMvc\Model\GmailModel;

class GmailController
{

    public function gestionarEnvio()
    {
        if (!isset($_POST["enviar"])) {
            require __DIR__ . "/../Views/form.php";
        } else {
            $email = $_POST["email"];

            $mensaje = $_POST['mensaje'];
            $model = new GmailModel();
            $resultado = $model->enviarCorreo($email, $mensaje);
            require __DIR__ . '/../Views/result.php';
        }
    }
}
