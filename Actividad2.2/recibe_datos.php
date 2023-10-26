<?php

  include "funciones_validacion.php";
  include "subida_archivos.php";
  include "guardar_datos.php";

  $nombre_formulario = $_POST["nombre_formulario"];
  $mensaje = "";

  switch ($nombre_formulario) {
    case 'vicente':
      $validacion1 = valida_email($_POST["email"]);
      $validacion2 = valida_edad($_POST["age"]);
      $validacion3 = valida_terminos($_POST["terms"]);
      $validacion4 = valida_genero($_POST["gender"]);
      $validacion5 = valida_imagen("file1");
      $validacion6 = valida_imagen("file2");

      $validacion = $validacion1 && $validacion2 && $validacion3 && $validacion4 && $validacion5 && $validacion6;
      break;
    case 'anahel':
      $validacion3 = valida_nombre($_POST["username"]);
      $validacion4 = valida_idiomas($_POST["idioma"]);
      $validacion5 = valida_terminos($_POST["terms"]);
      $validacion6 = valida_imagen("file3");

      $validacion = $validacion3 && $validacion4 && $validacion5 && $validacion6;
      break;
    default:
      $mensaje = "Error al recibir los datos.";
      break;
  }

  if ($validacion) {
    subir_archivos();
    $mensaje = "Datos recibidos y validados correctamente.";
    foreach ($_POST as $clave => $valor)
        {
            escribir_datos("ficheros/datos.txt", "$clave: $valor\n");
            if ($clave !== "nombre_formulario")
                echo "<br> - $clave: $valor";
        }
    foreach ($_FILES as $clave => $valor) {
      if (isset($valor))
        echo "<br> - Archivo $clave: " . $valor["name"];
    }
  } else {
    $mensaje = "Error al validar los datos.";
  }
?>

<html>

  <body>
    <?php echo $mensaje; ?>
    <br />
    <?php # echo "cosas para debuggear, quitar al entregar:<br/>"; var_dump($_FILES); ?>
  </body>

</html>
