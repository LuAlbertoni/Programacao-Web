<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir uma temperatura em Fahrenheit. O programa deve converter essa temperatura para Celsius e exibir o resultado.</p>

    <form action="/respostaEx07" method="POST">
        @CSRF
        <label for="fahrenheit">Temperatura em Fahrenheit</label>
        <input type="number" name="fahrenheit" />

        <button type="submit">Calcular</button>
    </form>
</body>

</html>
