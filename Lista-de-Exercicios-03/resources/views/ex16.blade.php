<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir um preço e um percentual de desconto. O programa deve calcular o preço com desconto e exibir o resultado.</p>

    <form action="/respostaEx16" method="POST">
        @CSRF
        <label for="preco">Preço</label>
        <input type="number" name="preco" />

        <label for="desconto">Desconto (%)</label>
        <input type="number" name="desconto" />

        <button type="submit">Calcular</button>
    </form>
</body>

</html>
