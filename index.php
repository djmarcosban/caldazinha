<?php
require('includes/config.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Caldazinha | Prefeitura Municipal</title>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0"/>
  <meta content="Site Oficial da Prefeitura de Caldazinha" name="description">
  <meta property="og:title" content="Caldazinha | Prefeitura Municipal"/>
  <meta property="og:description" content="Site Oficial da Prefeitura de Caldazinha"/>
  <meta property="og:image" content="https://caldazinha.go.gov.br/img/banner_logo.png"/>
  <meta property="og:url" content="https://caldazinha.go.gov.br/"/>
  <meta property="og:site_name" content="Caldazinha | Prefeitura Municipal"/>
  <link rel="icon" type="image/png" href=""/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="css/theme.css"/>
  <link rel="stylesheet" type="text/css" href="css/style-font.css"/>
  <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body class="home page-template page-template-page-home page-template-page-home-php page page-id-441">
  <main>
    <header>
      <div id="top">
        <div class="container">
          <ul class="right">
            <li class="d-none d-sm-block"><a href="./painel" target="_blank">
              <i class="fas fa-pencil-alt"></i> área do administrador</a>
            </li>
            <li>
              <a href="" target="_blank"><i class="fas fa-info-circle"></i> tirar dúvidas</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="container">
        <div class="row pai-cont-img" id="ng-integracao-acessibilidade"></div>
        <div class="row pai-cont-img">
          <div class="col-12 col-md-5 col-lg-7 pai-img">
            <a href="https://turvelandia.go.gov.br/">
              <img src="images/banner_logo.png" style="height: 120px" alt="Caldazinha | Prefeitura Municipal" class="logo img-fluid"/>
            </a>
          </div>
          <div class="col-12 col-md-7 col-lg-5 busca-acesso">
            <div class="row">
              <div class="col-12 container_form">
                <form id="form_pesquisar" action="./" method="get">
                  <input class="form-control form-control-lg" id="search-input" value="" type="text" name="s" placeholder="Buscar no site" autocomplete="off"/>
                  <input type="image" src="images/icon_search.png"/>
                </form>

                <?php require('acesso-a-informacao.php');?>

              </div>
            </div>
          </div>
        </div>

        <?php require('breadcump.php');?>
      </div>
    </header>

    <div class="container">
      <section class="row">
        <div class="col-12 col-md-9 order-md-2">
          <?php
          if(isset($_GET["go"]) && $_GET["go"] == "" OR !isset($_GET["go"])){
            include("pages/inicio.php");
          }elseif(file_exists("pages/".$_GET["go"].".php")){
            include("pages/".$_GET["go"].".php");
          }else{
            echo 'Erro 404: página não encontrada.';
            exit;
          }
          ?>
        </div>
        <?php require('aside-menu-left.php');?>
      </section>
    </div>

    <?php require('footer.php');?>
  </main>

  <?php require('lightbox.php');?>

  <script type="text/javascript" src="js/cookie.js"></script>
  <script type="text/javascript" src="js/cycle.js"></script>
  <script type="text/javascript" src="js/fancybox.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  <script type="text/javascript" src="js/script.func.js"></script>
  <script>
  window.integracao({
    //Cor da fonte da barra
    corFonteBarra: 'rgb(72, 85, 106)',
    corBtn: '#1d4e60',
    //Cor do botão do formulário
    //Link de acessibilidade
    linkAcessibilidade: "./acessibilidade/",
    linkMapaSite: "./mapa-do-site",
    //Ação para atalho de acessibilidade
    pgAcessibilidade: function () {
        window.location = "./acessibilidade/";
    },
    pgPrincipal: function () {
        window.location = "./";
    },
    menuPrincipal: function () {
        window.location = "./";
    },
    pgBusca: function () {
        window.location = './' + '/?s=&x=0&y=0';
    },
    //Cor da borda do formulário
    //Elementos para capturar html para inserir nas paginas
    elemTitulo: ".conteudo .centro h1",
    corPaginas: "white",
    linkAltoContraste: "css/altocontraste.css",
    fontMin: 10,
    fontMax: 22
  });
  </script>
</body>
</html>

