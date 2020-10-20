<?php 
session_start();    
    
$nomeusuario = $_SESSION['usuario'];

include('conexao.php');
include('verifica_login.php');    
include('componentes/usuario.php');

$usuariocomp = new usuario();
$usuariocomp->conexao = $conexao;
$usuariolistar = $usuariocomp->GetAll();

$result_usuario = "SELECT * FROM usuarios"

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Forms - Admin Intenso</title>
    <meta name="description" content="Admin Intenso Template">
    <meta name="ahoekie" content="HTML5 Admin Template">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Bootstrap -->
    <link href="js/bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet">
    <link href="js/bootstrap/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">

	<!-- Bootstrap CSS fixes for IE6 -->
    <!--[if lt IE 7]><link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-ie6.min.css"><![endif]-->

	<!-- jQuery UI Bootstrap theme -->
	<link type="text/css" href="js/jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.8.16.custom.css" rel="stylesheet" />

	<!-- Bootstrap google prettify -->
    <link href="js/bootstrap/docs/assets/js/google-code-prettify/prettify.css" rel="stylesheet">

	<!-- UI to Top -->
   	<link rel="stylesheet" type="text/css" media="screen,projection" href="js/jquery.ui.totop/css/ui.totop.css" />     

	<!-- Datatables -->
	<link rel="stylesheet" href="js/DataTables/media/css/demo_table_jui.intenso.css" />

	<!-- Chosen multiselect -->
    <link type="text/css" href="js/chosen/chosen/chosen.intenso.css" rel="stylesheet" />   

	<!-- Uniform -->
    <link rel="stylesheet" type="text/css" media="screen,projection" href="js/uniform/css/uniform.default.css" />
    
     <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="js/blueimp-jQuery-File-Upload/css/jquery.fileupload-ui.css">

	<!-- jQuery UI Bootstrap Daterange -->
    <link href="js/jquery-ui-bootstrap/third-party/jQuery-UI-Date-Range-Picker/css/ui.daterangepicker.css" media="screen" rel="Stylesheet" type="text/css" />

	 <!-- jQuery UI Bootstrap file input -->
    <link href="js/jquery-ui-bootstrap/third-party/jQuery-UI-FileInput/css/enhanced.css" rel="Stylesheet">
    
	<!-- Admin Instenso main scripts -->
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/side_nav.css" />

    <!-- Favorites and Appple touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body id="forms"><!-- This id is used for the cookies -->
  	
    <!-- Top navigation bar -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="i-bar"></span>
            <span class="i-bar"></span>
            <span class="i-bar"></span>
          </a>         
          <div class="nav-collapse">
            <ul class="nav">
              <li class="dropdown">
                    <a href="#"
                          class="dropdown-toggle"
                          data-toggle="dropdown">
                          Messages <span class="label label-info">100</span>
                          <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Message 1</a></li>
                        <li><a href="#">Another message</a></li>
                        <li><a href="#">Something else message</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Older messages...</a></li>
                    </ul>
              </li>
              <li class="dropdown">
                    <a href="#"
                          class="dropdown-toggle"
                          data-toggle="dropdown">
                          Settings
                          <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Personal Info</a></li>
                        <li><a href="#">Preferences</a></li>
                        <li><a href="#">Alerts</a></li>
                        <li><a id="cookie_delete" href="#">Delete Cookies</a></li>
                    </ul>
              </li>
              <li class="dropdown">
                    <a href="#"
                          class="dropdown-toggle"
                          data-toggle="dropdown">
                          Theme
                          <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                    	<li><a id="lightblue" href="#">Light Blue</a></li>
	                    <li><a id="darkblue" href="#">Dark Blue</a></li>
                        <li><a id="red" href="#">Red</a></li>                        
                        <li><a id="green" href="#">Green</a></li>
                        <li><a id="orange" href="#">Orange</a></li>
                        <li><a id="grey" href="#">Grey</a></li>
                        <li><a id="black" href="#">Black</a></li>
                    </ul>
              </li>
              <li class="dropdown">
                    <a href="#"
                          class="dropdown-toggle"
                          data-toggle="dropdown">
                          Fundos
                          <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                    	<li><a id="pattern01" href="#"> Cinza Claro </a></li>
	                    <li><a id="pattern02" href="#"> Cinza Escuro </a></li>
                        <li><a id="pattern03" href="#"> Preto </a></li>
                        <li><a id="pattern04" href="#"> Cinza Quadriculado </a></li>
                        <li><a id="pattern05" href="#"> Branco Quadriculado </a></li>
                        <li><a id="pattern06" href="#"> Quadriculado Azul </a></li>
	                    <li><a id="pattern07" href="#"> Branco com listras </a></li>
                        <li><a id="pattern08" href="#"> Branco Quadriculado</a></li>
                        <li><a id="pattern09" href="#"> Preto Quadriculado</a></li>
                        <li><a id="pattern10" href="#">Pattern 10</a></li>
                        <li><a id="pattern11" href="#">Pattern 11</a></li>
	                    <li><a id="pattern12" href="#">Pattern 12</a></li>
                        <li><a id="pattern13" href="#">Pattern 13</a></li>
                        <li><a id="pattern14" href="#">Pattern 14</a></li>
                        <li><a id="pattern15" href="#">Pattern 15</a></li>
                        <li><a id="pattern16" href="#">Pattern 16</a></li>
	                    <li><a id="pattern17" href="#">Pattern 17</a></li>
                        <li><a id="pattern18" href="#">Pattern 18</a></li>
                    </ul>
              </li>
              <li><a href="#about">About</a></li>             
            </ul>
            <p class="navbar-text pull-right">Logged in as <a href="#"><?php echo "$nomeusuario"; ?></a></p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>  
        <?php
            include("menu.php");
        ?>         
        <!-- main container -->
        <div id="main_container" class="span10">
        
        	<!-- Shortcut buttons -->
            <div class="row-fluid">
	            <div class="span12 shortcut">
                	<a href="#" class="btn btn-shortcut"><img src="images/icons/grey/Home.png" alt="Dashboard" />Dashboard<span class="label label-success">9</span></a>
                    <a href="#" class="popover_shortcut_on btn btn-shortcut"
                    rel="popover" 
                    data-content=
                    '<a href="#" >Comment By Member</a><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum,...e</p><hr>
                    <a href="#" >Comment By Member</a><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum,...e</p><hr>
                    <a href="#" >Comment By Member</a><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum,...e</p><hr>
                    <a href="#" >Comment By Member</a><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum,...e</p><hr>
                    <a href="#" >Comment By Member</a><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum,...e</p>'
                    data-original-title="New Comments"
                    
                    ><img src="images/icons/grey/speech_bubbles.png" alt="Comments" />Comments<span class="label label-warning">9</span></a>
                    <a href="#" class="btn btn-shortcut"><img src="images/icons/grey/Graph.png" alt="Statistics" />Statistics<span class="label label-info">9</span></a>                    
                </div><!--/span-->
            </div>
            
            <!-- Breadcrumb -->        
        	<div class="row-fluid">
                <div class="span12">
                <ul class="breadcrumb">              
                  	<li><a href="usuarios.list.php">Dashboard</a> <span class="divider">/</span></li>           
                  	<li class="active">Forms</li>
                </ul>
                </div><!--/span-->
            </div>
                        
            <div class="row-fluid">
            	<div class="span12">

                    <div class="box grad_colour_dark_blue" id="box_4">
                        <h2 class="box_head round_top">Contas a Pagar</h2>
                        <a href="#" class="settings box_button_3" title="config">&nbsp;</a>
                        <a href="#" class="toggle box_button_2" title="toggle">&nbsp;</a>
                        <a href="#" class="destroy box_button_1" title="close">&nbsp;</a>

                        <div class="toggle_container">					

                            <div class="block box_content round_bottom padding_20">

                                <form name="insereUsuario" class="form-horizontal" action="componentes/recebeUsuario.php" method="POST">
                                
                                  <fieldset>
                                   
                                  <legend>Nova cobrança</legend>
                                   
                                    <div class="control-group">
                                      <label class="control-label" for="nome">Fornecedor</label>
                                      <div class="controls">
                                        <input type="text" class="input-xlarge" name="nome">
                                        <p class="help-block">Insira seu nome completo</p>
                                      </div>
                                    </div>

                                    <div class="control-group">
                                      <label class="control-label" for="login">Valor</label>
                                      <div class="controls">
                                        <input type="text" class="input-xlarge" name="login">
                                        <p class="help-block">Login, será utilizado para acessar o sistema</p>
                                      </div>
                                    </div>

                                    <div class="control-group">
                                      <label class="control-label" for="senha">Vencimento</label>
                                      <div class="controls">
                                        <input type="password" class="input-xlarge" name="senha">
                                        <p class="help-block">Insira sua senha</p>
                                      </div>
                                    </div>  
                                    <div class="control-group">
                                    <label class="control-label">Fornecedor</label>
                                    <div class="controls docs-input-sizes">

                                      <select name="empresa">
                                      <?php
                                        $resultado_query_empresa = "SELECT idempresa, empresa FROM empresa";
                                        $resultado_consulta = mysqli_query($conexao,$resultado_query_empresa);
                                        while($row_empresas = mysqli_fetch_assoc($resultado_consulta)){
                                      ?>
                                        <option value="<?php echo $row_empresas['idempresa']; ?>"><?php echo $row_empresas['empresa'];?>
                                      
                                      </option> 

                                        <?php
                                          } 
                                        ?> 
                                      </select>
                                    </div>
                                  </div>                                 
                                    <div class="form-actions">
                                      <button type="submit" class="btn btn-primary" onclick="return validar()">Save changes</button>
                                      <button type="reset" class="btn" onclick="cancelar()">Cancel</button>
                                    </div>
                                  </fieldset>
                                </form>                             
                            </div>                                
                        </div>
                    </div>
            	</div>
            </div>

            
           
        </div><!--/span-->
      </div><!--/row-->
	  
      <!-- footer -->
    </div><!--/.fluid-container-->
    
    <!-- javascript Templates
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->    
    <!-- Multi File uploader -->
    <!-- Error messages for the upload/download templates -->
    <script>
              
      function validar(){
        
          var nome = insereUsuario.nome.value
          var login = insereUsuario.login.value
          var senha = insereUsuario.senha.value

          if(nome == ""){
            alert("Preencha o Usúario");
            document.insereUsuario.nome.focus();
             return false 
          }

          if(login == ""){
            alert("Preencha o Login");
            insereUsuario.login.focus()
            return false 
          }

          if(senha == ""){
            alert("Preencha o Senha")
            insereUsuario.senha.focus()
            return false 
          }
          

      }
    </script>

    <script>
    var fileUploadErrors = {
        maxFileSize: 'File is too big',
        minFileSize: 'File is too small',
        acceptFileTypes: 'Filetype not allowed',
        maxNumberOfFiles: 'Max number of files exceeded',
        uploadedBytes: 'Uploaded bytes exceed file size',
        emptyResult: 'Empty file upload result'
    };
    </script>
    
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->    
    <!-- jQuery (UI) -->
    <script type="text/javascript" language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
    
	<!-- jQuery Cookie -->
    <script type="text/javascript" language="javascript" src="js/intenso/jquery.cookie.js"></script>

    <!-- Sherpa side nav -->
    <script type="text/javascript" language="javascript" src="js/intenso/jquery.hoverIntent.minified.js"></script>

    <!-- UI to Top -->
    <script type="text/javascript" language="javascript" src="js/jquery.ui.totop/js/jquery.ui.totop.js"></script>  

    <!-- Bootstrap Scripts -->   
    <script type="text/javascript" language="javascript" src="js/bootstrap/js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" language="javascript" src="js/bootstrap/js/bootstrap-tooltip.js"></script>
    <script type="text/javascript" language="javascript" src="js/bootstrap/js/bootstrap-popover.js"></script>
    <script type="text/javascript" language="javascript" src="js/bootstrap/js/bootstrap-alert.js"></script>
    <script type="text/javascript" language="javascript" src="js/bootstrap/js/bootstrap-tab.js"></script>
    <script type="text/javascript" language="javascript" src="js/bootstrap/js/bootstrap-typeahead.js"></script>
    <script type="text/javascript" language="javascript" src="js/bootstrap/js/bootstrap-modal.js"></script>
    <script type="text/javascript" language="javascript" src="js/bootstrap/docs/assets/js/google-code-prettify/prettify.js"></script>
	  
	<!-- Datatables -->
	<script type="text/javascript" language="javascript" src="js/DataTables/media/js/jquery.dataTables.js"></script>
	
    <!-- Chosen multiselect -->
    <script type="text/javascript" language="javascript" src="js/chosen/chosen/chosen.jquery.min.js"></script>  
    
    <!-- Uniform -->
    <script type="text/javascript" language="javascript" src="js/uniform/jquery.uniform.min.js"></script>

 	<!-- Jquery UI Bootstrap Daterange -->
    <script type="text/javascript" src="js/jquery-ui-bootstrap/third-party/jQuery-UI-Date-Range-Picker/js/date.js"></script>
    <script type="text/javascript" src="js/jquery-ui-bootstrap/third-party/jQuery-UI-Date-Range-Picker/js/daterangepicker.jQuery.js"></script>
    
    <!-- Jquery UI Bootstrap FileInput -->
	<script src="js/jquery-ui-bootstrap/third-party/jQuery-UI-FileInput/js/enhance.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui-bootstrap/third-party/jQuery-UI-FileInput/js/fileinput.jquery.js" type="text/javascript"></script>
    
     <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="http://blueimp.github.com/JavaScript-Templates/tmpl.min.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="http://blueimp.github.com/JavaScript-Canvas-to-Blob/canvas-to-blob.min.js"></script>
    <!-- Bootstrap JS and Bootstrap Image Gallery are not required, but included for the demo -->
    <script src="http://blueimp.github.com/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="js/blueimp-jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="js/blueimp-jQuery-File-Upload/js/jquery.fileupload.js"></script>
    <!-- The File Upload image processing plugin -->
    <script src="js/blueimp-jQuery-File-Upload/js/jquery.fileupload-ip.js"></script>
    <!-- The File Upload user interface plugin -->
    <script src="js/blueimp-jQuery-File-Upload/js/jquery.fileupload-ui.js"></script>
    <!-- The main application script -->
    <script src="js/blueimp-jQuery-File-Upload/js/main.js"></script>
    <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
    <!--[if gte IE 8]><script src="js/blueimp-jQuery-File-Upload/js/cors/jquery.xdr-transport.js"></script><![endif]-->   
    
    <!-- Admin Intenso -->
    <script type="text/javascript" language="javascript" src="js/intenso/jquery.hoverIntent.minified.js"></script>
    <script type="text/javascript" language="javascript" src="js/intenso/intenso.js"></script>
    <script type="text/javascript" language="javascript" src="js/intenso/intenso.forms.js"></script>
  <script>
    function cancelar(){
      location.href="usuarios.list.php"
    }
  </script>
  </body>
</html>                        