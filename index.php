<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login - Admin Intenso</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<!-- css reset -->
	

    <!-- Le styles -->
    <link href="js/bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet">
    
    <link href="js/bootstrap/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css" />
   	<!-- Uniform -->
    <link rel="stylesheet" type="text/css" media="screen,projection" href="js/uniform/css/uniform.default.css" />


    
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    
  </head>

  <body>
	<div class="container-fluid">
	    <div class="row-fluid">
	        <div class="span4">&nbsp;</div>
        	<div class="span4"><img class="login_logo" src="images/upgrow.png" alt="Admin Intenso"/></div>
        </div>
    	<div class="row-fluid">
        	<div class="span4">&nbsp;</div>
            <div class="span4">
                <div class="box grad_colour_dark_blue">
                    <h2 class="box_head round_top">UPGROW </h2>
                    <div class="toggle_container"> 				
                        <div class="block box_content round_bottom padding_20">
                
                            <?php
                            //criando sessão não autenticado, e imprimindo uma mensagem.
                            if(isset($_SESSION['nao_autenticado'])):
                            ?>
                                <div class="msgerro">
                                    <p> Usuário ou senha incorretos</p>	
                               </div> 
                            <?php
                             endif;
                             //destruindo a sessão.
                             unset($_SESSION['nao_autenticado']);
                           ?>

                        <form class="well form-search" action="login.php" method="POST">
                                <input name="usuario" class="input-small" placeholder="Seu usuario">
                                <input name="senha" type="password" class="input-small" placeholder="Sua senha">
                                <button type="submit" class="btn">Go</button>
                                <label class="inline uniform" for="remember" style="vertical-align: bottom;">
                                    <input class="uniform_on" type="checkbox" id="remember" value="option1">Remember me?
                                </label>
                              </form>
                        </div>                                
                    </div>
                </div>
            </div>
        </div>

    </div><!--/.fluid-container-->


    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <!-- Uniform -->
    <script type="text/javascript" src="js/uniform/jquery.uniform.min.js"></script>
    
    <script type="text/javascript">
	$(document).ready(function(){
     $(".uniform_on").uniform();
	});
    </script>
  </body>
</html>
