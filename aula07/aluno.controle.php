<?php

        include "aluno.class.php";

        $aluno = new Aluno();

        $aluno->setNota1(8);
        $aluno->setNota2(9);

        echo "<h1> Resultados</h1>";

        echo "<h3> Media Final: " .$aluno->calcularMedia(). "</h3>";
        echo "<h3>Status Aluno: " .$aluno->status(). "</h3>";

?>