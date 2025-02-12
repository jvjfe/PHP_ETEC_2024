<?php
class Imc
{
    // Definição dos atributos
    private $nome;
    private $peso;
    private $altura;
    private $imc;
    private $resultado;

    // Método Construtor
    function __construct($nome,$peso,$altura){
        $this->nome = $nome;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->calcularImc();
        $this->calcularResultado();
    }

    // Getters
    public function getNome()
    {
        return $this->nome;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function getImc()
    {
        return $this->imc;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    // Setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function setImc($imc)
    {
        $this->imc = $imc;
    }

    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }

    // Método para calcular o IMC
    public function calcularImc()
    {
        if ($this->altura > 0) {
            $this->imc = $this->peso / ($this->altura * $this->altura);
        } else {
            $this->imc = 0;
        }
    }

    // Método para determinar o resultado com base no IMC
    public function calcularResultado()
    {
        if ($this->imc < 18.5) {
            $this->resultado = "Abaixo do peso";
        } elseif ($this->imc >= 18.5 && $this->imc < 24.9) {
            $this->resultado = "Peso normal";
        } elseif ($this->imc >= 25 && $this->imc < 29.9) {
            $this->resultado = "Sobrepeso";
        } else {
            $this->resultado = "Obesidade";
        }
    }
}
