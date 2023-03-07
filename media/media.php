<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <?php
        $n1 = $_POST['txNota1'];
        $n2 = $_POST['txNota2'];
        $n3 = $_POST['txNota3'];
        $n4 = $_POST['txNota4'];

        $media = ($n1 + $n2 + $n3 + $n4) / 4;

        $situacao="";

        if($media >=6){
            $situacao = "Aprovado";
        } 
        else{
            $situacao = "Reprovado";
        }


        echo "Nota 1: $n1 <br /> 
              Nota 2: $n2 <br />
              Nota 3: $n3 <br />
              Nota 4: $n4 <br />
              Média: $media <br />
              ";

              if($media >=6){
                echo "<p class='aprovado'> Aprovado </p>";
            } 
            else{
                echo "<p class='reprovado'> Reprovado </p>";
            }

    ?>

    
</body>
</html>