<x-app-layout>
    <div class="container">
        <h2>Lista de Eventos</h2>
        
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <a href="{{ route('eventos.create') }}" class="btn btn-success mb-3">Criar Novo Evento</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Data do Evento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eventos as $evento)
                <tr>
                    <td>{{ $evento->titulo }}</td>
                    <td>{{ $evento->data_evento->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('eventos.show', $evento->id) }}" class="btn btn-info">Ver Detalhes</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
