<?php require_once("header.php") ?>

<h1>Exercício 05</h1>

<p>Crie uma funcionalidade que calcula a quantidade de dias de férias que um funcionário tem direito com base no tempo de serviço na empresa. A regra para cálculo de férias é a seguinte: para cada 30 dias trabalhados o funcionário pode receber 1 dia de férias; ele pode no máximo tirar 30 dias de férias a partir do total de dias de férias informado.</p>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="diasTrabalhados">
                Dias trabalhados
            </label>
            <input type="number" id="diasTrabalhados" name="diasTrabalhados" class="form-control" />
        </div>
        <div class="col">
            <label for="diasFerias">
                Dias de férias desejados
            </label>
            <input type="number" id="diasFerias" name="diasFerias" class="form-control" />
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
    $diasTrabalhados = $_POST["diasTrabalhados"];
    $diasFerias = $_POST["diasFerias"];

    $diasFerias = $diasTrabalhados / 30;

    if ($diasFerias > 30) {
        $diasFerias = 30;
    }

    echo "Dias de férias possíveis: " . $diasFerias;
}

require_once("footer.php");
?>