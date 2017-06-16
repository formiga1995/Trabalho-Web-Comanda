<?php

    include 'conecta.php';

    if (mysqli_connect_errno()) {

    	printf("Connect failed: %s\n", mysqli_connect_error($db));
    	exit();

	}

    $mesaValue = $_POST['qtn'];				//Vetor com os Nº de cada mesa

	/*echo '<pre>';
	$mesaValue = print_r($mesaValue);*/

	foreach ($mesaValue as $key => $mesasValue) {

		$insere = mysqli_query($db,"INSERT INTO mesa (mesa_num) VALUES ('".$mesasValue."')") or die (mysqli_error($db));

		mysqli_commit($db);

	}


    if( $insere === false) {
    	printf("error: %s\n", mysqli_error($db));
    } else {
    	//echo "Inserção bem sucedida <br>";
    	//echo mysqli_affected_rows($db) . "<br>";
    }

    //var_dump($db);
    var_dump($mesaValue);
  
?>


