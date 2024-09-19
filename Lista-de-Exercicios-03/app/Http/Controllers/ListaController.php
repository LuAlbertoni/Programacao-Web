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
        $valor1 = (int)$request->input("val01");
        $valor2 = (int)$request->input("val02");
        
        return $valor1 + $valor2;
    }

    // Exercício 02
    public function mostrarEx02()
    {
        return view("ex02");
    }

    public function calcularEx02(Request $request)
    {
        $valor1 = (int)$request->input("val01");
        $valor2 = (int)$request->input("val02");

        return $valor1 - $valor2;
    }

    // Exercício 03
    public function mostrarEx03()
    {
        return view("ex03");
    }

    public function calcularEx03(Request $request)
    {
        $valor1 = (int)$request->input("val01");
        $valor2 = (int)$request->input("val02");

        return $valor1 * $valor2;
    }

    // Exercício 04
    public function mostrarEx04()
    {
        return view("ex04");
    }

    public function calcularEx04(Request $request)
    {
        $valor1 = (int)$request->input("val01");
        $valor2 = (int)$request->input("val02");

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
        $nota1 = (float)$request->input("nota01");
        $nota2 = (float)$request->input("nota02");
        $nota3 = (float)$request->input("nota03");

        return ($nota1 + $nota2 + $nota3) / 3;
    }

    // Exercício 06
    public function mostrarEx06()
    {
        return view("ex06");
    }

    public function calcularEx06(Request $request)
    {
        $celsius = (float)$request->input("celsius");

        return ($celsius * 9 / 5) + 32;
    }

    // Exercício 07
    public function mostrarEx07()
    {
        return view("ex07");
    }

    public function calcularEx07(Request $request)
    {
        $fahrenheit = (float)$request->input("fahrenheit");

        return ($fahrenheit - 32) * 5 / 9;
    }

    // Exercício 08
    public function mostrarEx08()
    {
        return view("ex08");
    }

    public function calcularEx08(Request $request)
    {
        $largura = (float)$request->input("largura");
        $altura = (float)$request->input("altura");

        return $largura * $altura;
    }

    // Exercício 09
    public function mostrarEx09()
    {
        return view("ex09");
    }

    public function calcularEx09(Request $request)
    {
        $raio = (float)$request->input("raio");

        return pi() * $raio * $raio;
    }

    // Exercício 10
    public function mostrarEx10()
    {
        return view("ex10");
    }

    public function calcularEx10(Request $request)
    {
        $largura = (float)$request->input("largura");
        $altura = (float)$request->input("altura");

        return 2 * ($largura + $altura);
    }

    // Exercício 11
    public function mostrarEx11()
    {
        return view("ex11");
    }

    public function calcularEx11(Request $request)
    {
        $raio = (float)$request->input("raio");

        return 2 * pi() * $raio;
    }

    // Exercício 12
    public function mostrarEx12()
    {
        return view("ex12");
    }

    public function calcularEx12(Request $request)
    {
        $base = (float)$request->input("base");
        $expoente = (float)$request->input("expoente");

        return $base ** $expoente;
    }
}
