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

    // Exercício 05
    public function mostrarEx05()
    {
        return view("ex05");
    }

    public function calcularEx05(Request $request)
    {
        $nota1 = (float)$request->input('nota01');
        $nota2 = (float)$request->input('nota02');
        $nota3 = (float)$request->input('nota03');
        return ($nota1 + $nota2 + $nota3) / 3;
    }

    // Exercício 06
    public function mostrarEx06()
    {
        return view("ex06");
    }

    public function calcularEx06(Request $request)
    {
        $celsius = (float)$request->input('celsius');
        return ($celsius * 9 / 5) + 32;
    }
}
