<?php

use clases\Circulo;



//clases
class libro
{
    public $titulo = "";
    public $autor = "";
    public $isb = "as";
}

$libro1 = new libro();
$libro1->titulo = "pepe";
$libro1->autor = "el quijote";
//var_dump($libro1);
class persona
{
    public $nombre = "defecto";
    public $edad = "0";
    public $ciudad = "defecto";
    //metodo mágico
    public function __toString()
    {
        return "hola soy " . $this->nombre . " y mi edad es " . $this->edad;
    }
}

$yo = new persona();
$yo->nombre = "bryan";
$yo->ciudad = "madrid";
$yo->edad = "32";
//echo $yo;
//var_dump($yo);

class Coche
{
    public $marca = "";
    public $modelo = "";
    public $color = "";
}

$coche1 = new Coche();
$coche2 = new Coche();

$coche1->color = "red";
$coche1->marca = "pepe";
$coche1->modelo = "hyundai";

$coche2->color = "green";
$coche2->marca = "romeo";
$coche2->modelo = "toyota";

//var_dump($coche1, $coche2);

class Calculadora
{
    public $numerox = 1;
    public $numeroi = 1;

    public function getSuma()
    {
        $resultado = $this->numerox + $this->numeroi;
        return $resultado;
    }
}

$calcu = new Calculadora();
$calcu->numerox = 3;
$calcu->numeroi = 3;

$calcu->getSuma();

//var_dump($calcu->getSuma());

class Producto
{
    public $nombre = "defecto";
    public $precio = 0;

    public function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}

$producto1 = new Producto("leche", 30);
$producto2 = new Producto("carne", 20);

//var_dump($producto1, $producto2);
class Usuario
{
    private $nombre = "defecto";
    private $password = 0;
    public function __construct($nombre, int $password)

    {
        $this->nombre = $nombre;
        $this->password = $password;
    }


    public function __toString()
    {
        return "el nombre de usuario es : " . $this->nombre . " y tu contraseña es : " . $this->password;
    }

    public function verificarPass($password)
    {
        return $this->password === $password;
    }
}
$usuario1 = new Usuario("bryan", 12);
$passwordDesdeForm = 12;
$resultado = $usuario1->verificarPass($passwordDesdeForm);
//echo "<br>";
//echo $usuario1;
if ($resultado) {
    //echo "tu contraseña es correcta";
} else {
    // echo "tu contraseña es incorrecta";
}

class Mercancia
{
    private $queso = "defecto";
    private $pasta = "defecto";
    private $arroz = "defecto";

    public function __construct($queso, $pasta, $arroz)
    {
        $this->queso = $queso;
        $this->pasta = $pasta;
        $this->arroz = $arroz;
    }

    // Getters
    public function getQueso()
    {
        return $this->queso;
    }

    public function getPasta()
    {
        return $this->pasta;
    }
    public function getArroz()
    {
        return $this->arroz;
    }

    // Setters
    public function setQueso($queso)
    {
        if (is_string($queso)) {
            $this->queso = $queso;
            return true;
        }
        return false;
    }

    public function setPasta($pasta)
    {
        if (is_string($pasta)) {
            $this->pasta = $pasta;
            return true;
        }
        return false;
    }

    public function setArroz($arroz)
    {
        if (is_string($arroz)) {
            $this->arroz = $arroz;
            return true;
        }
        return false;
    }
}

$mercancia1 = new Mercancia("queso", "pasta", "arroz");

if (!$mercancia1->setQueso("queso Manchego")) {
    echo "Error al asignar queso";
}

//var_dump($mercancia1->getQueso());

class Contador
{
    private static $cuenta = 0;
    private $nombre = "defecto";
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        self::setCuenta();
    }
    public function contadorObjetos($n)
    {
        return self::$cuenta;
    }
    public static function getCuenta()
    {
        return self::$cuenta;
    }
    public static function setCuenta()
    {
        self::$cuenta++;
    }



    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function __toString(): string
    {
        return $this->nombre;
    }
}

$cnt1 = new Contador("primero");
$cnt2 = new Contador("segundo");
//echo Contador::getCuenta();

//namespaces

use app\models\Coche as Fantasma;

require_once __DIR__ . "/coche.php";

$coche1 = new Fantasma();
//echo $coche1;

//auto loading


require __DIR__ . "/autoload.php";

use clases\X;

$x1 = new X("soy pedrin");
//echo $x1;
//herencia

use clases\Vehiculos;
use clases\Moto;

$moto1 = new Moto("suzuki", 2000, "moto", "Japon");
//echo $moto1;

//SOBREESCRITURA DE METODOS

use clases\Animal;
use clases\Perro;

$perro1 = new Perro(3, "perroJuanalete");
$animal1 = new Animal("padre");

//echo "soy el HIJO  " . $perro1->getSonido() . "<br>";

//echo "soy el PADRE   " . $animal1->getSonido();
//CLASES ABTRACTAS
$circulo1 = new Circulo(5);
echo $circulo1->mostrarInfo();
