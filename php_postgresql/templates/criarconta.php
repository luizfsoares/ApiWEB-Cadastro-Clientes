<?php
//incluindo o codigo de conexão
include_once '../connection.php';
session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Realizar Cadastro</title>
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



    <!--HEADER-->

    <!--FORM-->
    <div class="container">
    <h1 style="margin-top:5%"><b>Realizar Cadastro de Conta</b></h1>
    </div>
    <div class="container" style="width:100%;"> <br>
        
        <form action="contasucesso.php" class="area_form" method="POST" style=" width:100%; display: inline-block; position: relative;">



            <div class="row">

              <div class="col-7" style="padding-left: 5%; padding-top:5%;">

                <label for=""><b>Identificador:</b> </label> <br>
                <input class="input_format" type="number" name="account_id" placeholder="Id" style="width:90%" required>
                <br><br>
                <label><b>Cidade:</b> </label> <br>
                <input class="input_format" type="text" name="account_city" placeholder="Cidade..." style="width:90%" required>
                <br><br>
                <label for=""><b>Saldo :</b> </label> <br>
                <input class="input_format" type="number" name="account_balance" placeholder="Saldo" step="0.01" style="width:90%" required>
                

              </div>
              <!--Radio buttons quando são muitas opções e só pode selecionar uma por vez, tem que colocar o name de todos iguais porém com os values diferentes
                  pois como só vai selecionar um, só recuperar a informação do name (retorna o value do selecionado)-->
              <div class="col-5" style="padding-top:3%;">
                <div class="form-check"> <br>
                  <label><b>Escolha a Agência:</b> </label> <br><br>
                  <input class="form-check-input" type="radio" name="account_agency" id="exampleRadios1" value="Agência 1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                      Agência 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="account_agency" id="exampleRadios2" value="Agência 2">
                  <label class="form-check-label" for="exampleRadios2">
                      Agência 2
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="account_agency" id="exampleRadios3" value="Agência 3">
                  <label class="form-check-label" for="exampleRadios3">
                     Agência 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="account_agency" id="exampleRadios3" value="Agência 4">
                  <label class="form-check-label" for="exampleRadios3">
                     Agência 4
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="account_agency" id="exampleRadios3" value="Agência 5">
                  <label class="form-check-label" for="exampleRadios3">
                     Agência 5
                  </label>
                </div>
                    
              </div>
                
            </div>

            <br><br><br>
            <div style="padding-left: 30%">
              <input class="btn btn-success" type="submit" value="Cadastrar Conta" style="width:50%;">
            </div>
            
            <div class="row">
                <br><br>
            </div>        
        
        </form>
    </div>

    <!--FORM-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
