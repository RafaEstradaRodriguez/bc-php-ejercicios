<?php
/**
 * En esta solución se va comparando número a número los primeros números con los últimos
 * Se compara el primer número con el último, el segundo con el penúltimo, y así hasta llegar a la mitad del número
 **/

if (isset($_POST['numero'])) {

    $numero = $_POST['numero'];

    // Si el dato introducido no es un número, muestra un error
    if (!is_numeric($numero)){
        $msg = "El dato introducido no es un número";
    } else {
        $longitud = intdiv(strlen($numero), 2);

        // Por defecto supongo que el número es palíndromo
        $msg = "El número $numero es PALINDROMO";

        for ($i=0; $i<$longitud; $i++){
            // Comparo el número con el de su posición opuesta
            if ($numero[$i] != $numero[strlen($numero)-$i-1]){
                // Si los números no son iguales modifico el mensaje y salgo del bucle
                $msg = "El número $numero es NO es palíndromo";
                break;
            }
        }
    }
}

// Una vez procesado el número, incluyo la plantilla HMTL
// Las variables PHP que se han definido aquí también son accesibles en la plantilla
include('template.hml.inc');