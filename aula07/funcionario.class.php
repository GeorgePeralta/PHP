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

        public function calcularDescontoINSS() {
            if ($this->calcularSalarioBruto() <= 1045 ) {
                return $this->calcularSalarioBruto() * 0.075;
            } 
            elseif ($this->calcularSalarioBruto() >= 1045.01 && $this->calcularSalarioBruto() <= 2089.60) {
                return $this->calcularSalarioBruto() * 0.09;
            }
            elseif ($this->calcularSalarioBruto() >= 2089.61 && $this->calcularSalarioBruto() <= 3134.40 ) {
                return $this->calcularSalarioBruto() * 0.12;
            }
            elseif ($this->calcularSalarioBruto() >= 3134.41 && $this->calcularSalarioBruto() <= 6101.06 ) {
                return $this->calcularSalarioBruto() * 0.14;
            }
            else {
                echo "Valor inválido!";
            }
        } 

        public function calcularSalarioLiquido() {
            return ($this->calcularSalarioBruto() - $this->calcularDescontoINSS()) - $this->calcularValeTransporte();
        }

    }//fim

?>