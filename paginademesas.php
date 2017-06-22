<!DOCTYPE html>
<html>
    <head>
        <title>Comanda Web: Mesas </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/cardapio.css">
      	<link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="javascrip" href="js/addmesa.js">

    </head>
    

    <body>
    
    	<?php

    		include 'conecta.php';

        $consulta_mesas     =   "SELECT mesa_id, mesa_num
                                 FROM mesa";

        $resultado_consulta = mysqli_query($db, $consulta_mesas);
       

    	?>

<!-- cabecalho -->
        <header class="header">
            <div class="container">
                <a href="index.html" class="grid-4">
                    <img src="img/logo.png" alt="Logo">
                </a>
                <nav class="grid-12 header_menu">
                    <ul>
                        <li><a href="paginademesas.html">Mapa de Mesas</a></li>
                    </ul>
                </nav>

            </div>
        </header>


        <section class="introducao">
            <div class="container">

            	<input id="btn-add" type="button" class="btn-int" value=" Adicionar Mesa">
                <input id="btn-remover" type="button" class="btn-int" value="Remover Mesa">
            </div>

           
                <br><br>

                  <form name="frm-mesas" id="frm-mesas" method="POST">
                    <table style="margin: 0 auto">
                      <tr>
                        <div id="new-mesas" style="float: left">
                          <?php
                            $m_count = 1;                     
                       
                            while ($row = mysqli_fetch_array($resultado_consulta) ) {
                              echo "<div class=\"inline\">";
                              echo    "<td>";

                              echo      "<button id=\"$row[0]\" class=\"btn-delete close\"> X </button>";
                              echo      "<input type=\"text\" size=\"1\" readonly=\"true\" name=\"mesa-default\" id=\"$row[0]\" value=\"$row[1]\" class=\"btn-mesa\">"; 


                              echo    "</td>";
                              echo "</div>";
                              $m_count ++;                       
                            }
                            
                          ?> 
                        </div>

                      </tr>
                    </table>       
                    <div id="temp-mesas">
                          
                    </div>
                    <button type="submit" id="btn-salvar" class="btn-int"> Salvar </button>
                  </form>
                      
            
                	<br>
                    <!--input accept="login.html" class="btn-int" value=" Sair" --> 
                  
                    <button type="button" class="btn-int"><a href="login.php"><b>Sair</b></a></button>                           
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

		<!-- Modal -->
		


 

		<!-- Modal Cardápio  -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						            <h4 class="modal-title" id="myModalLabel"> <center> Realize seu Pedido </center> </h4>
		      		</div>

		      		<div class="modal-body">
   						
           				<h4 class="modal-title" id="myModalLabel"> <center> Cadápio </center> </h4>	
                  <center>
                    <h3 class="modal-title-mesa" id="valueFromMyButton">   
               
                    </h3>
                  </center> 
           				<form method="POST" action="cozinha.php" id="enviar" name="enviar"> 
	           				<center>

  	           				<table  class="table1" style="margin:0 auto" >
  	           					<tr>
  	           						<td >Produto 1</td>  

  	           						<td class="td2">
  	           							<button type="button" class="btn btn-default btn-minus" aria-label="Left Align">
  								  			   <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
  										      </button>

  	           							<input class="input-qtn" size ="1" maxlength="2" type="text" id="prod1-qtn" nome="Produto1">

                            <button type="button" class="btn btn-default btn-plus" aria-label="Left Align">
                             <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </button>

  									      </td>       						
  	           					</tr>
  	                  </table>

	           				</center>
           			
        			</div>
   	
		     	

					<div class="modal-footer">

						<center>	

							<input type="reset" class="btn-int btn-reset" value="Limpar">

				            <button type="submit" action="cozinha.php" class="btn-int btn-enviar"> Enviar Pedido </button>
						</center>

						</form>

					</div>
		    	</div>
		  	</div>
		</div>


    
<!-- javascripr pra adicionar botao-->
  <script type="text/javascript">

 	$('.btn-enviar').on('click',function(event){

		var formData = {
          'produto'         : $('#prod1-qtn').attr('nome'),
          'mesa'            : $('#myModal .modal-title-mesa').html(),
          'qtn'             : $('#prod1-qtn').val(),
        };

		$.ajax({    

			url: 'pedidosControler.php',
			type: 'POST',            
			data: formData,

		})

		alert('Pedido Enviado');
		event.preventDefault();

	});

  	$(document).ready(function(){

      var m_count = <?php echo $m_count; ?>;
	  	var count = ($('.content').length + m_count );

	    $("#btn-add").click(function () {
	    	
			var div;
			if(count%5 === 0){
				div = 'div';  // Quebra de linha se o botão for múltiplo de 5
			}
			else {
				div = 'x';
			}
	        var btnMesa = $(document.createElement(div)).attr('class','content').attr("id", 'divRemover' + count);
	             
	        btnMesa.html('<input type="text" size="1" readonly="true" name="mesa[]" id="'+ count +'" value="'+ count +'"class="btn-mesa" data-toggle="modal" data-target="#myModal">');

	        btnMesa.appendTo("#temp-mesas");
	             
	        count++;
				

	    });

	    $("#btn-remover").click(function () {
			if(count > 11){          //Isso aqui pro contador não ficar zoado

				count--;   
			}
			else{
				count = 11;
        alert('Número minimo de mesas alcançado');
			}
			
	     //count--
		 ;
	     
	    $("#divRemover" + count).remove();        //tchau botão
	     });

      $("#btn-salvar").on('click',function(event) {

        //var mesaId    = new Array();
        var mesaValue = new Array();

        $("input[name='mesa[]']").each(function(){

         //mesaId.push($(this).attr('id'));
          mesaValue.push($(this).attr('value'));

        });

        var formData = {
          //'id'            : mesaId,
          'qtn'             : mesaValue,
        };

        $.ajax({
          type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
          url         : 'mesasControler.php', // the url where we want to POST
          data        :  formData, // our data object
          dataType    : 'json', // what type of data do we expect back from the server
          encode      : true
        })

        .done(function(data) {
          console.log(data); 

        })

        alert('Modificações Salvas');
  
      });

       $('.btn-delete').click(function(event){

         var id = $(this).attr('id');

         var formData = {
          'id'        :id,
         };
         
         $.ajax({
            type      :'POST',
            url       :'deleteControler.php',
            data      :formData,
            success   :function(data) {
          
            },
          })

         alert('Modificações Salvas')
 
        }); 
  
    }); 

    $(document).ready(function(){     
    var count = 0;

    $('.btn-plus').on('click',function() {
      count++;
      $('.input-qtn').val(count);
      //alert(count);
    });

    $('.btn-minus').on('click',function() {

      if( count > 1) {
        count--;  
      } else {
        count = 1;
      }
    
      $('.input-qtn').val(count);
    });

      $('.btn-reset').on('click',function(){
        $('.input-qtn').val("");
        count = 0;

      });

    $('.btn-mesa').on('click',function(){
      $('.input-qtn').val("");
      count = 0;
      $('#myModal .modal-title-mesa').html('Mesa '+$(this).attr('value'));

      $('#myModal').modal('show');
    });

    });
 
    </script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	<!--script src="addmesa.js"></script>-->
  </body>
</html>
