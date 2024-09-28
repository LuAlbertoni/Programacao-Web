<x-app-layout>
    @section('title', 'Cadastrar Cidades')

    <div class="container mt-5">
        <h1 class="mb-4">Cadastrar Cidade</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Informações da Cidade</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('cidades.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome da Cidade</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="{{ route('cidades.index') }}" class="btn btn-secondary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
