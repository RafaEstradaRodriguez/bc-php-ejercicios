<?php
$fichero1 = 'pepe.exe';
$fichero2 = 'kIKo.db';

// Me creo un array con los ficheros a tratar
$ficheros = [$fichero1, $fichero2];

foreach ($ficheros as $fichero) {
    // Obtengo la extensión del fichero
    $extension = substr($fichero, strrpos($fichero, '.')+1);

    // Dependiendo de la extensión, realiza una operación u otra
    switch ($extension) {
        case 'exe':
            echo strtoupper("$fichero \n");
            break;
        case 'db':
            echo strtolower("$fichero \n");
            break;
    }
}
