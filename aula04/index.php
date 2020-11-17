<?php

//incluindo o acesso a classe pessoa
include "pessoa.class.php";

$pessoa = new Pessoa();
$pessoa->setNome("George");
$pessoa->setIdade(26);

echo '<h1> Este é o resultado final:</h1>';
echo '<h6> Nome: '.$pessoa->getNome().'</h6>';
echo '<h6> Idade: '.$pessoa->getIdade().'</h6>';
echo '<h6> Idade em meses: '.$pessoa->calcularIdadeEmMeses().'</h6>';

 ?>
