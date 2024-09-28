<x-app-layout>
    @section('title', 'Vagas Disponíveis')

    <div class="container mt-4">
        <h1 class="mb-4 text-center">Vagas Disponíveis</h1>

        @if ($message = Session::get('success'))
        <div class="alert alert-success text-center">{{ $message }}</div>
        @endif

        <ul class="list-group">
            @foreach ($vagas as $vaga)
            <li class="list-group-item mb-3">
                <h2 class="h5">{{ $vaga->titulo }}</h2>
                <p class="text-muted">{{ $vaga->descricao }}</p>
                <div class="text-right">
                    <a href="{{ route('vagas.show', $vaga->id) }}" class="btn btn-primary">Detalhes</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
