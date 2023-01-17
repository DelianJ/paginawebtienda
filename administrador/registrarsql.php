<?php
  include("conexion.php");
  $id = $_POST['id'];
  $tipo = $_POST['tipo'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $img = $_POST['img'];
  $precio = $_POST['precio'];
  $gramos = $_POST['gramos'];

  $registrar = "INSERT INTO productos (id, tipo, nombre, descripcion, img, precio, gramos)
    VALUES ($id, '$tipo', '$nombre', '$descripcion', '$img', $precio, $gramos)";
  if (mysqli_query($con, $registrar)) {
    header('Location:tabla.php');
  } else {
    echo "error ".mysqli_error($con);
  }
 ?>
