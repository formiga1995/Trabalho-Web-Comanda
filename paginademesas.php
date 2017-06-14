<?php

    include 'conecta.php';

    $mesaId = $_POST['mesaId'];      				//Vetor com os ID'S de cada mesa
    $mesaValue = $_POST['mesaValue'];				//Vetor com os Nº de cada mesa

    echo '<pre>';
	$mesaId = print_r($mesaId);

	echo '<pre>';
	$mesaValue = print_r($mesaValue);

    /*foreach ($mesaId as $mesasId) {
    	echo "ID:" . $mesasId . "<br/>";
    }

     foreach ($mesaValue as $mesasValue) {
    	echo "Número:" . $mesasValue . "<br/>";
    }*/

    $insere 	= 	"INSERT INTO mesa (mesa_id, mesa_num)
    				VALUES ('$mesaId', '$mesaValue')";

    $resultado 	= mysqli_query($db, $insere);

    if( false === $resultado) {
    	printf("error: %s\n", mysqli_error($db));
    }  

    var_dump($resultado);
    var_dump($mesaId);
    var_dump($mesaValue);
  
?>

