<?php

    include "funcionario.class.php";

    $funcionario = new Funcionario();

    $funcionario->setNome("João de Souza");
    $funcionario->setValorDaHora(15);
    $funcionario->setTotalDeHorasTrabalhadasNoMes(175);

    echo '<h1> Dados do Funcionario: </h1>';

    echo '<h3> Nome: ' .$funcionario->getNome(). '</h3>';
    echo '<h3> Valor da Hora: ' .$funcionario->getValorDaHora(). '</h3>';
    echo '<h3> Horas trabalhadas no mês: ' .$funcionario->getTotalDeHorasTrabalhadasNoMes(). '</h3>';
    echo '<h3> VT : ' .$funcionario->calcularValeTransporte(). '</h3>';
    echo '<h3> Salario Bruto: ' .$funcionario->calcularSalarioBruto(). '</h3>';


?>