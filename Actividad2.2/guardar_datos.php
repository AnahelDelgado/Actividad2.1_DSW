<?php
$nombre_archivo = "ficheros/datos.txt";

function escribir_datos($nombre_archivo, $contenido) {
  // Comprueba de que el archivo existe y es escribible
  if (is_writable($nombre_archivo)) {
      if (!$gestor = fopen($nombre_archivo, 'a')) {
          echo "No se puede abrir el archivo ($nombre_archivo)";
          exit;
      }

      // Escribir $contenido a nuestro archivo abierto.
      if (fwrite($gestor, $contenido) === FALSE) {
          echo "No se puede escribir en el archivo ($nombre_archivo)";
          exit;
      }

      echo "Éxito, se escribió ($contenido) en el archivo ($nombre_archivo)";

      fclose($gestor);

  } else {
      echo "El archivo $nombre_archivo no es escribible";
  }
}

?>
