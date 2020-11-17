<?php
    
    class calculadora 
    {
        private $valor1;
        private $valor2;

        public function getValor1()
        {
            return $this->valor1;
        }

        public function getValor2()
        {
            return $this->valor2;
        }

        public function setValor1($valor1)
        {
            $this->valor1 = $valor1;
        }
        public function setValor2($valor2)
        {
            $this->valor2 = $valor2;
        }

        function somarValores() {
            return $this->valor1 + $this->valor2;
        }

        function subtrairValores() {
            return $this->valor1 - $this->valor2;
        }

        function dividirValores() {
            return $this->valor1 / $this->valor2;
        }

        function multiplicarValores() {
            return $this->valor1 * $this->valor2;
        }
    }
 ?>
