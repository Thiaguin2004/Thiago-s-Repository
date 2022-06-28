<?php $cpf = $_GET['cpf'];
$token = $_GET['token'];
if($token!="logado"){
header("Location:Login.php");
}
if($cpf!=1234){
    header("Location:NaoTemAcesso.php");
}
include ('dados.php');
?>
<html>
<div align="center">
		<table border="0" width="70%" cellpadding="3" bgcolor="#E9E9E9">
			<tr>
				<td bgcolor="#C0C0C0" ></td>
				<td width="558" bgcolor="#C0C0C0"><b><font face="Arial">
				CPF</font></b></td>
				<td width="558" bgcolor="#C0C0C0"><b><font face="Arial">
				NOME</font></b></td>
                <td width="558" bgcolor="#C0C0C0"><b><font face="Arial">
				BANCO</font></b></td>
				
				<label hidden name="cpf" value="<?php echo $cpf ?>">Nome</label>
				<label hidden name="token" value="<?php echo $token ?>">Nome</label>


			</tr>

			<?php
			
			
			$sql = "SELECT * FROM fila";
			
			if($result = mysqli_query($conn, $sql)){
   				 if(mysqli_num_rows($result) > 0)
   				 {
   				 	 while($row = mysqli_fetch_array($result))
   				 	 {
                        $cpfregistro = $row['cpf'];
                        $sqlcpf = "SELECT nome FROM usuarios WHERE cpf = $cpfregistro";
						?>
						<tr>
							<td width="45"><b>
							<font face="Arial" color="#FF0000"> <a href="excluir_fila.php?cpfusuario=<?php echo $cpfregistro?>&cpf=<?php echo $cpf ?>&token=<?php echo $token ?>">ATENDIDO</a>
							</font></b></td>
							<td width="558"><font face="Arial"><?php echo $row['cpf']?></a></font></td>
                            <td width="558"><font face="Arial"><?php 
                               if($result2 = mysqli_query($conn, $sqlcpf)){
                                if(mysqli_num_rows($result2) > 0)
                                {
                                     while($row2 = mysqli_fetch_array($result2))
                                     {
                                  echo $row2['nome'];}}?></font></td>
							<td width="558"><font face="Arial"><?php echo $row['banco']?></font></td>
						</tr>
			<?php
					}
					
					// Free result set
        			mysqli_free_result($result);
        			// Close connection
					mysqli_close($conn);
					
				}
                 }}

			?>
			
		</table>
	</div>
</html>