<?php

namespace App\Controller;

use App\Core\View;
use App\Model\SaleModel;
use Exception;

class SaleController
{
    private SaleModel $model;

    public function __construct()
    {
        $this->model = new SaleModel();
    }

    // Mostrar formulario para seleccionar cliente
    public function index(): void
    {
        $customers = $this->model->getAllCustomers();
        View::render(__DIR__ . '/../../../views/customers_form.php', ['customers' => $customers]);
    }

    // Crear venta (recibe POST['customer_id']) y mostrar formulario para seleccionar libros
    public function createSale(array $post): void
    {
        $error = null;
        $saleId = null;

        if (isset($post['customer_id']) && intval($post['customer_id']) > 0) {
            try {
                $customerId = intval($post['customer_id']);
                // Crear venta (inserta en sale y devuelve id)
                $saleId = $this->model->createSale($customerId);
                // Obtener libros y mostrar la vista para añadir libros
                $books = $this->model->getAllBooks();
                View::render(__DIR__ . '/../../views/select_books.php', ['books' => $books, 'sale_id' => $saleId]);
            } catch (Exception $e) {
                $error = $e->getMessage();
                View::render(__DIR__ . '/../../views/result.php', ['error' => $error]);
            }
        } else {
            $error = 'Cliente no válido';
            View::render(__DIR__ . '/../../views/result.php', ['error' => $error]);
        }
    }

    // Procesar selección de libros y cantidades (recibe POST con sale_id, books[] y quantity[])
    public function processBooks(array $post): void
    {
        $error = null;
        $success = null;

        if (isset($post['sale_id']) && intval($post['sale_id']) > 0 && isset($post['books']) && is_array($post['books'])) {
            $saleId = intval($post['sale_id']);
            $books = $post['books'];
            $quantities = isset($post['quantity']) && is_array($post['quantity']) ? $post['quantity'] : [];

            try {
                // Llamamos al modelo para insertar sale_book (con transacción y comprobación de existencia)
                $this->model->addBooksToSale($saleId, $books, $quantities);
                $success = "Venta procesada correctamente. ID venta: " . htmlspecialchars((string)$saleId);
                View::render(__DIR__ . '/../../views/result.php', ['success' => $success]);
            } catch (Exception $e) {
                $error = $e->getMessage();
                View::render(__DIR__ . '/../../views/result.php', ['error' => $error]);
            }
        } else {
            $error = 'Datos incompletos para procesar la venta';
            View::render(__DIR__ . '/../../views/result.php', ['error' => $error]);
        }
    }
}
