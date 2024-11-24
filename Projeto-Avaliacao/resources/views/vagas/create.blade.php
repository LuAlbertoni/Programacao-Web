<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ isset($vaga) ? __('Editar Vaga') : __('Criar Nova Vaga') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
            @endif

            <form action="{{ isset($vaga) ? route('vagas.update', $vaga->id) : route('vagas.store') }}" method="POST">
                @csrf
                @if (isset($vaga))
                @method('PUT')
                @endif

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" value="{{ isset($vaga) ? $vaga->titulo : '' }}" required>
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" class="form-control" rows="4" required>{{ isset($vaga) ? $vaga->descricao : '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="requisitos">Requisitos</label>
                    <textarea name="requisitos" id="requisitos" class="form-control" rows="4">{{ isset($vaga) ? $vaga->requisitos : '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="salario">Salário</label>
                    <input type="number" name="salario" id="salario" class="form-control" value="{{ isset($vaga) ? $vaga->salario : '' }}">
                </div>

                <div class="form-group">
                    <label for="prazo_candidatura">Prazo para Candidatura</label>
                    <input type="date" name="prazo_candidatura" id="prazo_candidatura" class="form-control" value="{{ isset($vaga) ? $vaga->prazo_candidatura : '' }}">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="aberta" {{ isset($vaga) && $vaga->status === 'aberta' ? 'selected' : '' }}>Aberta</option>
                        <option value="fechada" {{ isset($vaga) && $vaga->status === 'fechada' ? 'selected' : '' }}>Fechada</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cidade_id">Cidade</label>
                    <select name="cidade_id" id="cidade_id" class="form-control" required>
                        <option value="">Selecione uma cidade</option>
                        @foreach ($cidades as $cidade)
                        <option value="{{ $cidade->id }}" {{ isset($vaga) && $vaga->cidade_id == $cidade->id ? 'selected' : '' }}>{{ $cidade->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">{{ isset($vaga) ? 'Atualizar Vaga' : 'Criar Vaga' }}</button>
                <a href="{{ route('vagas.index') }}" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </div>
</x-app-layout>
