<?php

$paises = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

/* En este caso tenemos que ordenar el array por capital, entonces la ordenación es por valor,
   recordad que en un array es de la forma [clave => valor] , utilizaremos la función asort ya que mantiene los índices
   o claves del array    http://php.net/manual/es/function.asort.php  */

asort($paises);

echo "ORDENADO POR CAPITAL\n";

foreach ($paises as $pais => $capital) {
    echo "$capital es la capital de $pais\n";
}

/* Si quisiesemos ordenarlo por países, utilizaríamos la función ksort, ya que ordena por clave
   http://php.net/manual/es/function.ksort.php */

ksort($paises);

echo "\nORDENADO POR PAIS\n";

foreach ($paises as $pais => $capital) {
    echo "La capital de $pais es $capital\n";
}
