<?php 
	
	include 'conecta.php';

	if (!$db) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    	exit;
	}

	if(empty($_POST["login"]) || empty($_POST["senha"])) {

		echo "empty";

	} else {

		$login = $_POST['login'];	
	  	$senha = $_POST['senha'];
	  
	  	$consulta 	=	"SELECT func_id, func_nome, func_login, func_senha, tipo_tipo_id
	               	 	FROM funcionario
	               	 	WHERE func_login = '$login' and func_senha = '$senha' ";  

	    $resultado 	= mysqli_query($db, $consulta); 
	    $executa 	= mysqli_fetch_array($resultado);


	 	if( $executa == NULL) {

			echo "false";

	   	} else {

			echo "true";

	    }

	}


?>
