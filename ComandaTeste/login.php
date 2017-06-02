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

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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

                <form method="POST" name="login" id="login-frm" action="loginControler.php">
                 
                    <table style="margin: 0 auto;">
                        <tr>
                            <td>
                                <input type="text" id="login" name="login" placeholder="Login">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                  <br>
                                <input type="text" id="senha" name="senha" placeholder="Senha">
                            </td>
                        </tr>
                    </table>

                    <br><br><br>

                    <button type="submit" onClick="loginControler.php" class="btn-int btn-enviar"> Acessar </button>
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
    </body>

    <script type="text/javascript">

        $('.btn-enviar').on('submit', function(){
      
            var login = ("#login").val();
            var senha = ("#senha").val();

            $.ajax({

                url: "loginControler.php",
                type: "POST",
                data: ('#login-frm').serialize(),
                sucess: function(result){
                    alert(result);
                    if(result == true){

                        location.href='paginademesas.php';

                    } else {

                        alert('Algo errado');
                    }
                }

            })

            event.preventDefault();
        });

    </script>
</html>

       