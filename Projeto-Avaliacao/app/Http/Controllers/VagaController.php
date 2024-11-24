<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;
use App\Models\Cidade;

class VagaController extends Controller
{
    public function index()
    {
        $vagas = Vaga::all();
        return view('vagas.index', compact('vagas'));
    }

    public function create()
    {
        $cidades = Cidade::all();
        return view('vagas.create', compact('cidades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'cidade_id' => 'required|exists:cidades,id',
            'prazo_candidatura' => 'required|date',
        ]);

        $vagaData = $request->all();
        $vagaData['usuario_id'] = \Illuminate\Support\Facades\Auth::user()->id;

        if (isset($vagaData['prazo_candidatura'])) {
            $vagaData['prazo_candidatura'] = \Carbon\Carbon::parse($vagaData['prazo_candidatura'])->format('Y-m-d');
        }

        Vaga::create($vagaData);
        return redirect()->route('vagas.index')->with('success', 'Vaga criada com sucesso!');
    }

    public function edit($id)
    {
        $vaga = Vaga::findOrFail($id);
        $cidades = Cidade::all();
        $vaga->prazo_candidatura = \Carbon\Carbon::parse($vaga->prazo_candidatura)->format('Y-m-d');
        return view('vagas.create', compact('vaga', 'cidades'));
    }

    public function show($id)
    {
        $vaga = Vaga::findOrFail($id);

        $vaga->increment('total_cliques');

        return view('vagas.show', compact('vaga'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'cidade_id' => 'required',
        ]);

        $vaga = Vaga::findOrFail($id);
        $vaga->update($request->all());

        return redirect()->route('vagas.index')->with('success', 'Vaga atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $vaga = Vaga::findOrFail($id);
        $vaga->delete();

        return redirect()->route('vagas.index')->with('success', 'Vaga apagada com sucesso!');
    }
}
