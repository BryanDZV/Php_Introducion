<?php

namespace Bryan\Libros\Controllers;

use Bryan\Libros\Models\CustomerModel;
use Bryan\Libros\Models\BookModel;
use Bryan\Libros\Models\SaleModel;
use Exception;

class SaleController
{
    public function seleccionarCliente()
    {
        $modelo = new CustomerModel();
        $clientes = $modelo->getAll();

        require __DIR__ . '/../Views/sale_cliente.php';
    }

    public function seleccionarLibros()
    {
        $customerId = $_POST['customer_id'];

        $modelo = new BookModel();
        $libros = $modelo->getAll();

        require __DIR__ . '/../Views/sale_libros.php';
    }

    public function procesarVenta()
    {
        $modelo = new SaleModel();

        try {
            $modelo->insercion_venta_libro(
                $_POST['customer_id'],
                $_POST['libros']
            );
            $mensaje = "Venta realizada correctamente";
        } catch (Exception $e) {
            $mensaje = "Error: " . $e->getMessage();
        }

        require __DIR__ . '/../Views/sale_resultado.php';
    }
}
