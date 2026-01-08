<?php

namespace Bryan\Crud\Controlls;

session_start();

class AuthController
{
    public function login()
    {
        if ($_POST) {
            $custid = $_POST["custid"];
        }
    }
}
