<?php


class Boletim
{
    // definição de atributos
    private $nome;

    private $nota1;

    private $nota2;

    private $media;

    private $resultado;

    //Codificar/implementar os SETTERS (atribuir)

    function setNome($valor)
    {
        $nome = $valor;
    }

    function setNota1($valor)
    {
        $this->nota1 = $valor;
    }

    function setNota2($valor)
    {
        $this->nota2 = $valor;
    }

    function setMedia($valor)
    {
        $this->media = $valor;
    }

    //CODIFICAR/IMPLEMENTAR os GET (retornar)

    function getNome()
    {
        return $this->nome;
    }
    function getNota1()
    {
        return $this->nota1;
    }
    function getNota2()
    {
        return $this->nota2;
    }
    function getMedia()
    {
        return $this->media;
    }
    function getResultado()
    {
        return $this->resultado;
    }

    //construção de métodos
    function calcularMedia(){
        $this->media = ($this->nota1+$this->nota2)/2;
    }

    function calcularResultado(){
        $this->resultado = ($this->media >= 5) ? "Aprovado" : "Reprovado";
    }

}
