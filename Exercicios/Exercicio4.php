<?php 

    echo "<p>4. Desenvolva um algoritmo que receba o nome de um produto, seu valor e quantidade de compras. Sendo:<br>
    produto = Bis<br>
    valor = 4.50<br>
    quantidade = 10<br>
   Seu programa deve calcular o valor a pagar.</p>";


   //variaveis
    $produto = "Bis";
    $valor = 4.50;
    $quantidade = 10;


    //resultado em tela
    echo "<h1> "  .$produto. "</h1>";
    echo "<h1>  " .$quantidade. " x " .$valor.  " </h1>";
    echo "<h1>Total R$ " .($valor * $quantidade). "</h1>"




?>