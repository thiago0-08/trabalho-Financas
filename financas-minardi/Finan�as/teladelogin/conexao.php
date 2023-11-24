<?php

$dbhost = 'Localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'cadastro_formulario';

$conexao = new mysqli($dbhost, $dbUserName, $dbPassword, $dbName); 

if ($conexao->error) {
    die("falha ao conectar" . $mysqli->error);
}

