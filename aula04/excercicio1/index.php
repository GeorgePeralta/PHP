<?php

    include "calculadora.php";

    $calculadora = new Calculadora();

    $calculadora->setValor1(10);
    $calculadora->setValor2(5);

    echo '<h1> Resultados<h1>';

    echo '<p> Soma: '.$calculadora->somarValores().'</p>'. 
            '<p> Subtração: '.$calculadora->subtrairValores().'</p>'. 
            '<p> Divisão: '.$calculadora->dividirValores().'</p>'. 
            '<p> Multiplicação: '.$calculadora->multiplicarValores().'</p>' ;
?>