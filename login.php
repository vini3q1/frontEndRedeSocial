<?php 
session_start();
include('conexao.php');
//caso esteja vazio volte para a tela de login 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('location: index.php');
    exit();
}
//recebe dados
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuario 
            where 1=1
            AND login = '{$usuario}' and senha = '{$senha}'";
//executar a query
$result = mysqli_query($conexao, $query); 
// 1 conectado e 0 não confere
$row = mysqli_num_rows($result);
//se o resultado de linhas for 1 acesse o sistema
if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: dashboard.php');
    exit();
//se o resultado for qualquer outro fique na mesma página
} else{
//se não autenticado, para imprimir o texto.
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php'); 
    exit();
}
?>