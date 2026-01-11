<?php
require "./Utilidades.php";
$rows = [
    [
        "id" => 1,
        "nombre" => "Juan",
        "apellidos" => "Pérez"
    ],
    [
        "id" => 2,
        "nombre" => "Ana",
        "apellidos" => "López"
    ],
    [
        "id" => 1,
        "nombre" => "Juan",
        "apellidos" => "Pérez"
    ],
    [
        "id" => 2,
        "nombre" => "Ana",
        "apellidos" => "López"
    ],
    [
        "id" => 1,
        "nombre" => "Juan",
        "apellidos" => "Pérez"
    ],
    [
        "id" => 2,
        "nombre" => "Ana",
        "apellidos" => "López"
    ],
    [
        "id" => 1,
        "nombre" => "Juan",
        "apellidos" => "Pérez"
    ],
    [
        "id" => 2,
        "nombre" => "Ana",
        "apellidos" => "López"
    ],

];

$tabla = Funciones::crearTabla($rows);
echo "<h2>TABLA CON FUNCION GENERICA</h2>";
echo $tabla;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla</title>
    <H1>TABLA EN VISTA DIRECTAMENTE MAS CAMPOS</H1>
</head>

<body>
    <table border="1" cellspacing="0">
        <thead>
            <th>id</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>stock</th>
        </thead>
        <tbody>
            <?php
            foreach ($rows as $r) {

                echo "<tr>";
                echo "<td>";
                echo "{$r['id']}";
                echo "</td>";
                echo "<td>";
                echo "{$r['nombre']}";
                echo "</td>";
                echo "<td>";
                echo "{$r['apellidos']}";
                echo "</td>";
                echo "<td><input type='number' name='{$r['id']}' id='' value='0' min='0'></td>";
                echo "<td>
                <input type='checkbox' name='estado[]' id='' value='Si'>Si</td>";
                echo "<td>
                <input type='checkbox' name='estado[]' id='' value='No'>No
                
                <input type='radio' name='signal' id='' value='x'>bien
                
                <input type='radio' name='signal' id='' value='j'>mal
                
                <input type='radio' name='signal' id='' value='g'>mas o menos</td>";
                echo "</tr>";
            }

            ?>



        </tbody>
    </table>
    <form action="">

    </form>
</body>

</html>