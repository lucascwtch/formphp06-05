<?php 
define('HOST', 'localhost');
define('USUARIO','id18842388_root');
define('SENHA','Yx\$PMb1/@c9zxcc');
define('DB','id18842388_db_login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
echo 'A sua conexão foi efetuada com sucesso!';
?>

