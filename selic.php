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
    <title>Selic</title>
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
                    <h1>Selic</h1>
                </div>
            </div>
            <div class="d-flex justify-content-center ">
                <p class="card-tax swing-in-top-fwd">Valor atual: <b><?php  echo $finance['taxes']['0']['selic']; ?> a.a </b> </p>
            </div>
        </div>
    </div>

    <div class="container padding-0">
        <div class="content-article shadow-drop-center">
            <div class="container ">
                <div class="text-center bd-highlight mb-3">
                    <div class="text-center">
                        <h2 class="color-gray pt-4 ">O que é a Selic?</h2>
                    </div>
                </div>
                <p class="pt-4">
                    No Brasil, a taxa Selic é a taxa média ajustada dos financiamentos diários apurados no
                    <b class="color-blue">Sistema Especial de Liquidação e de Custódia</b> para títulos federais. Ela é
                    obtida mediante
                    o cálculo da taxa média ponderada e ajustada das operações de financiamento por um dia,
                    lastreadas em títulos públicos federais e cursadas no referido sistema ou em câmaras de
                    compensação e liquidação de ativos, na forma de operações compromissadas. </p>
                <p>
                    No mercado de capitais existem diversos fatores que são importantes e devemos conhecer ao menos o
                    mínimo sobre eles para que possamos compreender e buscar bons rendimentos em nossos investimentos,
                    apesar de serem constantemente mencionados na mídia e em conversas informais pouco se sabe sobre,
                    dentre estes assuntos comuns mas pouco compreendidos temos a TAXA SELIC.
                </p>
                <p>
                    A SELIC é a taxa básica de Juros da economia brasileira. Esta taxa é determinada pelo Banco Central
                    em reuniões realizadas a cada 45 dias, a SELIC é o maior instrumento de politica monetária para
                    controlar a inflação, nos períodos de inflação alta em razão do alto consumo e abundancia de
                    crédito, a tendência é que a SELIC seja elevada para que os bancos também subam os juros nos
                    financiamentos, cartões de crédito e empréstimos, consequentemente a isto o consumo será
                    desestimulado e a inflação voltará a cair. O contrario também é verdadeiro, nos períodos de baixo
                    consumo o governo tende a baixar a SELIC para que os bancos captem dinheiro mais barato e emprestem
                    ao consumidor com taxas menores e assim a economia é reaquecida e o PIB cresce. o Banco Central (BC)
                    age como um pêndulo, sempre acompanhando o andar da economia e determinando a SELIC que mais se
                    adapta àquele momento.
                </p>
                <blockquote>
                    <p class="mt-50">
                        Então se um investimento paga 100% da selic , logo ele paga <b><?php  echo $finance['taxes']['0']['selic']; ?></b> % ao ano que é o valor atual da
                        taxa.
                    </p>
                </blockquote>

                <div class="color-gray mt-50">
                    <i> Texto: Caio Cesar</i>
                </div>
            </div>
            <div class="row mt-50">
                <div class="offset-md-3 col-md-6 col-sm-12">
                    <a href="cdi.php">
                        <button class="button">
                            <span> <b class="mr-2"></b><i class="fas fa-arrow-right"></i></span>
                        </button>
                    </a>
                </div>
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

    <script src="js/main.js"></script>

</body>

</html>