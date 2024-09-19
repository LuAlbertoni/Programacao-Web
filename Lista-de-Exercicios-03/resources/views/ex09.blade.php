<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir o raio de um círculo. O programa deve calcular a área do círculo (πr²) e exibir o resultado.</p>

    <form action="/respostaEx09" method="POST">
        @CSRF
        <label for="raio">Raio</label>
        <input type="number" name="raio" />

        <button type="submit">Calcular</button>
    </form>
</body>

</html>
