<html>
<body>
<form action="/ejercicios-sesion2/ejercicio_2/solucion_3.php" method="post">
    <input type="text" name="numero">
    <input type="submit" name="Enviar">
</form>

<?php
/**
 * Obtengo el número mediante un formulario
 */

if (isset($_POST['numero'])) {

    $numero = $_POST['numero'];

    // Si el dato introducido no es un número, muestra un error
    if (!is_numeric($numero)){
        echo "<p>El dato introducido no es un número";
    } else {

        // El operador % realiza el módulo de la división entre los dos números pasados
        if ($numero % 2 == 0) {
            echo "<p>El número $numero es PAR</p>";
        } else {
            echo '<p>El número ' . $numero . ' es IMPAR</p>'; //Ejemplo de uso de comillas simples y concatenación de cadenas
        }
    }
}
?>
</body>
</html>
