<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    
    <body>
        <?php 

            //operadores condicionais/ comparação
            //== igaul
            //=== identico
            //!= ou <> diferentes
            //!== não identico 
            //< menor que o valor a  direita ?
            //> valor da esquerta é maior ?
            //<= menor ou igual
            //>= maior ou igual

            //operadores lógicos
            //E: && ou AND -> retorna verdadeiro se todos os resultados das expressôes forem verdadeiros 
            //OU: || ou OR -> retorna verdadeiro se pelo menos um dos resulrados das expressões for verdadeira
            //XOR: XOR -> renorna verdadeiro se uma das expressões for verdadeira e a outra falsa, ou vice-versa
            //! -> inverte o resultado retornado pela expressão 

            //() estabelecer precedência

            //(v e v) = v ou f = v
            if((22 == 22 && 3 == 3 ) || 5!= 5) {
                echo 'Verdadeiro';
            } else {
                echo 'Falso';
            }

        ?>


    </body>
</html>