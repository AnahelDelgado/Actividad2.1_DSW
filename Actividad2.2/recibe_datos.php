<?php

  include "funciones_validacion.php";

  $nombre_formulario = $_POST["nombre_formulario"];
  $mensaje = "";

  switch ($nombre_formulario) {
    case 'vicente':
      $validacion1 = valida_email();
      $validacion2 = valida_algo();

      $validacion = $validacion1 == true && $validacion2 == true;
      break;
    case 'anahel':

      $validacion3 = validar_user_name();
      $validacion4 = validar_idioma();

      $validacion5 = $validacion3 == true && $validacion4j == true;
      break;
    default:
      $mensaje = "Error al recibir los datos.";
      break;
  }

  if ($validacion) {
    $mensaje = "Datos recibidos y validados correctamente.";
    foreach ($_POST as $clave => $valor)
        {
            if ($clave !== "nombre_formulario")
                echo "<br> - $clave: $valor";
        }
  } else {
    $mensaje = "Error al validar los datos.";
  }
?>

<html>

  <body>
    <?php echo $mensaje; ?>
  </body>

</html>
