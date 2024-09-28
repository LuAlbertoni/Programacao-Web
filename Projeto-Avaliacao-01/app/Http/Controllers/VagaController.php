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
            'cidade_id' => 'required',
        ]);

        $vagaData = $request->all();
        $vagaData['data_postagem'] = now();

        Vaga::create($vagaData);
        return redirect()->route('vagas.index')->with('success', 'Vaga criada com sucesso!');
    }

    public function show($id)
    {
        $vaga = Vaga::findOrFail($id);
        return view('vagas.show', compact('vaga'));
    }
}
