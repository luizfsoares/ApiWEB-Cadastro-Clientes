<?php
//incluindo o codigo de conexão
include_once '../connection.php';
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
            <h3>O Cliente foi Cadastrado com sucesso.</h3>
            <br><br>
            <form action="cadastro.php">
              <input type="submit" class="btn btn-success my_btn input_format" value="OK">
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
//verificando existencia do POST
if(isset($_POST['name']) && isset($_POST['street']) && isset($_POST['city']) && isset($_POST['id_client'])){

    $id_client = $_POST['id_client'];
    $name = $_POST['name'];      
    $street = $_POST['street']; 
    $city = $_POST['city']; 
    
    //string para inserir registro na tabela usando insert into e os valores capturados por POST do formulario
    $INSERT = "INSERT INTO register (id_client, name, street, city) VALUES ('$id_client','$name','$street','$city')" ;
    $result = pg_exec($conn, $INSERT);

    if ($result === false){ ?>

      <div class="erro" style="text-align:center; width:100%;"><b>Problema ao Cadastrar Cliente!</b> </div>
    <?php
    }

    else{ ?> <br><br><br>
      
      <?php
      //header('Location: /php_postgresql/templates/cadastrosucesso.php');
      //die();
    }
}
?>