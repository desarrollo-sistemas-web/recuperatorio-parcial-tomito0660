<?php

// Ejercicio 8: Crea una función llamada ordenarArreglo que tome un arreglo de números como parámetro y devuelva un nuevo arreglo con los números ordenados de menor a mayor.

// Complejidad: MEDIA (2 puntos)

function ordenarArreglo($numeros){
 $ordenado = $numeros;
 for($i=0; $i < count($ordenado); $i++){
    for($j= $i +1; $j < count($ordenado);$j++){
       if($ordenado[$i]>$ordenado[$j]) {
        $temp = $ordenado [$i];
        $ordenado [$i] = $ordenado [$j];
        $ordenado [$j] = $temp;
       }
    }
 }
return $ordenado;
}

//Tests
assert([1] == ordenarArreglo([1]), "El arreglo [1] ordenado es [1]");
assert([1,2] == ordenarArreglo([1,2]), "El arreglo [1,2] ordenado es [1,2]");
assert([1,2,3] == ordenarArreglo([1,2,3]), "El arreglo [1,2,3] ordenado es [1,2,3]");
assert([1,2,3,4] == ordenarArreglo([1,2,3,4]), "El arreglo [1,2,3,4] ordenado es [1,2,3,4]");