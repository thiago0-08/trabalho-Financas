<?php
$dbHost = 'Localhost:3308';
$bdUsername = 'root';
$bdPassword = '';
$bdName = 'financas';

$conexao  = new mysqli($dbHost, $bdUsername, $bdPassword, $bdName);

//if($conexao->connect_errno) {
 //   echo "erro";
//} else {
//    echo "sucesso";
//}

?>