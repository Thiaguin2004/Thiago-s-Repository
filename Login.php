
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
        
            <div class="container register">
            <div class="row">
                    <div class="col-md-3 register-left">
                          <img class="logo" src="Logo.png" alt=""/>
                          <h3>Bem-Vindo</h3>
                          <p>Faça seu login para prosseguir com os serviços desejados!</p>
                          <a href="Index.php"><input type="submit" name="" value="Registrar"/></a>
                          <br/>
                      </div>
                      <div class="col-md-9 register-right">
                          <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Cadastro</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">De usuário</a>
                              </li>
                          </ul>
                          <form method="GET" action="validar_login.php">
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                  <h3 class="register-heading">Informe seus dados:</h3>
                                  <div class="row register-form">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="cpf" class="form-control" placeholder="Seu CPF *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="senha" class="form-control" placeholder="Senha *" value="" />
                                        </div>
                                        
                                        <input type="text" name="logando" class="form-control" hidden value="logando" />

                                          
                                          <input type="submit" class="btnRegister"  value="Logar">
                                          </a>
                                          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</form>
      </body>
</html>