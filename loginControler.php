<?php 
	
	include 'conecta.php';

	$login=$_POST['login'];	
  	$senha=$_POST['senha'];

  	$consulta =	"SELECT func_id, func_nome, func_login, func_senha, tipo_tipo_id
               	 FROM funcionario;
               	 WHERE func_login = '$login' and func_senha = '$senha' ";  

    $resultado = mysql_query($consulta);
    $executa = mysql_fetch_array($resultado);

    if (mysql_num_rows($resultado) == 0) {

    	$result = ['result' => 0 ]
    	echo json_encode($result);

    } else {

    	$result = ['result' => 1 ]
    	echo json_encode($result);
    	
    }      	 
?>