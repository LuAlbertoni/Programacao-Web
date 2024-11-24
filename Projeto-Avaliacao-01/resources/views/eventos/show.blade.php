<x-app-layout>
    <div class="container mt-5">
        <h2 class="mb-4">{{ $evento->titulo }}</h2>

        <div class="card mb-4">
            <div class="card-body">
                <p>{{ $evento->descricao }}</p>
            </div>
        </div>

        <div class="mb-4">
            <strong>Data do Evento:</strong>
            <span>{{ \Carbon\Carbon::parse($evento->data_evento)->format('d/m/Y H:i') }}</span>
        </div>

        <div class="d-flex justify-content-start">
            <a href="{{ route('eventos.index') }}" class="btn btn-secondary mr-2">Voltar para a lista</a>
            <a href="{{ route('eventos.edit', $evento->id) }}" class="btn btn-primary mr-2">Editar</a>

            <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Tem certeza que deseja excluir este evento?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Apagar</button>
            </form>
        </div>
    </div>
</x-app-layout>
