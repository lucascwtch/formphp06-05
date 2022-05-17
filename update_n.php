<?php
// header("Location: select.php?mensagem=OK");
include_once "conexao.php";

$codigo = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$duvida = $_POST['duvida'];
//Verificar a conversçai da data com a função strtotime para versões do servidor que estiver usando outro formato ("d/m/Y", strtotime($data))

$sqlUpdate = "UPDATE dados SET nome = '$nome', email = '$email', data = '$data', duvida = '$duvida' WHERE dados_id = '$codigo' ";

if (!mysqli_query($conexao,$sqlUpdate)){
    die('Erro ao atualizar o registro: ' . mysqli_error(($conexao)));
}

echo "<CENTER>Registro atualizado com sucesso!!<br></CENTER>";
mysqli_close($conexao);
?>