<?php

// Ejercicio 10: Escribe una función llamada esCadenaVacia que tome una cadena de texto como parámetro y determine si está vacía. La función debe devolver true si la cadena está vacía y false si tiene algún contenido.
// Complejidad: BAJA (1 punto)

function esCadenaVacia($cadena){
  if($cadena == ""){
    return true;
  } else {
    return false;
  }

}

//Tests
assert(true == esCadenaVacia(""), "La cadena '' está vacía");
assert(true == esCadenaVacia(""), "La cadena ' ' está vacía");
assert(false == esCadenaVacia("Hola"), "La cadena 'Hola' no está vacía");
assert(false == esCadenaVacia(" "), "La cadena ' ' no está vacía");