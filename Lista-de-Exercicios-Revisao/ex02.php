<?php require_once("header.php") ?>

<h1>Exercício 02</h1>

<p>Desenvolva uma funcionalidade que calcula o salário semanal de um funcionário com base nas horas trabalhadas no mês e no valor da hora.</p>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="horasTrabalhadas">
                Horas trabalhadas
            </label>
            <input type="number" id="horasTrabalhadas" name="horasTrabalhadas" class="form-control" />
        </div>
        <div class="col">
            <label for="valorHora">
                Valor da hora
            </label>
            <input type="number" id="valorHora" name="valorHora" class="form-control" />
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
    $horasTrabalhadas = $_POST["horasTrabalhadas"];
    $valorHora = $_POST["valorHora"];

    echo "Salário semanal: R$ " . ($horasTrabalhadas * $valorHora);
}

require_once("footer.php")
?>