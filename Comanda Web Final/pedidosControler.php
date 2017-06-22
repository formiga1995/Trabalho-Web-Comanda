<?php

    include 'conecta.php';

    if (mysqli_connect_errno()) {

    	printf("Connect failed: %s\n", mysqli_connect_error($db));
    	exit();

	}

    $produto    = $_POST['produto'];
    $mesa       = $_POST['mesa'];   
    $qtn        = $_POST['qtn'];			


    $insere = mysqli_query($db,"INSERT INTO pedido (pedido_qtn,pedido_nome, mesa)
               VALUES ('$qtn', '$produto', '$mesa')") or die (mysqli_error($db));

    mysqli_commit($db);

    if( $insere === false) {
    	printf("error: %s\n", mysqli_error($db));
    } else {
    	echo "Inserção bem sucedida <br>";
    	echo mysqli_affected_rows($db) . "<br>";
    }

    //var_dump($db);
    var_dump($mesa);
    var_dump($qtn);
  
?>