<?php


namespace Bryan\Crud\Controlls;

session_start();

use Bryan\Crud\Models\CustomerModel;
use Exception;

class CustomerControll
{

    private $model;


    public function __construct()
    {
        if (!isset($_SESSION["user"])) {
            header("Location:index.php");
        } else {
            $this->model = new CustomerModel();
        }
    }


    public function create()
    {

        try {
            if ($_POST) {
                $this->model->create($_POST["custid"], $_POST["cname"], $_POST["email"], $_POST["phone"], $_POST["addres"]);
                header("Location:index.php?action=listUser");
            } else {

                header("Location:./../Views/Customer/crear.php");
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
}
