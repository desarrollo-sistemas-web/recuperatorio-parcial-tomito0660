<?php

// Ejercicio 11: Escribe una función llamada invertirPalabra que tome una palabra como parámetro y devuelva la misma pero con las letras invertidas. Por ejemplo, si se pasa la cadena "Hola", la función debe devolver "aloH".
// Complejidad: ALTA (3 puntos)

//Pista: puedes usar la función strrev(). Busca en la documentación de PHP cómo se usa.

function invertirPalabra($palabra){
   return strrev($palabra);

}

//Tests
assert("aloH" == invertirPalabra("Hola"), "La palabra 'Hola' invertida es 'aloH'");
assert("aloh" == invertirPalabra("hola"), "La palabra 'hola' invertida es 'aloh'");
