<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    
    <body>
        <?php 

            //gettype() => retorna o tipo da variável
            $valor = 10;

            //$valor2 = (real) $valor; //float, double, real
            //$valor2 = (string) $valor;

            //valor2 = (integer) $valor; // interger, int
            //valor2 = (string) $valor;

            //valor2 = (boolean) $valor; //bool, boolean
            //valor2 = (int) $valor;

            $valor2 = (string) $valor;
            $valor3 = (string) $valor2;

            echo $valor . ' ' . gettype($valor);
            echo '<br />';
            echo $valor2 . ' ' . gettype($valor2);
            echo '<br />';
            echo $valor3 . ' ' . gettype($valor3);

        ?>
    </body>
</html>