<x-app-layout>
    <div class="container">
        <h2>{{ isset($evento) ? 'Editar Evento' : 'Criar Evento' }}</h2>

        <form action="{{ isset($evento) ? route('eventos.update', $evento->id) : route('eventos.store') }}" method="POST">
            @csrf
            @if(isset($evento))
            @method('PUT')
            @endif

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $evento->titulo ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" required>{{ old('descricao', $evento->descricao ?? '') }}</textarea>
            </div>
            <div class="form-group">
                <label for="data_evento">Data do Evento</label>
                <input type="datetime-local" class="form-control" id="data_evento" name="data_evento" value="{{ old('data_evento', \Carbon\Carbon::parse($evento->data_evento ?? now())->format('Y-m-d\TH:i')) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($evento) ? 'Atualizar Evento' : 'Criar Evento' }}</button>
        </form>
    </div>
</x-app-layout>
