<?php
/*1. Acceder al index donde nos presenta un formulario que nos pide:
    
    color de fondo de nuestra aplicación
    
    idioma en el que vamos a trabajar,   Inglés, Español, Frances 

    Después hay un botón , llamado introducir _cv que nos lleva a  introducir_cv.php que nos permite introducir los datos de un cv ,  que nos  según el idioma elegido. 
    
    En el fondo de esta pantalla aparece el color seleccionado en la cookie.
    
    Cuando las cookies existen no debe pedirnos  la configuración de idioma y color, por tanto solo nos presenta el formulario para introducir el cv  y no el de petición de preferencias.
    
    Las palabras de los distintos idiomas estarán en un único json.  */
require "./variables.php";
if (isset($_GET["error"])) {
    $error = $_GET["error"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traductor</title>
    <link rel="stylesheet" href="./styles.css">
</head>


<body>
    <header>
        <h1>Traductor CV</h1>
        <h2><?php if (!empty($error)) {
                echo $error;
            } ?> </h2>

    </header>
    <main>
        <section class="contenedor-global">
            <form action="procesar.php" method="post">
                <div class="contenedor-fondo">
                    <input type="radio" name="fondo" id="1" value="red">rojo
                    <input type="radio" name="fondo" id="2" value="blue">azul
                    <input type="radio" name="fondo" id="3" value="gray">gris
                </div>
                <div class="contenedor-idioma">
                    <p>Selecciona idioma del CV:</p>
                    <input type="radio" name="idioma" id="1" value="Español">Español
                    <input type="radio" name="idioma" id="2" value="Ingles">Ingles
                    <input type="radio" name="idioma" id="3" value="Aleman">Aleman

                </div>
                <button type="submit">Empezar Cv</button>

            </form>
        </section>

    </main>
    <footer>

    </footer>

</body>

</html>