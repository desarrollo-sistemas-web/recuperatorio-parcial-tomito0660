<?php

// Ejercicio 12: Crea una función llamada calcularPromedioAprobados que tome un arreglo de calificaciones (números enteros) como parámetro y devuelva el promedio de las calificaciones aprobadas. Considera que una calificación aprobada es mayor o igual a 6.

// Complejidad: MEDIA (2 puntos)

function calcularPromedioAprobados($calificaciones){
   $sumaAprobados = 0;
   $cantidadAprobados = 0;
   foreach($calificaciones as $calificacion){
    if($calificacion >= 6){
    $sumaAprobados += $cantidadAprobados;
    $cantidadAprobados++;
    }
   }
if($calificacion == 0){
    return "No hay calificacion aprobados";
}
$promedio= $sumaAprobados/$cantidadAprobados;
return $promedio;
}

//Tests

assert(6 == calcularPromedioAprobados([6, 7, 8, 9, 10]), "El promedio de las calificaciones aprobadas es 6");
assert(7 == calcularPromedioAprobados([6, 7, 8, 9, 10, 7]), "El promedio de las calificaciones aprobadas es 7");
assert(7 == calcularPromedioAprobados([6, 7, 8, 9, 10, 7, 7]), "El promedio de las calificaciones aprobadas es 7");
assert(7 == calcularPromedioAprobados([6, 7, 8, 9, 10, 7, 7, 7]), "El promedio de las calificaciones aprobadas es 7");
assert(7 == calcularPromedioAprobados([6, 7, 8, 9, 10, 7, 7, 7, 7]), "El promedio de las calificaciones aprobadas es 7");