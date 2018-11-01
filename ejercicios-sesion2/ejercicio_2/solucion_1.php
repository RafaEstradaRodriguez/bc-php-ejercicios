<?php
/**
 * Obtengo el número mediante la URL, si no viene el número mostrará un error
 * La ejecución de este ejercicio sería la siguiente:
 *
 *             http://localhost/ejercicio_2/solucion_1.php?numero=5
 */

if (!isset($_GET['numero'])){
    echo "ERROR: no se ha pasado ningún número por parámetro";
}

$numero = $_GET['numero'];

// El operador % realiza el módulo de la división entre los dos números pasados
if ($numero%2 == 0){
    echo "El número $numero es PAR";
} else {
    echo 'El número '.$numero.' es IMPAR'; //Ejemplo de uso de comillas simples y concatenación de cadenas
}