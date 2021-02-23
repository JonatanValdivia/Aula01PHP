<?php
    //var_dump($_GET);
    $nome = ($_GET["nome"]);
    $idade = ($_GET["idade"]);
    $anoNascimento = date("Y") - $idade;

    echo "Olá $nome, você nasceu em $anoNascimento";
    if($idade >= 60){
        echo ", você é do grupo de risco. Cuidado!";
    }else{
        echo ", você não é do grupo de risco, mas cuide-se!";
    }
?>