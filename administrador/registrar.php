<?php
  session_start();
  if (!isset($_SESSION['usuario'])) {
    header('Location:index.php');
  } else{
 ?>
  <!DOCTYPE html>
  <html lang="es" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Registrar</title>
    </head>
    <body>
      <h1>Ingrese sus dartos</h1>
      <form action="registrarsql.php" method="post" onsubmit="return validar(this)">
        <input type="number" name="id" value="" placeholder="Id">
        <input type="text" name="tipo" value="" placeholder="Tipo">
        <input type="text" name="nombre" value="" placeholder="Nombre">
        <input type="text" name="descripcion" value="" placeholder="Descripcion">
        <input type="text" name="img" value="" placeholder="Img">
        <input type="number" name="precio" value="" placeholder="Precio">
        <input type="number" name="gramos" value="" placeholder="Gramos">
        <input type="submit" name="registrar" value="Registrar">
      </form>
      <a href="principal.php">Regresar</a>
      <script type="text/javascript" src="validar.js">
      </script>
    </body>
  </html>
<?php
  }
 ?>
