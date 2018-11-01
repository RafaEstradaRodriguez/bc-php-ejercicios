<?php
/**
 * Obtengo el número ejecutando este script desde por línea de comandos
 * La ejecución de este ejercicio sería la siguiente:
 *
 *       php solucion_2.php 5
 */

/**
 * http://php.net/manual/es/reserved.variables.php
 *
 * $argv[0] es el nombre del script, y las siguientes posiciones del array son los parámetros
 * También existe $argc que es el número de parámetros pasados al script
 *
 * El if también podría ser:
 *      if ($argc < 2)
 **/
if (!isset($argv[1])){
    echo "ERROR: no se ha pasado ningún número por parámetro";
}

$numero = $argv[1];

// El operador % realiza el módulo de la división entre los dos números pasados
if ($numero%2 == 0){
    echo "El número $numero es PAR";
} else {
    echo 'El número '.$numero.' es IMPAR'; //Ejemplo de uso de comillas simples y concatenación de cadenas
}