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

$sql = "DELETE FROM `fila` WHERE `fila`.`cpf` =$cpf";
mysqli_query($conn,$sql) or die("Erro ao tentar DELETAR registro");
echo $sql;


mysqli_close($conn);

//Voltando para a pagina que lista as etapas
header("Location:Central.php?token=$token&cpf=$cpf");



?>
