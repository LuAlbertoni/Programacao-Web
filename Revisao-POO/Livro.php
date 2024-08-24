<?php

class Livro
{
    private $titulo;
    private $autor;
    private $ano;

    public function __construct($titulo, $autor, $ano)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->setAno($ano);
    }

    // Setters
    public function setTitutlo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function setAno($ano)
    {
        if ($ano < 1900)
            $ano = 1900;

        $this->ano = $ano;
    }

    // Getters
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getAutor()
    {
        return $this->autor;
    }

    public function getAno()
    {
        return $this->ano;
    }
}

$obj = new Livro("Livro Exemplo", "Nome Qualquer", 1899);
var_dump($obj);
