<!-- Analise o código da classe Funcionario

public class Funcionario {
    private String nome;
    private int codigo;
    private double salarioBase;

    public Funcionario(int codigo, String nome, double salarioBase) {
        this.codigo = codigo;
        this.nome = nome;
        this.salarioBase = salarioBase;
    }

    public String getNome() {
        return nome;
    }

    public int getCodigo() {
        return codigo;
    }

    public double getSalarioBase() {
        return salarioBase;
    }

    public void setSalarioBase(double salarioBase) {
        this.salarioBase = salarioBase;
    }

    public double getSalarioLiquido() {
        double inss = salarioBase * 0.1;
        double ir = 0.0;

        if (salarioBase > 2000) {
            ir = (salarioBase - 2000.0) * 0.12;
        }

        return (salarioBase - inss - ir);
    }

    @Override
    public String toString() {
        return (getClass().getSimpleName() + "\n Codigo: " + getCodigo() + "\n Nome: " + getNome() + "\n Salario Base: " + getSalarioBase() + "\n Salario Liquido: " + getSalarioLiquido());
    }
}

A partir dessa classe, desenvolva as seguintes classes:
    1. Servente: classe derivada da classe Funcionario. Um servente recebe um adicional de 5% a título de
    insalubridade
    2. Motorista: classe derivada da classe Funcionario. Para cada motorista é necessário armazenar o
    número da carteira de motorista
    3. MestreDeObras: classe derivada da classe Servente. Para cada mestre de obras é necessário
    armazenar quantos funcionarios estão sob sua supervisão. Um mestre de obras ganha um adicional
    de 10% para cada grupo de 10 funcionários que estão sob seu comando.
    4. Em todas as classes devem ser acrescentados os métodos get/set necessários. -->

<?php

class Funcionario
{
    private $nome;
    private $codigo;
    private $salarioBase;

    public function __construct($codigo, $nome, $salarioBase)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getSalarioBase()
    {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase)
    {
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioLiquido()
    {
        $inss = $this->salarioBase * 0.1;
        $ir = 0.0;

        if ($this->salarioBase > 2000) {
            $ir = ($this->salarioBase - 2000.0) * 0.12;
        }

        return ($this->salarioBase - $inss - $ir);
    }

    public function gerarString() // Alterado nome para não conflitar com o toString do PHP
    {
        return "Funcionario\n Codigo: " . $this->getCodigo() . "\n Nome: " . $this->getNome() . "\n Salario Base: " . $this->getSalarioBase() . "\n Salario Liquido: " . $this->getSalarioLiquido();
    }
}

class Servente extends Funcionario
{
    public function getSalarioLiquido()
    {
        return parent::getSalarioLiquido() * 1.05; // Utilizado parent para evitar redundância
    }
}

class Motorista extends Funcionario
{
    private $numeroCarteira;

    public function __construct($codigo, $nome, $salarioBase, $numeroCarteira)
    {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->numeroCarteira = $numeroCarteira;
    }

    public function getNumeroCarteira()
    {
        return $this->numeroCarteira;
    }

    public function setNumeroCarteira($numeroCarteira)
    {
        $this->numeroCarteira = $numeroCarteira;
    }
}

class MestreDeObras extends Servente
{
    private $funcionariosSobSupervisao;

    public function __construct($codigo, $nome, $salarioBase, $funcionariosSobSupervisao)
    {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->funcionariosSobSupervisao = $funcionariosSobSupervisao;
    }

    public function getFuncionariosSobSupervisao()
    {
        return $this->funcionariosSobSupervisao;
    }

    public function setFuncionariosSobSupervisao($funcionariosSobSupervisao)
    {
        $this->funcionariosSobSupervisao = $funcionariosSobSupervisao;
    }

    public function getSalarioLiquido()
    {
        return parent::getSalarioLiquido() * (1 + ($this->funcionariosSobSupervisao / 10) * 0.1);
    }
}
