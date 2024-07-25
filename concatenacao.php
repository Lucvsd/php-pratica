<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    
    <body>
        <?php 

        $nome = 'Maria';
        $cor = 'amarelo';
        $idade = 25;
        $atividade_preferida = 'andar de bicicleta';

        //operador .

        echo 'Olá' . $nome . ', vi que sua cor preferida é' . $cor . 'estou vendo tambem que você possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida;

        echo '<br />'

        echo "Olá' $nome, vi que sua cor preferida é $cor estou vendo tambem que você possui $idade anos e que gosta de $atividade_preferida"


        ?>

    </body>
</html>