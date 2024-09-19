<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir a largura e a altura de um retângulo. O programa deve calcular a área do retângulo e exibir o resultado.</p>

    <form action="/respostaEx08" method="POST">
        @CSRF
        <label for="largura">Largura</label>
        <input type="number" name="largura" />

        <label for="altura">Altura</label>
        <input type="number" name="altura" />

        <button type="submit">Calcular</button>
    </form>
</body>

</html>
