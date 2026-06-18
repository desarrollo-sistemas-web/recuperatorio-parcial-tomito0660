<?php

//Ejercicio 1: Escribe una función llamada esPositivo que tome un número entero como parámetro y devuelva true si el número es positivo (mayor a cero) y false si es negativo o cero.
//Complejidad: BAJA (1 punto)

function esPositivo($numero){
  if ($numero > 0){
    return true;
  } else {
    return false;
  }
}

//Tests with assert
assert(true == esPositivo(1), "El numero 1 es positivo");
assert(false == esPositivo(-1), "El numero -1 es negativo");
assert(false == esPositivo(0), "El numero 0 es negativo");
assert(true == esPositivo(100), "El numero 100 es positivo");
assert(false == esPositivo(-100), "El numero -100 es negativo");
