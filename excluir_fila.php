<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("dados.php");

//Inserindo OP

//Recebendo os campos enviados como parÃ¢metro
$token = $_GET['token'];
$cpf = 	$_GET['cpf'];
$cpfusuario = $_GET['cpfusuario'];

$sql = "DELETE FROM fila WHERE fila.cpf = $cpfusuario";
mysqli_query($conn,$sql) or die("Erro ao tentar DELETAR registro");
echo $sql;


mysqli_close($conn);

//Voltando para a pagina que lista as etapas
if($cpf==1234){
    header("Location:AreaRestrita.php?token=$token&cpf=$cpf");
}else{
    header("Location:Central.php?token=$token&cpf=$cpf");
}



?>
