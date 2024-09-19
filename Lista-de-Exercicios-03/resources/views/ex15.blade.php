<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir seu peso (em kg) e altura (em metros). O programa deve calcular o IMC (peso / altura²) e exibir o resultado.</p>

    <form action="/respostaEx15" method="POST">
        @CSRF
        <input type="number" name="peso" />
        <input type="number" name="altura" />

        <button type="submit">Calcular</button>
    </form>
</body>

</html>
