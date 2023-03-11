<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
</head>
<body>
    
    <?php
        /*$opcao = 1;

        if($opcao==1)
            echo "Adição";

        else if($opcao==2)
            echo "Subtração";
        
        else if($opcao==3)
            echo "Multiplicação";

        else if($opcao==4)
            echo "Divisão"; 

        else
            echo "Opção Inválida";
        */

    ?>


    <?php
        /*$opcao = 1;

        switch($opcao){
            case 1:
                echo "Adição";
                break;

            case 2:
                echo "Subtração";
                break;

            case 3:
                echo "Multiplicação";
                break;
                
            case 4:
                echo "Divisão";
                break;

            default:
                echo "Opção inválida";
            }*/
        
    ?>

    <?php
        
        /*for($i=0; $i<=10;$i++){
            echo "Esse é o número: $i" . "<br />";
        }*/
        
    ?>

    <?php
        /*$numero = 5;

        for($i=0; $i<=10;$i++){
            $multiplicacao = $i * $numero;
            echo "<p> $numero * $1 = $multiplicacao </p>";
        }*/
        
    ?>
    
    <?php
        
        /*$soma =0;
        $total = 0;

        for($i=0; $i<=100;$i++){

            $total = $soma + $i;
                echo "<p> $soma + $i é igual a: $total </p>";
                $soma = $total;
        }*/
        
    ?>

    <?php 
        
        /*for($i=0;$i<=100;$i+=2)
            echo "<p> $i </p>";
        */
    ?>

    <?php
       /* $i=0;
        while($i<100){
            $i+=2;
            echo "<p> $i </p>";
        }*/
    ?>

    <?php
        /*$i=0;

        do{   
           $soma+=2;
        }while($i<=100);
        echo "<p>nada $i </p>";
        */
    ?>
        <style>
        .verde{
            backgroud: #7fff00;
        }
        .roxo{
            color: #800080;
        }
        </style>
    <?php
        
        $i=0;
        while($i<100){

        if($i%2==0){
            echo "<p style='background:#7fff00'> $i </p>";
        }else{
            echo "<p style='background:#800080'> $i </p>";
        }
    }
            
    ?>

</body>
</html>