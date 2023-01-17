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
      <title></title>
    </head>
    <body>
      <?php
        include("conexion.php");
        $id = $_REQUEST['id'];//0
        $tipo;//1
        $nombre;//2
        $descripcion;//3
        $img;//4
        $precio;//5
        $gramos;//6
        $consulta = "SELECT * FROM productos WHERE id = $id";
        if (!$resultado = mysqli_query($con, $consulta)) {
          die("error".mysqli_connect_error());
        }
        while ($fila=mysqli_fetch_row($resultado)) {
          $tipo = $fila[1];
          $nombre = $fila[2];
          $descripcion = $fila[3];
          $img = $fila[4];
          $precio = $fila[5];
          $gramos = $fila[6];
        }
        if ($tipo == "" | $nombre == "" | $descripcion == "" | $img == "" | $precio == "" | $gramos == "") {
          header('Location:buscar.php');
        }
       ?>
       <h1>Datos</h1>
       <form action="editar.php" method="post">
         <input type="text" name="id" value="<?php echo $id; ?>" readonly = "readonly">
         <input type="text" name="tipo" value="<?php echo $tipo; ?>">
         <input type="text" name="nombre" value="<?php echo $nombre; ?>">
         <input type="text" name="descripcion" value="<?php echo $descripcion; ?>">
         <input type="text" name="imagen" value="<?php echo $img; ?>">
         <input type="text" name="precio" value="<?php echo $precio; ?>">
         <input type="text" name="gramos" value="<?php echo $gramos; ?>">
         <input type="submit" name="editar" value="Editar">
         <input type="submit" name="editar" value="Eliminar">
       </form>
       <a href="principal.php">Regresar</a>
    </body>
  </html>
<?php
  }
 ?>
