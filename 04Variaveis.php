<?php

    $nome = Fulano;
    $idade = 19;
    $anoNascimento = date("Y") - $idade;
    /**Exibir o nome do usuário e a idade dele*/ 
    echo "Olá, $nome! <br /> Você nasceu em $anoNascimento <br />";
    echo "Hoje é: ". date("d/m/Y");