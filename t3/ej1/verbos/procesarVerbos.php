<?php
/*Ejercicios de formularios
1.	Vamos a realizar un juego para los niños de primaria que nos pida que tecleemos las tres formas verbales de los verbos irregulares y al finalizar nos dirá cuántos aciertos y cuantos fallos se han cometido.
 
El programa mostrará el verbo en español y  tendremos tres caja de texto para teclear las tres formas verbales . 
Existirá un botón para finalizar cuando deseemos.
Cuando finaliza el juego te muestra una estadística de aciertos, fallos, cantidad de preguntas hechas, etc.


*/

$verbos = [
    "ser"   => ["presente" => "be", "pasado" => "was/were", "participio" => "been"],
    "ir"    => ["presente" => "go", "pasado" => "went", "participio" => "gone"],
    "tener" => ["presente" => "have", "pasado" => "had", "participio" => "had"],
    "hacer" => ["presente" => "do", "pasado" => "did", "participio" => "done"],
    "venir" => ["presente" => "come", "pasado" => "came", "participio" => "come"]
];

$verbos_es = ["ser", "ir", "tener", "hacer", "venir"];


$aciertos = isset($_POST['aciertos']) ? (int)$_POST['aciertos'] : 0;
$fallos   = isset($_POST['fallos']) ? (int)$_POST['fallos'] : 0;


if (isset($_POST['verbo'], $_POST['presente'], $_POST['pasado'], $_POST['futuro'], $_POST['accion'])) {
    $verbo_base = $_POST['verbo'];
    $presente   = strtolower(trim($_POST['presente']));
    $pasado     = strtolower(trim($_POST['pasado']));
    $futuro     = strtolower(trim($_POST['futuro']));
    $accion     = $_POST['accion'];

 $formas=$verbos[$verbo_base];
    if ($formas['presente'] === $presente) $aciertos++;
    else $fallos++;

    if ($formas['pasado'] === $pasado) $aciertos++;
    else $fallos++;

    if ($formas['participio'] === $futuro) $aciertos++;
    else $fallos++;

    
    if ($accion === "Fin") {
        echo "<h1>Resultados finales</h1>";
        echo "<p>Aciertos: $aciertos</p>";
        echo "<p>Fallos: $fallos</p>";
        echo "<p>Total de respuestas: " . ($aciertos + $fallos) . "</p>";
        ?>;

        <p><a href=" <?php echo $_SERVER['PHP_SELF']?>">Volver a empezar</a></p>;
        <?php 
        exit;
    }
}

$verbo_aleatorio = $verbos_es[array_rand($verbos_es)];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de Verbos</title>
</head>
<body>
    <h1>Verbo: <?php echo $verbo_aleatorio; ?></h1>
    <p>Escribe las tres formas verbales en inglés:</p>

    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
      
        <input type="hidden" name="verbo" value="<?php echo $verbo_aleatorio; ?>">
        <input type="hidden" name="aciertos" value="<?php echo $aciertos; ?>">
        <input type="hidden" name="fallos" value="<?php echo $fallos; ?>">

        <p>Presente: <input type="text" name="presente"></p>
        <p>Pasado: <input type="text" name="pasado"></p>
        <p>Participio: <input type="text" name="futuro"></p>

        <button type="submit" name="accion" value="Next">Next</button>
        <button type="submit" name="accion" value="Fin">Fin</button>
    </form>

    
</body>
</html>