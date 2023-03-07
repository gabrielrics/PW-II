<?php
    $nome = $_POST['txNome'];
    $idade = $_POST['txIdade'];    

    $verificacao="";
    // > maior
    // < menor
    // >= maior ou igual
    // <= menor ou igual 
    // == igualdade
    // != diferente
    /*
    if($idade>17){
        $verificacao = "Maior de idade";
    }
    else{
        $verificacao = "Menor de idade";
    }
    */
    if($idade <=10){
        $verificacao = "Criança e menor de idade";
    }
    else if($idade < 18){
        $verificacao = "Menor de idade";
    }
    else{
        $verificacao = "Maior de idade";
    }

    echo "$nome $idade $verificacao";
?>