<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extrato de Finanças</title>
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
        <a href="telamenu.php">Menu</a>
        
        <a href="login.php" style="float: right;">sair</a>
    </div>

    <div class="profile-container">
        <?php
        // Seu código PHP aqui
        ?>
        
        <br>
        <br>
        <?php
        
        // Inicializa o saldo
        $saldoInicial = 0;

        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verifica se o índice "saldoInicial" está definido no array $_POST
            if (isset($_POST["saldoInicial"])) {
                // Obtém o saldo inicial do formulário
                $saldoInicial = $_POST["saldoInicial"];

                // Verifica se o saldo inicial é válido
                if (is_numeric($saldoInicial) && $saldoInicial >= 0) {
                    // Verifica se o índice "valorCompra" está definido no array $_POST
                    if (isset($_POST["valorCompra"])) {
                        // Obtém o valor da compra do formulário
                        $valorCompra = $_POST["valorCompra"];

                        // Verifica se o valor da compra é válido
                        if (is_numeric($valorCompra) && $valorCompra >= 0) {
                            // Atualiza o saldo
                            $saldoInicial -= $valorCompra;

                            // Exibe a transação no extrato
                            echo "Compra no valor de R$ " . number_format($valorCompra, 2, ',', '.') . " realizada. Saldo atual: R$ " . number_format($saldoInicial, 2, ',', '.');
                            
                            // Verifica o saldo para redirecionar para a página apropriada
                            if ($saldoInicial >= 0) {
                                echo '<br><br>  "Quer aprende a investir seu dinheiro" <a href="https://www.tesourodireto.com.br/"  style="text-decoration: none; color: blue;">Clique Aqui 
                                </a>'; 
                            } else {
                                echo '<br><br> "Aprenda a gerenciar seu Dinheiro"<a href="https://www.contabilizei.com.br/contabilidade-online/9-dicas-para-organizar-suas-financas-pessoais/" 
                                style="text-decoration: none; color: blue;"> clique Aqui <a>';

                            }
                            
                        } else {
                            echo "Por favor, insira um valor de compra não negativo.";
                        }
                    } else {
                        echo "O valor da compra não foi fornecido.";
                    }
                } else {
                    echo "Por favor, insira um saldo inicial válido.";
                }
            } else {
                echo "O saldo inicial não foi fornecido.";
            }
        }
        ?> 
               <br>
        <br>
        
        

        <!-- Formulário para inserir o saldo inicial e o valor da compra -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="saldoInicial">Informe o saldo inicial:</label>
            <input type="text" name="saldoInicial" id="saldoInicial" required>
            <br>
            <label for="valorCompra">Informe o valor da compra:</label>
            <input type="text" name="valorCompra" id="valorCompra" required>
            <br>
            <button type="submit" class="btn-compra">Registrar Compra</button>
        </form>
    </div>
</body>
</html>
