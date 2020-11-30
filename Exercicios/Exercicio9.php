<?php 

echo "<p> 9. EXTRA - Desenvolva um programa que leia o nome, três notas e seus respectivos pesos.
Seu programa deve calcular a média ponderada e motrar na tela o resultado. </p>";

$nota1 = 4;
$nota2 = 5;
$nota3 = 6;
$peso1 = 10;
$peso2= 7;
$peso3 = 5;

$resultado = (($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3)) / ($peso1 + $peso2 + $peso3);

echo '<p> Notas: '.$nota1. ' ; ' .$nota2. ' ; ' .$nota3.'</p>'. 
            '<p> Pesos: '.$peso1. ' ; ' .$peso2. ' ; ' .$peso3. '</p>';           

 echo "<h1>" .$resultado. "</h1>";

 

?>