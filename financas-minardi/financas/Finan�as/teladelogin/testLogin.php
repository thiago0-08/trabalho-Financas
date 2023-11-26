<?php

session_start();

if(isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r('Email: '.$email);
    // print_r('Senha: '.$senha);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $conexao->query($sql);

    // print_r($result);

    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    else
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }


}else{
    header('Location: login.php');
}

?>