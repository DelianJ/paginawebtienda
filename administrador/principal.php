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
      <title>Principal</title>
    </head>
    <body>
      <h1>Administrador</h1>
      <h4><a href="buscar.php">Buscar</a></h4>
      <h4><a href="tabla.php">Mostrar</a></h4>
      <h4><a href="registrar.php">Registrar</a></h4>
      <h4><a href="cerrar.php">Cerrar sesion</a></h4>
    </body>
  </html>
<?php
  }
 ?>
