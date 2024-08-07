<?php require_once("header.php") ?>

<h1>Exercício 01</h1>

<p>Desenvolva uma funcionalidade que recebe a entrada e saída diária de um funcionário e calcula o total de horas trabalhadas no dia.</p>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="horaEntrada">
                Hora entrada
            </label>
            <input type="time" id="horaEntrada" name="horaEntrada" class="form-control" />
        </div>
        <div class="col">
            <label for="horaSaida">
                Hora saída
            </label>
            <input type="time" id="horaSaida" name="horaSaida" class="form-control" />
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
    $horaEntrada = $_POST["horaEntrada"];
    $horaSaida = $_POST["horaSaida"];

    echo (calcularTempo($horaEntrada, $horaSaida)->format("%H:%I"));
}

function calcularTempo($horaEntrada, $horaSaida)
{
    $horaEntrada = new DateTime($horaEntrada);
    $horaSaida = new DateTime($horaSaida);

    return $horaSaida->diff($horaEntrada);
}

require_once("footer.php")
?>