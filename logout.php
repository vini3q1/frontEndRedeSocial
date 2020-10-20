<?php
session_start();
//destroi a sessão
session_destroy();
//redireciona para
header('location: index.php'); 
exit();
?>