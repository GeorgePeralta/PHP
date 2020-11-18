<?php

    $estacao = 2;

    switch ($estacao) {

        case 1: 
            $mensagem = 'Verão é de 21 de junho a 23 de setembro.';
        break;
        case 2: 
            $mensagem = 'Outono é de 22 ou 23 de setembro a 22 de dezembro.';
        break;
        case 3: 
            $mensagem = 'Inverno é de 22 de dezembro a 20 de março.';
        break;
        case 4:
            $mensagem = 'Primavera é  de 20 de março a 21 de junho.';
        break;
        default: 
        $mensagem = ' Não encontrada estação!';
    break;
    }

    echo " A estação  {$mensagem}" ; 


?>