<?php
/**
 * Una forma alternativa de hacerlo, pero también menos elegante, es generar una cadena de texto con el HTML
 *
 * En algún caso esto puede resultar útil, pero es recomendable, en la medida de lo posible, hacer la solución 1
 **/

//Primero obtenemos el título, si no existe ponemos un título por defecto
if (isset($_GET['titulo'])) {  //isset devuelve TRUE si el campo 'titulo' existe en el array $_GET
    $titulo = $_GET['titulo'];
} else {
    $titulo = 'Título por defecto';
}

/** En PHP7 ese if se puede hacer de una forma más simplificada.
 * Si tienes la versión 7 instalada prueba a hacerlo de esta forma:
 *
 *          $titulo = $_GET['titulo'] ?? 'Título por defecto';
 **/

//Guardamos el código HTML que vamos a generar en una variable
$html = "<html>
<body>
	<h1>$titulo</h1>
</body>
</html>";

//Sólo queda mostrar la variable
echo $html;