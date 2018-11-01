<html>
<body>
<form action="/ejercicios-sesion2/ejercicio_3/solucion_2.php" method="post">
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

        $exponente = 1;
        $resultado = $numero;

        // Voy haciendo exponientes secuenciales, hasta llegar al resultado buscado
        while ($resultado <= 10000) {
            $resultado = pow($numero, ++$exponente);
        }
        echo "<p>El exponente es $exponente</p>";
    }
}
?>
</body>
</html>
