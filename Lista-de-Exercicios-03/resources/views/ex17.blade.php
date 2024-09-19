<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir um capital, uma taxa de juros e um período. O programa deve calcular os juros simples (capital * taxa * período) e exibir o resultado.</p>

    <form action="/respostaEx17" method="POST">
        @CSRF
        <input type="number" name="capital" />
        <input type="number" name="taxa" />
        <input type="number" name="periodo" />

        <button type="submit">Calcular</button>
    </form>
</body>

</html>