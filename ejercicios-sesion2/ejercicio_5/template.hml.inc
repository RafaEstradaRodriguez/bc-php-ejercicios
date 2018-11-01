<html>
<body>
    <form action="" method="post">
        <input type="text" name="numero">
        <input type="submit" name="Enviar">
    </form>
    <!--Los if de PHP también se pueden hacer así
            if (condicion):
                operaciones
            endif;
    -->
    <?php if (isset($msg)): ?>
        <p><?php echo $msg; ?></p>
    <?php endif; ?>
</body>
</html>
