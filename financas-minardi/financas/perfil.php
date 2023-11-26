<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        .navbar {
            background-color: #f2f2f2;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #333;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .profile-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .info-item {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="telamenu.html">Menu</a>
        <a href="index2.html" style="float: right;">sair</a>
    </div>

    <center><h1>Informações do Usuário</h1></center>
    
    <?php
    // Recupera as informações do banco de dados e exibe
    include_once('config.php');

    $query = "SELECT * FROM usuarios ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conexao, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="profile-container">
            <div class="info-item">
                <label>Nome:</label>
                <span><?php echo $row['nome']; ?></span>
            </div>

            <div class="info-item">
                <label>Email:</label>
                <span><?php echo $row['email']; ?></span>
            </div>

            <div class="info-item">
                <label>Telefone:</label>
                <span><?php echo $row['telefone']; ?></span>
            </div>

            <div class="info-item">
                <label>Gênero:</label>
                <span><?php echo $row['sexo']; ?></span>
            </div>

            <div class="info-item">
                <label>Data de Nascimento:</label>
                <span><?php echo $row['data_nasc']; ?></span>
            </div>

            <div class="info-item">
                <label>Cidade:</label>
                <span><?php echo $row['cidade']; ?></span>
            </div>

            <div class="info-item">
                <label>Estado:</label>
                <span><?php echo $row['estado']; ?></span>
            </div>

            <div class="info-item">
                <label>Endereço:</label>
                <span><?php echo $row['endereco']; ?></span>
            </div>
        </div>

    <?php
    } else {
        echo "Nenhuma informação disponível.";
    }

    // Feche a conexão após o uso
    mysqli_close($conexao);
    ?>
</body>
</html>
