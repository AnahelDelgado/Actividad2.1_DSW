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
      break;
    default:
      $mensaje = "Error al recibir los datos.";
      break;
  }

?>
