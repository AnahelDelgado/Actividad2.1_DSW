<?php

    $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

    if( empty($_POST['username']) )
            $aErrores[] = "Debe especificar el nombre";
        else
        {
            // Comprobar mediante una expresión regular, que sólo contiene letras y espacios:
                if( preg_match($patron_texto, $_POST['username']) )
                $aMensajes[] = "Nombre de usuario: [".$_POST['username']."]";
            else
                $aErrores[] = "El nombre sólo puede contener letras y espacios";
        }

?>