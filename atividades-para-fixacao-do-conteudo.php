<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    
    <body>
        <?php 

            $idade = 26;
            $peso = 91;

            if(($idade >= 16 && $idade <= 69) && $peso >= 50 ){
                echo 'Atende aos Requisitos';
            } else {
                echo 'Não atende aos requisitos';
            }
        ?>


    </body>
</html>