<?php require_once("header.php") ?>

<h1>Exercício 04</h1>

<p>Desenvolva uma funcionalidade que leia os dados de uma tarefa de um projeto (nome da tarefa, total de horas da tarefa e complexidade – alta, média e baixa). No mesmo formulário, leia também os dados do funcionário candidato a realizar essa tarefa (nome do funcionário, total de horas disponíveis de trabalho e nível de experiência – júnior, pleno ou sênior). A resposta para o cálculo deve seguir a seguinte lógica:</p>
<ol>
    <li>Um funcionário só pode realizar uma tarefa se tiver disponibilidade de tempo maior do que o solicitado na tarefa em ao menos 10%;</li>
    <li>Funcionários com nível de experiência júnior podem assumir apenas tarefas de complexidade baixa;</li>
    <li>Funcionários com nível de experiência pleno podem assumir apenas tarefas de complexidade baixa e média;</li>
    <li>Funcionários com nível de experiência sênior podem assumir apenas tarefas de complexidade média e alta.</li>
</ol>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="nomeTarefa">
                Nome da tarefa
            </label>
            <input type="text" id="nomeTarefa" name="nomeTarefa" class="form-control" />
        </div>
        <div class="col">
            <label for="totalHorasTarefa">
                Total de horas da tarefa
            </label>
            <input type="number" id="totalHorasTarefa" name="totalHorasTarefa" class="form-control" />
        </div>
        <div class="col">
            <label for="complexidadeTarefa">
                Complexidade da tarefa
            </label>
            <select id="complexidadeTarefa" name="complexidadeTarefa" class="form-control">
                <option value="alta">Alta</option>
                <option value="media">Média</option>
                <option value="baixa">Baixa</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="nomeFuncionario">
                Nome do funcionário
            </label>
            <input type="text" id="nomeFuncionario" name="nomeFuncionario" class="form-control" />
        </div>
        <div class="col">
            <label for="totalHorasFuncionario">
                Total de horas disponíveis de trabalho
            </label>
            <input type="number" id="totalHorasFuncionario" name="totalHorasFuncionario" class="form-control" />
        </div>
        <div class="col">
            <label for="nivelExperiencia">
                Nível de experiência
            </label>
            <select id="nivelExperiencia" name="nivelExperiencia" class="form-control">
                <option value="junior">Júnior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $nomeTarefa = $_POST["nomeTarefa"];
    $totalHorasTarefa = $_POST["totalHorasTarefa"];
    $complexidadeTarefa = $_POST["complexidadeTarefa"];
    $nomeFuncionario = $_POST["nomeFuncionario"];
    $totalHorasFuncionario = $_POST["totalHorasFuncionario"];
    $nivelExperiencia = $_POST["nivelExperiencia"];

    $resposta = "";

    if ($totalHorasFuncionario < $totalHorasTarefa * 1.1) {
        $resposta = "Funcionário não tem disponibilidade de tempo maior do que o solicitado na tarefa em ao menos 10%";
    } else {
        switch ($nivelExperiencia) {
            case "junior":
                if ($complexidadeTarefa != "baixa") {
                    $resposta = "Funcionários com nível de experiência júnior podem assumir apenas tarefas de complexidade baixa";
                }
                break;
            case "pleno":
                if ($complexidadeTarefa == "alta") {
                    $resposta = "Funcionários com nível de experiência pleno podem assumir apenas tarefas de complexidade baixa e média";
                }
                break;
            case "senior":
                if ($complexidadeTarefa == "baixa") {
                    $resposta = "Funcionários com nível de experiência sênior podem assumir apenas tarefas de complexidade média e alta";
                }
                break;
        }
    }

    echo $resposta;
}

require_once("footer.php")
?>