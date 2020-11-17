<?php

    echo '<h1> Em um sistema de condomínio precisamos gerar uma multa de 37% em cima de uma
    parcela que esteja vencida a vários meses. A parcela possui um valor de R$125,00.</h1>';

    $valorDaParcela = 125; 
    $valorDaMulta = 0.37;  //Juros

    //calculando a porcentagem 
    $valorDoJuros = ($valorDaParcela * $valorDaMulta);
    $parcelaAtrasada = ($valorDaParcela + $valorDoJuros);

    echo '<h3> Parcela Inicial: R$ ' .$valorDaParcela;
    echo '<h3> Valor da Multa 37%: R$ ' .$valorDoJuros;
    echo '<h3> Valor Total a pagar: R$ ' .$parcelaAtrasada;


?>