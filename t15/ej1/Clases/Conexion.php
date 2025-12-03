<?php

namespace Clases;

class Conexion
{
    private $host;
    private $user;
    private $pass;
    private $database;
    protected $con;

    public function __construct($host, $user, $pass, $database)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->database = $database;
    }

    public function conectar()
    {
        $this->con = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->database
        );

        if (!$this->con) {
            die(" Error al conectar: " . mysqli_connect_error());
        }

        return $this->con;
    }

    public function cerrar()
    {
        if ($this->con) {
            mysqli_close($this->con);
        }
    }
}
