<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bolao';

$mysqli = new mysqli($servidor,$usuario,$senha,$banco);

if($mysqli->connect_errno){
   echo("Falha de conexão com o banco" . $mysqli->error);
}else{
  //echo("conexao.php FUNCIONANDO!    ");
}
?>