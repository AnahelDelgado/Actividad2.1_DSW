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
            if(empty($_POST["idioma"])){
                return false;
            }
        }

  /**
   * Valida el email
   * Requisitos
   * - String no vacío.
   * - Email válido.
   */
  function valida_email(string $email): bool {
    if (empty($email)) return false;
    $validated_email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($validated_email == false) return false;
    return true;
  }

  /**
   * Valida la edad
   * Requisitos:
   * - String no vacío.
   * - Que sea un número.
   * - Menor de 200.
   * - Mayor de 1.
   */
  function valida_edad(string $edad): bool {
    if (empty($edad)) return false;
    $edad = (int) $edad;
    if ($edad > 200) return false;
    if ($edad < 1) return false;
    return true;
  }

  /**
   * Valida los términos
   */
  function valida_terminos(string $terminos): bool {
    return $terminos === "on";
  }

?>
