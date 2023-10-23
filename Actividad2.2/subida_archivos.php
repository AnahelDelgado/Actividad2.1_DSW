<?php
$directorio_destino = "ficheros/";

/**
 * Valida una imagen con el id del input pasado por parámetros
 * Requisitos:
 * - Debe existir
 * - Debe ser una imagen
 * - No debe pesar demasiado
 * - Debe tener un formato válido
 */
function valida_imagen(string $nombreArchivo) {
  global $directorio_destino;
  $subidaCorrecta = 1;
  $nombre_imagen = $_FILES[$nombreArchivo]["name"];
  // Si no se envío el archivo sale
  if (!isset($nombre_imagen)) return false;

  $fichero_destino = $directorio_destino . basename($nombre_imagen);
  $extension_imagen = strtolower(pathinfo($fichero_destino, PATHINFO_EXTENSION));

  // Obtiene las dimensiones de la imagen, en caso de que no sea imagen
  $check = getimagesize($_FILES[$nombreArchivo]["tmp_name"]);
  if ($check === false) {
    $subidaCorrecta = 0;
  }

  // Comprueba el peso de la imagen
  if ($_FILES[$nombreArchivo]["size"] > 500000) {
    $subidaCorrecta = 0;
  }

  // Comprueba si tiene un formato válido
  if ($extension_imagen != "jpg" && $extension_imagen != "png"
  && $extension_imagen != "jpeg" && $extension_imagen != "gif") {
    $subidaCorrecta = 0;
  }
  return $subidaCorrecta === 1;
}

/**
 * Sube los archivos a `directorio_destino` y renombra los archivos si ya existen
 */
function subir_archivos() {
  global $directorio_destino;

  foreach ($_FILES as $clave => $valor) {
    $nombreArchivo = $_FILES[$clave]["name"];
    if (!$nombreArchivo) continue;
    $fichero_destino = $directorio_destino . basename($nombreArchivo);

    $contador = 1;
    // Mientras el archivo esté repetido, añadirle un _CONTADOR al nombre
    while (file_exists($fichero_destino) === true) {
      // Separa el nombre y la extension ej: "file1.png" => ["file", "png"]
      [$nombre, $extension] = explode(".", basename($nombreArchivo));
      $fichero_destino = $directorio_destino . $nombre . "_" . $contador . "." . $extension;
      $contador++;
    }

    if (move_uploaded_file($_FILES[$clave]["tmp_name"], $fichero_destino)) {
      echo "El archivo ha sido subido correctamente.";
    } else {
      echo "Ha ocurrido un error en la subida del archivo.";
    }
  }
}
