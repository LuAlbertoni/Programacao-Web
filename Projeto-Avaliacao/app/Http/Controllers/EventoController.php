<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();

        $eventos->each(function ($evento) {
            $evento->data_evento = Carbon::parse($evento->data_evento);
        });

        return view('eventos.index', compact('eventos'));
    }

    public function create()
    {
        return view('eventos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
            'data_evento' => 'required|date|after_or_equal:today',
        ]);

        $data_evento = Carbon::parse($validated['data_evento']);

        Evento::create([
            'usuario_id' => Auth::id(),
            'titulo' => $validated['titulo'],
            'descricao' => $validated['descricao'],
            'data_evento' => $data_evento,
        ]);

        return redirect()->route('eventos.index')->with('success', 'Evento criado com sucesso.');
    }

    public function show($id)
    {
        $evento = Evento::findOrFail($id);
        return view('eventos.show', compact('evento'));
    }

    public function edit($id)
    {
        $evento = Evento::findOrFail($id);
        return view('eventos.create', compact('evento'));
    }

    public function update(Request $request, $id)
    {
        $evento = Evento::findOrFail($id);

        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
            'data_evento' => 'required|date|after_or_equal:today',
        ]);

        $data_evento = Carbon::parse($validated['data_evento']);

        $evento->update([
            'titulo' => $validated['titulo'],
            'descricao' => $validated['descricao'],
            'data_evento' => $data_evento,
        ]);

        return redirect()->route('eventos.index')->with('success', 'Evento atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();

        return redirect()->route('eventos.index')->with('success', 'Evento deletado com sucesso.');
    }
}
