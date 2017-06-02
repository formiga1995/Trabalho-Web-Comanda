<?php

  $servername = "127.0.0.1";
  $username = "precision";
  $password = "admin";

  define('DB_SERVER', '127.0.0.1');
  define('DB_USERNAME', 'precision');
  define('DB_PASSWORD', 'admin');
  define('DB_DATABASE', 'comandadb');

  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>