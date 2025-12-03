<?php

namespace Clases;

class Users extends Conexion
{
    private $localhost;
    private $db;
    private $pass;
    private $userName;
    public function __construct($localhost, $db, $pass, $userName)
    {

        $this->localhost = $localhost;
        $this->db = $db;
        $this->pass = $pass;
        $this->userName = $userName;
        parent::__construct($localhost, $db, $pass, $userName);
    }

    public function getLocalhost()
    {
        return $this->localhost;
    }

    public function setLocalhost($localhost): void
    {
        $this->localhost = $localhost;
    }

    public function getDb()
    {
        return $this->db;
    }

    public function setDb($db): void
    {
        $this->db = $db;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass): void
    {
        $this->pass = $pass;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function setUserName($userName): void
    {
        $this->userName = $userName;
    }

    public function __toString(): string
    {
        return $this->localhost . ", " . $this->db . ", " . $this->pass . ", " . $this->userName;
    }
}
