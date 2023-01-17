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
      <title>tabla</title>
    </head>
    <body>

      <?php
        include("conexion.php");
        $consulta = "SELECT * FROM productos";
        if (!$resultado = mysqli_query($con, $consulta)) {
          die("error".mysqli_connect_error());
        }
        echo "<table border = '1'>";
          echo "<tr>";
            echo "<td>"."ID"."</td>";
            echo "<td>"."Tipo"."</td>";
            echo "<td>"."Nombre"."</td>";
            echo "<td>"."Descripcion"."</td>";
            echo "<td>"."IMG"."</td>";
            echo "<td>"."Precio"."</td>";
            echo "<td>"."Gramos"."</td>";
          echo "</tr>";
          while ($fila=mysqli_fetch_row($resultado)) {
            echo "<tr>";
              echo "<td>"."<a href='mostrar.php?id=$fila[0]'>".$fila[0]."</a>"."</td>";
              echo "<td>".$fila[1]."</td>";
              echo "<td>".$fila[2]."</td>";
              echo "<td>".$fila[3]."</td>";
              echo "<td>".$fila[4]."</td>";
              echo "<td>".$fila[5]."</td>";
              echo "<td>".$fila[6]."</td>";
            echo "</tr>";
          }
       echo "</table>";
      ?>
      <a href="principal.php">Regresar</a>
    </body>
  </html>
<?php
  }
 ?>
