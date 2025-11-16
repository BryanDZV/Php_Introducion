<?php

class Customer
{

    private static $lastId = 0;


    private int $id;
    private string $nombre;
    private string $apellidos;
    private string $correo;


    public function __construct(string $nombre, string $apellidos, string $correo)
    {

        self::$lastId++;
        $this->id = self::$lastId;

        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->correo = $correo;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getCorreo(): string
    {
        return $this->correo;
    }


    public function __toString(): string
    {
        return "ID: {$this->id}, Nombre: {$this->nombre} {$this->apellidos}, Correo: {$this->correo}";
    }


    public static function getLastId(): int
    {
        return self::$lastId;
    }
}

class Book
{
    public $titulo;
    public $autor;
    public $isbn;

    public function __construct(string $titulo, string $autor, string $isbn)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
    }


    public function __toString(): string
    {
        return "Título: {$this->titulo}, Autor: {$this->autor}, ISBN: {$this->isbn}";
    }
}
