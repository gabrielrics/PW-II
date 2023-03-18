<?php
    $nome = $_POST['TxNome'];
    $idade = $_POST['TxIdade'];
    $peso = $_POST['TxPeso'];

   
        echo "$nome <br/>";
        echo "$idade ";

    if ($idade>=18){
        echo "maior de idade <br/>";
    }else{
        echo "menor de idade <br/>";
    }
        
        echo "$peso ";

    if($peso>100){
        echo "acima do peso, fazer regime.";
        echo "<body style='background:#f00'></body>";
    }

   
    




















?>