<?php

$colores = array('blanco', 'verde', 'rojo');

echo "PARTE 1:\n";

/* directamente php tiene una función para juntar los elementos
   de un array, utilizando para ello un caracter
   http://php.net/manual/es/function.implode.php */

// utilizamos la ', ' para juntarlos
$salida = implode(', ', $colores);
echo $salida;


echo "\nPARTE 2:\n";


/* en este caso utilizamos una función de ordenar, que al ser
   strings los ordena alfabéticamente
   http://php.net/manual/es/function.sort.php */
echo "<ul>\n";

// la función sort modifica el array que se le pasa, asi que no devuelve nada
sort($colores);
foreach ($colores as $color) {
    echo "<li>$color</li>\n";
}

echo "</ul>";
