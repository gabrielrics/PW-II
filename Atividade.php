<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
            body{
                    background: #fff;

            }

            #fperformace{
                    color:#00ddff;
            }
            .azul{
                
                color:#00ff;
            }
            
            .verde{
                color:#00ff00;
            }
            
            .vermelho{
                color:#ff0000;
            }
            .rosa{
                color:#f0f;
            }



    </style>


</head>
<body>
            <p id="fperformace"> Salário </p>

        <?php


        $nome = "João";
        $idade = 48;
        $salario = 4000;
        $aumento = 200;

            echo "<p>
                    <span class='azul'> Nome: " . ($nome) . "<br /> </span>".
                    "<span class='verde'> Idade: " . ($idade) . "<br /> </span>".
                    "<span class='rosa'> Salário: " . ($salario) . "<br /> </span>".
                    "<span class='vermelho'> Com o aumento: " . ($salario + $aumento) . "<br /> </span>
                </p>"; 

            if($idade>17){
                echo "<p> Maior de idade </p>";
            }
            else{
                echo "<p> Menor de idade </p>";
            }


        ?>


</body>
</html>