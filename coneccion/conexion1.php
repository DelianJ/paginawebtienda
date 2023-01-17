<?php
  $user = "root";
  $pass = "asdf1234";
  $server = "localhost";
  $db = "barcel";

  $con = mysqli_connect($server, $user, $pass, $db);

  if (!$con) {
    die("error ".mysqli_connect_error());
  }

 ?>
