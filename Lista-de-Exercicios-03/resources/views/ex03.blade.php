<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir dois números. O programa deve multiplicar esses números e exibir o resultado.</p>

    <form action="/respostaEx03" method="POST">
        @CSRF
        <label for="val01">Valor 01</label>
        <input type="number" name="val01" />

        <label for="val02">Valor 02</label>
        <input type="number" name="val02" />

        <button type="submit">Calcular</button>
    </form>
</body>

</html>
