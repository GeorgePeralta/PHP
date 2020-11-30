<?php 

class carRental 
{
    private $valorDalocacao;
    private $quantidadeDeDiarias;
    private $veiculo;
    private $tipoDeVeiculo; 
    private $tipoDeCombustivel;
    

    /**
     * Get the value of valorDalocacao
     */ 
    public function getValorDalocacao()
    {
        return $this->valorDalocacao;
    }

    /**
     * Set the value of valorDalocacao
     *
     * @return  self
     */ 
    public function setValorDalocacao($valorDalocacao)
    {
        $this->valorDalocacao = $valorDalocacao;

        return $this;
    }

    /**
     * Get the value of quantidadeDeDiarias
     */ 
    public function getQuantidadeDeDiarias()
    {
        return $this->quantidadeDeDiarias;
    }

    /**
     * Set the value of quantidadeDeDiarias
     *
     * @return  self
     */ 
    public function setQuantidadeDeDiarias($quantidadeDeDiarias)
    {
        $this->quantidadeDeDiarias = $quantidadeDeDiarias;

        return $this;
    }

    /**
     * Get the value of veiculo
     */ 
    public function getVeiculo()
    {
        return $this->veiculo;
    }

    /**
     * Set the value of veiculo
     *
     * @return  self
     */ 
    public function setVeiculo($veiculo)
    {
        $this->veiculo = $veiculo;

        return $this;
    }

    /**
     * Get the value of tipoDeVeiculo
     */ 
    public function getTipoDeVeiculo()
    {
        return $this->tipoDeVeiculo;
    }

    /**
     * Set the value of tipoDeVeiculo
     *
     * @return  self
     */ 
    public function setTipoDeVeiculo($tipoDeVeiculo)
    {
        $this->tipoDeVeiculo = $tipoDeVeiculo;

        return $this;
    }

    /**
     * Get the value of tipoDeCombustivel
     */ 
    public function getTipoDeCombustivel()
    {
        return $this->tipoDeCombustivel;
    }

    /**
     * Set the value of tipoDeCombustivel
     *
     * @return  self
     */ 
    public function setTipoDeCombustivel($tipoDeCombustivel)
    {
        $this->tipoDeCombustivel = $tipoDeCombustivel;

        return $this;
    }

    public function calcularDiarias() 
    {
        return ($this->valorDalocacao * $this->quantidadeDeDiarias);        
    }

    public function tipoDeVeiculo()
    {
        switch ($this->tipoDeVeiculo) {
            case 1: 
                 $resultado = $this->calcularDiarias() * 0.02;
            break;

            case 2: 
                $resultado = $this->calcularDiarias() * 0.05;
            break;

            default:
                $resultado = "Não existe categorias neste resultado";
        break;
        }
        return $resultado;
    }

    public function cacularTotalAPagar() 
    {
        switch ($this->tipoDeCombustivel) {
            case 1:
                $total = ($this->calcularDiarias() + $this->tipoDeVeiculo() ) + 50;
            break;

            case 2:
                $total = ($this->calcularDiarias() + $this->tipoDeVeiculo() ) + 100;
            break;

            default:
            $total = "Não há combustiveis disponiveis nesta";
        break;
        }
        return $total;
    }

}




?>