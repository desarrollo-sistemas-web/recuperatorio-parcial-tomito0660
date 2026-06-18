<?php

// Ejercicio 5: Escribe una función llamada obtenerDiaSemana que tome un número entero del 1 al 7 como parámetro y devuelva el día de la semana correspondiente, donde 1 es "Lunes", 2 es "Martes", etc.

// Complejidad: BAJA (1 punto)

function obtenerDiaSemana($numero){
$dias = array (
1 => "Lunes",
2 => "Martes",
3 => "Miercoles",
4 => "Jueves",
5 => "Viernes",
6 => "Sabado",
7 => "Domingo"
);
if(isset($dias[$numero])){
return $dias[$numero];
} else {
    return "El numero debe estar entre 1 y 7";
}
    
}

//Tests
assert("Lunes" == obtenerDiaSemana(1), "El dia 1 es Lunes");
assert("Martes" == obtenerDiaSemana(2), "El dia 2 es Martes");
assert("Miercoles" == obtenerDiaSemana(3), "El dia 3 es Miercoles");
assert("Jueves" == obtenerDiaSemana(4), "El dia 4 es Jueves");