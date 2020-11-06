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
    <title>Alterar Dados</title>
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

    <div class="row">
      

      <div class ="col-4">

        <div class="container" style="width:100%;"> <br>
          <h2><b>Dados Atuais</b> </h2>
          <br>
          <div class="format"> 
            <label for=""><h4>Cliente ID:<?php echo "  ".$id_selec;?>.</h4> </label> 
          </div>
          <br>
          <div>
            <label for=""><h4>Nome do Cliente: <?php echo "  ".$name_selec;?>.</h4> </label>
          </div>
          <br>
          <div>
            <label for=""><h4>Rua da Residência: <?php echo "  ".$street_selec;?>.</h4> </label>
          </div>
          <br>
          <div>
            <label for=""><h4>Cidade: <?php echo "  ".$city_selec;?>.</h4> </label>
          </div>
          
        
        </div>
      
      </div>

      <div class="col-8">
        <div class="container" style="text-align:center; width:100%;"> <br>
        <h2><b>Alterar Dados</b></h2>
          <form action="alterarsucesso.php" class="area_form" method="POST" style="width:70%; display: inline-block; position: relative;">
        
            <div>
                <label for=""><b>Nome:</b> </label> <br>
                <input class="input_format" type="text" name="nameA" placeholder="Nome..." value= "<?php echo htmlspecialchars($name_selec); ?>">
            </div>
            <div>
                <label for=""><b>Rua :</b> </label> <br>
                <input class="input_format" type="text" name="streetA" placeholder="Rua..." value= "<?php echo htmlspecialchars($street_selec); ?>" >
            </div>
            <div>
                <label for=""><b>Cidade :</b> </label> <br>
                <input class="input_format" type="text" name="cityA" placeholder="Cidade..." value= "<?php echo htmlspecialchars($city_selec); ?>">
            </div>
            <br><br><br>
            <input class= "input_format"type="submit" value="Alterar Dados" onclick= "button_red();">
        
        
          </form>
        </div>
      
      </div>
    
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
