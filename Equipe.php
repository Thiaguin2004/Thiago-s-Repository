<?php $cpf = $_GET['cpf'];
$token = $_GET['token'];
if($token!="logado"){
header("Location:Login.php");
}?>
<!DOCTYPE html>
<html lang="pt-br">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='css/bootstrap.css' rel='stylesheet' />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

    <title>Equipe Kiwii </title>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Parte Superior do site -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <img src="imagens/Logo.png" style="width: 50px" alt="">
        <a style="font-family:'Times New Roman', Times, serif; font-size: 20px;" class="navbar-brand"
            href="index.html">Kiwii</a>
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
                    <a style="font-size: 14.5px" class="btn btn-success btn-sm ml-3" href=<?php echo"/sistemakiwi/Perfil.php?token=$token&cpf=$cpf"; ?>>
                        <img class="icon" style="width: 20px;" src="imagens/IconFila.png" alt="">
                        <i class="fa "></i> Perfil
                    </a>
                </form>
            </div>
        </div>
    </nav>

    <main>
        <section>
            <link href='css/rotating-card.css' rel='stylesheet' />
            <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
            <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
            <p></p>
            <h1 style="font-family:Georgia, 'Times New Roman', Times, serif" class="title text-center">
                Essa é a nossa Equipe
                <br>
                <small>Temos o prazer em tê-los aqui! <br> ♦</small>
            </h1>

            <div class="col-md-4 col-sm-6">
                <div class="card-container">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="images/rotating_card_thumb3.png" />
                            </div>
                            <div class="user">
                                <img class="img-circle" src="images/rotating_card_profile3.png" />
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 style="font-family:Georgia, 'Times New Roman', Times, serif" class="name">
                                        Edvalmore Oliveira</h3>
                                    <p class="profession">CEO</p>
                                    <p class="text-center">“Tenha a coragem de seguir seu coração e sua intuição. Eles,
                                        de alguma forma, já sabem o que você realmente quer se tornar. Todo o resto é
                                        secundário”</p>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"Autoconhecimento é essencial!"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">Descrição do trabalho</h4>
                                    <p class="text-center">Web design, Adobe Photoshop, HTML, CSS, Corel entre outros...
                                    </p>

                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>202</h4>
                                            <p>
                                                Seguidores
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>253</h4>
                                            <p>
                                                Seguindo
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>8</h4>
                                            <p>
                                                Projetos
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <a href="https://www.instagram.com/ed_oliver19/" class="instagram"><i
                                            class="fa fa-instagram fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="facebook"><i
                                            class="fa fa-facebook fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="google"><i
                                            class="fa fa-google-plus fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="twitter"><i
                                            class="fa fa-twitter fa-fw"></i></a>
                                </div>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col sm 3 -->
            <!--<div class="col-sm-1"></div> -->

            <div class="col-md-4 col-sm-6">
                <div class="card-container">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="images/rotating_card_thumb3.png" />
                            </div>
                            <div class="user">
                                <img class="img-circle" src="images/rotating_card_profile.png" />
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 style="font-family:Georgia, 'Times New Roman', Times, serif" class="name">Yago
                                        Junio</h3>
                                    <p class="profession">CEO</p>

                                    <p class="text-center">“Não tenha medo de fracassar. Saia, experimente e obtenha uma
                                        taxa com base em suas experiências. Tente e você aprenderá do que é capaz, qual
                                        é seu potencial e onde as oportunidades estão”</p>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"A vida é muito curta para não ser desfrutada!"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">Descrição do trabalho</h4>
                                    <p class="text-center">Web design, Adobe Photoshop, HTML, CSS, entre outros...</p>

                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>52</h4>
                                            <p>
                                                Seguidores
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>62</h4>
                                            <p>
                                                Seguindo
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>4</h4>
                                            <p>
                                                Projetos
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <a href="https://www.instagram.com/mineirim_sofrido/" class="instagram"><i
                                            class="fa fa-instagram fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="facebook"><i
                                            class="fa fa-facebook fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="google"><i
                                            class="fa fa-google-plus fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="twitter"><i
                                            class="fa fa-twitter fa-fw"></i></a>
                                </div>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col-sm-3 -->
            </div> <!-- end col-sm-10 -->
            </div> <!-- end row -->
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card-container">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="images/rotating_card_thumb3.png" />
                            </div>
                            <div class="user">
                                <img class="img-circle" src="images/rotating_card_profile2.png" />
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 style="font-family:Georgia, 'Times New Roman', Times, serif" class="name">Thiago
                                        Henrique</h3>
                                    <p class="profession">CEO</p>
                                    <p class="text-center">“Um dos maiores erros que as pessoas cometem é tentar forçar
                                        um interesse. Você não escolhe suas paixões; elas o escolhem”</p>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"A verdade é sempre a melhor saída!"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">Descrição do trabalho</h4>
                                    <p class="text-center">Web design, HTML, CSS, Asp.Net, PHP, entre outros...</p>

                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>691</h4>
                                            <p>
                                                Seguidores
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>1758</h4>
                                            <p>
                                                Seguindo
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>21</h4>
                                            <p>
                                                Projetos
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <a href="https://www.instagram.com/eothigas._/" class="instagram"><i
                                            class="fa fa-instagram fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="facebook"><i
                                            class="fa fa-facebook fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="google"><i
                                            class="fa fa-google-plus fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="twitter"><i
                                            class="fa fa-twitter fa-fw"></i></a>
                                </div>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col sm 3 -->
            <!--<div class="col-sm-1"></div> -->

            <div class="col-md-4 col-sm-6">
                <div class="card-container">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="images/rotating_card_thumb3.png" />
                            </div>
                            <div class="user">
                                <img class="img-circle" src="images/rotating_card_profile4.png" />
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 style="font-family:Georgia, 'Times New Roman', Times, serif" class="name">
                                        Philipe Cupertino</h3>
                                    <p class="profession">CEO</p>

                                    <p class="text-center">“Nunca pare de aprender. Seja no nível de recém-formado ou de
                                        um CEO, você não sabe tudo. Admitir isso não é um sinal de fraqueza. Os maiores
                                        líderes são aqueles que se tornam alunos por toda a vida”</p>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"Pare de adiar o seu futuro!"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">Descrição do trabalho</h4>
                                    <p class="text-center">Web design, HTML, CSS, entre outros...</p>

                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>405</h4>
                                            <p>
                                                Seguidores
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>740</h4>
                                            <p>
                                                Seguindo
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>5</h4>
                                            <p>
                                                Projetos
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <a href="https://www.instagram.com/cupeertino/" class="instagram"><i
                                            class="fa fa-instagram fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="facebook"><i
                                            class="fa fa-facebook fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="google"><i
                                            class="fa fa-google-plus fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="twitter"><i
                                            class="fa fa-twitter fa-fw"></i></a>
                                </div>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col-sm-3 -->
            </div> <!-- end col-sm-10 -->
            </div> <!-- end row -->
            </div>

            <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
            <script src="js/bootstrap.min.js" type="text/javascript"></script>

            <script type="text/javascript">
                $().ready(function () {
                    $('[rel="tooltip"]').tooltip();

                    $('a.scroll-down').click(function (e) {
                        e.preventDefault();
                        scroll_target = $(this).data('href');
                        $('html, body').animate({
                            scrollTop: $(scroll_target).offset().top - 60
                        }, 1000);
                    });

                });

                function rotateCard(btn) {
                    var $card = $(btn).closest('.card-container');
                    console.log($card);
                    if ($card.hasClass('hover')) {
                        $card.removeClass('hover');
                    } else {
                        $card.addClass('hover');
                    }
                }
            </script>

            <div>
                <h1 class="title" style="font-size: 25px">

                </h1>
            </div>

            <div>
                <h1 class="title" style="font-size: 20px; text-align: left; text-align: justify;">
                    <p class="text-center">♦</p> <br>
                    <p></p>
                    Trabalhar em equipe é saber ser parte de um todo. É como ser uma parte fundamental de um corpo, mas
                    sabendo que sem corpo essa parte de nada serve. Ter a capacidade de trabalhar bem em equipe mostra
                    humildade, tolerância, inteligência emocional e companheirismo.
                    <br>
                    <p></p>
                    Ninguém é nada sozinho. E se queremos fazer algo grande, importante e que nos traga orgulho,
                    precisamos fazer em equipe. Alcançar o sucesso com um esforço coletivo é muito mais prazeroso.
                    <br>
                    <p></p>
                    Trabalhando em equipe ficamos mais motivados e comprometidos, afinal uns dependem dos outros, e
                    todos são responsáveis pelas falhas e pelo sucesso. Por isso, o trabalho em equipe deixa todos mais
                    fortes.
                    <br>
                    <p></p>
                    O trabalho em equipe é união e amizade em prol de um bem e de um objetivo comum, por isso é muito
                    mais nobre do que uma batalha individual. Todos são peças importantes no trabalho em equipe, cada um
                    representa uma pequena parcela do resultado final, quando um falha, todos devem se unir, para sua
                    reconstrução.
                    <p><br></p>
                    <p class="text-center">♦</p>
                </h1>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h5 class="text-center"> <a style="text-decoration:none; font-size: 20px;" href=""> Sobre Nós </a>
                    </h5>
                    <hr class="bg-white w-header my-4">
                    <p style="text-align: justify;" class="mb-0"> <a style="text-decoration:none; " href="">
                            Somos uma empresa fundada visando um projeto de facilidade e utilidade para todos, criando,
                            organizando e notificando filas com o serviço desejado.
                        </a>
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <h5 class="text-center"> <a style="text-decoration:none; font-size: 20px" href=""> Acesso Rápido
                        </a></h5>
                    <hr class="bg-white w-header my-4">
                    <ul class="list-unstyled">
                        <li><a href=<?php echo"/sistemakiwi/Bancos.php?token=$token&cpf=$cpf"; ?>>Bancos</a></li>
                        <li><a href=<?php echo"/sistemakiwi/Serviços.php?token=$token&cpf=$cpf"; ?>>Serviços</a></li>
                        <li><a href=<?php echo"/sistemakiwi/Perfil.php?token=$token&cpf=$cpf"; ?>>Perfil</a></li>
                        <li><a href=<?php echo"/sistemakiwi/Contato.php?token=$token&cpf=$cpf"; ?>>Contato</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 ">
                    <h5 class="text-center"> <a style="text-decoration:none; font-size: 20px" href=""> Meios de Contatos
                        </a></h5>
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
                    <h5 class="text-center"> <a style="font-size: 20px" href=""> Voltar para o topo </a></h5>
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
<style>

.img-fluid {
    overflow: hidden;
    max-width: 100%;
    -moz-transition: all 0.3s;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    box-shadow: 4px 4px 4px;
    border-radius: 5px ;
}

img:hover {
    -moz-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}

footer a {
    color: #f8f9fa !important
}

body {
    background: -webkit-linear-gradient(left, #124cb6, #4286be);
    font-size: 16px;

}

main {
    background-color: white;
    margin: 25px;
    padding: 20px;
    border-radius: 15px;
}

nav {
    font-size: 16.5px;
}

/* Centro site */

.wrap {
    display: flex;
    background: white;
    padding: 1rem 1rem 1rem 1rem;
    border-radius: 0.5rem;
    box-shadow: 7px 7px 30px -5px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
}

.wrap:hover {
    background: linear-gradient(135deg, #6394ff 0%, #0a193b 100%);
    color: white;
}

.ico-wrap {
    margin: auto;
}

.mbr-iconfont {
    font-size: 4.5rem !important;
    color: #313131;
    margin: 1rem;
    padding-right: 1rem;
}

.vcenter {
    margin: auto;
}

.mbr-section-title3 {
    text-align: left;
}

h2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}

.display-5 {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 1.4rem;
}

.mbr-bold {
    font-weight: 700;
}

p {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    line-height: 25px;
}

.display-6 {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 1re
}

.icons1 {
    width: 40%;
    display: block;
    margin-left: auto;
    margin-right: auto
}

.icons2 {
    width: 40%;
    display: block;
    margin-left: auto;
    margin-right: auto
}

.icons3 {
    width: 40%;
    display: block;
    margin-left: auto;
    margin-right: auto
}

.displayed {
    width: 200px;
    height: 160px;
    display: block;
    margin-left: auto;
    margin-right: auto
}
</style>