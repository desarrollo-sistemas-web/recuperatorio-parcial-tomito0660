<?php

// Ejercicio 8:  Crea una función llamada calcularPromedio que tome un arreglo de números como parámetro y devuelva el promedio de esos números.
// Complejidad: BAJA (1 punto)

function calcularPromedio($numeros){
   $suma = 0;
   foreach($numeros as $numero){
    $suma += $numero;
   }
$promedio = $suma / count($numeros);
return $promedio;
}

//Tests
assert(1 == calcularPromedio([1]), "El promedio de [1] es 1");
assert(1.5 == calcularPromedio([1,2]), "El promedio de [1,2] es 1.5");
assert(2 == calcularPromedio([1,2,3]), "El promedio de [1,2,3] es 2");
assert(2.5 == calcularPromedio([1,2,3,4]), "El promedio de [1,2,3,4] es 2.5");
assert(3 == calcularPromedio([1,2,3,4,5]), "El promedio de [1,2,3,4,5] es 3");
assert(3.5 == calcularPromedio([1,2,3,4,5,6]), "El promedio de [1,2,3,4,5,6] es 3.5");