<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("dados.php");

//Inserindo OP

//Recebendo os campos enviados como parÃ¢metro

$cpf = 	$_GET['cpf'];
$nome = 	$_GET['nome'];
$sobrenome = 	$_GET['sobrenome'];
$email = 	$_GET['email'];
$celular = 	$_GET['celular'];
$pergunta = 	$_GET['pergunta'];
$resposta = 	$_GET['resposta'];
$sexo = $_GET['sexo'];
$senha = 	$_GET['senha'];

$sql = "INSERT INTO usuarios (cpf,nome,sobrenome,senha,email,celular,pergunta,resposta,sexo) VALUES ('" . $cpf ."','" . $nome . "','" . $sobrenome . "','" . $senha ."','" . $email ."','" . $celular ."','" . $pergunta ."','" . $resposta ."','" . $sexo ."')";
mysqli_query($conn,$sql) or die("Erro ao tentar INCLUIR registro");
echo $sql;


mysqli_close($conn);

//Voltando para a pagina que lista as etapas
header("Location:cadastrousuario.php");



?>
