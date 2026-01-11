<?php

namespace Bryan\Libros\Controllers;

use Bryan\Libros\Models\CustomerModel;

class CustomerController
{
    public function crearCliente()
    {
        $modelo = new CustomerModel();

        /*
            Si el formulario se ha enviado
        */
        if (isset($_POST['registrar'])) {

            /*
                Recogemos datos
            */
            if (isset($_POST['firstname'])) {
                $firstname = $_POST['firstname'];
            } else {
                $firstname = '';
            }

            if (isset($_POST['surname'])) {
                $surname = $_POST['surname'];
            } else {
                $surname = '';
            }

            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            } else {
                $email = '';
            }

            if (isset($_POST['type'])) {
                $type = $_POST['type'];
            } else {
                $type = '';
            }

            /*
                Validamos
            */
            if ($firstname !== '' && $surname !== '' && $email !== '' && $type !== '') {

                $modelo->create(
                    uniqid(),
                    $firstname,
                    $surname,
                    $email,
                    $type
                );

                $mensaje = "cliente_creado";

                require __DIR__ . '/../Views/crear_cliente.php';
            } else {

                $error = "Faltan datos";
                require __DIR__ . '/../Views/crear_cliente.php';
            }
        } else {

            /*
                Mostrar formulario
            */
            require __DIR__ . '/../Views/crear_cliente.php';
        }
    }
}
