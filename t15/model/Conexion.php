<?php
class Conexion
{
    private $conexion;
    public function __construct($localhost, $userName, $pass, $db)
    {
        $this->conexion = new mysqli($localhost, $userName, $pass, $db);
    }

    public function getConexion()
    {
        return $this->conexion;
    }
}
