<?php

namespace Clases;

class Conexion
{

    private $hostname = "";
    private $root = "";
    private $pass = "";
    private $database = "";
    public function __construct($hostname, $root, $pass, $database)
    {
        $this->hostname = $hostname;
        $this->root = $root;
        $this->pass = $pass;
        $this->database = $database;
    }

    public function getHostname()
    {
        return $this->hostname;
    }

    public function setHostname($hostname): void
    {
        $this->hostname = $hostname;
    }

    public function getRoot()
    {
        return $this->root;
    }

    public function setRoot($root): void
    {
        $this->root = $root;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass): void
    {
        $this->pass = $pass;
    }

    public function getDatabase()
    {
        return $this->database;
    }

    public function setDatabase($database): void
    {
        $this->database = $database;
    }

    public function __toString(): string
    {
        return $this->hostname . ", " . $this->root . ", " . $this->pass . ", " . $this->database;
    }
}
