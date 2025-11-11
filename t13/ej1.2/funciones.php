<?php

function cargarJSON()
{
    $ruta = file_get_contents("./datos.json");
    return json_decode($ruta, true);
}


function obtenerPalabra()
{
    $datos = cargarJSON();
    $grupos = array_keys($datos);
    $grupo_key = $grupos[array_rand($grupos)];
    $grupo = $datos[$grupo_key];
    return $grupo[array_rand($grupo)];
}


function palabraGuion($palabra)
{
    return str_repeat("_", strlen($palabra));
}


function actualizarPalabraSecreta($palabra, $letra, $actual)
{
    $nueva = "";
    for ($i = 0; $i < strlen($palabra); $i++) {
        if ($palabra[$i] === $letra) {
            $nueva .= $letra;
        } else {
            $nueva .= $actual[$i];
        }
    }
    return $nueva;
}


function cambiarTurno($turno)
{
    return ($turno === 1) ? 2 : 1;
}


function procesarLetra($letra, $turno)
{
    if (!in_array($letra, $_SESSION["letras_usadas"])) {
        $_SESSION["letras_usadas"][] = $letra;
        $nueva = actualizarPalabraSecreta($_SESSION["palabra"], $letra, $_SESSION["palabraSecreta"]);

        if ($nueva !== $_SESSION["palabraSecreta"]) {
            $_SESSION["palabraSecreta"] = $nueva;
            if ($turno === 1) $_SESSION["aciertosJ1"]++;
            else $_SESSION["aciertosJ2"]++;
        } else {
            if ($turno === 1) $_SESSION["erroresJ1"]++;
            else $_SESSION["erroresJ2"]++;
        }
    }
}

function abecedario()
{
    $abecedario = range('a', 'z');
    $tabla = "<table>";
    $tabla .= "<tr>";

    // Determinar si el juego terminó
    $finJuego = ($_SESSION['palabra'] === $_SESSION['palabraSecreta'] ||
        $_SESSION['erroresJ1'] >= 7 ||
        $_SESSION['erroresJ2'] >= 7);

    for ($j = 0; $j < count($abecedario); $j++) {
        $letra = $abecedario[$j];
        $usada = in_array($letra, $_SESSION['letras_usadas'] ?? []);
        $tabla .= "<td class='" . ($usada ? "usada" : "") . "'>";

        if (!$usada && !$finJuego) {
            $tabla .= "<form action='procesar.php' method='post'>
                        <input type='hidden' name='letra' value='$letra'>
                        <button type='submit'>" . strtoupper($letra) . "</button>
                       </form>";
        } else {
            $tabla .= strtoupper($letra);
        }

        $tabla .= "</td>";
        if ($j === 12) $tabla .= "</tr>\n<tr>";
    }
    $tabla .= "</tr>";
    $tabla .= "</table>";
    return $tabla;
}
