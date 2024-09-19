<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    // Exercício 01
    public function mostrarEx01()
    {
        return view("ex01");
    }

    public function calcularEx01(Request $request)
    {
        $valor1 = (int)$request->input('val01');
        $valor2 = (int)$request->input('val02');
        return $valor1 + $valor2;
    }

    // Exercício 02
    public function mostrarEx02()
    {
        return view("ex02");
    }

    public function calcularEx02(Request $request)
    {
        $valor1 = (int)$request->input('val01');
        $valor2 = (int)$request->input('val02');
        return $valor1 - $valor2;
    }

    // Exercício 03
    public function mostrarEx03()
    {
        return view("ex03");
    }

    public function calcularEx03(Request $request)
    {
        $valor1 = (int)$request->input('val01');
        $valor2 = (int)$request->input('val02');
        return $valor1 * $valor2;
    }

    // Exercício 04
    public function mostrarEx04()
    {
        return view("ex04");
    }

    public function calcularEx04(Request $request)
    {
        $valor1 = (int)$request->input('val01');
        $valor2 = (int)$request->input('val02');
        if ($valor2 == 0) {
            return "Divisão por zero!";
        }
        return $valor1 / $valor2;
    }
}
