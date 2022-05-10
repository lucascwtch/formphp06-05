<?php
// header("Location: select.php?mensagem=OK");
include_once "conexao.php";

$codigo = $_POST['dados_id'];

$sqlDelete = "DELETE FROM dados WHERE dados_id = '".$codigo."' ";

if (!mysqli_query($conexao,$sqlDelete)){
    die('Erro ao cexluir o registro: ' . mysqli_error(($conexao)));
}

echo "<CENTER>Registro deletado com sucesso.<br></CENTER>";
mysqli_close($conexao);
?>