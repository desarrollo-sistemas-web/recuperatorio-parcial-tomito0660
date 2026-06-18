<?php

// Ejercicio 4: Escribe una función llamada encontrarMaximo que tome un arreglo de números como parámetro y devuelva el valor máximo contenido en el arreglo.
// Complejidad: MEDIA (2 puntos)

function encontrarMaximo($numeros){
$Maximo = $numeros[0];
foreach($numeros as $numero){
    if($numero > $Maximo){
        $Maximo = $numero;
    }
}
   return $Maximo;
}

//Tests
assert(1 == encontrarMaximo([1]), "El maximo de [1] es 1");
assert(2 == encontrarMaximo([1,2]), "El maximo de [1,2] es 2");
assert(3 == encontrarMaximo([1,2,3]), "El maximo de [1,2,3] es 3");
assert(4 == encontrarMaximo([1,2,3,4]), "El maximo de [1,2,3,4] es 4");
assert(5 == encontrarMaximo([1,2,3,4,5]), "El maximo de [1,2,3,4,5] es 5");