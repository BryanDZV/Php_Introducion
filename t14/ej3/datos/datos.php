<?php

$figuras = [
  "triangulo"  => ["color", "size", "ladoA", "ladoB", "ladoC"],
  "circulo"    => ["color", "size", "radio"],
  "cuadrado"   => ["color", "size", "lado"],
  "rectangulo" => ["color", "size", "base", "altura"]
];

$colores = [
  "red"    => [255, 0, 0],
  "blue"   => [0, 0, 255],
  "green"  => [0, 128, 0],
  "yellow" => [255, 255, 0],
  "black"  => [0, 0, 0],
  "white"  => [255, 255, 255],
  "purple" => [128, 0, 128],
  "orange" => [255, 165, 0],
  "pink"   => [255, 192, 203],
  "gray"   => [128, 128, 128]
];
/*| Caso de uso                         | Mejor usar           |
| ----------------------------------- | -------------------- |
| Solo para formulario                | **Array PHP (.php)** |
| Lo modificará el usuario o profesor | JSON                 |
| Lo traerás con AJAX o JavaScript    | JSON                 |
| Son datos estáticos y simples       | Array PHP            |
| Proyecto grande y configurable      | JSON o Base de datos |
*/
/*| ¿Situación?                                  | ¿JSON o Array PHP? |
| -------------------------------------------- | ------------------ |
| Solo pintar formulario                       | ⭐ **Array PHP**    |
| Los datos no cambian                         | ✔ Array PHP        |
| Sería siempre igual                          | ✔ Array PHP        |
| El profesor no te pide configuración externa | ✔ Array PHP        |
| No lo modificará el usuario                  | ✔ Array PHP        |
| Proyecto pequeño / educativo                 | ✔ Array PHP        |
| Si se quisiera configurable desde fuera      | JSON               |
*/