<?php
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('America/Sao_Paulo');
include_once "conexao.php";
echo "</br></br>";
$sqlSelect = "SELECT dados_id, nome, email, data, duvida FROM dados";
$rs = mysqli_query($conexao, $sqlSelect);

if (mysqli_num_rows($rs) > 0) { 
    // dados de saída de cada linha
    // mysql_fetch_assoc() busca o resultado de uma linha e o coloca numa matriz associativa
    // podendo selecionar nome do campo.
    while($row = mysqli_fetch_assoc($rs)) {
        echo "Nome: " . $row["nome"].
            " - Email: " . $row["email"].
            " - Id: " . $row['dados_id'].
            " - Data: " . date("d/m/y",strtotime($row["data"])).
            " - Dúvida: " . $row["duvida"]. "<br>";
    }
} else {
    echo "Não foram encontrados registros cadastrados";
}


mysqli_close($conexao);

?>