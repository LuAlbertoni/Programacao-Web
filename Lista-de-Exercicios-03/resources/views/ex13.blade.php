<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir um valor em metros. O programa deve converter esse valor para centímetros e exibir o resultado.</p>

    <form action="/respostaEx13" method="POST">
        @CSRF
        <input type="number" name="metros" />

        <button type="submit">Converter</button>
    </form>
</body>

</html>
