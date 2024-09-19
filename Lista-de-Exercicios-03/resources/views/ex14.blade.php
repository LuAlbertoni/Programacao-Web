<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir um valor em quilômetros. O programa deve converter esse valor para milhas (1 quilômetro = 0.621371 milhas) e exibir o resultado</p>

    <form action="/respostaEx14" method="POST">
        @CSRF
        <input type="number" name="quilometros" />

        <button type="submit">Converter</button>
    </form>
</body>

</html>
