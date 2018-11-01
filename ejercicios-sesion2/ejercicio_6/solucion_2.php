<?php

$colores = array('blanco', 'verde', 'rojo');

echo "PARTE 1:\n";

/* esta parte también se puede hacer manualmente, se recorren los elementos
   del array, y mientras no sea el último se le añade ', ' */

for ($i = 0; $i< count($colores); $i++) {
    if ($i != count($colores) -1 ) {
        echo $colores[$i] . ', ';
    } else {
        echo $colores[$i];
    }
}

