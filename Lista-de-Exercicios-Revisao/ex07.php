<?php require_once("header.php") ?>

<h1>Exercício 07</h1>

<p>Crie uma simulação que avalia o desempenho de um projeto ao longo do tempo com base no progresso das tarefas, prazos e produtividade dos funcionários. Para isso, é necessário saber qual é o prazo para a finalização do projeto, quantas atividades foram estabelecidas para o projeto, quantas atividades já foram desenvolvidas e quantas atividades a equipe do projeto consegue desenvolver por dia.</p>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="prazo">
                Prazo para finalização do projeto
            </label>
            <input type="date" id="prazo" name="prazo" class="form-control" />
        </div>
        <div class="col">
            <label for="atividadesEstabelecidas">
                Atividades estabelecidas
            </label>
            <input type="number" id="atividadesEstabelecidas" name="atividadesEstabelecidas" class="form-control" />
        </div>
        <div class="col">
            <label for="atividadesDesenvolvidas">
                Atividades desenvolvidas
            </label>
            <input type="number" id="atividadesDesenvolvidas" name="atividadesDesenvolvidas" class="form-control" />
        </div>
        <div class="col">
            <label for="atividadesDia">
                Atividades por dia
            </label>
            <input type="number" id="atividadesDia" name="atividadesDia" class="form-control" />
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
    $prazo = $_POST["prazo"];
    $atividadesEstabelecidas = $_POST["atividadesEstabelecidas"];
    $atividadesDesenvolvidas = $_POST["atividadesDesenvolvidas"];
    $atividadesDia = $_POST["atividadesDia"];

    $diasRestantes = (strtotime($prazo) - strtotime(date("Y-m-d"))) / 86400;
    $atividadesRestantes = $atividadesEstabelecidas - $atividadesDesenvolvidas;
    $diasNecessarios = $atividadesRestantes / $atividadesDia;

    if ($diasNecessarios > $diasRestantes) {
        echo "O projeto não será entregue no prazo.";
    } else {
        echo "O projeto será entregue no prazo.";
    }
}

require_once("footer.php")
?>