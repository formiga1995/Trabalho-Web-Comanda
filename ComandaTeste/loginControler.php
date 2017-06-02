<?php 
	
	include 'conecta.php';

	if(empty($_POST["login"]) || empty($_POST["senha"])) {

		echo"<script language='javascript' type='text/javascript'>alert('Preencha ambos os campos');window.location.href='login.php';</script>";

	} else {

		$login = $_POST['login'];	
	  	$senha = $_POST['senha'];
	  
	  	$consulta =	"SELECT func_id, func_nome, func_login, func_senha, tipo_tipo_id
	               	 FROM funcionario;
	               	 WHERE func_login = '$login' and func_senha = '$senha' ";  

	    $resultado = mysqli_query($db, $consulta); 
	    $executa = mysqli_num_rows($resultado);

	 	if( $executa = 0) {

	    	echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
	        die();

	   	} else {

	    	$_SESSION['login'] = $login;
	    	header("location: paginademesas.php");

	    }

	}
?>
