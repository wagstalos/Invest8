<?php

include 'hg_finance.php';

// Primeiro parametro do construtor recebe a chave da API
$HGFinance = new HGFinance('ed052c10');

// Voce pode configurar via metodos
//$HGFinance->set_key('SUA-CHAVE');
// $HGFinance->set_locale('en');
// $HGFinance->set_use_ssl(true);

// Metodo para obter os todos dados

$HGFinance->get();
// Voce pode acessar qualquer endpoint da API
// $HGFinance->get('currencies');
// $HGFinance->get('taxes');
// $HGFinance->get('historical', array('start_date' => '2018-12-20', 'end_date' => '2018-12-24'));

// Verificando a autenticacao da chave
// if($HGFinance->valid_key()){
//   echo 'CHAVE VALIDA';
// } else {
//   echo 'CHAVE INVALIDA';
// }

$finance  = $HGFinance->get();
?>

<?php

// Retorno dos resultados da API
// pr($HGFinance->data);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Invest8</title>
    <meta name="theme-color" content="#151a2b">
    <meta name="wps games" content="investimento8">
    <meta name="description" content="Game developer, wps games">
    <meta name="keywords"
        content="sites, jogos , investimentos, invest, guiainvest, selic, cdi, tesouro, tesouro direto, marketing, ações, fiis, renda ">
    <meta name="reply-to" content="wagstalos@hotmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#151a2b">
    <meta name="apple-mobile-web-app-title" content="Investimento 8">
    <link rel="apple-touch-icon" href="/img/coin.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="manifest" href="manifest.json">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/1ffaa2226d.js" crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149758724-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-149758724-1');
    </script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <!-- <h3>Menu</h3> -->
                <img class="card-img-top" src="img/invest8.png" alt="logotipo invest8">
            </div>

            <ul class="list-unstyled components">
                <p>O que precisamos saber</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Taxas</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <a href="selic.php">
                            <li>
                                O que é a Selic?
                            </li>
                        </a>
                        <li>
                            <a href="cdi.php">O que é a CDI?</a>
                        </li>
                        <li>
                            <a href="ipca.html">O que é IPCA</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <!-- <a href="#">Investimentos</a> -->
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Investimentos</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <a href="renda_fixa.html">
                            <li>
                                Renda Fixa
                            </li>
                        </a>
                        <li>
                            <a href="renda_variavel.html">Renda Variável</a>
                        </li>
                        <!-- <li>
                            <a href="#">Page 3</a>
                        </li> -->
                    </ul>
                </li>
                <!-- <li>
                    <a href="#">Portfolio</a>
                </li> -->
                <li>
                    <a href="https://www.linkedin.com/in/wagner-silva-6a163555/">Contato</a>
                </li>
            </ul>
            <!-- <ul class="list-unstyled CTAs">
                <li>
                    <a href="index.html" class="article">Voltar ao início</a>
                </li>
            </ul> -->
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn active">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <ul class="navbar-nav mx-auto text-md-center">
                        <li class="ml-4"><h6> <b>Selic: </b> <?php  echo $finance['taxes']['0']['selic']; ?>%</h6></li>
                        <li class="ml-4"><h6> <b>CDI: </b>  <?php  echo $finance['taxes']['0']['cdi_daily']; ?>%</h6></li>
                        <li class="ml-4"><h6> <b>Ibov: </b> <?php  echo $finance['stocks']['IBOVESPA']['points']; ?>
                        <span  style="color: <?php echo $value['variation'] >=0 ?'#1abc9c' : '#e74c3c' ?>"> <?php  echo $finance['stocks']['IBOVESPA']['variation'];?>%</span>
                        </h6> </li>
                        
                    </ul>
            
                    <a href="https://www.linkedin.com/in/wagner-silva-6a163555/"><i
                            class="fab fa-linkedin-in text-light"></i></a>
                </div>
            </nav>

            <div class="container-fluid padding-0">
                <div class="header texture-header">
                    <h6 class="text-center">Bem-vindo ao guia básico de: </h6>
                    <div class="d-flex justify-content-center">
                        <h1 class="text-center">Investimentos</h1>
                        
                        <div class="icone">
                            <img class="card-img-top" src="img/icone_site.svg" alt="Card image cap">
                        </div>
                        <div class="icone2">
                            <img class="card-img-top" src="img/icone_site2.svg" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container ">
                <div class="container-fluid">
                    <h2 class="text-center mt-50 ">Taxas</h2>
                    <div class="underline"></div>
                    <div class="card mt-4">
                        <div class="row align-items-center justify-content-center">
                            <div class=" col-sm-12 col-md-2 text-center img-fluid">
                                <img class=" img-fluid" src="img/pc.svg" alt="Card image cap">
                                <!-- <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_ihxIYc.json"
                                    background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay>
                                </lottie-player> -->
                            </div>
                            <div class="col-sm-12 col-md-10">
                                <div class="card-body">
                                    <h3 class="color-blue ">1º passo</h3>
                                    <p>Precisamos entender algumas taxas como <b>Selic</b> e <b> CDI</b> e o índice
                                        <b>IPCA</b>
                                        antes de
                                        começarmos a aprender
                                        sobre investimentos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-lg-4 col-md-6 mb-4 mt-4">
                            <!-- Card Narrower -->
                            <div class="card card-cascade narrower">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img class="card-img-top" src="img/taxa.png" alt="Card image cap">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body card-body-cascade">
                                    <!-- Label -->
                                    <h5 class="color-blue pb-2 pt-1"><i class="fas fa-percentage"></i> Taxas</h5>
                                    <!-- Title -->
                                    <h4 class="font-weight-bold card-title color-gray">O que é Selic?</h4>
                                    <!-- Text -->
                                    <p class="card-text">Para comerçarmos aprender sobre investimentos precisamos
                                        entender a taxa Selic.</p>
                                    <!-- Button -->
                                    <a href="selic.php">
                                        <button class="button">
                                            <span>ACESSAR</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <!-- Card Narrower -->
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4  mt-4">
                            <!-- Card Narrower -->
                            <div class="card card-cascade narrower">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img class="card-img-top" src="img/taxa.png" alt="Card image cap">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body card-body-cascade">
                                    <!-- Label -->
                                    <h5 class="color-blue pb-2 pt-1"><i class="fas fa-percentage"></i> Taxas</h5>
                                    <!-- Title -->
                                    <h4 class="font-weight-bold card-title color-gray">O que é CDI?</h4>
                                    <!-- Text -->
                                    <p class="card-text"> Você sabe como funciona? por que foi criado? e como
                                        ele afeta seus investimentos?</p>
                                    <!-- Button -->
                                    <a href="cdi.php">
                                        <button class="button">
                                            <span>ACESSAR</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <!-- Card Narrower -->
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4  mt-4">
                            <!-- Card Narrower -->
                            <div class="card card-cascade narrower">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img class="card-img-top" src="img/taxa.png" alt="Card image cap">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <!-- Card content -->
                                <div class="card-body card-body-cascade">
                                    <!-- Label -->
                                    <h5 class="color-blue pb-2 pt-1 "><i class="fas fa-percentage"></i> Taxas</h5>
                                    <!-- Title -->
                                    <h4 class="font-weight-bold card-title color-gray">O que é IPCA?</h4>
                                    <!-- Text -->
                                    <p class="card-text">Este índice é super importante, ele afeta a sua vida e seus
                                        investimentos a todo momento.</p>
                                    <!-- Button -->
                                    <a href="ipca.html">
                                        <button class="button">
                                            <span>ACESSAR</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <!-- Card Narrower -->
                        </div>
                    </div> <!-- row -->
                </div>

                <!------------------------------------------------- investimentos ------------------------------------------------------------------>
                <div class="container-fluid">
                    <h2 class="text-center mt-50 ">Investimentos</h2>
                    <div class="underline"></div>
                    <div class="card mt-4">
                        <div class="row align-items-center justify-content-center">
                            <div class=" col-sm-12 col-md-2 text-center img-fluid">
                                <img class=" img-fluid" src="img/investiment.svg" alt="Card image cap">
                                <!-- <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_ihxIYc.json"
                                    background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay>
                                </lottie-player> -->
                            </div>
                            <div class="col-sm-12 col-md-10 ">
                                <div class="card-body">
                                    <h3 class="color-blue ">2º passo</h3>
                                    <p>Agora vamos entrar na parte de investimentos então precisamos entender o que é
                                        <b>renda fixa</b> e <b>renda variável.</b>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-lg-4 col-md-6 mb-4 mt-4">
                            <!-- Card Narrower -->
                            <div class="card card-cascade narrower">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img class="card-img-top" src="img/investimentos.png" alt="Card image cap">

                                </div>

                                <!-- Card content -->
                                <div class="card-body card-body-cascade">
                                    <!-- Label -->
                                    <h5 class="color-blue pb-2 pt-1"><i class="fas fa-piggy-bank"></i> Investimentos
                                    </h5>
                                    <!-- Title -->
                                    <h4 class="font-weight-bold card-title color-gray">Renda fixa</h4>
                                    <!-- Text -->
                                    <p class="card-text">Renda fixa é um termo que se refere a qualquer tipo de
                                        investimento que possui regras de remuneração definidas no momento da aplicação
                                        no título.</p>
                                    <!-- Button -->
                                    <a href="renda_fixa.html">
                                        <button class="button">
                                            <span>ACESSAR</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <!-- Card Narrower -->
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4  mt-4">
                            <!-- Card Narrower -->
                            <div class="card card-cascade narrower">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img class="card-img-top" src="img/investimentos.png" alt="Card image cap">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body card-body-cascade">
                                    <!-- Label -->
                                    <h5 class="color-blue pb-2 pt-1"><i class="fas fa-piggy-bank"></i> Investimentos
                                    </h5>
                                    <!-- Title -->
                                    <h4 class="font-weight-bold card-title color-gray">Renda variável </h4>
                                    <!-- Text -->
                                    <p class="card-text">A sua remuneração ou
                                        retorno de capital não pode ser dimensionado no momento da aplicação, podendo
                                        variar positivamente ou negativamente.
                                    </p>
                                    <!-- Button -->
                                    <a href="renda_variavel.html">
                                        <button class="button">
                                            <span>ACESSAR</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <!-- Card Narrower -->
                        </div>

                    </div> <!-- row -->
                </div>
            </div> <!-- container -->
            <!-- Footer -->
            <footer class="page-footer mt-50">

                <!-- Footer Elements -->
                <div class="container-fluid pt-4">

                    <!-- Social buttons -->
                    <ul class="list-unstyled list-inline text-center">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-li mx-1"
                                href="https://www.linkedin.com/in/wagner-silva-6a163555/">
                                <i class="fab fa-linkedin-in color-blue"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-dribbble mx-1" href="https://dribbble.com/wagstalos">
                                <i class="fab fa-dribbble color-blue"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-dribbble mx-1" href="https://github.com/wagstalos">
                                <i class="fab fa-github-alt color-blue"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- Social buttons -->

                </div>
                <!-- Footer Elements -->

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2019 Copyright:
                    <a href="https://wpsgames.com.br"> WPS Games</a>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->


            <!-- jQuery CDN - Slim version (=without AJAX) -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <!-- Popper.JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
                crossorigin="anonymous"></script>
            <!-- Bootstrap JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js"
                integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
                crossorigin="anonymous"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <script src="js/main.js"></script>


</body>

</html>