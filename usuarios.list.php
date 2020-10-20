    <?php
    session_start();    
    
    $nomeusuario = $_SESSION['usuario'];

    include('conexao.php');
    include('verifica_login.php');    
    include('componentes/usuario.php');
    
    
    $usuariocomp = new usuario();
    $usuariocomp->conexao = $conexao;
    $usuariolistar = $usuariocomp->GetAll();
    
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UPGROW - Usuários</title>
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

	<!-- Admin Instenso main scripts -->
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/side_nav.css" />

    <!-- Favorites and Appple touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body id="tables"><!-- This id is used for the cookies -->
  	
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
             <p class="navbar-text pull-right">Logged in as <a href="#"><?php echo $nomeusuario ?></a></p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>  
    
    <!-- side nav -->
    <?php require ('menu.php'); ?>   
    <!--/span-->  
          
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
                  	<li><a href="dashboard.php">Dashboard</a> <span class="divider">/</span></li> 
                    <li><a href="dashboard.php">Cadastro</a> <span class="divider">/</span></li>              
                  	<li class="active">Usuários</li>
                </ul>
                </div><!--/span-->
            </div>
            
            <!-- Content start -->         
            <div class="row-fluid">      
              <div class="span12">      
                <div class="box grad_colour_dark_blue">
                    <h2 class="box_head round_top">Lista Usuários</h2>
                    <a href="#" class="settings box_button_3" title="config">&nbsp;</a>
                    <a href="#" class="toggle box_button_2" title="toggle">&nbsp;</a>
                    <a href="#" class="destroy box_button_1" title="close">&nbsp;</a>
                    <div class="toggle_container">					
                    <div class="block box_content round_bottom padding_20">
                    <td align="left">																			
										  <a class="btn btn-info" href="usuario.php">
											<i class="icon-edit icon-white"></i>  
											        Novo Usuário                            
										   </a> 
                      <p> </p>
						      			</td>   
                        <table cellpadding="" cellspacing="0" border="0" class="display datatable" id="datatable">
                                  <thead>
                                      <tr>
                                          <th>idusuario</th>
                                          <th>nome</th>
                                          <th>login</th>
                                          <th>empresa</th>
                                          <th>datainsercao</th>
                                          <th>Ação</th>
                                      </tr>
                                  </thead>   
                                  <tbody>
                                    <?php
                                              
                                      while($atp = mysqli_fetch_array($usuariolistar,MYSQLI_ASSOC))
                                              {
                                                $date = date_create($atp["datainsercao"]);	   
                                    ?>
                                              <tr>
                                                <td class="center"><?=$atp["idusuario"];?></td>
                                                <td class="center"><?=$atp["nome"];?></td>				
                                                <td class="center"><?=$atp["login"];?></td>
                                                <td class="center"><?=$atp["empresa"];?></td>
                                                <td align="center"><?=date_format($date,'d/m/Y');?></td>	
                                                <td class="center">												
											                        	  <a class="btn btn-info" href="<?php echo 'edit.usuario.php?idusuario=' . $atp['idusuario'];  ?>">
											                        	  	<i class="icon-edit icon-white"></i>  
											                        	      Editar                                            
											                        	  </a>
											                          </td>
                                              </tr>
                                    <?php
                                             }
                                    ?>
                                  
                                  </tbody>


                             </table>                  
                        </div>                                
                    </div>
                </div>
              </div>
            </div><!--/row-->    
            <!-- Content end -->
            
        </div><!--/span-->
      </div><!--/row-->
	  
      <!-- footer -->

    </div><!--/.fluid-container-->
    
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

    <!-- Admin Intenso -->
    <script type="text/javascript" language="javascript" src="js/intenso/jquery.hoverIntent.minified.js"></script>
    <script type="text/javascript" language="javascript" src="js/intenso/intenso.js"></script>
  </body>
</html>                 

