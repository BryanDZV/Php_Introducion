<?php

namespace Bryan\Libros\Controllers;

use Bryan\Libros\Models\CustomerModel;

class CustomerController
{
    public function crearCliente()
    {
        $modelo = new CustomerModel();


        if (isset($_POST['registrar'])) {


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
            if (isset($_POST['password'])) {
                $password = $_POST['password'];
            } else {
                $password = '';
            }


            if ($firstname !== '' && $surname !== '' && $email !== '' && $type !== '' && $password !== '') {

                $modelo->create(

                    $firstname,
                    $surname,
                    $email,
                    $type,
                    $password,
                );

                $mensaje = "cliente_creado";

                header("Location:index.php");
            } else {

                $error = "Faltan datos";
                require __DIR__ . '/../Views/crear_cliente.php';
            }
        } else {


            require __DIR__ . '/../Views/crear_cliente.php';
        }
    }
}
