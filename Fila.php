<?php $cpf = $_GET['cpf'];
$token = $_GET['token'];
$servico = $_GET['servico'];
$banco = $_GET['banco'];
if($token!="logado"){
header("Location:Login.php");
}
if($cpf==1234){
    header("Location:NaoTemAcesso.php");
}?>
<!DOCTYPE html>
<html lang="pt-br">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
    
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <head>  
      <title>Cadastro</title>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="Cadastro.css">
  </head>
        <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <img src="imagens/Logo.png" style="width: 50px" alt="">
        <a style="font-family:'Times New Roman', Times, serif" class="navbar-brand" href=<?php echo"/sistemakiwi/Central.php?token=$token&cpf=$cpf"; ?>>Kiwii</a>
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo"/sistemakiwi/Central.php?token=$token&cpf=$cpf"; ?>>Página Central</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo"/sistemakiwi/Serviços.php?token=$token&cpf=$cpf"; ?>>Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo"/sistemakiwi/Bancos.php?token=$token&cpf=$cpf"; ?>>Bancos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo"/sistemakiwi/Contato.php?token=$token&cpf=$cpf"; ?>>Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo"/sistemakiwi/Equipe.php?token=$token&cpf=$cpf"; ?>>Equipe</a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <a class="btn btn-success btn-sm ml-3" href=<?php echo"/sistemakiwi/Perfil.php?token=$token&cpf=$cpf"; ?>>
                            <img class="icon" style="width: 20px;" src="imagens/IconFila.png" alt="">
                            <i class="fa "></i> Perfil
                        </a>
                    </form>
            </div>
        </div>
    </nav>
    
        <div class="container register">
            <div class="row">
            <div class="col-md-6">
            <button class="btnRegister" id="refresh">Atualize a fila</button>
</div>
                      <div class="col-md-9 register-right">
                          <form method="GET" action="excluir_fila.php">
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                  <h3 class="register-heading">Você está na fila para <?php echo $banco;?></h3>
                                  
                                  <div class="row register-form">
                                      <div class="col-md-12">
                                        
                                      <h4>Agradecemos sua preferência, agora é só aguardar sua vez!
                                  </h4>
                                  <h4>Utilize o botão acima para atualizar sua fila.</h4>
                                        
                                        <input type="text" name="logando" class="form-control" hidden value="logando" />
                                        <input type="text" name="servico" class="form-control" hidden value="<?php echo $servico;?>" />
                                        <input type="text" name="banco" class="form-control" hidden value="<?php echo $banco;?>" />
                                        <input type="text" name="token" class="form-control" hidden value="<?php echo $token;?>" />
                                        <input type="text" name="cpf" class="form-control" hidden value="<?php echo $cpf;?>" />
                                        <input type="text" name="cpfusuario" class="form-control" hidden value="<?php echo $cpf;?>" />

                                        <input type="submit" class="btnRegister"  value="Cancelar fila">
                                        </form>
                                        
                                        
                                        
                                        
                                          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

      </body>
</html>
<script>
    var btn = document.querySelector("#refresh");
btn.addEventListener("click", function() {
    
    location.reload();
});
</script>