<?php
// os defines abaixo servem para validar a conexão com o banco de dados.
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'syslogin');

$conn = new MySQLi(HOST, USER, PASS, BASE); //aqui cria a variável $conn que vai ser chamada no login.php
    // MySQLi é uma classe do PHP para fazer conexão com banco de dados, precisa de alguns parametros e a gente está passando
    // parametros = HOST, USER, PASS, BASE
