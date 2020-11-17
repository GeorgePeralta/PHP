<?php 

class produto 
{
    private $nome;
    private $valor;
    private $quantidade;    

    function Produto() {

    }

    /** contrutor mágico
     * function __construct() {}
     */
    
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;   
    }
    public function getValor() {
        return $this->valor;
    }
    public function setValor($valor) {
        $this->valor = $valor;   
    }
    public function getQuantidade() {
        return $this->quantidade;
    }
    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;   
    }

    //calculo do produto
    public function calcularProduto() {
        return $this->valor  * $this->quantidade; 
    }

    //calculo do desconto 
    public function calcularValorDeDesconto () {
        return ($this->calcularProduto() * 0.10);
    }
    //calculo de juros
    public function calcularValorDeJuros(){
        return ($this->calcularProduto() * 0.025);
    }
    public function calcularTotalComDesconto( ) {
        return $this->calcularProduto() - ($this->calcularProduto() * 0.10);
    }
    public function calcularTotalComJuros() {
        return ($this->calcularProduto() * 0.025) + $this->calcularProduto();
    }

}//fim

?>