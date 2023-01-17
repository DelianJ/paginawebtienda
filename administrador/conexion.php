<?php
  $user = "root";
  $pass = "Asdf1234";
  $server = "localhost";
  $db = "barcel";

  $con = mysqli_connect($server, $user, $pass, $db);

  if (!$con) {
    die("error1 ".mysqli_connect_error());
  }
 ?>
