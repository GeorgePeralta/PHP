<?php

    class Aluno 
    {

        private $nota1;
        private $nota2;

        public function  __construct(){

        }

        public function getNota1(){
            return $this->nota1;
        }
        public function getNota2(){
            return $this->nota2;
        }
        public function setNota1($nota1){
            $this->nota1 = $nota1;
        }
        public function setNota2($nota2){
            $this->nota2 = $nota2;
        }

        function calcularMedia(){
            return ($this->nota1 + $this->nota2)/2;
        }

        function status(){
            if($this->calcularMedia() >= 6 ) {
                return "Aluno Aprovado!";
            }elseif ($this->calcularMedia() >= 4 && $this->calcularMedia() <=5.9 ) {
                return "Aluno em exame!";
            } else {
                return "Aluno reprovado!";
            }
        }

    }//fim
   
?>