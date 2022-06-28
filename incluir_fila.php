<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("dados.php");

//Inserindo OP

//Recebendo os campos enviados como parÃ¢metro

$cpf = 	$_GET['cpf'];
$servico = $_GET['servico'];
$token = $_GET['token'];
$banco = $_GET['banco'];

$sql = "INSERT INTO fila (cpf, banco) VALUES ('" . $cpf ."','" . $banco . "')";
mysqli_query($conn,$sql) or die("Erro ao tentar INCLUIR registro");
echo $sql;


mysqli_close($conn);

//Voltando para a pagina que lista as etapas
header("Location:Fila.php?token=$token&cpf=$cpf&banco=$banco");



?>
