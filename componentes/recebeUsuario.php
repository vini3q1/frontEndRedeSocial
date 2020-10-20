<?php
include('../conexao.php');

$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$empresa = $_POST["empresa"];

$result_usuario = "INSERT INTO `usuario` (nome, login, senha, idempresa) VALUES ('$nome', '$login', '$senha', '$empresa')";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if (mysqli_insert_id($conexao)){

    header("Location: ../usuarios.list.php");

}else{
    header("Location: ../usuarios.list.php");
}

?>


