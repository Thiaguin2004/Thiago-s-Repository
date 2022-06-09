<?php

include("dados.php");

$cpf 	= "";
$usuario 	= "";
$senha 	= "";


if ( isset( $_GET['cpf'] )  )
{
	$sql = "SELECT * FROM usuarios where cpf=" .$_GET['cpf'] ;
	   if($result = mysqli_query($conn, $sql))
   		if(mysqli_num_rows($result) > 0)
   		   if($row = mysqli_fetch_array($result))
   		   {
			$cpf 		= $row['cpf'];
			$nome 	= $row['nome'];
			$senha 		= $row['sobrenome'];
			$senha 		= $row['email'];
			$senha 		= $row['senha'];
			$senha 		= $row['celular'];
			$senha 		= $row['pergunta'];
			$senha 		= $row['resposta'];
			$senha 		= $row['sexo'];
		   }


}
?>

<p>&nbsp;</p>
<form method="GET" action="incluir_usuario.php">
	
	<p>&nbsp;</p>
	<div align="center">
		<table border="0" width="50%" cellspacing="0" cellpadding="4">
			
			
		

			<tr>
				<td width="293"><b><font face="Arial">CPF</font></b></td>
				<td>
				<input type="text" name="cpf" value="<?php echo $cpf?>" size="11" style="font-family: Arial; font-size: 18pt"></td>
			</tr>
			<tr>
				<td width="293"><b><font face="Arial">NOME</font></b></td>
				<td>
				<input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" size="25" style="font-family: Arial; font-size: 18pt"></td>
			</tr>
			<tr>
				<td width="293"><b><font face="Arial">SOBRENOME</font></b></td>
				<td>
				<input type="text" id="sobrenome" name="sobrenome" value="<?php echo $sobrenome;?>" size="15" style="font-family: Arial; font-size: 18pt"></td>
			</tr>
			<tr>
				<td width="293"><b><font face="Arial">SENHA</font></b></td>
				<td>
				<input type="text" id="senha" name="senha" value="<?php echo $senha;?>" size="15" style="font-family: Arial; font-size: 18pt"></td>
			</tr>
			<tr>
				<td width="293"><b><font face="Arial">EMAIL</font></b></td>
				<td>
				<input type="text" id="email" name="email" value="<?php echo $email;?>" size="15" style="font-family: Arial; font-size: 18pt"></td>
			</tr>
			<tr>
				<td width="293"><b><font face="Arial">PERGUNTA</font></b></td>
				<td>
				<input type="text" id="pergunta" name="pergunta" value="<?php echo $pergunta;?>" size="15" style="font-family: Arial; font-size: 18pt"></td>
			</tr>
			<tr>
				<td width="293"><b><font face="Arial">RESPOSTA</font></b></td>
				<td>
				<input type="text" id="resposta" name="resposta" value="<?php echo $resposta;?>" size="15" style="font-family: Arial; font-size: 18pt"></td>
			</tr>
			<tr>
				<td width="293"><b><font face="Arial">CELULAR</font></b></td>
				<td>
				<input type="text" id="celular" name="celular" value="<?php echo $celular;?>" size="15" style="font-family: Arial; font-size: 18pt"></td>
			</tr>
			<tr>
				<td width="293"><b><font face="Arial">SEXO</font></b></td>
				<td>
				<input type="text" id="sexo" name="sexo" value="<?php echo $sexo;?>" size="15" style="font-family: Arial; font-size: 18pt"></td>
			</tr>
			<tr>
				<td width="293">&nbsp;</td>
				<td><input type="submit" value="INCLUIR" name="B1"><input type="reset" value="Cancelar" name="B2"><p>
				&nbsp;</td>
			</tr>
		</table>
	</div>
	<div align="center">
		<table border="0" width="70%" cellpadding="3" bgcolor="#E9E9E9">
			<tr>
				<td bgcolor="#C0C0C0" > X </td>
				<td width="558" bgcolor="#C0C0C0"><b><font face="Arial">
				CPF</font></b></td>
				<td width="558" bgcolor="#C0C0C0"><b><font face="Arial">
				NOME</font></b></td>
				<td width="558" bgcolor="#C0C0C0"><b><font face="Arial">
				SOBRENOME</font></b></td>
				<td width="558" bgcolor="#C0C0C0"><b><font face="Arial">
				SENHA</font></b></td>
				<td width="558" bgcolor="#C0C0C0"><b><font face="Arial">
				EMAIL</font></b></td>
				<td width="558" bgcolor="#C0C0C0"><b><font face="Arial">
				PERGUNTA</font></b></td>
				<td width="558" bgcolor="#C0C0C0"><b><font face="Arial">
				RESPOSTA</font></b></td>
				<td width="558" bgcolor="#C0C0C0"><b><font face="Arial">
				SEXO</font></b></td>
				<td width="558" bgcolor="#C0C0C0"><b><font face="Arial">
				CELULAR</font></b></td>


			</tr>

			<?php
			//Listando os dados da tabela
			
			$sql = "SELECT * FROM usuarios";
			
			if($result = mysqli_query($conn, $sql)){
   				 if(mysqli_num_rows($result) > 0)
   				 {
   				 	 while($row = mysqli_fetch_array($result))
   				 	 {

						?>
						<tr>
							<td width="45"><b>
							<font face="Arial" color="#FF0000"> <a href="excluir_usuario.php?cpf=<?php echo $row['cpf']?>">X</a>
							</font></b></td>
							<td width="558"><font face="Arial"><?php echo $row['cpf']?></a></font></td>
							<td width="558"><font face="Arial"><?php echo $row['nome']?></font></td>
							<td width="558"><font face="Arial"><?php echo $row['sobrenome']?></font></td>
							<td width="558"><font face="Arial"><?php echo $row['senha']?></font></td>
							<td width="558"><font face="Arial"><?php echo $row['email']?></font></td>
							<td width="558"><font face="Arial"><?php echo $row['pergunta']?></font></td>
							<td width="558"><font face="Arial"><?php echo $row['resposta']?></font></td>
							<td width="558"><font face="Arial"><?php echo $row['sexo']?></font></td>
							<td width="558"><font face="Arial"><?php echo $row['celular']?></font></td>
						</tr>
			<?php
					}
					
					// Free result set
        			mysqli_free_result($result);
        			// Close connection
					mysqli_close($conn);
					
				}
			}

			?>
			
		</table>
	</div>

	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</form>
<p>&nbsp;</p>

<script>
	/*document.getElementById("codigodoitem").onkeypress = function(e) {
         var chr = String.fromCharCode(e.which);
         if ("1234567890".indexOf(chr) < 0)
           return false;
       };
	document.getElementById("intervalo").onkeypress = function(e) {
         var chr = String.fromCharCode(e.which);
         if ("1234567890".indexOf(chr) < 0)
           return false;
       };
       */
       
</script>

</body>

</html>
