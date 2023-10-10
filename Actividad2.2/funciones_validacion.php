<?php

    function validar_user_name($username){

        $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

        if( empty($_POST['username']) )
                $aErrores[] = false;
            else
            {
                // Comprobar mediante una expresión regular, que sólo contiene letras y espacios:
                    if( preg_match($patron_texto, $_POST['username']) )
                    $aMensajes[] = true;
                else
                    $aErrores[] = false;
            }
        }

        function validar_idioma($idioma){
            if(empty($_POST[idioma])){
                return false;
            }
        }
?>