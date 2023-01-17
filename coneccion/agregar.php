<?php
  include("conexion1.php");
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $usuario = $_POST['usuarior'];
  $email = $_POST['email'];
  $contracena = $_POST['contracenar'];
  $contracena2 = $_POST['concontracenar'];
  if ($contracena != $contracena2) {
    echo "<script type='text/javascript'>";
       echo "alert('contraceña no coinside');";
    echo "</script>";
  }
  if ($contracena == $contracena2) {
    $consulta = "INSERT INTO usuarios(nombre, apellido, usuario, email, contrasena)
      VALUES ('$nombre', '$apellido', '$usuario', '$email', '$contracena')";
    if (!$resultado = mysqli_query($con, $consulta)) {
      die("error1".mysqli_connect_error());
    }
    echo "Registrado correctamente ";
    echo "<a href='../productos.html'>"."Click para continuar"."</a>";
  }
 ?>
