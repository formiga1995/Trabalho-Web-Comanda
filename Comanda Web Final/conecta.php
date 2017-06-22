<?php
  $servername = "127.0.0.1";
  $username = "precision";
  $password = " ";

  // Create connection
  $conn = mysqli_connect($servername, $username);

  // Check connection
  if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
  }

  mysqli_select_db($conn,"Comanda");
?>