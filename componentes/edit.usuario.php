<?php
include('../conexao.php');

$idusuario = $_POST["idusuario"];
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$empresa = $_POST["empresa"];

echo $empresa;

$result_usuario = "UPDATE usuario
                   SET nome='$nome',
                   login='$login', 
                   senha='$senha',
                   idempresa='$empresa'       
                   WHERE idusuario='$idusuario'";

$resultado_usuario = mysqli_query($conexao, $result_usuario);



if (mysqli_affected_rows($conexao)){

    header("Location: ../usuarios.list.php");

}else{
    header("Location: ../usuarios.list.php");
}

?>

