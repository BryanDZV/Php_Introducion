<?php

namespace App\ContactoMvc\Controller;

use App\ContactoMvc\Model\MailModel;

class MailController
{
    public function gestionarEnvio()
    {
        // 👉 SI NO HAY POST → MOSTRAR FORMULARIO
        if (!isset($_POST['enviar'])) {
            require __DIR__ . '/../Views/form.php';
            return;
        }

        // 👉 SI HAY POST → PROCESAR
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];

        $model = new MailModel();
        $resultado = $model->enviarCorreo($email, $mensaje);

        require __DIR__ . '/../Views/result.php';
    }
}
