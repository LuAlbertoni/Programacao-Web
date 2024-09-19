<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir dois números. O programa deve dividir o primeiro número pelo segundo e exibir o resultado. Inclua uma verificação para evitar divisão por zero.</p>

    <form action="/respostaEx04" method="POST">
        @CSRF
        <input type="number" name="val01" />
        <input type="number" name="val02" />
        <button type="submit">Calcular</button>
    </form>
</body>

</html>
