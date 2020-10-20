<?php
//se não existe login vai para index.html
 if(!isset($_SESSION['usuario'])) 
 { 
     session_start(); 
     header('location: index.php');
 } 
?>