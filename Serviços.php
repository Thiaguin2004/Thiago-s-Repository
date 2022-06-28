<?php $cpf = $_GET['cpf'];
$token = $_GET['token'];
$servico = $_GET['servico'];
if($token!="logado"){
header("Location:Login.php");
}
if($cpf==1234){
    header("Location:NaoTemAcesso.php");
}?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --><!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <!-- JavaScript Bundle with Popper --><!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>-->

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="Servicos.css">

    <title>Serviços</title>
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <img src="imagens/Logo.png" style="width: 50px; " alt="">
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

    </header>

    <main>

        <div class="container z-depth-1 my-5 p-5">

            <!-- Section 1 -->
            <section>

                <h3 style="font-family:Georgia, 'Times New Roman', Times, serif"
                    class="font-weight-bold text-center dark-grey-text pb-2">Alguns passos fáceis <br> ♦
                </h3>
                <hr class="w-header my-4">
                <p class="lead text-center pt-2 pb-3 mb-5">A partir daqui mostraremos um passo a passo para
                    selecionar o serviço desejado por você de forma rápida e fácil!</p>

                <section>
                    <link rel="stylesheet"
                        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                    <link rel="stylesheet"
                        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                    <div class="container">

                        <div class="row mbr-justify-content-center">

                            <div class="col-lg-6 mbr-col-md-10">
                                <div class="wrap">
                                    <div class="ico-wrap">
                                        <span class="mbr-iconfont fa-volume-up fa"></span>
                                    </div>
                                    <div class="text-wrap vcenter">
                                        <h2 style="font-family:Georgia, 'Times New Roman', Times, serif"
                                            class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Serviço
                                            <span>Desejado</span>
                                        </h2>
                                        <p class="mbr-fonts-style text1 mbr-text display-6">Localize o Banco e o serviço
                                            que deseja resolver seu problema. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mbr-col-md-10">
                                <div class="wrap">
                                    <div class="ico-wrap">
                                        <span class="mbr-iconfont fa-calendar fa"></span>
                                    </div>
                                    <div class="text-wrap vcenter">
                                        <h2 style="font-family:Georgia, 'Times New Roman', Times, serif"
                                            class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> Agendamento
                                            <span> </span>
                                        </h2>
                                        <p class="mbr-fonts-style text1 mbr-text display-6">Escolha a melhor data e o
                                            horário desejado a estar presencial quando chegar sua vez.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mbr-col-md-10">
                                <div class="wrap">
                                    <div class="ico-wrap">
                                        <span class="mbr-iconfont fa-globe fa"></span>
                                    </div>
                                    <div class="text-wrap vcenter">
                                        <h2 style="font-family:Georgia, 'Times New Roman', Times, serif"
                                            class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> Aguarde
                                            <span> sua vez </span>
                                        </h2>
                                        <p class="mbr-fonts-style text1 mbr-text display-6">Após realizar todos os
                                            procedimentos é só aguardar o alerta que poderá comparecer ao local, podendo
                                            realizar qualquer outra atividade nesse período.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mbr-col-md-10">
                                <div class="wrap">
                                    <div class="ico-wrap">
                                        <span class="mbr-iconfont fa-trophy fa"></span>
                                    </div>
                                    <div class="text-wrap vcenter">
                                        <h2 style="font-family:Georgia, 'Times New Roman', Times, serif"
                                            class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Problema
                                            <span>Resolvido</span>
                                        </h2>
                                        <p class="mbr-fonts-style text1 mbr-text display-6">Alertado a comparecer no
                                            local, será direcionado ao serviço selecionado para que seja feito o
                                            procedimento de sua escolha. </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>

                <hr class="w-header my-4">

            </section>
            <!-- Section 1 -->


            <!-- Section 2 -->

            <div class="container mt-5">


                <!--Section: Content-->
                <section class="dark-grey-text text-center">

                    <!-- Section heading -->
                    <h2 style="font-family:Georgia, 'Times New Roman', Times, serif" class="font-weight-bold mb-4 pb-2">
                        Serviços Bancários </h2>
                    <!-- Section description -->
                    <p class="text-center mx-auto w-responsive mb-5">Serviços bancários são aqueles que não demandam
                        nenhum pagamento para serem feitos. Eles existem em todas as modalidades de conta para pessoas
                        físicas. A disponibilização desses serviços é obrigatória aos bancos brasileiros.</p>

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-12 mb-4">

                            <!-- Featured image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="Imagens/Essenciais.jpg" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Post title -->
                            <h4 style="font-family:Georgia, 'Times New Roman', Times, serif"
                                class="font-weight-bold mb-3"><strong>Serviços Essenciais</strong></h4>
                            <!-- Excerpt -->
                            <p class="dark-grey-text"> Serviços que trazem possibilidades mais abrangentes em contas
                                convencionais.</p>
                            <!-- Default dropend button -->
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Acessar
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">

                                    <ul class="list-group">
                                        <button type="button" class="list-group-item list-group-item-action active"
                                            aria-current="true">
                                            Selecione o serviço
                                        </button>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Cadastro";?>
                                        class="btn btn-light">Cadastro</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Cartao";?>
                                        class="btn btn-light">Cartão</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Alteracao_De_Dados";?> class="btn btn-light">Alteração
                                            de dados</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Cheque_Especial";?> class="btn btn-light">Cheque
                                            especial</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Transferencias";?>
                                        class="btn btn-light">Transferências</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Pagamentos";?>
                                        class="btn btn-light">Pagamentos</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Extrato";?>
                                        class="btn btn-light">Extrato</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Tarifas";?>
                                        class="btn btn-light">Tarifas</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Emprestimo";?>
                                        class="btn btn-light">Empréstimo</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Seguro";?>
                                        class="btn btn-light">Seguro</a>
                                    </ul>

                                </div>
                            </div>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-6 mb-4">

                            <!-- Featured image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="Imagens/Investimentos.png" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Post title -->
                            <h4 style="font-family:Georgia, 'Times New Roman', Times, serif"
                                class="font-weight-bold mb-3"><strong>Investimentos</strong></h4>
                            <!-- Excerpt -->
                            <p class="dark-grey-text">Hoje em dia, deixar suas economias na caderneta pode representar
                                uma perda de boas oportunidades. Comece agora seus investimentos!</p>
                            <!-- Read more button -->
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Acessar
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">

                                    <div class="list-group">
                                        <button type="button" class="list-group-item list-group-item-action active"
                                            aria-current="true">
                                            Selecione o Investimento
                                        </button>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Tesouro_Direto";?> class="btn btn-light">Tesouro
                                            Direto</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Fundos_De_Investimento";?> class="btn btn-light">Fundos de
                                            Investimento</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Bolsa_De_Valores";?> class="btn btn-light">Bolsa de
                                            Valores</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Debêntures";?>
                                        class="btn btn-light">Debêntures</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Letras_De_Credito";?> class="btn btn-light">Letras de
                                            Crédito</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Moedas_Digitais";?> class="btn btn-light">Moedas
                                            Digitais</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-6 mb-4">

                            <!-- Featured image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="Imagens/Sup.png" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Post title -->
                            <h4 style="font-family:Georgia, 'Times New Roman', Times, serif"
                                class="font-weight-bold mb-3"><strong>Suporte</strong></h4>
                            <!-- Excerpt -->
                            <p class="dark-grey-text">Definitivamente podemos ajudá-lo a sanar qualquer dúvida.</p>
                            <!-- Read more button -->
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Acessar
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">

                                    <div class="list-group">
                                        <button type="button" class="list-group-item list-group-item-action active"
                                            aria-current="true">
                                            Canais de Atendimento
                                        </button>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Whatsapp";?>
                                        class="btn btn-light">Whatsapp</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=Ligacao";?>
                                        class="btn btn-light">Ligação</a>
                                        <a type="button" href=<?php echo"/sistemakiwi/EscolheBanco.php?token=$token&cpf=$cpf&servico=SMS";?>
                                        class="btn btn-light">SMS</a>
                                    </div>

                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                </section>
                <!--Section: Content-->

            </div>
        </div>



    </main>

    <footer>

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h5 class="text-center"> <a style="text-decoration:none" href=""> Sobre Nós </a></h5>
                    <hr class="bg-white w-header my-4">
                    <p style="text-align: justify;" class="mb-0"> <a style="text-decoration:none; " href="">
                            Somos uma empresa fundada visando um projeto de facilidade e utilidade para todos, criando,
                            organizando e notificando filas com o serviço desejado.
                        </a>
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <h5 class="text-center"> <a style="text-decoration:none" href=""> Acesso Rápido </a></h5>
                    <hr class="bg-white w-header my-4">
                    <ul class="list-unstyled">
                        <li><a href=<?php echo"/sistemakiwi/Bancos.php?token=$token&cpf=$cpf"; ?>>Bancos</a></li>
                        <li><a href=<?php echo"/sistemakiwi/Serviços.php?token=$token&cpf=$cpf"; ?>>Serviços</a></li>
                        <li><a href=<?php echo"/sistemakiwi/Perfil.php?token=$token&cpf=$cpf"; ?>>Perfil</a></li>
                        <li><a href=<?php echo"/sistemakiwi/Contato.php?token=$token&cpf=$cpf"; ?>>Contato</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 ">
                    <h5 class="text-center"> <a style="text-decoration:none" href=""> Meios de Contatos </a></h5>
                    <hr class="bg-white w-header my-4">
                    <ul class="list-unstyled"> <a style="text-decoration:none" href="">
                            <li><i class="fa fa-home mr-2"></i> Centro, Belo Horizonte - MG</li>
                            <li><i class="fa fa-envelope mr-2"></i> contato@kiwii.com.br</li>
                            <li><i class="fa fa-phone mr-2"></i> (31) 9 9988-9898</li>
                            <li><i class="fa fa-phone mr-2"></i> 3366-6336</li>
                        </a>
                    </ul>
                </div>

                <div class="col-12 copyright mt-3 text-center">
                    <h5 class="text-center"> <a href=""> Voltar para o topo </a></h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul>
                        <p class="text-right text-center"> <a href=""> Criado </a><a href=""><i
                                    class="fa fa-heart"></a></i><a href=""> por </a><a href=""><i>Edvalmore, Yago,
                                    Thiago e Philipe</i></a></p>
                    </ul>
                </div>
            </div>
        </div>

    </footer>

</body>

</html>