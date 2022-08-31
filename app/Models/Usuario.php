<?php

class Usuario
{
    private $id;
    private $nome;
    private $sexo;
    private $idade;
    private $peso;
    private $altura;
    private $imc;
    private $msg;
    public $erro = [];

    public function __construct($nome, $sexo, $idade, $, $altura)
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }
    
    //id
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    //nome
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    //sexo
    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    //idade
    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    //peso
    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    //altura
    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    //imc
    public function getImc()
    {
        return $this->imc;
    }

    //msg
    public function getMsg()
    {
        return $this->msg;
    }
}

?>