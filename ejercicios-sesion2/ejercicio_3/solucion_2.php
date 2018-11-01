<?php
/**
 * Obtengo el número mediante un formulario
 */

if (isset($_POST['numero'])) {

    $numero = $_POST['numero'];

    // Si el dato introducido no es un número, muestra un error
    if (!is_numeric($numero)){
        $msg = "El dato introducido no es un número";
    } else {

        $exponente = 1;
        $resultado = $numero;

        while ($resultado <=10000) {
            $resultado = $resultado * $numero;
            $exponente++;
        }
        $msg = "El exponente es $exponente";
    }
}

// Una vez procesado el número, incluyo la plantilla HMTL
// Las variables PHP que se han definido aquí también son accesibles en la plantilla
include('template.hml.inc');