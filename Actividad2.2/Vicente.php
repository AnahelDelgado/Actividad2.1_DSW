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
    <form action="recibe_datos.php" method="get">
      <label for="username">Nombre: </label>
      <input type="text" value="Nombre" name="username" id="username" placeholder="Paco Foca">

      <label for="gender">Género: </label>
      <select  name="gender" id="gender">
        <option value="man" selected>Hombre</option>
        <option value="female">Mujer</option>
        <option value="frog">Rana</option>
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