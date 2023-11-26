<?php

if(isset($_POST['enviar'])){

    include_once('config.php');

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $data_nasc = $_POST['data_nasc'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, telefone, email, genero, estado, cidade, data_nasc, cpf, senha, confirmar_senha) VALUES ('$nome','$telefone','$email', '$genero', '$estado', '$cidade', '$data_nasc', '$cpf', '$senha', '$confirmar_senha')");

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formulariocss.css">
</head>
<body>
    <div class="container">
        <main class="main--dados">
            <section class="section--1">
                <img src="img/ilustrator.svg">
            </section>

            <section class="section--2">
                <h1>Cadastrar-se</h1>
                <form action="formulario.php" method="POST">
                    <fieldset>
                        <label>Nome completo</label>
                        <article>
                            <input type="text" name="nome" id="nome" required>
                        </article> 

                        <label>Telefone</label>
                        <article>
                            <input type="tel" name="telefone" placeholder="(--) ---------" required>
                        </article> 

                        <label>Email</label>
                        <article>
                            <input type="email" name="email" id="email" required>
                        </article> 

                        <label>Genero</label>
                        <article>
                            <select name="genero">
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                                <option value="outros">Outros</option>
                            </select>
                        </article> 
                        
                        <label>Estado</label>
                        <article>
                            <input type="text" name="estado">
                        </article> 

                        <label>Cidade</label>
                        <article>
                            <input type="text" name="cidade">
                        </article> 

                        <label>Data de nascimento</label>
                        <article>
                            <input type="date" name="data_nasc">
                        </article> 

                        <label>CPF</label>
                        <article>
                            <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00">
                        </article> 

                        <label>Senha</label>
                        <article>
                            <input type="password" name="senha">
                        </article> 

                        <label>Confirmar senha</label>
                        <article>
                            <input type="password" name="confirmar_senha">
                        </article> 

                        <article class="article--btn">
                            <button type="submit" value="enviar" name="enviar">Enviar</button>
                        </article>
                    </fieldset>
                </form>
            </section>
        </main>
    </div>
</body>
</html>