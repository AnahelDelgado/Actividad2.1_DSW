<?php
    //Ponemos como valor predeterminado el idioma Español
    $array_valor_defecto = array("idiomaSelect" => "espa");

    $select_espa = $select_ingl = $select_cata = $select_vasc = "";

    switch($array_valor_defecto["idiomaSelect"]){
        case "espa":
            $select_espa = "selected";
            break;
        case "ingl":
            $select_ingl = "selected";
            break;
        case "cata":
            $select_cata = "selected";
            break;
        case "vasc":
            $select_vasc = "selected";
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Anahel</title>
    </head>
    <body>
        <form action="recibe_datos.php" method="post">

        <input type="hidden" name="nombre_formulario" id="nombre_formulario" value="anahel">

        <br>Nombre: <input name="username" type="text" value="Usuario345">
        <br>
            <!-- Parte de select multiple -->
        <label for="idioma">Elija su idioma: </label>
        <select multiple name="idioma" id="idioma" size="4" value="idioma">
            <option selected value="espa">Español</option>
            <option value="ingl">Inglés</option>
            <option value="cata">Catalán</option>
            <option value="vasc">Vasco</option>
        </select>
        <br>
        <p><input type="checkbox" required name="terms">Acepto las condiciones </p>
        <br>
        <input type="submit">
        </form>
    </body>
</html>
