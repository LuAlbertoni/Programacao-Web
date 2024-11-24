<x-app-layout>
    @section('title', 'Listar Cidades')

    <div class="container mt-4">
        <h1>Listar Cidades</h1>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome da Cidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cidades as $cidade)
                <tr>
                    <td>{{ $cidade->id }}</td>
                    <td>{{ $cidade->nome }}</td>
                    <td>
                        <a href="{{ route('cidades.edit', $cidade->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('cidades.destroy', $cidade->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esta cidade?')">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('cidades.create') }}" class="btn btn-primary">Cadastrar Nova Cidade</a>
    </div>
</x-app-layout>
