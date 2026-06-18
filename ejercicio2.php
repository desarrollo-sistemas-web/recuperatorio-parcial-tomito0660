<?php

// Ejercicio 2: Crea una función llamada saludar que tome un nombre como parámetro y devuelva un mensaje de saludo. Por ejemplo, si se pasa el nombre "Juan", la función debe devolver "¡Hola, Juan!".
// Complejidad: BAJA (1 punto)

function saludar($nombre){
 return "¡Hola, $nombre!";
}

//Tests
assert("¡Hola, Juan!" == saludar("Juan"), "Saludo a Juan");
assert("¡Hola, Maria!" == saludar("Maria"), "Saludo a Maria");
assert("¡Hola, Pepe!" == saludar("Pepe"), "Saludo a Pepe");