<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
</head>

<body>
    <p>Crie um formulário que permita ao usuário inserir uma distância e um tempo. O programa deve calcular a velocidade média (distância / tempo) e exibir o resultado.</p>

    <form action="/respostaEx20" method="POST">
        @CSRF
        <label for="distancia">Distância</label>
        <input type="number" name="distancia" />

        <label for="tempo">Tempo</label>
        <input type="number" name="tempo" />

        <button type="submit">Calcular</button>
    </form>
</body>

</html>
