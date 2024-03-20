<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jokenpô</title>
</head>
<body>
    <h1>Jokenpô</h1>
    <form action="ativ5.php" method="post">
        <label for="nome">Seu nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="escolha">Sua escolha:</label>
        <select id="escolha" name="escolha" required>
            <option value="pedra">Pedra</option>
            <option value="papel">Papel</option>
            <option value="tesoura">Tesoura</option>
        </select><br><br>

        <button type="submit">Jogar</button>
    </form>
</body>
</html>