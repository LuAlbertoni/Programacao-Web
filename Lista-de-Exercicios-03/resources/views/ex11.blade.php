<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir o raio de um círculo. O programa deve calcular o perímetro do círculo (2πr) e exibir o resultado.</p>

    <form action="/respostaEx11" method="POST">
        @CSRF
        <input type="number" name="raio" />

        <button type="submit">Calcular</button>
    </form>
</body>

</html>