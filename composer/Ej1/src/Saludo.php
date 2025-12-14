<?php
//El namespace no tiene que coincidir con la ruta del proyecto, 
//sino con el mapeo PSR-4 definido en composer.json.
namespace Bryan\Ej1;

class Saludo
{
    public function decirHola(): string
    {
        return "Composer funciona correctamente en ej1";
    }
}
