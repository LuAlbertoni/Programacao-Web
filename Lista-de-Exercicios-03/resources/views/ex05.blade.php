<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir três notas. O programa deve calcular a média das notas e exibir o resultado</p>

    <form action="/respostaEx05" method="POST">
        @CSRF
        <input type="number" name="nota01" />
        <input type="number" name="nota02" />
        <input type="number" name="nota03" />
        
        <button type="submit">Calcular</button>
    </form>
</body>

</html>
