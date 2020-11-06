<?php

//O comando CREATE TABLE segue um formato especíco: primeiro, as duas palavras CREATE TABLE; depois o nome da tabela; após isso um parêntese de abertura; uma lista de nomes de colunas e seus
//respectivos tipos; seguido por um parêntese de fechamento.

php=> CREATE TABLE noticia (
    php(> id serial,
    php(> noticia varchar(800) NOT NULL,
    php(> datains date,
    php(> chamada varchar(300) NOT NULL,
    php(> foto varchar(300),
    php(> link varchar(300),
    php(> datapub date
    php(> );



//1) A função usada para abrir uma conexão com o banco de dados PostgreSQL é a função pg_connect.
//   int pg_connect (string host, string port, string dbname)
//   podendo atribuit tudo a uma string só e chamar int pg_connect (string conn_string). Os argumentos devem ser passados usando-se aspas duplas.
// host Indica qual máquina deseja-se conectar;
// port Indica a porta utilizada na conexão;
// dbname Indica o nome do banco de dados a ser aberta a conexão;

// $open3 = pg_Connect ("host=newarrobinha port=5460 dbname=php user=sinec password=Ceni$");  <------- LINHA DE COMANDO PARA CONEXAO

//abre conexão com o banco de dados chamado php, na máquina newarrobinha, pela porta "5460", com usuário e senha determinados.

// EXECUTAR CONSULTA
//A função usada para realizar uma consulta é a função pg_exec. Dois parâmetros são necessários para
//a conexão, a variável que guarda o índice da conexão e uma string, que no caso é a query a ser executada.

//int pg_exec (int connection, string query)
//EXEMPLO 
//<?php
/*
$open=pg_connect("user=sinec,dbname=php,host=localhost") or die("Impossível abrir conexão");
$consulta="select chamada,noticia from noticia";
$exec=pg_exec($open,$consulta) or die("Impossível executar consulta");
?>
*/
//------------------------------------------------------------------------------------------------------------------------

/* 2)  Criar base de dados

        CREATE DATABASE micro;             cria um banco de dados com os parametros padrao
    //é possivel editar alguns parametros com WITH (owner, template, encoding, tablespace, connection limit) etc..






Criar Tabela

    create table nometabela (colunas tipo)

    CREATE TABLE Info(

        id serial primary key,
        Produto varchar(100) NOT NULL,
        Valor float8 NOT NULL,
        Quantidade integer NOT NULL

    )
*/

//------------------------------------------------------------------------------------------------------------------------
// 3) Inserir Dados
/*
INSERT INTO Info (colunasnaordem) values (valoresnaordem)

INSERT INTO Info (Produtos, Valor, Quantidade) values ("Mouse", 8.00, 2)
INSERT INTO Info (Produtos, Valor, Quantidade) values ("Teclado", 20.00, 3)
INSERT INTO Info (Produtos, Valor, Quantidade) values ("Gabinete", 40.00, 4)
*/

//------------------------------------------------------------------------------------------------------------------------

/* 4) Mostrar algo do banco é select 

$host = "localhost";
$port = 5432;
$db = micro;
$conn = pg_connect("host = $host, dbname = db, port = $port");
$my_query = "SELECT * FROM Info";            buscar em  * (todas as colunas) da tabela info
$result = pg_query($conn, $my_query);
while($row = pg_fetch_assoc($result)){
    echo   "<tr>
            <td>".$row['id']."</td>
            <td>".$row['Produto']."</td>
            <td>".$row['Valor']."</td>
            <td>".$row['Quantidade']."</td>
            </tr>";
}
}


//------------------------------------------------------------------------------------------------------------------------

    5) alterar dados da tabela é UPDATE e inserir é INSERT INTO

        Inserir dado na tabela

        $INSERT = "INSERT INTO Info (Produtos, Valor, Quantidade) VALUES (dado1, dado2, dado3)";
        pg_exec($conexao, $INSERT);       executar query
        
//------------------------------------------------------------------------------------------------------------------------  

    6)  Alterar dado na tabela

        $UPDATE = "UPDATE Info set Produtos=dado1, Valor=dado2, Quantidade=dado3 WHERE condição.
        pg_exec($conexao, $UPDATE);       executar query



//------------------------------------------------------------------------------------------------------------------------  

    7) Apagar registro na tabela

        $DELETE = "DELETE FROM Info WHERE condição.
        pg_exec($conexao, $DELETE);       executar query


//------------------------------------------------------------------------------------------------------------------------  

    10) Apagar registro na tabela em POSTGRESQL

        DELETE FROM Info WHERE id=20
        


//------------------------------------------------------------------------------------------------------------------------

    11)  UPDATE Info set Valor=12 WHERE id=1               id do mouse

//------------------------------------------------------------------------------------------------------------------------

    15) Apagar registro na tabela em POSTGRESQL

        DELETE FROM Info WHERE Quantidade=0
*/