<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vicente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
  </head>

  <body>
    <main>
      <form action="recibe_datos.php" method="post">
        <input type="hidden" name="nombre_formulario" id="nombre_formulario" value="vicente">

        <label for="email">Email: </label>
        <input type="text" name="email" id="email" placeholder="example@example.com">

        <label for="user">Edad: </label>
        <input type="number" name="age" id="age" placeholder="00">

        <label for="gender">Género: </label>
        <select name="gender" id="gender" multiple>
          <option value="man" selected>Hombre</option>
          <option value="female">Mujer</option>
          <option value="frog" selected>Rana</option>
        </select>

        <input type="checkbox" name="terms" id="terms" checked>
        <label for="terms">Acepto los términos de servicio y la política de privacidad.</label>

        <section>
          <button type="reset">Reset</button>
          <button type="submit">Submit</button>
        </section>
      </form>
    </main>
  </body>

</html>
