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
      <title>Buscar</title>
    </head>
    <body>
      <h1>Buscar por ID de producto</h1>
      <form action="mostrar.php" method="post">
        <input type="text" name="id" value="" placeholder="id de producto">
        <input type="submit" name="buscar" value="Buscar">
      </form>
      <a href="principal.php">Regresar</a>
    </body>
  </html>
<?php
  }
 ?>
