<?php
/**
 * La estrategia a seguir en esta solución es obtener por separado las dos mitades del número, y compararlas entre sí
 * Para que la comparación sea positiva, hay que voltear la segunda mitad del número
 **/
if (isset($_POST['numero'])) {

    $numero = $_POST['numero'];

    // Si el dato introducido no es un número, muestra un error
    if (!is_numeric($numero)){
        $msg = "El dato introducido no es un número";
    } else {
        /**
         * Averiguar la primera mitad del número:
         *          substr($numero,0,intdiv(strlen($numero), 2))
         *
         *          * Con strlen($numero) sabemos la longitud del número
         *          * Hacemos la división entera entre 2 para saber cuántos números tenemos que coger
         *              * intdiv(6) => 3
         *              * intdiv(7) => 3
         *          * Sabiendo qué longitud de texto necesitamos, la obtenemos con substr
         *
         * Compararlo con la segunda mitad del número:
         *          strrev(substr($numero,-intdiv(strlen($numero), 2)))
         *
         *          * Con strlen($numero) sabemos la longitud del número
         *          * Hacemos la división entera entre 2 para saber cuántos números tenemos que coger
         *          * Obtenemos los últimos números a comparar, usando posición negativa en substr
         *              * substr('12321', -2)  =>  devuelve los dos últimos números: '21'
         *          * Con strrev damos la vuelta al texto, para compararlo con los primeros dígitos
         **/
        if (substr($numero,0,intdiv(strlen($numero), 2)) == strrev(substr($numero,-intdiv(strlen($numero), 2)))) {
            $msg = "El número $numero es PALINDROMO";
        } else {
            $msg = "El número $numero NO es palíndromo";
        }

    }
}

// Una vez procesado el número, incluyo la plantilla HMTL
// Las variables PHP que se han definido aquí también son accesibles en la plantilla
include('template.hml.inc');