<?php
/**
 * Vamos a suponer que el parámetro de entrada se llamará "titulo"
 *
 * En este caso, para ejecutar la prueba sería algo así (dependiendo de tu configuración del servidor web):
 *      http://localhost/ejercicio_1/solucion_1.php?titulo=NuevoTitulo
 *      http://localhost/ejercicio_1/solucion_1.php?titulo=Nuevo%20Titulo
 *          ** Para pasar un espacio en blanco en la URL hay que sustituirlo por %20
 **/
?>
<html>
<body>
	<h1>
        <?php
            /**
             * Si no pasamos ningún título, muestro un título por defecto.
             * Este código hace lo mismo que:
             *      if ($_GET['titulo'])
             *          echo $_GET['titulo'];
             *      else
             *          echo 'Titulo por defecto';
             **/
            echo $_GET['titulo'] ? $_GET['titulo'] : 'Titulo por defecto';
            ?>
    </h1>
</body>
</html>