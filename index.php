<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Barcel MX</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" charset="utf-8">
      $(window).load(function() {
        $('.flexslider').flexslider();
      });
    </script>
  </head>
  <body>
    <div class="menu">
      <div class="contenidome activo">
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
      <div class="contenidopagca">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="img/barcelpro.png" alt="">
              <section class="flex-caption"></section>
            </li>
            <li>
              <img src="img/barceltakis.png" alt="">
              <section class="flex-caption"></section>
            </li>
            <li>
              <img src="img/promorunners.jpg" alt="">
              <section class="flex-caption"></section>
            </li>
            <li>
              <img src="img/productosfuego.jpg" alt="">
              <section class="flex-caption"></section>
            </li>
          </ul>
        </div>
      </div>
      <div class="contenidopag">
        <div class="elementopag1">
          <p class="pag1">
            Barcel es una compañia mexicana dedicada a la
            producción y benta de botanas de diseños y sabores
            variados, creada a fines de la decada de los 70's
          </p>
        </div>
        <div class="elementopag2">
          <form action="coneccion/iniciar.php" method="post">
            <p><input type="text" name="usuario" value="" placeholder="Usuario"></p>
            <p><input type="password" name="contracenia" value="" placeholder="Contraceña"></p>
            <p><input type="submit" name="enviar" value="Iniciar"></p>
            <p>O</p>
            <p><a href="registrarme.php"><input type="button" name="registrar" value="Registrarme"></a></p>
          </form>
        </div>
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
