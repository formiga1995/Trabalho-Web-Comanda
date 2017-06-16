<!DOCTYPE html>
<html>
    <head>
        <title>
            Login: Comanda Web
        </title>

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
	    <style>
</style>
    <body>

        <?php

            include 'conecta.php';

        ?>

        <!-- cabecalho -->

        <header class="header">
            <div class="container">
                <a href="index.html" class="grid-4">
                    <img src="img/logo.png" alt="Logo">
                </a>
                <nav class="grid-12 header_menu">
                    <ul>
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="cadastro.html">Ainda não é cadastrado?</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="introducao">
            <div class="container"> 

                <form method="POST" name="login" id="login-frm" >
                 
                    <table style="margin: 0 auto;">
                        <tr>
                            <td>
                                <input type="text" id="login" name="login" placeholder="Login">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                  <br>
                                <input type="password" id="senha" name="senha" placeholder="Senha">
                            </td>
                        </tr>
                    </table>

                    <br><br><br>

                    <button type="submit" class="btn-int btn-enviar"> Acessar </button>
                </form>


            <div>
       

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
        <script type="text/javascript">
        $('.btn-enviar').on('click',function(event) {

            var formData = {
                'login'       : $("input[name=login]").val(),
                'senha'       : $("input[name=senha]").val(),
            };

            $.ajax({

                type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url         : 'loginControler.php', // the url where we want to POST
                data        : formData, // our data object
                dataType    : 'json', // what type of data do we expect back from the server
                encode      : true,
                success     : function (data) {
                                if( data == false) {
                                    alert('Login e/ou senha incorretos');
                                } else if (data == true){
                                    window.location="paginademesas.php";
                                } else if (data == empty) {
                                    alert('Preencha ambos os campos');
                                }
                                
                            },                            
                        
            })

            event.preventDefault();

        });
            


        </script>
    </body>


</html>

       
