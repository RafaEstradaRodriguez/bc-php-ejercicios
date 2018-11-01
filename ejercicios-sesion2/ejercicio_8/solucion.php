<?php

/*  vamos a ir guardándonos según recorremos los elementos cual es el más largo y el más corto,
    segun avancemos compararemos y miramos a ver si se tienen que actualizar esos valores, y así con todos
    los elementos del array */

$cadenas = ["abcd","abc","de","hjjj","g","wer"];

$max = 0;
$min = 0;
$comienzo = false;

foreach ($cadenas as $cadena) {
    $longitud = strlen($cadena);
    /* para la primera palabra tanto el máximo como el minimo será la longitud de la palabra
       ya que no tenemos más referencias */
    if ($comienzo == false) {
        $max = $longitud;
        $min = $longitud;
        //indicamos ya que ya hemos pasado la primera palabra
        $comienzo = true;
    } else {
        // si la longitud de la palabra es mayor que la máxima, entonces actualizamos max con dicha longitud
        $max = $longitud > $max ? $longitud : $max;
        // si la longitud de la palabra es menor que la minima, entonces actualizamos min con dicha longitud
        $min = $longitud < $min ? $longitud : $min;
    }
}


// utilizamos esta función utilizando placeholders http://php.net/manual/es/function.printf.php
printf("El string más corto es de %d, y el más largo de %d", $min, $max);
