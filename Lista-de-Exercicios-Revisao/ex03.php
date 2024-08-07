<?php require_once("header.php") ?>

<h1>Exercício 03</h1>

<p>Implemente uma lógica para distribuir um bônus anual entre os funcionários com base em seu desempenho. Leia o valor dos lucros da empresa a serem distribuídos, o nome do funcionário e uma escala de 1 a 5, onde 1 está relacionado a 0,1% de recebimento do lucro e 5 está relacionado ao recebimento de 0,7% do lucro.</p>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="lucros">
                Lucros
            </label>
            <input type="number" id="lucros" name="lucros" class="form-control" />
        </div>
        <div class="col">
            <label for="nome">
                Nome
            </label>
            <input type="text" id="nome" name="nome" class="form-control" />
        </div>
        <div class="col">
            <label for="escala">
                Escala
            </label>
            <input type="number" id="escala" name="escala" class="form-control" />
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $lucros = $_POST["lucros"];
    $nome = $_POST["nome"];
    $escala = $_POST["escala"];

    $bonus = 0;

    switch ($escala) {
        case 1:
            $bonus = $lucros * 0.001;
            break;
        case 2:
            $bonus = $lucros * 0.002;
            break;
        case 3:
            $bonus = $lucros * 0.003;
            break;
        case 4:
            $bonus = $lucros * 0.005;
            break;
        case 5:
            $bonus = $lucros * 0.007;
            break;
        default:
            echo "Escala inválida";
            break;
    }

    if ($bonus > 0)
        echo "O funcionário $nome receberá um bônus de R$ " . number_format($bonus, 2, ",", ".");
}

require_once("footer.php")
?>