<?php

  include "funciones_validacion.php";

  $nombre_formulario = $_POST["nombre_formulario"];
  $mensaje = "";

  switch ($nombre_formulario) {
    case 'vicente':
      $validacion1 = valida_email($_POST["email"]);
      $validacion2 = valida_edad($_POST["age"]);
      $validacion3 = valida_terminos($_POST["terms"]);

      $validacion = $validacion1 && $validacion2 && $validacion3;
      break;
    case 'anahel':

      $validacion3 = validar_user_name($_POST["username"]);
      $validacion4 = validar_idioma($_POST["idioma"]);

      $validacion5 = $validacion3 && $validacion4;
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
    <?php echo "cosas para debuggear, quitar al entregar:<br/>"; var_dump($_POST); ?>
  </body>

</html>
