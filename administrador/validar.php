<?php
  include("conexion.php");
  session_start();
  $usuario = $_POST['usuario'];
  $contracena = $_POST['contrasena'];
  $consulta = "SELECT * FROM administrador WHERE usuario = '$usuario' AND contracena = '$contracena'";
  if (!$resultado = mysqli_query($con, $consulta)) {
    die("error");
  }
  $user;
  while ($fila = mysqli_fetch_row($resultado)) {
    $user = $fila[3];
  }
  if ($user == $usuario) {
    $_SESSION['usuario'] = $usuario;
    header('Location:principal.php');
  } else {
    header('Location:index.php');
  }



  /*if ($resultado = mysqli_query($con, $consulta)) {
    $_SESSION['usuario'] = $usuario;
    header('Location:principal.php');
  } else {
    header('Location:index.php');
  }*/

 ?>
