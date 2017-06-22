<!DOCTYPE html>
<html> 
	<?php

        include 'conecta.php';

        $consulta_pedidos     =  "SELECT pedido_id, pedido_qtn, pedido_nome, mesa
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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.theme.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>




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
                $count = 0;
                    while ($row = mysqli_fetch_array($resultado_consulta) ) {

                    echo    "<div class=\"cmd_$count cmd\" style=\"float: left\">";

                        echo    "<table border=\"4px\" width=\"250px\" >";

                        echo            "<tr width=\"250px\" class=\"tr-title\">
                                            <td class=\"td\">$row[3]</td>
                                        </tr>";

                        echo    "</table>";    
                                  
                        echo    "<table border=\"4px\" width=\"250px\">";

                        echo            "<tr>
                                            <th width=\"125px\" class=\"th\">Pedido</th>

                                            <th width=\"125px\" class=\"th\">Quantidade</th>
                                                
                                        </tr>

                                        <tr>
                                            <td class=\"td\">$row[2]</td>
                                            <td class=\"td\">$row[1]</td>
                                        </tr>

                                        <tr>
                                            <td class=\"td\">
                                                <button class=\"btn-int btn-finish\" idPedido=\"$row[0]\"> Finalizar </button>
                                            </td>

                                            <td class=\"td\">
                                                <button class=\"btn-int btn-cancelar\" idPedido=\"$row[0]\"> Cancelar </button>
                                            </td>
                                        </tr>";


                        echo    "</table>";
                                       
                    echo    "</div>"; 

                    $count++;        
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

          <div id="msgExcluir">
            
         </div>

         <div id="msgCancelar">
            
         </div>

		<script type="text/javascript">

            $('.btn-finish').on('click', function(event) {

                var id = $(this).attr('idPedido');
                var formData = { 'id':id, };

                var msgExcluir = $("#msgExcluir");
                msgExcluir.dialog({
                modal: true,
                buttons: {

                    "Sim": function () {

                        $.ajax({
                            type      :'POST',
                            url       :'deletePedidosControler.php',
                            data      :formData,
                            success   :function(data) {
                              
                            },
                        })

                        window.location.reload();

                      $(this).dialog('close');

                    },

                    "Não": function () {
                      $(this).dialog('close');

                    }
                  }
                })    
            });
            
            $('.btn-cancelar').on('click',function() {

                var id = $(this).attr('idPedido');
                var formData = { 'id':id, };

                var msgCancelar = $("#msgCancelar");
                msgCancelar.dialog({
                modal: true,
                buttons: {

                    "Sim": function () {

                        $.ajax({
                            type      :'POST',
                            url       :'deletePedidosControler.php',
                            data      :formData,
                            success   :function(data) {
                              
                            },
                        })

                        window.location.reload();
                        
                      $(this).dialog('close');

                    },

                    "Não": function () {
                      $(this).dialog('close');

                    }
                  }
                })  


            });      

		
		</script>

	</body>
</html>
