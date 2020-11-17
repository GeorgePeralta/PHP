<?php 

    include ("../modelo/produto.class.php");

    $produto = new Produto();

    $produto ->setNome("Televisão");
    $produto->setValor(500);
    $produto->setQuantidade(1);

    echo nl2br("<h2>Resultados:</h2>");
    //dados do produto
    echo "<p>Produto: ".$produto->getNome(). '</p>'.
             '<p>Valor R$ '.$produto->getValor(). '</P>'.
             '<p>Quantidade: '.$produto->getQuantidade(). '</P>';
      echo '<br>';       
     //Valor da compra inicial        
            echo '<p>Valor total R$ '.$produto->calcularProduto(). '</P>';
    //condiçoes        
           echo  '<p>Valor de  desconto 10%: R$ '.$produto->calcularValorDeDesconto(). '</P>'.
             '<p>Valor de juros 2,5%:  R$ '.$produto->calcularValorDeJuros(). '</P>';
    //valores finais       
          echo  '<p>Valor total com desconto R$ '.$produto->calcularTotalComDesconto(). '</P>'.
             '<p>Valor total com juros R$ '.$produto->calcularTotalComJuros(). '</P>'; 

?>