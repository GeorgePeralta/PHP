<?php

    class Funcionario 
    {
        private $nome;
        private $valorDaHora;
        private $totalDeHorasTrabalhadasNoMes;

        public function __construct(){

        }

        public function getNome() {
            return $this->nome;
        }
        public function getValorDaHora() {
            return $this->valorDaHora;
        }
        public function getTotalDeHorasTrabalhadasNoMes() {
            return $this->totalDeHorasTrabalhadasNoMes;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setValorDaHora($valorDaHora) {
            $this->valorDaHora = $valorDaHora;
        }
        public function setTotalDeHorasTrabalhadasNoMes($totalDeHorasTrabalhadasNoMes){
            $this->totalDeHorasTrabalhadasNoMes = $totalDeHorasTrabalhadasNoMes;
        }

        //calculo salario bruto
        public function calcularSalarioBruto(){
            return ($this->valorDaHora * $this->totalDeHorasTrabalhadasNoMes);
        }

        //calculo do vale transporte
        public function calcularValeTransporte() {
            return $this->calcularSalarioBruto() * 0.06;
        }


    }//fim

?>