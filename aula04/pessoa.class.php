<?php

  /**
   *
   */
  class Pessoa
  {
    //atributos
    private $nome;
    private $idade;

    //getter and setter
    public function getNome()
    {
      return $this->nome;
    }

    public function setNome($nome)
    {
      $this->nome = $nome;
    }
    public function getIdade()
    {
      return $this->idade;
    }
    public function setIdade($idade)
    {
      $this->idade = $idade;
    }

    public function calcularIdadeEmMeses() {
      return $this->idade * 12;
    }
  }//fim da classe
 ?>
