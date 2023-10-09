<?php

    include "funciones_validacion.php";

$username = $_GET['username'];
$gender = $_GET['gender'];
$language = $_GET['idioma'];
$terms = $_GET['terms'];
$language = $_GET['idioma'];

echo "Hola $username";


?>

<html>

    <body>
        <?php echo $mensaje; ?>
    </body>

</html>