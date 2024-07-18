<?php

    /* isso-e-um-comento */

    if(isset ($_GET["bt_nome"])){
    $nome = $_GET["bt_nome"];
    $nota1 = $_GET["bt_nota1"];
    $nota2 = $_GET["bt_nota2"];
    $nota3 = $_GET["bt_nota3"];
    $nota4 = $_GET["bt_nota4"];
    }
?>
    
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemplo - Medias Notas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">

    </head>

    <body>
        <div class="container text center">
            <h1>Exemplo media das Notas</h1>
        </div>
        
        <div class="container">
            <form action=" " methd="get">
                <label for=" "> nome do aluno:</label>
                <input class="form-control" type="text" name="bt_nome"> 
                <label for=" "> nota 01:</label>
                <input class="form-control" type="text" name="bt_nota1">
                <label for=" "> nota 02:</label>
                <input class="form-control" type="text" name="bt_nota2">
                <label for=" "> nomta 03:</label>
                <input class="form-control" type="text" name="bt_nota3">
                <label for=" "> nota 04:</label>
                <input class="form-control" type="text" name="bt_nota4">

                <input class="btn btn-success" type="submit">
                <input class="btn btn-danger" type="reset">
            
            </form>
            
            <?php
                             
                if(isset ($nome)){
                 /*   echo "<hr>";
                    echo $nome;
                    echo $nota1;
                    echo $nota2;
                    echo $nota3;
                    echo $nota4;
                    echo "<hr>";
                */  
            $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;    
             
            if($media>=7){
                echo "<p>";
                echo "O aluno " . $nome . " está APROVADO com a média " . $media;
                echo "</p>";

            }elseif($media>=5){
                echo "<p>";
                echo "O aluno " . $nome . " está RECUPERAÇÃO com a média " . $media;
                echo "</p>";
                
            }else{
                echo "<p>";
                echo "O aluno " . $nome . " está REPROVADO com a média " . $media;
                echo "</p>";
           }
        
        }
        ?>        
       </div>

</body>
</html>