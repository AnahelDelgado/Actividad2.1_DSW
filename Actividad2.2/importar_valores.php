<?php
// véase: https://www.geeksforgeeks.org/how-to-parse-a-csv-file-in-php/

$valores = array();

// Carga los valores desde un archivo CSV
function cargar_defecto(string $nombre_archivo) {
  global $valores;
  // Abre el archivo CSV
  if (($open = fopen($nombre_archivo, "r")) !== false) {
    // Lee cada línea del CSV
    while (($data = fgetcsv($open, 1000, ",")) !== false) {
      $valores[] = $data;
    }
    fclose($open);
  }
}

// Inserta los valores por defecto en el array pasado por parámetros
function insertar_en_array() {
  global $valores;
  $array = array();

  foreach ($valores as $clave => $valor) {
    if (!$valor) continue;
    $array[$valor[0]] = $valor[1];
  }
  return $array;
}


var_dump($valores);

?>
