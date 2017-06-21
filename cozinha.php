<!DOCTYPE html>
<html> 
	<?php

        include 'conecta.php';

        $consulta_pedidos     =  "SELECT pedido_qtn, pedido_nome, mesa
                                 FROM pedido";

        $resultado_consulta = mysqli_query($db, $consulta_pedidos);
	         
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
 
        <link rel="stylesheet" href="css/cozinha.css">


      	<link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="javascrip" href="js/addmesa.js">


    </head>
    <style type="text/css">

    </style>
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
            

                <?php
                
                    while ($row = mysqli_fetch_array($resultado_consulta) ) {

                    //echo    "<table border=\"4px\" width=\"20%\">";

                        echo    "<table border=\"4px\" width=\"250px\">";

                        echo            "<thead>
                                            <tr class=\"tr-title\">
                                                <td class=\"td\">$row[2]</td>
                                            </tr>";
                        echo    "</table>";

                        echo    "<table border=\"4px\" width=\"250px\">";

                        echo                "<thead>";

                        echo                "<tr>
                                                <th width=\"125px\" class=\"th\">Pedido</th>

                                                <th width=\"125px\" class=\"th\">Quantidade</th>
                                                
                                            </tr>

                                            <tr>
                                                <td class=\"td\">$row[1]</td>
                                                <td class=\"td\">$row[0]</td>
                                            </tr>

                                            <tr>
                                                <td class=\"td\">
                                                    <button id=
                                                </td>
                                            </tr>
                                        </thead>";

                        echo    "</table>";
                                       
                    //echo    "</table>";          
                    }


                ?>
       
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

		<script type="text/javascript">
			


		</script>

	</body>
</html>
