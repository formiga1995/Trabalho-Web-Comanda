<?php

	include 'conecta.php';
	if (mysqli_connect_errno()) {

	    	printf("Connect failed: %s\n", mysqli_connect_error($db));
	    	exit();

	}

	$id = $_POST['id'];

	$delete = mysqli_query($db,"DELETE FROM pedido WHERE pedido_id = '$id' ") or die (mysqli_error($db));
			  mysqli_commit($db);

	if( $delete === false) {
	    printf("error: %s\n", mysqli_error($db));
	} else {
	   	echo "Inserção bem sucedida <br>";
	   	echo mysqli_affected_rows($db) . "<br>";
	}

?>