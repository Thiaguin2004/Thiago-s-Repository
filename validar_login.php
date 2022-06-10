<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("dados.php");



//Inserindo OP

//Recebendo os campos enviados como parÃ¢metro

$cpf = 	$_GET['cpf'];
$senha = 	$_GET['senha'];

$sql = "SELECT cpf, senha FROM usuarios WHERE cpf=$cpf";
mysqli_query($conn,$sql) or die("Erro ao tentar VERIFICAR LOGIN");
echo $sql;

if($result = mysqli_query($conn, $sql)){
     if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_array($result))
         {
            if($cpf!=$row['cpf']){
               header("Location:Login.php");
            }
            else if($senha!=$row['senha']){
               header("Location:Login.php");
            }else{
            header("Location:Central.php?token=logado");
            }
         }
      }
   }

mysqli_close($conn);

//Voltando para a pagina que lista as etapas




?>
