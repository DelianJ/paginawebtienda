<?php
  include("conexion1.php");
  $usuario = $_POST['usuario'];
  $contracena = $_POST['contracenia'];
  $consulta = "SELECT usuario, contrasena FROM usuarios WHERE usuario = '$usuario'";
  if (!$resultado = mysqli_query($con, $consulta)) {
    die("error".mysqli_connect_error());
  }
  while ($fila=mysqli_fetch_row($resultado)) {
    if ($fila[1] == $contracena) {
      header('Location:../productos.html');
    } else {
      header('Location:../index.php');
    }
  }
 ?>
