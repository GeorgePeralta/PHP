<?php

    $numero = 0;

    switch ($numero ) {

        case 1: 
            $mensagem = ' Uma televisão';
        break;

        case 2:
            $mensagem = ' Uma bicicleta';
        break;

        case 3:
            $mensagem = ' Um smartphone';
        break;

        case 4:
            $mensagem = ' Um tablet ';
        break;

        case 5:
            $mensagem = ' Uma geladeira';
        break;

        default:
        $mensagem = ' Não foi desta vez ';
    break;
    }//fim switch

    echo "Parabéns você ganhou: {$mensagem} ";

?>