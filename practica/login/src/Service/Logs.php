<?php

namespace Bryan\Login\Service;

class Logs
{
    private $logs = [];
    private static $instancia = null;

    private function __construct()
    {
        echo "loger creado";
    }

    public static function getInstance()
    {
        if (self::$instancia === null) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function setLogs($menssage)
    {
        $this->logs[] = $menssage;
    }

    public function getLogS()
    {
        return $this->logs;
    }
}
