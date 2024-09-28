<x-app-layout>
    @section('title', $vaga->titulo)

    <div class="container mt-4">
        <h1>{{ $vaga->titulo }}</h1>
        <span class="{{ $vaga->status === 'aberta' ? 'text-success' : 'text-danger' }}">
            {{ $vaga->status === 'aberta' ? 'Aberta até ' . $vaga->prazo_candidatura->format('d/m/Y') : 'Encerrada' }}
        </span>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Descrição</h5>
                <p class="card-text">{{ $vaga->descricao }}</p>

                <h5 class="card-title">Informações da Vaga</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Cidade:</strong> {{ $vaga->cidade->nome }}</li>
                    <li class="list-group-item"><strong>Salário:</strong> {{ $vaga->salario }}</li>
                    <li class="list-group-item"><strong>Data de Publicação:</strong> {{ $vaga->created_at->format('d/m/Y') }}</li>
                    <li class="list-group-item"><strong>Requisitos:</strong> {{ $vaga->requisitos }}</li>
                </ul>

                <div class="mt-3">
                    <a href="{{ route('vagas.index') }}" class="btn btn-primary">Voltar para a lista de vagas</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
