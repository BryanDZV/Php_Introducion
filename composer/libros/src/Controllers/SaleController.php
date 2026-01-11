<?php

namespace Bryan\Libros\Controllers;



use Bryan\Libros\Models\CustomerModel;
use Bryan\Libros\Models\BookModel;
use Bryan\Libros\Models\SaleModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


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
        try {
            if (!empty($_POST['customer_id'])) {
                $customerId = $_POST['customer_id'];

                $modelo = new BookModel();
                $libros = $modelo->getAll();

                require __DIR__ . '/../Views/sale_libros.php';
            } else {

                $error = "Selecciona un cliente";
                require __DIR__ . "../../Views/Sale_Cliente.php";
            }
        } catch (Exception $e) {
            $mensaje = $e->getMessage();
            require __DIR__ . '../../Views/Sale_Resultado.php';
        }
    }

    public function procesarVenta()
    {
        $modeloVenta   = new SaleModel();
        $modeloCliente = new CustomerModel();

        try {
            // 1. Insertar venta
            $modeloVenta->insercion_venta_libro(
                $_POST['customer_id'],
                $_POST['libros']
            );

            // 2.  email REAL del cliente
            $emailCliente = $modeloCliente->getEmailById($_POST['customer_id']);

            // 3. Enviar email si existe
            if ($emailCliente !== null) {
                $this->enviarEmailVenta($emailCliente);
            }

            $mensaje = "Venta realizada correctamente";
        } catch (Exception $e) {

            $mensaje = "Error: " . $e->getMessage();
        }

        require __DIR__ . '/../Views/sale_resultado.php';
    }



    private function enviarEmailVenta($emailCliente)
    {
        $mail = new PHPMailer(true);

        try {
            // Configuración SMTP desde .env
            $mail->isSMTP();
            $mail->Host       = $_ENV['MAIL_HOST'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $_ENV['MAIL_USER'];
            $mail->Password   = $_ENV['MAIL_PASS'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = $_ENV['MAIL_PORT'];

            // Remitente y destinatario
            $mail->setFrom($_ENV['MAIL_USER'], 'Librería');
            $mail->addAddress($emailCliente);

            // Contenido
            $mail->isHTML(true);
            $mail->Subject = 'Confirmación de compra';
            $mail->Body    = "
            <h2>Gracias por su compra</h2>
            <p>La venta se ha realizado correctamente.</p>
        ";

            $mail->send();
        } catch (Exception $e) {
        }
    }
}
