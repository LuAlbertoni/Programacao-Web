<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir uma temperatura em Celsius. O programa deve converter essa temperatura para Fahrenheit e exibir o resultado.</p>

    <form action="/respostaEx06" method="POST">
        @CSRF
        <label for="celsius">Temperatura em Celsius</label>
        <input type="number" name="celsius" />

        <button type="submit">Calcular</button>
    </form>
</body>

</html>
