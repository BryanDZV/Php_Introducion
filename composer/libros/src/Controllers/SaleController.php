<?php

namespace Bryan\Libros\Controllers;

use Bryan\Libros\Models\BookModel;
use Bryan\Libros\Models\CustomerModel;
use Bryan\Libros\Models\SaleModel;
use Exception;

class SaleController
{
    public function seleccionarCliente()
    {
        $clientes = (new CustomerModel())->getAll();
        require __DIR__ . "/../views/sale_cliente.php";
    }

    public function seleccionarLibros()
    {
        $customerId = $_POST['customer_id'];
        $libros = (new BookModel())->getAll();
        require __DIR__ . "/../views/sale_libros.php";
    }

    public function procesarVenta()
    {
        try {
            (new SaleModel())->insercionVentaLibro(
                $_POST['customer_id'],
                $_POST['libros']
            );
            $mensaje = "Venta realizada correctamente";
        } catch (Exception $e) {
            $mensaje = "Error: " . $e->getMessage();
        }

        require __DIR__ . "/../views/sale_resultado.php";
    }
}
