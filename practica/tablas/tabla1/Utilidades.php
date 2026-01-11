<?php
class Funciones
{


    public static function crearTabla($array)
    {
        $tabla = "<style>
                th { background-color: #ccc; }
              </style>";

        $tabla .= "<table border='1' cellspacing='0'>";
        $tabla .= "<thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                </tr>
               </thead>";
        $tabla .= "<tbody>";

        foreach ($array as $fila) {
            $tabla .= "<tr>";
            foreach ($fila as $valor) {
                $tabla .= "<td>$valor</td>";
            }
            $tabla .= "</tr>";
        }

        $tabla .= "</tbody></table>";

        return $tabla;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>

    </table>
</body>

</html>