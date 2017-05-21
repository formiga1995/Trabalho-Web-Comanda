<!DOCTYPE html>
<html> 
	<?php

		$qtn = $_POST['qtn'];
		//var_dump($qtn);
		//die
	 
	?>
	<head>
		<title></title>

		<head>
        <title> Cozinha </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/style.css">
 
        <link rel="stylesheet" href="css/cozinha.css"


      	<link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="javascrip" href="js/addmesa.js">


    </head>

	<body>

	 	<header class="header">
            	<div class="container">
                	<a href="index.html" class="grid-4">
                    	<img src="img/logo.png" alt="Logo">
                	</a>
                	<nav class="grid-12 header_menu">
                    	<ul>
                        	<li><a href="paginademesas.html">Cozinha</a></li>
                    	</ul>
                	</nav>
            	</div>
     	</header>

     	<section class="introducao">
            <div class="container">
            	<div class="tabelaPedidos">
	           		<table class="comanda">
		           		<tr class="linha1">

		           			<td class="linha2">Qnt</td>  
		           				<?php echo "Quantidade: $qtn"; ?>
		           			<td class="linha2">Pedido</td>  
		
						</tr>
		           	</table> 
	           	</div>
            </div>
            
        </section>
   
        <footer>
        	<div class="footer">

        		<div class="container">
        		
        		</div>

        		
        	</div>

	        <div class="copy">
				<div class="container">
			
				</div>
			</div>

		</footer>

	<?php
	
	?>

	</body>
</html>
