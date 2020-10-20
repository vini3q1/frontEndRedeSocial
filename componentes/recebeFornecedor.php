<?php
include('../conexao.php');
echo $fornecedor;
$fornecedorvalue = $_POST["fornecedor"];


$result_fornecedor = "INSERT INTO `fornecedor` (fornecedor) VALUES ('$fornecedorvalue')";
$resultado_fornecedor = mysqli_query($conexao, $result_fornecedor);

if (mysqli_insert_id($conexao)){

    header("Location: ../fornecedorList.php");

}else{
    header("Location: ../fornecedorList.php");
}

?>


