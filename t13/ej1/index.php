<?php
/*1. Se debe realizar el fichero teórico que se adjunta , donde tocaremos el fichero php.ini para ver la importancia de las cookies a la hora de guardar los identificadores de sesión

2. Realizar el  ejercicio de registro de usuarios, donde nos presentaba un formulario para darnos de alta.
 Debemos controlar todas las restricciones que queramos en cada campo, por ejemplo un identificador de usuario 
 que no exista, que tenga mayúsculas, minúsculas y dígitos. Cuando nos pida algún dato del formulario que hubiésemos
  incluido erróneo nos lo vuelve a pedir en rojo , dejando cumplimentados el resto de los campos.
Cuando empieza la session nos da la bienvenida con nuestro nombre y la posibilidad de salirnos de sesión.
Los campos del registro pueden ser, nombre, apellidos, edad, dni. ciudad, código postal, país, estudios, idomas,
y si alguien quiere añadir alguno más podría.
El DNI debe comprobar siempre que la letra sea correcta, si no lo fuese pintaría en rojo.
Ciudad si no fuese europea sería erróneo.
Puedes validar algún otro dato que se considere necesario
*/



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
</head>

<body>
    <header>
        <h1>Registro de Alta</h1>

    </header>
    <main>
        <form action="procesar.php" method="post">
            <input type="text" name="nombre" placeholder="Escribe tu nombre" value="<? ?>">
            <input type="text" name="apellidos" placeholder="Escribe tu apellidos">
            <input type="number" name="edad" placeholder="escribe edad">
            <input type="number" name="dni" place>
            <input type="text" name="letraDni">
            <input type="text" name="ciudad" placeholder="escribe ciudad">
            <input type="text" name="pais" placeholder="escribe tu pais">
            <input type="number" name="postal" placeholder="escribe tu código Postal">
            <input type="select" multiple name="idiomas[]">
            <input type="checkbox" value="en">Ingles</input>
            <input type="checkbox" value="fr">Francés</input>
            <input type="checkbox" value="es">Español</input>
            <input type="checkbox" value="de">Alemán</input>
            <input type="select" multiple name="idiomas[]">
            <option value="Ingles">Ingles</option>
            <option value="Francés">sad</option>
            <option value="Español">asd</option>
            <option value="Alemán"></option>


        </form>

    </main>
    <footer>

    </footer>
</body>

</html>