<?php

include 'hg_finance.php';

// Primeiro parametro do construtor recebe a chave da API
$HGFinance = new HGFinance('ed052c10');

$HGFinance->get();

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
    <meta name="theme-color" content="#39BEF4">
    <title>CDI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="manifest" href="/manifest.json">
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
    <div class="container-fluid padding-0">
        <!-- Como um link -->
        <nav class="navbar bg-degrade">
            <div class="container">
                <a class="navbar-brand" href="index.php"><i class="fas fa-arrow-left"></i></a>
            </div>
        </nav>
        <div class=" bg-degrade header-inner">
            <div class="d-flex justify-content-center text-light">
                <div class="bounce-in-top">
                    <h1>CDI</h1>
                </div>
            </div>
            <div class="d-flex justify-content-center ">
                <p class="card-tax swing-in-top-fwd">Valor atual: <b><?php  echo $finance['taxes']['0']['cdi_daily']; ?> a.a</b> </p>
            </div>
        </div>
    </div>

    <div class="container padding-0">
        <div class="content-article shadow-drop-center">
            <div class="container ">
                <div class="text-center bd-highlight mb-3">
                    <div class="text-center">
                        <h2 class="color-gray pt-4 ">O que é a CDI?</h2>
                    </div>
                </div>
                <p class="pt-4">
                    <b> CDI</b> é a sigla para <b class="color-blue">Certificado de Depósito Interbancário.</b> Você
                    também
                    pode encontrar o nome
                    Certificado de Depósito Interbancário. Os dois nomes estão corretos, mas o Interfinanceiro é
                    atualmente o nome oficial.

                    De forma resumida, ele é uma taxa gerada a partir dos empréstimos que os bancos fazem entre si para
                    financiar suas operações.

                    Só que diferente da taxa Selic, que é formada a partir de compra e venda de títulos públicos, o CDI
                    é formado pela compra e venda de títulos privados entre os bancos.

                    O CDI e a Selic são taxas divulgadas diariamente pelo Banco Central e pela B3, a bolsa de valores
                    brasileira. </p>
                <div class="row mt-50">
                    <div class="col">
                        <a href="selic.php">
                            <button class="button">
                                <span><i class="fas fa-arrow-left"></i> <b class="ml-2"> </b></span>
                            </button>
                        </a>
                    </div>
                    <div class="col">
                        <a href="ipca.html">
                            <button class="button">
                                <span> <b class="mr-2"> </b><i class="fas fa-arrow-right"></i></span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="color-gray mt-50">
                <i> fonte: https://blog.magnetis.com.br/cdi/
            </div>
        </div>
    </div>
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

</body>

</html>