<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>goodbom</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2 style='color:purple'>Vinho</h2>
    <form action="cadastroVinho.php" method="POST">
        <label for="nome">Nome do Vinho:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="tipo">Tipo do Vinho:</label>
        <input type="text" id="tipo" name="tipo" required><br><br>

        <label for="preco">Preço do vinho:</label>
        <input type="number" id="preco" name="preco" step="0.01" required><br><br>

        <label for="safra">Safra do vinho:</label>
        <input type="number" id="safra" name="safra" required><br><br>

        <button type="submit">Cadastrar vinho</button>
    </form>
</body>
</html>
