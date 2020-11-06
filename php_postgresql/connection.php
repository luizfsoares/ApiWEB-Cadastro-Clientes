<?php
//Definição dos parâmetros para criar uma conexão
$host = "localhost" ; //maquina utilizada
$port = "5432";  //numero da porta
$dbUsername = "postgres" ; //user
$dbPassword = "123" ; //senha
$dbname = "postgres" ; //nome do banco de dados

// criar conexão
$conn = pg_connect( "host=$host port=$port dbname=$dbname user = $dbUsername password = $dbPassword"); 

?>