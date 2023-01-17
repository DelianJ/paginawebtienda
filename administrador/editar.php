<?php
  include("conexion.php");
  $id = $_POST['id'];//0
  $tipo = $_POST['tipo'];//1
  $nombre = $_POST['nombre'];//2
  $descripcion = $_POST['descripcion'];//3
  $img = $_POST['imagen'];//4
  $precio = $_POST['precio'];//5 numeros
  $gramos = $_POST['gramos'];//6 numeros
  $editar = $_POST['editar'];
  if ($editar == "Editar") {
    $modificar = "UPDATE productos SET tipo = '$tipo', nombre = '$nombre', descripcion = '$descripcion', img ='$img', precio = $precio, gramos = '$gramos'
      WHERE id = $id";
    if (!mysqli_query($con, $modificar)) {
      die("erre: ".mysqli_error($con));
    }
    header('Location:tabla.php');
  } else {
    $eliminar = "DELETE FROM productos WHERE id = $id";
    if (!mysqli_query($con, $eliminar)) {
      die("erre: ".mysqli_error($con));
    }
    header('Location:tabla.php');
  }

 ?>
