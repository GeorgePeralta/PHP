<?php

    $valor = 0;
    $resultado = " ";

    if($valor > 0) {
        $resultado = "Valor positivo!" .$valor;
    }
    elseif ($valor < 0) {
        $resultado = "Valor Negativo! ".$valor;

    } else {
        $resultado = "Valor igual a zero" ; 
    } 

    echo $resultado;


?>