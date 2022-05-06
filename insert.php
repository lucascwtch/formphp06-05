<?php

require_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$duvida = $_POST['duvida'];

$sqlInsert = "INSERT INTO dados (nome, email, data, duvida) 
VALUES ('$nome', '$email', '$data', '$duvida')";

$rs = mysqli_query($conexao,$sqlInsert) or die ("Erro ao cadastrar dados");
echo "Dados cadastrados com sucesso! Sua dúvida foi enviada para o nosso suporte!";

?>