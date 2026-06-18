<?php

// Ejercicio 9:  Escribe una función llamada esDivisible que tome dos números enteros como parámetros y determine si el primero es divisible por el segundo. La función debe devolver true si es divisible y false si no lo es.

// Complejidad: BAJA (1 punto)

function esDivisible($numero1, $numero2){
   if ($numero2 == 0){
    return "No se puede dividir entre 0";
   }
   if($numero1/$numero2 == 0){
    return true;
   } else {
    return false;
   }
}

//Tests
assert(true == esDivisible(4,2), "4 es divisible por 2");
assert(true == esDivisible(10,5), "10 es divisible por 5");
assert(true == esDivisible(100,10), "100 es divisible por 10");
assert(false == esDivisible(4,3), "4 no es divisible por 3");
assert(false == esDivisible(10,4), "10 no es divisible por 4");
assert(false == esDivisible(100,9), "100 no es divisible por 9");
