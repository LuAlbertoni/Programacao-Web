<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir um valor em dias. O programa deve converter esse valor para horas, minutos e segundos e exibir o resultado.</p>

    <form action="/respostaEx19" method="POST">
        @CSRF
        <label for="dias">Dias</label>
        <input type="number" name="dias" />

        <button type="submit">Calcular</button>
    </form>
</body>

</html>
