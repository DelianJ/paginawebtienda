<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro | Barcel MX</title>
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <?php $img = "img/pop.jpg"; ?>
    <div class="menu">
      <div class="contenidome">
        <a href="index.php">Pagina Principal</a>
      </div>
      <div class="contenidome">
        <a href="somos.html">Quienes somos</a>
      </div>
      <div class="contenidome">
        <a href="mision.html">Misión</a>
      </div>
      <div class="contenidome">
        <a href="productos.html">Productos</a>
      </div>
      <div class="contenidome">
        <a href="ayuda.html">Ayuda</a>
      </div>
    </div>
    <div class="encabesado">
      <div class="contenidoenca">
        <img src="img/lbarcel.png" alt="" width="180" height="96">
      </div>
      <div class="contenidoenca">
        <img src="img/usuario.png" alt="" width="72" height="70" align="right">
      </div>
    </div>
    <div class="pagina">
      <div class="contenidoregi1">
        <form action="coneccion/agregar.php" method="post">
          <p><input type="text" name="nombre" value="" placeholder="Nombre"></p>
          <p><input type="text" name="apellido" value="" placeholder="Apellido"></p>
          <p><input type="text" name="usuarior" value="" placeholder="Usuario"></p>
          <p><input type="text" name="email" value="" placeholder="E-mail"></p>
          <p><input type="password" name="contracenar" value="" placeholder="Contraseña"></p>
          <p><input type="password" name="concontracenar" value="" placeholder="Confirmar"></p>
          <p><input type="submit" name="reregistrar" value="Registrarme"></p>
        </form>
        <p>
          La familia Barcel te da la mas cordiar biembenida a esta gran
          familia esperamos que disfrutes de nuestra gran bariedad de
          productos hechos especialmente para ti. Una ves en esta gran
          familia podras adquirir nuestros productos en la comunidad de
          tu casa.
        </p>
      </div>
      <div class="contenidoregi2">
        <img src="<?php echo $img; ?>" alt="" width="450" height="450">
      </div>
    </div>
    <div class="pie">
      <div class="contenidopie1">
        <p></p>
        <a href="https://www.facebook.com">
          <img src="img/facebook.png" alt="" width="25" height="25" align ="center">
        </a>
        <a href="https://www.twitter.com">
          <img src="img/twiter.png" alt="" width="35" height="35" align ="center">
        </a>
        <a href="https://www.youtube.com">
          <img src="img/yt.png" alt="" width="30" height="30" align ="center">
        <a/>
        <a href="https://www.instagram.com">
          <img src="img/instagram.png" alt="" width="30" height="30" align ="center">
        </a>
      </div>
      <div class="contenidopie2">
        <p>Marca Registrada</p>
      </div>
    </div>
  </body>
</html>
