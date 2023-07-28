<?php
session_start(); //função do php que inicia uma sessão

// o if abaixo faz a verificação do post que tá vindo do formulário no index.php
// serve para validar se os campos estão vazios

if (empty($_POST) or (empty($_POST["user"]) or (empty($_POST["password"])))) {
    print "<script>location.href='index.php';</script>"; // se for vazio executa esse script e redireciona o usuário para a tela inicial, nesse caso o index.php
}

include('config.php'); //incluindo o arquivo config.php

$user = $_POST["user"]; // a variável superglobal POST é um array, user é uma posição nesse array.
/* declarando a variável $user que está recebendo o valor 
    vindo por POST no input do index.php com name="user"
    */
$password = $_POST["password"]; // a variável superglobal POST é um array, password é uma posição nesse array.
/* declarando a variável $password que está recebendo o valor 
    vindo por POST no input do index.php com name="password"
    */

$sql = "SELECT * FROM users
                WHERE user = '{$user}'; /* user = campo do mysql || $user = variável que declaramos logo acima*/
                AND password = '{$password}'"; /* password = campo do mysql || $password = variável que declaramos logo acima*/

/* a variável $sql está recebendo um comando em sql para selecionar 
da tabela "users" nas colunas "user" e "password"
ou seja, está selecionando o usuário e senha que forem iguais aos valores das variáveis $user e $password
*/
$res = $conn->query($sql) or die($conn->error); /* declaração da variável $res que executa  
a variável $conn executa a conexão que será criado posteriormente e a query que foi criada logo acima
or die serve para exibir um erro caso a conexão não seja feita.
*/
/* $conn é uma variável criada e atribuindo a class feita pra conexão*/


$row = $res->fetch_object();
$qtd = $res->num_rows;

if ($qtd > 0) {

    $_SESSION["user"] = $user;
    $_SESSION["name"] = $row->name;
    $_SESSION["type"] = $row->type;
    print "<script>location.href='dashboard.php';</script>";
} else {
    print "<script>window.alert('Usuário ou senha incorretos.');</script>";
    print "<script>location.href='index.php';</script>";
}
