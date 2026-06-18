<?php

// Ejercicio 3: Escribe una función llamada obtenerFactorial que tome un número entero no negativo como parámetro y calcule su factorial. El factorial de un número se obtiene multiplicando todos los números enteros positivos desde 1 hasta el número dado.
// Complejidad: MEDIA (2 puntos)

function obtenerFactorial($numero){
  if ($numero < 0) {
    return "Error: El número debe ser mayor o igual a 0";
  }
  if ($numero == 0 || $numero == 1) {
    return 1;
  }
  $resultado = 1;
  for ($i = 2; $i <= $numero; $i++) {
    $resultado *= $i;
  }
  return $resultado;
}

//Tests
assert(1 == obtenerFactorial(0), "El factorial de 0 es 1");
assert(1 == obtenerFactorial(1), "El factorial de 1 es 1");
assert(2 == obtenerFactorial(2), "El factorial de 2 es 2");
assert(6 == obtenerFactorial(3), "El factorial de 3 es 6");
assert(24 == obtenerFactorial(4), "El factorial de 4 es 24");