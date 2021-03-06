<?php
session_start();
include('verifica_login.php');
$nomeusuario = $_SESSION['usuario'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dashboard - Admin Intenso</title>
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

	<!-- Full Calender -->
    <link rel="stylesheet" type="text/css" href="js/fullcalendar/fullcalendar/fullcalendar.css" />
    
	<!-- Admin Instenso main scripts -->
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/side_nav.css" />
    <link rel="stylesheet" href="css/accordion.css" />

    <!-- Favorites and Appple touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body id="dashboard"><!-- This id is used for the cookies -->
  	
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
                          Background
                          <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                    	<li><a id="pattern01" href="#">Pattern 1</a></li>
	                    <li><a id="pattern02" href="#">Pattern 2</a></li>
                        <li><a id="pattern03" href="#">Pattern 3</a></li>
                        <li><a id="pattern04" href="#">Pattern 4</a></li>
                        <li><a id="pattern05" href="#">Pattern 5</a></li>
                        <li><a id="pattern06" href="#">Pattern 6</a></li>
	                    <li><a id="pattern07" href="#">Pattern 7</a></li>
                        <li><a id="pattern08" href="#">Pattern 8</a></li>
                        <li><a id="pattern09" href="#">Pattern 9</a></li>
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
            <p class="navbar-text pull-right">Logged in as <a href="#"><?php echo $nomeusuario ?></a></p>
            </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>  
    
    <!-- side nav -->
    <!-- menu -->
    <?php require ('menu.php'); ?>      
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
                  	<li class="active">Dashboard</li>
                </ul>
                </div><!--/span-->
            </div>
            
            <!-- Content start -->         
			<!-- Visitors per day start -->
            <div class="row-fluid">
                <div class="span12">
            		<div class="box grad_colour_dark_blue">
                        <h2 class="box_head round_top">Visitor Statistics</h2>
                        <a href="#" class="settings box_button_3" title="config">&nbsp;</a>
                        <a href="#" class="toggle box_button_2" title="toggle">&nbsp;</a>
                        <a href="#" class="destroy box_button_1" title="close">&nbsp;</a>
                        <div class="toggle_container">					
                            <div class="block box_content round_bottom std_padding">
                             	<div class="row-fluid">                 
                                    <div class="span12 box_padding_20">
                                        <h3>Visitor Statistics <small>use the overview box below the graph to select the time period...</small></h3>
                                        <div id="visits_per_day_placeholder" style="width:95%;height:300px;margin-top:20px;"></div>
                                    	<div id="visits_per_day_overview" style="margin-left:5%;margin-top:20px;width:85%;height:50px"></div>
                                    </div>                       
                            	</div>
                            </div>                                
                        </div>
                    </div>
                </div><!--/span-->
            </div><!--/row-->
            <!-- Visitors per day end -->
            
            <!-- Draggable Widgets start -->
             <div class="row-fluid">
                <div class="span4 column" id="col0">
            		<div class="box grad_colour_dark_blue" id="box_0">
                        <h2 class="box_head round_top">Monthly Statistics</h2>
                        <a href="#" class="settings box_button_3" title="config">&nbsp;</a>
                    <a href="#" class="toggle box_button_2" title="toggle">&nbsp;</a>
                    <a href="#" class="destroy box_button_1" title="close">&nbsp;</a>
                        <div class="toggle_container">					
                            <div class="block box_content round_bottom">
                               <ul class="statistics">
                                <li>
                                  <a href="#">
                                  	<i class="icon-arrow-up"></i>                               
                                    <span class="green">100</span>
                                    New Comments                                    
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                  	<i class="icon-arrow-down"></i>
                                    <span class="red">12</span>
                                    New Registrations
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="icon-minus"></i>
                                    <span class="blue">33</span>
                                    New Articles                                    
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
	                                <i class="icon-fire"></i>
                                    <span class="yellow">400</span>
                                    User reviews                                    
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                  	<i class="icon-arrow-up"></i>                               
                                    <span class="green">100</span>
                                    New Comments                                    
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                  	<i class="icon-arrow-down"></i>
                                    <span class="red">12</span>
                                    New Registrations
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="icon-minus"></i>
                                    <span class="blue">33</span>
                                    New Articles                                    
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
	                                <i class="icon-fire"></i>
                                    <span class="yellow">400</span>
                                    User reviews                                    
                                  </a>
                                </li>
                              </ul>
                            </div>
                        </div>
                     </div>
                </div><!--/span-->
                <div class="span4 column" id="col1">
            		<div class="box grad_colour_dark_blue" id="box_1">
                        <h2 class="box_head round_top">Member Updates</h2>
                        <a href="#" class="settings box_button_3" title="config">&nbsp;</a>
                    <a href="#" class="toggle box_button_2" title="toggle">&nbsp;</a>
                    <a href="#" class="destroy box_button_1" title="close">&nbsp;</a>
                        <div class="toggle_container">					
                            <div class="block box_content round_bottom padding_10">
                             <ul class="members">
                                <li>
                                  <a href="#">
                                  	<img src="images/member_ph.png" class="member_avatar"/>
                                    <strong>Name:</strong> Member 1<br />
                                    <strong>Since:</strong> 21/01/2012<br />
                                    <strong>Status:</strong> <span class="label label-success">Approved</span>                                  
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                  	<img src="images/member_ph.png" class="member_avatar"/>
                                    <strong>Name:</strong> Member 1<br />
                                    <strong>Since:</strong> 21/01/2012<br />
                                    <strong>Status:</strong> <span class="label label-important">Banned</span>                                  
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                  	<img src="images/member_ph.png" class="member_avatar"/>
                                    <strong>Name:</strong> Member 1<br />
                                    <strong>Since:</strong> 21/01/2012<br />
                                    <strong>Status:</strong> <span class="label label-warning">Pending</span>                                  
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                  	<img src="images/member_ph.png" class="member_avatar"/>
                                    <strong>Name:</strong> Member 1<br />
                                    <strong>Since:</strong> 21/01/2012<br />
                                    <strong>Status:</strong> <span class="label label-info">Updates</span>                                  
                                  </a>
                                </li>
                              </ul>
                            </div>
                        </div>
                     </div>
                </div><!--/span-->
                <div class="span4 column" id="col2">
            		<div class="box grad_colour_dark_blue" id="box_2">
                        <h2 class="box_head round_top">Member Comments</h2>
                        <a href="#" class="settings box_button_3" title="config">&nbsp;</a>
                    <a href="#" class="toggle box_button_2" title="toggle">&nbsp;</a>
                    <a href="#" class="destroy box_button_1" title="close">&nbsp;</a>
                        <div class="toggle_container">					
                            <div class="block box_content round_bottom padding_10">
                             <ul class="members">
                                <li>
                                  <a href="#">
                                  	<img src="images/member_ph.png" class="member_avatar"/>
                                    <span class="blue">Comment by <strong>Member</strong> on 21/02/2012</span></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum, est at congue gravida...</p>                                
                                  
                                </li>
                                <li>
                                  <a href="#">
                                  	<img src="images/member_ph.png" class="member_avatar"/>
                                    <span class="blue">Comment by <strong>Member</strong> on 21/02/2012</span></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum, est at congue gravida...</p>                                
                                  
                                </li>
                                <li>
                                  <a href="#">
                                  	<img src="images/member_ph.png" class="member_avatar"/>
                                    <span class="blue">Comment by <strong>Member</strong> on 21/02/2012</span></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum, est at congue gravida...</p>                                
                                  
                                </li>
                                <li>
                                  <a href="#">
                                  	<img src="images/member_ph.png" class="member_avatar"/>
                                    <span class="blue">Comment by <strong>Member</strong> on 21/02/2012</span></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum, est at congue gravida...</p>                                
                                  
                                </li>
                              </ul>
                            </div>
                        </div>
                     </div>
                </div><!--/span-->
            </div><!--/row--> 
            <!-- Draggable Widgets end -->
            
            <!-- Calender start -->
            <div class="row-fluid">
                <div class="span12">
            		<div class="box grad_colour_dark_blue">
                        <h2 class="box_head round_top">Site Calender</h2>
                        <a href="#" class="settings box_button_3" title="config">&nbsp;</a>
                    <a href="#" class="toggle box_button_2" title="toggle">&nbsp;</a>
                    <a href="#" class="destroy box_button_1" title="close">&nbsp;</a>
                        <div class="toggle_container">					
                            <div class="block box_content round_bottom padding_20">                             
	                        	<div id="calendar"></div>                         
                            </div>                                
                        </div>
                    </div>
                </div><!--/span-->               
            </div><!--/row-->
            <!-- Calender end -->
            
            <!-- Table start -->
            <div class="row-fluid">
                <div class="span12">
            		<div class="box grad_colour_dark_blue">
                        <h2 class="box_head round_top">Site Calender</h2>
                        <a href="#" class="settings box_button_3" title="config">&nbsp;</a>
                    <a href="#" class="toggle box_button_2" title="toggle">&nbsp;</a>
                    <a href="#" class="destroy box_button_1" title="close">&nbsp;</a>
                        <div class="toggle_container">					
                            <div class="block box_content round_bottom padding_20">                             
                               <table cellpadding="0" cellspacing="0" border="0" class="display datatable" id="datatable">
                                  <thead>
                                      <tr>
                                          <th>Username</th>
                                          <th>Date registered</th>
                                          <th>Role</th>
                                          <th>Status</th>
                                          <th>Actions</th>
                                      </tr>
                                  </thead>   
                                  <tbody>
                                  	<tr>
                                    	<td>Fred Flinstone</td>
                                    	<td class="center">2011/01/01</td>
                                        <td class="center">Member</td>
                                        <td class="center">
                                        	<span class="label label-success">Active</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>Spiderman</td>
                                    	<td class="center">2011/02/01</td>
                                        <td class="center">Staff</td>
                                        <td class="center">
                                        	<span class="label label-important">Banned</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>Batman</td>
                                    	<td class="center">2011/02/01</td>
                                        <td class="center">Admin</td>
                                        <td class="center">
                                        	<span class="label">Inactive</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>Robin</td>
                                    	<td class="center">2011/03/01</td>
                                        <td class="center">Member</td>
                                        <td class="center">
                                        	<span class="label label-warning">Pending</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>Catwomen</td>
                                    	<td class="center">2010/01/21</td>
                                        <td class="center">Staff</td>
                                        <td class="center">
                                        	<span class="label label-success">Active</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>Garfield</td>
                                    	<td class="center">2011/08/23</td>
                                        <td class="center">Staff</td>
                                        <td class="center">
                                        	<span class="label label-important">Banned</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>Bananaman</td>
                                    	<td class="center">2011/06/01</td>
                                        <td class="center">Admin</td>
                                        <td class="center">
                                        	<span class="label">Inactive</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>Paul</td>
                                    	<td class="center">2011/03/01</td>
                                        <td class="center">Member</td>
                                        <td class="center">
                                        	<span class="label label-warning">Pending</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>Wilma Flinstone</td>
                                    	<td class="center">2011/01/01</td>
                                        <td class="center">Member</td>
                                        <td class="center">
                                        	<span class="label label-success">Active</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>Hulk</td>
                                    	<td class="center">2011/02/01</td>
                                        <td class="center">Staff</td>
                                        <td class="center">
                                        	<span class="label label-important">Banned</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>Bob the Builder</td>
                                    	<td class="center">2011/02/01</td>
                                        <td class="center">Admin</td>
                                        <td class="center">
                                        	<span class="label">Inactive</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>MacAndCheese</td>
                                    	<td class="center">2011/03/01</td>
                                        <td class="center">Member</td>
                                        <td class="center">
                                        	<span class="label label-warning">Pending</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>Ratamatat</td>
                                    	<td class="center">2010/01/21</td>
                                        <td class="center">Staff</td>
                                        <td class="center">
                                        	<span class="label label-success">Active</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>ZoefZoef</td>
                                    	<td class="center">2011/08/23</td>
                                        <td class="center">Staff</td>
                                        <td class="center">
                                        	<span class="label label-important">Banned</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>SpeedyConzales</td>
                                    	<td class="center">2011/06/01</td>
                                        <td class="center">Admin</td>
                                        <td class="center">
                                        	<span class="label">Inactive</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td>TazmanianDevil</td>
                                    	<td class="center">2011/03/01</td>
                                        <td class="center">Member</td>
                                        <td class="center">
                                        	<span class="label label-warning">Pending</span>
                                        </td>
                                        <td class="center">
                                        	<a class="btn btn-success" href="#">
                                                <i class="icon-zoom-in icon-white"></i>  
                                                View                                            
                                            </a>
                                        	<a class="btn btn-info" href="#">
                                                <i class="icon-edit icon-white"></i>  
                                                Edit                                            
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                            	<i class="icon-trash icon-white"></i> 
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                  </tbody>
                                  </table>                                   
                         
                            </div>                                
                        </div>
                    </div>
                </div><!--/span-->               
            </div><!--/row-->
            <!-- Table end -->              
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

	<!-- Flot Graphs -->
    <!--[if lte IE 8]><script type="text/javascript" language="javascript" src="js/flot/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" language="javascript" src="js/flot/jquery.flot.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/flot/jquery.flot.selection.js"></script>
    <script type="text/javascript" language="javascript" src="js/flot/jquery.flot.resize.js"></script>       

	<!-- Full Calender -->
    <script type='text/javascript' src='js/fullcalendar/fullcalendar/fullcalendar.min.js'></script>
    
    <script type="text/javascript" language="javascript" src="js/intenso/intenso.js"></script>
    <script type="text/javascript" language="javascript" src="js/intenso/intenso.charts.js"></script>
    <script type="text/javascript" language="javascript" src="js/intenso/intenso.calendar.js"></script>
  </body>
</html>                        
