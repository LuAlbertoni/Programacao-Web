<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Criar Nova Vaga') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
            @endif

            <form action="{{ route('vagas.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" class="form-control" rows="4" required></textarea>
                </div>

                <div class="form-group">
                    <label for="requisitos">Requisitos</label>
                    <textarea name="requisitos" id="requisitos" class="form-control" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label for="salario">Salário</label>
                    <input type="number" name="salario" id="salario" class="form-control">
                </div>

                <div class="form-group">
                    <label for="prazo_candidatura">Prazo para Candidatura</label>
                    <input type="date" name="prazo_candidatura" id="prazo_candidatura" class="form-control">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="aberta">Aberta</option>
                        <option value="fechada">Fechada</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cidade_id">Cidade</label>
                    <select name="cidade_id" id="cidade_id" class="form-control" required>
                        <option value="">Selecione uma cidade</option>
                        @foreach ($cidades as $cidade)
                        <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Criar Vaga</button>
                <a href="{{ route('vagas.index') }}" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </div>
</x-app-layout>
