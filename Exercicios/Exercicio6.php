<?php

echo "<p> 6. Desenvolva um algoritmo CONVERSOR, este deve ler número de anos (10), e deverá converter este ano para meses, 
converter ano para semana, converter ano para dias. Ex.: 1 ano, 12 meses, 52 semanas, 365 dias.  </p>";

    //variaveis
    $ano = 10;
    $meses = 12;
    $semanas = 52.143;
    $dias = 365;
    
    //resultado em tela
    echo "<h1>" .$ano. " anos tem " .($ano * $meses). " meses, " .($ano * $semanas). " semanas, " .($ano * $dias). " dias"; "</h1>";

?>