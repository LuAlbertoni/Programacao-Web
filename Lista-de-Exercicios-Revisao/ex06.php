<?php require_once("header.php") ?>

<h1>Exercício 06</h1>

<p>Desenvolva uma funcionalidade que estima os custos de um projeto com base nas horas previstas, taxa por hora dos funcionários e custos adicionais. Regras para o cálculo:</p>
<table class="table">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Custo de Mão de Obra</td>
            <td>Custo total com base nas horas previstas e taxa por hora</td>
            <td>Horas Previstas * Taxa por Hora</td>
        </tr>
        <tr>
            <td>Custo Total do Projeto</td>
            <td>Soma do custo de mão de obra e custos adicionais</td>
            <td>Custo de Mão de Obra + Custos Adicionais</td>
        </tr>
    </tbody>
</table>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="horasPrevistas">
                Horas previstas
            </label>
            <input type="number" id="horasPrevistas" name="horasPrevistas" class="form-control" />
        </div>
        <div class="col">
            <label for="taxaHora">
                Taxa por hora
            </label>
            <input type="number" id="taxaHora" name="taxaHora" class="form-control" />
        </div>
        <div class="col">
            <label for="custosAdicionais">
                Custos adicionais
            </label>
            <input type="number" id="custosAdicionais" name="custosAdicionais" class="form-control" />
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
    $horasPrevistas = $_POST["horasPrevistas"];
    $taxaHora = $_POST["taxaHora"];
    $custosAdicionais = $_POST["custosAdicionais"];

    $custoMaoObra = $horasPrevistas * $taxaHora;
    $custoTotalProjeto = $custoMaoObra + $custosAdicionais;

    echo "<p>Custo de mão de obra: R$ " . $custoMaoObra . "</p>";
    echo "<p>Custo total do projeto: R$ " . $custoTotalProjeto . "</p>";
}

require_once("footer.php")
?>