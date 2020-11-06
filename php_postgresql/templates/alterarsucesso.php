<?php
//incluindo o codigo de conexão
include_once '../connection.php';
session_start();

//Captura dos dados do Select
$id_selec = $_SESSION['id_selec'];
$name_selec = $_SESSION['name_selec'];
$street_selec = $_SESSION['street_selec'];
$city_selec = $_SESSION['city_selec'];

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Sucesso!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../static/main.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <script type="text/javascript" src="../jquery-3.3.1.js"></script>
  </head>
  <body class="myBackground">

    <!--HEADER-->

    <div class="row">
      <div class="container"> <!-- Coloca a navegação dentro de um container para o objeto barra de navegação ocupar o centro do contrainer e nao o espaço todo-->
        <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="#">
                  <!--<img src="{{url_for('static', filename = '/styles/images/icons/tail.jpg')}}" alt="nao foiii" class="img-fluid" height="105" width="105">-->
              </a>
              <!--botao que vai abrir o menu quanto tiver no repsonsivo. Botao so aparece no breakpoint da classe navbar-expad-lg-->
              <button class="navbar-toggler navButton navbar-btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button> 
              <div class="collapse navbar-collapse navBarMargin" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="/php_postgresql/templates/cadastro.php">Cadastro <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/php_postgresql/templates/pesquisaid.php">Pesquisar por ID</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/php_postgresql/templates/pesquisanome.php">Pesquisar por Nome</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/php_postgresql/templates/criarconta.php">Criar Conta</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/php_postgresql/templates/pesquisarconta.php">Pesquisar Conta</a>
                  </li>
                </ul>
              </div>
        </nav>
      </div>
    </div>



    <div class="row" style="margin-top:8%;">
    
        <div class="col-4">
        </div>
        <div class="col-4" style="text-align:center;">

            <img src="../images/sucesso.png" alt="Erro ao carregar imagem"> <br><br><br><br>
            <h3>Dados Alterados com Sucesso.</h3>
            <br><br>
            <form action="cadastro.php">
              <input type="submit" class="btn btn-success" value="OK">
            </form>
            

        </div>
        <div class="col-4">
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


<?php

if(isset($_POST['nameA']) && isset($_POST['streetA']) && isset($_POST['cityA'])){

  $nameA = $_POST['nameA'];
  $streetA = $_POST['streetA'];
  $cityA = $_POST['cityA'];

  $UPDATE = "UPDATE register set name = '$nameA', street = '$streetA', city = '$cityA' WHERE id = '$id_selec'";
  $result = pg_exec($conn, $UPDATE);

  if ($result === false){ ?>

    <div class="erro" style="text-align:center; width:100%;"><b>Problema ao Cadastrar Cliente!</b> </div>
  <?php
  }

  else{ ?> <br><br><br>
    
    <?php
    //header('Location: /php_postgresql/templates/alterarsucesso.php');
  }


}