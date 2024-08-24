<?php
abstract class Animal
{
    protected $nome;
    protected $raca;

    abstract public function fazerBarulho();

    // Setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setRaca($raca)
    {
        $this->raca = $raca;
    }

    // Getters
    public function getNome()
    {
        return $this->nome;
    }

    public function getRaca()
    {
        return $this->raca;
    }
}

class Cachorro extends Animal
{
    private $pelagem;

    public function setPelagem($pelagem)
    {
        $this->pelagem = $pelagem;
    }

    public function getPelagem()
    {
        return $this->pelagem;
    }

    public function fazerBarulho()
    {
        return "Au au!";
    }
}
