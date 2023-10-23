<?php

/**
 * Valida el nombre
 * Requisitos
 * -String no vacia
 */
  function valida_nombre(string $username): bool {
    if (empty($username)) return false;
    return true;
  }


  /**
   * Valida el select de idioma
   * Requisitos
   * - Una opción seleccionada
   */
  function valida_idiomas($idioma): bool {
    if (empty($value)) return false;
    return true;
  }

  /**
   * Valida el género
   */
  function valida_genero($gender): bool {
    if (empty($gender)) return false;
    return true;
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
    if ($validated_email === false) return false;
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
