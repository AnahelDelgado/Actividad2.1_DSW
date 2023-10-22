<?php

include "importar_valores.php";

// Array de valores por defecto
cargar_defecto("valoresdefecto.csv");
$valores_defecto = obtener_array_defecto();

// Array de los valores de gender
$valores_gender = array(
  "man" => "",
  "female" => "",
  "frog" => ""
);

// Establece selected solo en el valor por defecto
$valores_gender[$valores_defecto["gender"]] = "selected";

?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario vicente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
  </head>

  <body>
    <main>
      <form action="recibe_datos.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nombre_formulario" id="nombre_formulario" value="vicente">

        <label for="email">Email: </label>
        <input type="text" name="email" id="email" value="<?= $valores_defecto["email"] ?>">

        <label for="user">Edad: </label>
        <input type="number" name="age" id="age" value="<?= $valores_defecto["age"] ?>">

        <label for="gender">Género: </label>
        <select name="gender" id="gender" multiple>
          <option value="man" <?= $valores_gender["man"] ?>>Hombre</option>
          <option value="female" <?= $valores_gender["female"] ?>>Mujer</option>
          <option value="frog" <?= $valores_gender["frog"] ?>>Rana</option>
        </select>

        <input type="checkbox" name="terms" id="terms" <?= $valores_defecto["terms"] ?>>
        <label for="terms">Acepto los términos de servicio y la política de privacidad.</label>

        <section>
          <button type="reset">Reset</button>
          <button type="submit">Submit</button>
        </section>
      </form>
    </main>
  </body>

</html>
