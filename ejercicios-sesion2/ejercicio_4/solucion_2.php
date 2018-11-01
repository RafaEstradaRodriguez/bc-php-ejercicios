<?php
$fichero1 = 'pepe.exe';
$fichero2 = 'kIKo.db';

// Me creo un array con los ficheros a tratar
$ficheros = [$fichero1, $fichero2];

foreach ($ficheros as $fichero) {

    if (strpos($fichero, '.exe')){
        echo strtoupper("$fichero\n");
    } elseif (strpos($fichero, '.db')){
        echo strtolower("$fichero\n");
    }
}
