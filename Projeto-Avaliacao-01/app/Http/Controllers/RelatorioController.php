<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelatorioController extends Controller
{
    public function index()
    {
        $vagas_abertas = Vaga::where('usuario_id', Auth::id())
            ->where('status', 'aberta')
            ->get();

        $vagas_fechadas = Vaga::where('usuario_id', Auth::id())
            ->where('status', 'fechada')
            ->get();

        $total_vagas = $vagas_abertas->count() + $vagas_fechadas->count();
        $total_vagas_abertas = $vagas_abertas->count();
        $total_vagas_fechadas = $vagas_fechadas->count();
        $total_cliques = $vagas_abertas->sum('total_cliques') + $vagas_fechadas->sum('total_cliques');

        return view('relatorios.index', compact(
            'vagas_abertas',
            'vagas_fechadas',
            'total_vagas',
            'total_cliques',
            'total_vagas_abertas',
            'total_vagas_fechadas'
        ));
    }
}
