<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vinho</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        p {
            text-align: center;
            font-size: 1.2em;
            margin-top: 20px;
            color: #333;
        }

        .success {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
require 'Vinho.php';

if (isset($_POST['nome']) && isset($_POST['tipo']) && isset($_POST['preco']) && isset($_POST['safra'])) {
    $vinho = new Vinho();

    $vinho->setNome($_POST['nome']);
    $vinho->setTipo($_POST['tipo']);
    $vinho->setPreco($_POST['preco']);
    $vinho->setSafra($_POST['safra']);
    
    echo "<div class='container'>";
    echo "<h2 class='success'>Vinho cadastrado com sucesso:</h2>";
    echo $vinho->mostrarVinho();
    
    if ($vinho->verificarPreco($vinho->getPreco())) {
        echo "<p>Produto em oferta!</p>";
    } else {
        echo "<p>Produto com preço normal!</p>";
    }
    echo "</div>";
}
?>

</body>
</html>
