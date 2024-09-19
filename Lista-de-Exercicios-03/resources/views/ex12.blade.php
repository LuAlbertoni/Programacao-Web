<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir uma base e um expoente. O programa deve calcular a base elevada ao expoente e exibir o resultado.</p>

    <form action="/respostaEx12" method="POST">
        @CSRF
        <input type="number" name="base" />
        <input type="number" name="expoente" />

        <button type="submit">Calcular</button>
    </form>
</body>

</html>
