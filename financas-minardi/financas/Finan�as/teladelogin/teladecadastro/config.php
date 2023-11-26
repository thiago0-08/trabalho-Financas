<?php

$dbhost = 'Localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'cadastro_formulario';

$conexao = new mysqli($dbhost, $dbUserName, $dbPassword, $dbName); 

//if ($conexao->connect_errno){
//    echo 'erro';
//} else {
//    echo "conexao efetuada";
//}