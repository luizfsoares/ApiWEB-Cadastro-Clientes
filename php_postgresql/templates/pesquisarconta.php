<?php
//incluindo o codigo de conexão
include_once '../connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Realizar Cadstro</title>
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


   <div class="container" style="text-align:center; width:100%;"> <br>
      <h1><b>Pesquisar Clientes</b></h1> <br><br>
        <form action="pesquisarconta.php"  method="POST" style="width:50%; display: inline-block; position: relative;">

            <div class="form-row" style="text-align:center;">
                <label for=""><b>Pesquisar:</b> </label> <br>

                <div class="col-3">
                  <input class="input_format" type="number" name="id_account" placeholder="Identificador" style="width:100%;">

                </div >
            </div>
            <br><br><br>
            <input class= "input_format"type="submit" value="Pesquisar">

        </form>
        <br><br><br>
    </div>
    <!--Criar tabela-->
    <!--tr é table row, criar uma nova linha// th é table header// td é uma nova célula-->
    <div class="container" style="text-align: center;">

        <table id="myTable" class="table table-hover">
            <tr>
                <th>Identificador</th>
                <th>Agência</th>
                <th>Saldo</th>
                <th>Cidade</th>
                <th></th>
            </tr>

            <tbody>
              <tr>
                <td>
                
                <?php //LINHA 1 ----- ID
                if(isset($_POST['id_account'])){

                  $id_search_account = $_POST['id_account'];
                  $SELECT_id = "SELECT * FROM account WHERE id= '$id_search_account'";
                  $resultSearch = pg_exec($conn, $SELECT_id);
                  $row = pg_fetch_assoc($resultSearch);
                  echo $row['id']; 
                }
                ?>
                
                </td>

                <td class="link">
                    <?php //LINHA 2 ----- Agencia
                    if(isset($_POST['id_account'])){

                      $id_search_account = $_POST['id_account'];
                      $SELECT_agency = "SELECT * FROM account WHERE id= '$id_search_account'";
                      $resultSearch = pg_exec($conn, $SELECT_agency);
                      $row = pg_fetch_assoc($resultSearch);
                      echo $row['agency']; 
                     }
                ?>  

                </td>
                
                
                <td>
                    <?php //LINHA 3 ----- Saldo
                    if(isset($_POST['id_account'])){

                      $id_search_account = $_POST['id_account'];
                      $SELECTid = "SELECT * FROM account WHERE id= '$id_search_account'";
                      $resultSearch = pg_exec($conn, $SELECTid);
                      $row = pg_fetch_assoc($resultSearch);
                      echo $row['saldo'];
                    }
                ?>
                </td>

                <td>
                    <?php //LINHA 4 ----- Cidade
                    if(isset($_POST['id_account'])){

                      $id_search_account = $_POST['id_account'];
                      $SELECTid = "SELECT * FROM account WHERE id= '$id_search_account'";
                      $resultSearch = pg_exec($conn, $SELECTid);
                      $row = pg_fetch_assoc($resultSearch);
                      echo $row['city'];
                    }
                ?>
                </td>
                
                <td>
                <a href="/php_postgresql/templates/alterardados.php" class="trigger info-color text-white">Clientes associados<i class="fas fa-plus ml-2"></i></a>
                </td>
              </tr>
              
              
            </tbody>
        </table>
        
    </div>

<?php

?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
 </body>
</html>