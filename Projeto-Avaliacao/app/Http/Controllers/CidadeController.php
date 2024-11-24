<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index()
    {
        $cidades = Cidade::all();
        return view('cidades.index', compact('cidades'));
    }

    public function create()
    {
        return view('cidades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Cidade::create($request->all());

        return redirect()->route('cidades.create')->with('success', 'Cidade cadastrada com sucesso!');
    }

    public function destroy($id)
    {
        $cidade = Cidade::findOrFail($id);
        $cidade->delete();

        return redirect()->route('cidades.index')->with('success', 'Cidade apagada com sucesso!');
    }

    public function edit($id)
    {
        $cidade = Cidade::findOrFail($id);
        return view('cidades.create', compact('cidade'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $cidade = Cidade::findOrFail($id);
        $cidade->update($request->all());

        return redirect()->route('cidades.index')->with('success', 'Cidade atualizada com sucesso!');
    }
}
